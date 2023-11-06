<?php
require_once "./models/task.model.php";
require_once "./views/task.view.php";
require_once "./authhelper/auth.helper.php";

class TaskController{
    private $models;
    private $views;
    
    function __construct(){
        Helper::verify();
        $this->models = new Taskmodel();
        $this->views =  new TaskView();
        
    }
    
    function showTasks (){
        //obtiene las tareas del modelo
        $tasks = $this->models->getProductList();
        
        if ($_SESSION['USER_ID'] == 1){
            $this->views->showTiendaAdmin($tasks);
        }else{
            $this->views->showTasks($tasks);
        }
    }
    function removeTask($id){
        $this->models->deleteTask($id);
        header('Location: http://localhost/web2/TPE-web2/tienda');
    }
    function addTask(){
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];


        $id = $this->models->insertTask($nombre, $genero, $precio, $descripcion);
        if($id){
            header('Location: http://localhost/web2/TPE-web2/tienda');
        }
        else{
            echo "<script>alert('Error al agregar la tarea');</script>";
        }
    }
    
    function showPage($id){
        //obtener nombre, descripcion, precio, categoria
        $tasks = $this->models->getProduct($id);
        $this->views->showPage($tasks);
    }
   
}



?>