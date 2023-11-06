<?php
class Taskmodel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tpe_basedatos;charset=utf8', 'root', '');
    }

    /* Obtengo la lista de productos */

    function getProductList(){

        $sentencia = $this->db->prepare('SELECT productos.*, generos.nombre as genero FROM productos JOIN generos ON productos.id_genero = generos.id_genero');
        $sentencia->execute();

        $tasks = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $tasks;
    }

    function insertTask($nombre, $genero, $precio, $descripcion){
        $action = $this->db -> prepare('INSERT INTO productos (nombre, id_genero, precio, descripcion) VALUES (?, ?, ?, ?)');
        $action -> execute([$nombre, $genero, $precio, $descripcion]);
    
        return $this->db->lastInsertId();
    }
    
    function deletetask($id){
        $query = $this->db->prepare('DELETE FROM productos WHERE id = ?');
        $query->execute([$id]);
    }

    function getProduct($id){
        $sentencia = $this->db->prepare('SELECT productos.*, generos.nombre as genero FROM productos JOIN generos ON productos.id_genero = generos.id_genero WHERE productos.id = ?');
        $sentencia -> execute([$id]);

        $tasks = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    }
}