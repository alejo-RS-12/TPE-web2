<?php
require_once "controllers/login.controller.php";
require_once "controllers/home.controller.php";
require_once "controllers/task.controller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'home';

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}


   $partesURL = explode("/", $action);



switch($partesURL[0]){
    case 'home':
        $controller = new homeController();
        $controller->showHome();
        break;
    case 'tienda':
        $controller = new TaskController();
        $controller->showTasks();
        break;
    case 'login':
        $controller = new LoginController();
        $controller->showLogin();
        break;
    case 'auth':
        $controller = new LoginController();
        $controller -> authLogin();
        break;
    case 'logout':
        $controller = new LoginController();
        $controller->logout();
        break;
    case 'agregar':
        $controller = new TaskController();
        $controller->addTask();
        break;
    case 'eliminar':
        $controller = new TaskController();
        $controller->removeTask($partesURL[1]);
        break;
    case 'comprar':
        $controller = new TaskController();
        $controller->showPage($partesURL[1]);
        break;
    default:
        echo 'Error 404';
        break;
    }
?>