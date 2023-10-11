<?php
require_once 'tpe_web2/models/task.model.php';
require_once 'tpe_web2/views/task.view.php'

class TaskController{
    private $models;
    private $views;
    
}

function__construct(){
    $this->models = new Taskmodel();
    $this->views =  new TaskView();
    
}

function showTasks (){
    //obtiene las tareas del modelo
    $tasks = $this->model->getProductList();
    
    $this->views->showTasks($tasks);
}
function showTasksAdmin() {
    require_once 'tpe_web2/templates/form.task,php';
    $tasks = $this->model->getProductList();
    $this->views->showTasks($tasks);
}


?>