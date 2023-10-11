<?php
require_once 'tpe_web2/models/task.model.php';
require_once 'tpe_web2/views/task.view.php'

class TaskController{
    private $models;
    private $views;
    
    function __construct(){
        $this->models = new Taskmodel();
        $this->views =  new TaskView();
        
    }
    
    function showTasks (){
        //obtiene las tareas del modelo
        $tasks = $this->model->getProductList();
        
        $this->views->showTasks($tasks);
    }
    function showTasksAdmin() {
        $tasks = $this->model->getProductList();
        $this->views->showTasks($tasks);
    }
    function removeTask($id){
        $this->model->deleteTask($id);
        header('Location: ' . BASE_URL);
    }
   
}



?>