<?php
    require_once '../clase3/clase3.php';
    echo '<hr>';

    /*
        Una consulta preparada es una consulta que contiene parámetros
        representados por una interrogación (?), el cual sustituirá los
        valores que el usuario introduzca para filtrar el contenido
    */

    //Configurar CODIFICACION DE CARACTERES

    mysqli_query($conexion,"SET NAMES 'utf8'");

    ####| EJECUTAR LA CONSULTA |####

    //Sentencia SQL para la consulta
    $query = 'select nombre from comunidades where id_comunidad = ?';

    //Dejo la sentencia preparada
    $preparaconsulta = mysqli_prepare($conexion,$query);

    //Simulo la entrada de datos
    $numero = 13;

    //Unimos el parámetro de entrada a la consulta preparada, indicando
    //el formato que recibirá (i porque es un integer) y la variable
    //que almacena dicho dato.
    //Podría ser (d para float | s para string | b para blob)
    $consultaOk = mysqli_stmt_bind_param($preparaconsulta,"i",$numero);

    //Ejecutamos la consulta, que devolverá true o false en función de si
    //se realizó o no
    $consultaOk = mysqli_stmt_execute($preparaconsulta);

    //Controlamos si dicha consulta ha podido realizarse
    if (!$consultaOk){
        echo "<br/>Error al ejecutar la consulta";
    } else {
        //Asociamos variables al resultado de la consulta. Necesita tantas
        //columnas como datos recuperados en la consulta
        $consultaOk = mysqli_stmt_bind_result($preparaconsulta,$nombre_comunidad);
        
        //Hacemos lectura de valores mientras $preparaconsulta devuelva true
        while(mysqli_stmt_fetch($preparaconsulta)){
            echo "Comunidad encontrada: " . $nombre_comunidad;
        }

    }

    mysqli_stmt_close($preparaconsulta);
?>