<?php

class UsersController
{

    public static function create()
    {

        return file_get_contents(dirname(__FILE__) . "/../Views/register.html");
    }

    public static function store() {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];

        var_dump($_POST);
    }

}

