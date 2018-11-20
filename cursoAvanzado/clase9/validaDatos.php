<?php
    if(isset($_POST['enviar'])){
        $email = $_POST['correo'];
        $passwd = $_POST['pass'];
            if (empty($email)){
                echo "<p>No se ha introducido un email</p>";
            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p>El formato de email es incorrecto</p>";
            }else{
                header('Location:loginOK.php');
                die();
            }
    }
?>