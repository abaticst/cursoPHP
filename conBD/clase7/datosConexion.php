<?php
   $conexion = mysqli_connect("localhost","root","","cursophp");
   mysqli_select_db($conexion,'test');
   mysqli_query($conexion,"SET NAMES 'utf8'");
?>