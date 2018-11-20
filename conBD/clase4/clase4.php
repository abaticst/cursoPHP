<?php
    require_once '../clase3/clase3.php';
    echo '<hr>';
    ####| EJECUTAR LA CONSULTA |####
    $query = 'select * from comunidades';
    $consulta = mysqli_query($conexion,$query);

    /*NUM_ROWS
    Con NUM_ROWS consigo el numero de filas de la consulta realizada
    */
    $nfilas = mysqli_num_rows($consulta);

    echo "Número de filas de la tabla comunidades: $nfilas" . "<br/><br/>";

    /*FIELD_COUNT
    Con FIELD_COUNT consigo el numero de celdas de la consulta realizada
    */
    $ncampos = mysqli_num_fields($consulta);

    echo "Número de celdas de la tabla comunidades: $ncampos" . "<br/><br/>";

    //Configurar CODIFICACION DE CARACTERES

    mysqli_query($conexion,"SET NAMES 'utf8'");

    ####| RECUPERAR DATOS |####

    #En $resultado estoy usando la funcion MYSQLI_QUERY que es la que realiza
    #la consulta almacenada en $query
    $resultado = mysqli_query($conexion,$query);
    
    /*
    Si analizo este var_dump veo la información de la "tabla" almacenada
    en $resultado, el cual tiene un objeto de tipo MYSQLI_RESULT(devuelto por
    MYSQLI_QUERY), donde apreciamos: el campo actual del cursor, el numero de
    campos, longitud, numero de filas y el tipo
    */
    //var_dump($resultado);

    /*MYSQLI_FETCH_ARRAY
    Ahora utilizo MYSQLI_FETCH_ARRAY para recorrer los datos obtenidos, ya que
    va moviendome el cursor dentro de $resultado y rescatando los datos
    por eso se lo asigno a $fila. Luego, solo tengo que hacer un echo del
    campo que deseo mostrar.

    Nos permite acceder a la info bien con el nombre del campo de la tabla
    o bien con el nº del indice del array

    --SOLO OBTIENE DE UNO EN UNO--

    */

    //$fila = mysqli_fetch_array($resultado);
    //var_dump($fila);

    //while ($fila = mysqli_fetch_array($resultado)){
    //    echo "$fila[nombre]<br/>";
    //}

    //while ($fila = mysqli_fetch_array($resultado)){
    //    echo "$fila[1]<br/>";
    //}

    ####################| HASTA AQUI |####################
    
    /*MYSQLI_FETCH_ALL
    Ahora probamos con MYSQLI_FETCH_ALL. Solo podemos acceder a la info por
    el nº del indice

    --OBTIENE TODOS LOS DATOS DE UNA VEZ--
    */

    //$fila = mysqli_fetch_all($resultado);
    //var_dump($fila);

    //while ($fila = mysqli_fetch_all($resultado)){
    //    foreach ($fila as $elemento){
    //        echo "$elemento[1]" . '<br/>';
    //    }
    //}

    ####################| HASTA AQUI |####################
    
    /*MYSQLI_FETCH_ASSOC
    Ahora probamos con MYSQLI_FETCH_ASSOC. 
    --SOLO OBTIENE DE UNO EN UNO--
    */

    //$fila = mysqli_fetch_assoc($resultado);
    //var_dump($fila);

    //while ($fila = mysqli_fetch_assoc($resultado)){
    //    var_dump($fila);
    //    echo $fila['nombre'] . '<br/>';
    //}

    ####################| HASTA AQUI |####################
    
    /*MYSQLI_FETCH_FIELDS
    Ahora probamos con MYSQLI_FETCH_FIELDS.
    Nos devuelve el nombre de los campos de la tabla y otra información
    --LOS OBTIENE TODOS DE UNA VEZ--
    */

    //$fila = mysqli_fetch_fields($resultado);
    //var_dump($fila);

    ####################| HASTA AQUI |####################
    
    /*MYSQLI_FETCH_ROWS
    Ahora probamos con MYSQLI_FETCH_ROWS.
    Nos devuelve una fila de resultados como un array enumerado
    --SOLO OBTIENE DE UNO EN UNO--
    */

    //$fila = mysqli_fetch_row($resultado);
    //var_dump($fila);
    //$fila = mysqli_fetch_row($resultado);
    //var_dump($fila);

    //while ($fila = mysqli_fetch_row($resultado)){
    //    var_dump($fila);
    //    echo "$fila[1]" . '<br/>';
    //}
?>