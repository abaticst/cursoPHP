<?php
    require_once 'datosConexion.php';
    $nombre = "Reyes";
    $apellido = "Flores";

    $llamaprocedimiento = "call php_crear_usuario(?,?,@identificador)";
    $preparaconsulta = mysqli_prepare($conexion,$llamaprocedimiento);
    $ok = mysqli_stmt_bind_param($preparaconsulta,'ss',$nombre,$apellido);
    $ok = mysqli_stmt_execute($preparaconsulta);
    mysqli_stmt_close($preparaconsulta);

    $recuperaid = "select @identificador";
    $prepararecupera = mysqli_prepare($conexion,$recuperaid);
    $ok = mysqli_stmt_bind_result($prepararecupera,$identificador);
    $ok = mysqli_stmt_execute($prepararecupera);
    $ok = mysqli_stmt_fetch($prepararecupera);
    mysqli_stmt_close($prepararecupera);

    echo "ID del usuario añadido: $identificador";
?>