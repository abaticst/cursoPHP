<?php
    require_once 'datosConexion.php';
    $id_max = 10;
    $dimeid = "select php_fnc_idabajo($id_max) id";
    $consulta = mysqli_query($conexion,$dimeid);
    $linea = mysqli_fetch_assoc($consulta);
    //var_dump($linea);
    echo "Numeros de registros por debajo del ID 10: " . $linea['id'];
?>