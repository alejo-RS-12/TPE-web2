<?php

class loginModel{
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=tpe_basedatos;charset=utf8', 'root', '');
    }

    public function getByName($nombre) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE usuario = ?');
        $query->execute([$nombre]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
}