<?php 
//controlers
include_once ('./templates/header.php');
include_once ('./modelos/usuario.php');
include_once ('./src/panel.php'); 
function showLogin(){
echo '
<body>
    <div class="login">
        <form class="formRegistro" action="login" method="POST">
            <h3>ingrese un usuario y contraseña</h3>
            <input type="text" placeholder="usuario" id="usuario" name="usuario" required>
            <input type="password" placeholder="password" id="password" name="password" required>
            <div class="formBotones">
                <input type="submit" value="Entrar">
            </div>
         </form>
         
    </div>
</body>';
}

function checkUser(){
    $nombre = $_POST['usuario'];
    $contraseña = $_POST['password'];

    $resultado = searchUser($nombre, $contraseña);

    if($resultado){
        showPanel();
    }else{
        echo 'Usuario Inexistente';
    }
};
include_once ('./templates/footer.php') ?>
