<?php
    //MEJORA DE LA INFORMACIÓN MOSTRADA
    $conexion = mysqli_connect("127.0.0.1","root","","cursophp");
    if ($conexion){
        echo "<h1>Conexión establecida</h1>";
        echo "<h3>Información del servidor:</h3>" . mysqli_get_host_info($conexion);
        echo "<h3>Versión del servidor: </h3>" . mysqli_get_server_info($conexion);
    }else{
        echo '<h1 style="color:red">Error de conexión</h1>';
        echo mysqli_connect_errno() . " - " . mysqli_connect_error();
    }

    echo "<br/><br/>Hago lo que tenga que hacer con mis datos<br/><br/>";

    echo mysqli_ping($conexion);//para ver que devuelve 1 de conexion ok

    if (mysqli_ping($conexion)){
        $cierre = mysqli_close($conexion);
        if ($cierre){
            echo "<br/>Desconexión realizada";
        } else {
            echo "<br/>Hubo un error al desconectar";
        }
    } else {
        echo "<br/>No hay ninguna conexión abierta";
    }
    
?>