<?php
    /*DEFINICIÓN DE PDO

    */

    $dbname = "test";
    $user = "root";
    //dsn = data source name, en el que se especifica el tipo de BBDD, host, y BBDD
    //dbh = database handle, es el nombre q se le suele dar al objeto PDO
    //$dbh=null; para cerrar la conexión
    try{
        $dsn = "mysql:host=localhost;dbname=$dbname";
        $dbh = new PDO($dsn,$user);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
##################################################
    /*
        class Usuario
        {
            public $id;
            public $nombre;
            public $apellido;
            public $fecha;
            public $hora;

            public function __construct(){
                $this->apellido = $this->apellido1;
            }
            
        }
    */

    /*
        CONSULTAR DATOS
        Se realiza mediante una sentencia preparada
        Después se establece el tipo de Fetch (
            *FETCH_ASSOC->array cuyo indice es el nombre de las columnas
            *FETCH_NUM->array cuyo indice son nº
            *FETCH_BOTH->por defecto. Array cuyo indice son tanto el nombre de columna como nº
            *FETCH_BOUND->asigna valores de columnas a las variables establecidas con PDOStatement::bindColumn
            *FETCH_CLASS->asigna valores de columnas a atributos de una clase (si no existen, los crea)
        )
        A continuación, ejecutamos la consulta para mostrarla con un bucle while
    */

    //$stmt_select = $dbh->prepare("select * from prueba");

    #Establecemos las formas de FETCH
    //$stmt_select->setFetchMode(PDO::FETCH_ASSOC);
    //$stmt_select->setFetchMode(PDO::FETCH_NUM);
    //$stmt_select->setFetchMode(PDO::FETCH_BOTH);
    //$stmt_select->setFetchMode(PDO::FETCH_BOUND);
            //$stmt_select->bindColumn(2,$nombre);
            //$stmt_select->bindColumn('apellido1',$apellido);
    //$stmt_select->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
    

    //$stmt_select->execute();
    //while($fila = $stmt_select->fetch()){
        //echo "Nombre: " . $fila['nombre'] . " " . $fila['apellido1'];
        //echo "Nombre: " . $fila[1] . " " . $fila[2];
        //echo "Nombre: " . $fila['nombre'] . " " . $fila[2];
        //echo "Nombre: " . $nombre . " " . $apellido . '<br/>';
        //echo $fila->apellido;


    //}

    ####################################################

    /*$stmt_insert = $dbh->prepare("insert into prueba (nombre,apellido1,fecha_insertar,hora_insertar) values (?,?,now(),now())");
    
    $nombre = "Angel";
    $apellido1 = "Subiela";
    $stmt_insert->bindParam(1,$nombre);
    $stmt_insert->bindParam(2,$apellido1);
    $stmt_insert->execute();

    $nombre = "Carli";
    $apellido1 = "Brihuega";
    $stmt_insert->bindParam(1,$nombre);
    $stmt_insert->bindParam(2,$apellido1);
    $stmt_insert->execute();*/

    ##

    /*$stmt_insert2 = $dbh->prepare("insert into prueba (nombre,apellido1,fecha_insertar,hora_insertar) values (:nombre, :apellido1, now(), now())");
    $nombre = "Juan Manuel";
    $apellido1 = "Braza";
    $stmt_insert2->bindParam(':nombre',$nombre);
    $stmt_insert2->bindParam(':apellido1',$apellido1);
    $stmt_insert2->execute();*/

    ##

    /*$stmt_delete = $dbh->prepare("delete from prueba where apellido1 like ?");
    $apellido1 = "%B%";
    $stmt_delete->bindParam(1,$apellido1);
    $stmt_delete->execute();*/

    $stmt_select = $dbh->prepare("select * from prueba");
    $stmt_select->setFetchMode(PDO::FETCH_ASSOC);
    $stmt_select->execute();
    while($fila = $stmt_select->fetch()){
        echo "Nombre: " . $fila['nombre'] . " " . $fila['apellido1'] . '<br/>';
    }



?>