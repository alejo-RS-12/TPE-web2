<?php 

include_once ('./templates/header.php');
require_once ('./src/tasks.php');

function showTienda(){ 
    echo ' <div class="container">'
    .showTasks().
    '</div>';
}
include_once ('./templates/footer.php') ?>
