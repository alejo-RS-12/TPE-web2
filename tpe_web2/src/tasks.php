<?php 
    require_once ('./modelos/producto.php');
    include_once ('./src/panel.php');
    
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

    function removeProduct($id){
        deleteProduct($id);
        showPanel();
    }
?>