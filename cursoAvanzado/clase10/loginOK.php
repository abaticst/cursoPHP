<?php
    if (empty($_COOKIE)){
        echo "No has iniciado sesion";
        require_once('login.php');
    }else{
        echo "Hola, Ok<br/>";
        echo $_COOKIE['cookie1'];
    }
?>