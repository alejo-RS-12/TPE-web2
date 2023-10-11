<?php 
require_once ('./modelos/db.php');

function searchUser($nombre, $contraseña){
    $db = getConnection();
    $action = $db->prepare('SELECT * FROM usuarios WHERE usuario = ? AND password = ?');
    $action -> execute([$nombre, $contraseña]);
    $resultado = $action->fetch(PDO::FETCH_ASSOC);
    
    return $resultado;
}
?>