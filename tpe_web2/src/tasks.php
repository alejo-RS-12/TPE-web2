<?php 
    require_once ('./modelos/producto.php');
    include_once ('./src/panel.php');

    function showTasksAdmin() {
        ?>
        <div class="formTasks">
            <form action="agregar" method="POST">
                <input type="text" placeholder="producto" name="nombre" >

                <select id="valor" name="genero">
                    <option value="1">accion</option>
                    <option value="2">Lucha</option>
                    <option value="3">Horror</option>
                    <option value="4">Mundo Abierto</option>
                    <option value="5">Aventura</option>
                    <option value="6">Estrategia</option>
                </select>
    
            
                <input type="text" name="precio" placeholder="precio">
    
                <input type="submit" name="enviarformAdm">
            </form>
        </div>
        <?php 
        
            $tasks = getProductList();
            echo '<ul class="listaAdmin">';
            foreach ($tasks as $task) {
                echo '<li class="listaAdminItems">';
                echo '<div>';
                echo '<b>' . $task->nombre . ' ' . $task->genero . ' ' . $task->precio . '</b>';
                echo '</div>';
                echo '<div>';
                echo '<a href="eliminar/' . $task->id . '" class="btnBorrar" type="button"> Borrar </a>';
                echo '</div>';
                echo '</li>';
            }
            echo '</ul>';
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

    function removeProduct($id){
        deleteProduct($id);
        showPanel();
    }
?>