<?php
class loginModel{
    private $db;
    function __construct(){
        $this ->db = new PDO('mysql:host=localhost;dbname=tpe_basedatos;charset=utf8', 'root', '');
    }

    public function getbyEmail($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
}