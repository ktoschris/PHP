<?php

class QuerryBuilder
{
    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }


    public function selectAll($username,$password)
    {
        $statement = $this->pdo->prepare('select * from users where name = ? and password = ?');

        $statement->execute(array($username,$password));

        //return $statement->fetchAll(PDO::FETCH_CLASS);
        return /*array(*/$statement->fetchAll(PDO::FETCH_CLASS);/*, $statement->rowCount());*/
    }


    public function selectAllusers()
    {
        $statement =$this->pdo->prepare('select * from users');

        $statement->execute();
        //$rows = $statement->rowCount();

        //return $statement->fetchAll(PDO::FETCH_CLASS);
        return $statement->fetchAll(PDO::FETCH_CLASS);/*, $statement->rowCount());*/
    }

    public function selectAllfirmy()
    {
        $statement =$this->pdo->prepare('select * from firmy');

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public function registerUser($username, $email, $password, $usertype)
    {
        $statement =$this->pdo->prepare("insert into users(name, email, password, usertype, created_at, updated_at) values('{$username}', '{$email}', '{$password}', {$usertype}, now(), now())");
        $statement->execute();
        //return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function editUser($id, $username, $email, $password, $usertype)
    {
        $statement =$this->pdo->prepare("update users set name='{$username}', email='{$email}', password='{$password}', usertype='{$usertype}' where id='{$id}'");
        //$statement = $this->pdo->prepare("insert into users(name, email, password, usertype, created_at, updated_at) values('{$username}', 'dupa@kupa.pl', '12345', '3', now(), now())");
        $statement->execute();
        //return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectUser($id)
    {
        $statement =$this->pdo->prepare("select * from users where id='{$id}'");
//where id='{$id}'
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function addFirma($nazwa, $adres, $NIP)
    {
        $statement =$this->pdo->prepare("insert into firmy(nazwa, adres, NIP, created_at, updated_at) values('{$nazwa}', '{$adres}', '{$NIP}', now(), now())");
        $statement->execute();
        //return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectFirma($id)
    {
        $statement =$this->pdo->prepare("select * from firmy where id='{$id}'");
        //$statement = $this->pdo->prepare("insert into users(name, email, password, usertype, created_at, updated_at) values('{$username}', 'dupa@kupa.pl', '12345', '3', now(), now())");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function editFirma($id, $nazwa, $adres, $nip)
    {
        $statement =$this->pdo->prepare("update firmy set nazwa='{$nazwa}', adres='{$adres}', NIP='{$nip}' where id='{$id}'");
        //$statement = $this->pdo->prepare("insert into users(name, email, password, usertype, created_at, updated_at) values('{$username}', 'dupa@kupa.pl', '12345', '3', now(), now())");
        $statement->execute();
        //return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}