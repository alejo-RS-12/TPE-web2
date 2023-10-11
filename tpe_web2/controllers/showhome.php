<?php
require_once '../views/home.view.php';

class homeController{
    private $views;
}

function __construct(){
    $this->views = new HomeView();
}

function show_Home(){ 
    $this->views->ShowHome();
}

?>