<?php

namespace Components;

class Router {

    protected $routes = [];
    protected $params = [];
    
    public function __construct() {
        $arr = require './config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run(){
        if ($this->match()) {
            $path = 'Controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = ucfirst($this->params['action']).'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                }
            }
        }
    }
}