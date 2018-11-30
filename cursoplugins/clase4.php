<?php
    /*

        *FILTER HOOKS*

        Como mencionamos, los filter modifican información antes de que se muestre por
        pantalla o se almacene en la BBDD



        Hay dos tipos:

        * Database reads -> Se recoge info de la BBDD y antes de mostrarla, vamos a
        modificarla de alguna forma (por ejemplo, modificar el titulo de un post). Este
        cambio no se inserta en la BBDD, es decir, solo se aplica a nivel de visualización

        * Database writes -> Al contrario del anterior, este filter hook actúa antes de
        insertar la información en la BBDD (por ejemplo, cuando el usuario escribe un post
        antes de guardarlo, le cambio el titulo a mayúsculas).

        Se pueden aplicar a post y paginas, comentarios, categorias y etiquetas,
        autores y usuarios, etc.

        Para ver donde se aplican, acudimos al codex nuevamente:
        https://codex.wordpress.org/Plugin_API/Filter_Reference

        Vamos a empezar por un filtro de titulo (modificarlo)

        Si activo el plugin y veo el blog, ahora tiene por delante lo de
        Entrada importante. Si entro a modificar el post, podemos ver que el
        titulo sigue igual que siempre, es decir, como es un database reads, no
        modifica nada en la BBDD

        Ahora añado un if al filtro para los post que estan en la categoria
        sin categoria. Además, creo una entrada con lorem ipsum y le asigno
        una categoria creada como "prueba". Veamos que a la nueva no le aplica
        el nuevo titulo

        Ahora vamos a hacer un filtro database writes.

        Creo una nueva entrada y explico los cambios

        Si desactivo el plugin, ahora vemos que el reads ya no funciona pero
        el cambio hecho con writes es permanente.

        Vamos a crear ahora un filtro para añadir al final de la entrada
        un icono para enviar la entrada por correo electronico



    */
?>