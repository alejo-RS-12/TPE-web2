<?php
require_once "./views/login.view.php";
require_once "./models/login.model.php";
require_once "./authhelper/auth.helper.php";

class LoginController{
    private $views;
    private $models;
  

    function __construct(){
        $this->views = new loginView();
        $this->model = new loginModel();
    }

    function showLogin(){
      $this->views->showLogin();
    }

    function authLogin(){
      $nombre = $_POST['nombre'];
      $password = $_POST['password'];
      if (empty($nombre) || empty($password)) {
        $this->views->showLogin('Faltan completar datos');
        return;
      }

      // busco al usuario

      $user = $this->model->getByName($nombre);
      if ($user && ($password == $user->password)){

        Helper::login($user);

        header('Location: ' . BASE_URL);
      } else {
        $this->views->showLogin('Usuario Invalido');
      }
    }

    public function logout(){
      Helper::logout();
      header('Location: ' . BASE_URL);
    }
}