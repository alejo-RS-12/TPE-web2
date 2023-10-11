<?php 
require_once ('./modelos/db.php');

function insertProduct($nombre, $genero, $precio){
    $db = getConnection();
    $action = $db -> prepare('INSERT INTO productos (nombre, id_genero, precio) VALUES (?, ?, ?)');
    $action -> execute([$nombre, $genero, $precio]);

    return $db->lastInsertId();
}

    function deleteProduct($id){
        $db = getConnection();
        $action = $db -> prepare('DELETE FROM productos WHERE id = ?');
        $action -> execute ([$id]);
    }
?>