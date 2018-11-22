<?php
    session_start();
    
    require_once 'datosConexion.php';
    if(isset($_POST['enviar'])){
        $email = $_POST['correo'];
        $passwd = $_POST['pass'];
        $_SESSION['usuario'] = $email;
        
        $consulta = "select usuario from prueba2 where usuario = \"$email\"";
        $existe = mysqli_query($conexion,$consulta);
        if (mysqli_num_rows($existe) == 0){
            echo "El usuario no existe";
        } else {
            $querypass = "select password from prueba2 where usuario = \"$email\"";
            echo $querypass;
            $resultado = mysqli_query($conexion,$querypass);
            while ($fila = mysqli_fetch_array($resultado)){
                echo "$fila[password]<br/>";
                $passOK = $fila[password];
            }

            if ($passOK == $passwd){
//                unset($passOK);
                header ('Location: panelControl.php');
            }
        }

    }
?>