<?php
    //SELECCION DE BBDD
    $conexion = mysqli_connect("127.0.0.1","root","","cursophp");
    if ($conexion){
        echo "<h1>Conexión establecida</h1>";
        echo "<h3>Información del servidor:</h3>" . mysqli_get_host_info($conexion);
        echo "<h3>Versión del servidor: </h3>" . mysqli_get_server_info($conexion);
    }else{
        echo '<h1 style="color:red">Error de conexión</h1>';
        echo mysqli_connect_errno() . " - " . mysqli_connect_error();
    }

    mysqli_select_db($conexion,'test');

    echo "<br/><br/><br/><i>Hemos cambiado a la base de datos test</i>";
?>