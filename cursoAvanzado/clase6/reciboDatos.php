<?php
    echo "Fichero subido<br/>";
    $informacion = $_FILES["avatar"];
    $nombre = $informacion['name'];
    $tamanio = round($informacion['size']/1024);
    $temporal = $informacion['tmp_name'];

    echo $nombre . '<br/>';
    echo $tamanio . 'Kb<br/>';
    echo $temporal . '<br/>';

    /*copy($_FILES['avatar']['tmp_name'],$_FILES['avatar']['name']);
    echo "Archivo subido correctamente";
    $nombre = $_FILES['avatar']['name'];
    echo "<img src=\"$nombre\">";*/

    $carpeta = "../avatar/";
    opendir($carpeta);
    $destino = $carpeta.$_FILES['avatar']['name'];
    copy($_FILES['avatar']['tmp_name'],$destino);
    echo "Archivo subido y movido correctamente";
    $nombre=$_FILES['avatar']['name'];
    echo "<img src=\"../avatar/$nombre\">";
?>