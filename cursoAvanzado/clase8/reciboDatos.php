<?php
    foreach ($_GET as $elemento){
        echo $elemento . '<br/>';
    }

    var_dump($_POST);

    $nombre = $_POST["nombre"];
    echo "Nombre del usuario:" . $nombre . '<br/>';

    $pass = $_POST["passwd"];
    echo $pass;
?>