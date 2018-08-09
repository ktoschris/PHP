<?php
/**
 * Created by PhpStorm.
 * User: deczu
 * Date: 13.07.18
 * Time: 15:09
 */

class Connection
{

    public static function  make()
    {
        try{
            return new PDO('mysql:host=127.0.0.1;dbname=cms','root','admin');
        } catch(PDOException $exception){
            die($exception->getMessage());
        }
    }

}

$pdo=connection::make();