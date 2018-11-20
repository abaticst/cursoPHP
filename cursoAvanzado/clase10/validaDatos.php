<?php
    if(isset($_POST['enviar'])){
        $email = $_POST['correo'];
        $passwd = $_POST['pass'];

        if(($email == 'pablo@hola.es') && ($passwd == '123456')){
            setcookie("cookie1","Estaesmicookie",time()+10);
            header('Location:loginOK.php');
        }
    }
?>