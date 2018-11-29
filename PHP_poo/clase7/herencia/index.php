<?php
    require_once 'clases.php';

    $animal = new Animal();

    var_dump($animal);

    $animal->setTipo("Mamifero");

    var_dump($animal);
    
    echo '<br/>';

    $perro = new Perro();

    var_dump($perro);

    //$perro->setAlimentacion('Omnivoro');

    var_dump($perro);
    echo $perro->olisquear();

    echo '<br/><br/><br/>';

    $casero = new Casero();

    var_dump($casero);
?>