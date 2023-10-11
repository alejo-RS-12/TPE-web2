<?php
class Taskmodel{

    function getConnection(){
        return new PDO('mysql:host=localhost;dbname=tpe_basedatos;charset=utf8', 'root', '');
    }

    function getProductList(){
        $db = $this->getConnection();
        $sentencia = $db->prepare('SELECT productos.*, generos.nombre as genero FROM productos JOIN generos ON productos.id_genero = generos.id_genero');
        $sentencia->execute();
        $tasks = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $tasks;
    }

}