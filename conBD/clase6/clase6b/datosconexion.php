<?php
   $conexion = mysqli_connect("localhost","root","","cursophp");
   if (mysqli_connect_errno()){
       echo "La conexión ha fallado: ".mysqli_connect_errno();
   } else {
       echo "Conexión correcta";
   }
   mysqli_query($conexion,"SET NAMES 'utf8'");
    if(!mysqli_select_db($conexion,'test')){
        echo "<br/>Hubo un error al cambiar a la BBDD";
    } else {
        echo "<br/>BBDD seleccionada: test";
    }
    echo '<hr>';
?>