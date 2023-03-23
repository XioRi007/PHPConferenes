<?php

namespace Models;
use Components\DB;

/**
 * Модель "Новости" содержащая бизнес логику
 * относящуюся к сущности "Новости"
 * 
 * @author farza
 */
class Conference
{
    /**
     * Метод, отвечающий за получение всех данных
     * о новостях портала
     * 
     * @author farZa
     * @return array
     */
    public function getAll()
    {
        $pdo = DB::getConnection();   
        $sql = 'SELECT * FROM conferences';        
        return $pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getById($id)
    {
        $pdo = DB::getConnection();   
        $sql = 'SELECT * FROM conferences WHERE id='.$id;        
        return $pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function create($data)
    {
        $pdo = DB::getConnection();   
        $sql = "INSERT INTO `conferences` (`id`, `title`, `date`, `time`, `longtitude`, `latitude`, `country`) 
                VALUES (NULL, :title, :date, :time, :longtitude, :latitude, :country);";
        $stmt= $pdo->prepare($sql);
        return $stmt->execute($data);      
          
        //echo $stmt->lastInsertId();
    }
    public function update($data)
    {
        $pdo = DB::getConnection();  
        $sql = "UPDATE `conferences` SET `title`=:title, `date`=:date, `time`=:time, `longtitude`=:longtitude, `latitude`=:latitude, `country`=:country WHERE `id`=:id;";
        $stmt= $pdo->prepare($sql);
        return $stmt->execute($data); 
    }
    public function delete($id)
    {
        echo $id;
        $pdo = DB::getConnection();           
        $sql = "DELETE FROM `conferences` WHERE `id`=:id;";
        $stmt= $pdo->prepare($sql);
        return $stmt->execute(['id'=>$id,]); 
    }
}

