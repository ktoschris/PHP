<?php

class PagesController
{
    public function home()
    {
        require 'views/main.view.php';
    }

    public function login()
    {
        require 'views/logIn.view.php';
    }

    public function register()
    {
        require 'views/register.view.php';
    }
    public function editfirmaview()
    {
        require 'views/editfirma.view.php';
    }

    public function logmein()
    {
        require 'functions/logIn.php';
    }

    public function logout()
    {
        require 'functions/logout.php';
    }

    public function showfirmy()
    {
        require 'functions/showfirmy.php';
    }

    public function editfirma()
    {
        require 'functions/editfirma.php';
    }

    public function registerme()
    {
        require 'functions/registeruser.php';
    }

    public function edituser()
    {
        //die(var_dump("EDITUSER"));
        require 'functions/edituser.php';
    }

    public function showuser()
    {
        require 'functions/showuser.php';
    }
}