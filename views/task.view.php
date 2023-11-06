<?php

class TaskView{

    public function showTasks($tasks){
        require('./templates/tienda.phtml');
    }


    public function showTiendaAdmin($tasks){
        require('./templates/tiendaAdmin.phtml');
    }
    public function showPage($tasks){
        require('./templates/page.phtml');
    }
}
?>