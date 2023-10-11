<?php

class TaskView{

    function showTasks($task){
        foreach ($tasks as $task) {
            echo '<li class="listaAdminItems">';
            echo '<div>';
            echo '<b>' . $task->nombre . ' ' . $task->genero . ' ' . $task->precio . '</b>';
            echo '</div>';
            echo '<div>';
            echo '<a href="comprar" class="btnComprar" type="button"> Comprar </a>';
            echo '</div>';
            echo '</li>';
        }
        echo '</ul>';
    }

    function showtaskAdmin($task){
        require_once 'tpe_web2/templates/form.task,php';
         echo '<ul class="listaAdmin">';
         foreach ($tasks as $task) {
             echo '<li class="listaAdminItems">';
             echo '<div>';
             echo '<b>' . $task->nombre . ' ' . $task->genero . ' ' . $task->precio . '</b>';
             echo '</div>';
             echo '<div>';
             echo '<a href="eliminar/' . $task->id . '" class="btnBorrar" type="button"> Borrar </a>';
             echo '</div>';
             echo '</li>';
         }
         echo '</ul>';
     }

     
}
?>