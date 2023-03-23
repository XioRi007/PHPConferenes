<?php

namespace Controllers;

use Views\View;
use Models\Conference;

/**
 * Главный контроллер приложения
 * 
 * @author farza
 */
class ConferenceController
{
    /**
     * Действие отвечающее за отображение главной
     * страницы портала
     * 
     * @author farZa
     */
    private function getId(){
        $url = $_SERVER['REQUEST_URI'];
        $url = explode("/", $url);
        $id = $url[2];
        return $id;
    }
    public function AllAction()
    {
        // Создаем модель
        $model = new Conference();
        $data = $model->getAll();
        View::render('ConferencesPage', [
            'data' => $data,
        ]);
    }
    public function OneAction()
    {        
        $id=$this->getId();
        $model = new Conference();        
        $data = $model->getById($id);
        View::render('ConferencePage', $data[0]);
    }
    public function CreateAction()
    {        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $options = [];
            $options['title'] = $_POST['title'];
            $options['latitude'] = $_POST['latitude'];
            $options['longtitude'] = $_POST['longtitude'];
            $options['country'] = $_POST['country'];
            $options['date'] = $_POST['date'];
            $options['time'] = $_POST['time'];
            $model = new Conference();

            $id = $model->create($options);
            if($id){
                header("Location: /conference");
            }
        }
        else{
            View::render('CreateConferencePage');
        }
    }
    public function EditAction()
    {
        $id=$this->getId();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $options = [];
            $options['id'] = $id;
            $options['title'] = $_POST['title'];
            $options['latitude'] = $_POST['latitude'];
            $options['longtitude'] = $_POST['longtitude'];
            $options['country'] = $_POST['country'];
            $options['date'] = $_POST['date'];
            $options['time'] = $_POST['time'];
            $model = new Conference();
            $res = $model->update($options);
            if($res){
                header("Location: /conference/".$id);
            }
        }
        else{            
            $model = new Conference();        
            // Получаем данные используя модель
            $data = $model->getById($id);
            View::render('EditConferencePage', $data[0]);
        }
    }
    public function DeleteAction()
    {
        echo 'DeleteAction ';
        $id=$this->getId();
        $model = new Conference();        
        $res = $model->delete($id);
        if($res){

        }
        header('Location: /conference');
    }
}

