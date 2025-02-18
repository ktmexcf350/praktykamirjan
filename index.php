<?php

require_once(dirname(__FILE__) . "/Controllers/UsersController.php");

switch($_SERVER['REQUEST_METHOD']) {
    case'GET':
        echo UsersController::create();
        break;
    case 'POST':
        echo UsersController::store();
        break;
}