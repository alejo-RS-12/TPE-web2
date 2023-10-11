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
    function addProduct (){
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $precio = $_POST['precio'];
        $id = insertProduct($nombre, $genero, $precio);

        if ($id){
            showPanel();
        } 
        else {
            echo 'Error';
        }   
    }
    function insertProduct($nombre, $genero, $precio){
        $db = getConnection();
        $action = $db -> prepare('INSERT INTO productos (nombre, id_genero, precio) VALUES (?, ?, ?)');
        $action -> execute([$nombre, $genero, $precio]);
    
        return $db->lastInsertId();
    }
    
        function deletetask($id){
            $query = $this->db->prepare('DELETE FROM productos WHERE id = ?');
        }

}