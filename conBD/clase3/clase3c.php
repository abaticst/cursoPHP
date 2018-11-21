<?php

    //CONEXIÓN USANDO LOS DATOS EN UN FICHERO EXTERNO//
    
    require_once 'datos_conexion.php';
    //$conexion = mysqli_connect("127.0.0.1","root","","cursophp");
    $conexion = mysqli_connect(MYSQL_HOST,MYSQL_USUARIO,MYSQL_PASS,MYSQL_BBDD);
    if ($conexion){
        echo "<h1>Conexión establecida</h1>";
        echo "<h3>Información del servidor:</h3>" . mysqli_get_host_info($conexion);
        echo "<h3>Versión del servidor: </h3>" . mysqli_get_server_info($conexion);
    }else{
        echo '<h1 style="color:red">Error de conexión</h1>';
        echo mysqli_connect_errno() . " - " . mysqli_connect_error();
    }
?>