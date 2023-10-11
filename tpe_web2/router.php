<?php
    require_once ('src/Login.php');
    include_once ('controllers/showhome.php');
    require_once ('src/tienda.php');
    include_once 'controller/task.controller.php'

    //se lee la accion 
    if (!empty($_GET['action'])){
        $_GET['action'] == 'home';
    }
    //parses de la accion 
    $partesURL = explode('/', $_GET['action']);

    //determina el camino a seguir segun la accion 
    switch($partesURL[0]){
        case 'home':
            $controller = new homeController();
            $controller->showHome();
            break;
        case 'tienda':
            $controller = new TaskController($tasks);
            showTienda();
            break;
        case 'Login':
            showLogin();
            break;
        case 'agregar':
            addProduct();
            break;
        case 'eliminar':
            removeProduct($partesURL[1]);
            break;
        case 'login':
            checkUser();
            break;
        case 'comprar':
            echo 'Gracias por comprar! ';
            echo '<a href="home">Volver</a>';
            break;
        default:
            echo 'Error 404';
            break;
    }
?>