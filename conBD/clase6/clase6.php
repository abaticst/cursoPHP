<?php
    require_once '../clase3/clase3.php';
    mysqli_query($conexion,"SET NAMES 'utf8'");
    echo '<hr>';

    #### CRUD sin sentencias preparadas ####
    //Create, Read, Update, Delete
    //Crear, Leer, Actualizar, Borrar

    /*
        Pasos a seguir
        --------------
        1. Usar la BBDD test
        2. Crear la tabla prueba
        3. Ejecutar el CRUD
        4. Comprobar cambios
    */

    if(!mysqli_select_db($conexion,'test')){
        echo "Hubo un error al cambiar a la BBDD";
    } else {
        $create = "create or replace table prueba(
            id int(2) auto_increment primary key,
            nombre varchar(15) not null,
            apellido1 varchar(20),
            fecha_insertar date)";

        if (!mysqli_query($conexion,$create)){
            echo mysqli_errno($conexion) . " - " . mysqli_error($conexion);
        } else {
            echo "Tabla creada correctamente<br/><br/>";

            $insertar = "insert into prueba values
            ('','Pablo','Delgado',now()),
            ('','Isabel','Gonzalez',now()),
            ('','Joaquin','Sanchez',now())";

            mysqli_query($conexion,$insertar);

            ##RESULTADOS##

            $consulta = "select * from prueba";
            $resultado = mysqli_query($conexion,$consulta);
            $ncampos = mysqli_num_fields($resultado);
            echo '<table border=1>';
                for($c=0;$c<$ncampos;$c++){
                    echo '<th>Campo ' . ($c+1) . '</th>';
                }
                    while($datos = mysqli_fetch_row($resultado)){
                        echo '<tr>';
                        foreach ($datos as $campo){
                            echo '<td>' . $campo . '</td>';
                        }
                        echo '</tr>';
                    }
                //}
            echo '</table>';
        }
    }



?>