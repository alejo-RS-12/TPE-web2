<?php 
require_once ('./src/tasks.php');

function showPanel(){
    echo ' <div class="container">'
    .showTasksAdmin().
    '</div>';
}

?>