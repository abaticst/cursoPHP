<?php

    session_start();
    error_reporting(0);
    $sesion = $_SESSION['usuario'];

    if($sesion == null || $sesion == ''){
        echo "No has iniciado sesión<br/>";
        echo '<a href="index.php">Volver a la página principal</a>';
        die();
    } else {
        echo "Solo debes ver esta pagina si estás logueado<br/>";
        echo '<a href="salir.php">Desloguear</a>';
    }
    
?>