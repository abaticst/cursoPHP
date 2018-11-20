<?php
   //usamos mysqli_
   //mysqli_connect(Host_name,usuario,contraseña,nombre_basededatos)
   //CONEXION BASICA
   
   $conexion = mysqli_connect("localhost","root","","cursophp");
   if (mysqli_connect_errno()){
       echo "La conexión ha fallado: ".mysqli_connect_errno;
   } else {
       echo "Conexión correcta";
   }
?>