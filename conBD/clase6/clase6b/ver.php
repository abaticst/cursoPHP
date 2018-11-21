<?php
    require_once 'datosconexion.php';
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
?>