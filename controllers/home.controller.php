<?php
require_once './views/home.view.php';
require_once "./authhelper/auth.helper.php";

class homeController{
    private $views;
    
    
    public function __construct(){
        Helper::verify();
        $this->views = new HomeView();
    }
    
    public function showHome(){
        $this->views->showHome();
    }
}

?>