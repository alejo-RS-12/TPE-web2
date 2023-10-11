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
    ?>
    <div class="formTasks">
        <form action="agregar" method="POST">
            <input type="text" placeholder="producto" name="nombre" >

            <select id="valor" name="genero">
                <option value="1">accion</option>
                <option value="2">Lucha</option>
                <option value="3">Horror</option>
                <option value="4">Mundo Abierto</option>
                <option value="5">Aventura</option>
                <option value="6">Estrategia</option>
            </select>

        
            <input type="text" name="precio" placeholder="precio">

            <input type="submit" name="enviarformAdm">
        </form>
    </div>
    <?php 
}


?>