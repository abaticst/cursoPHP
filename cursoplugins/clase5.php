<?php
    /*

        Vamos a crear un filtro y función con errores para ver como WP
        detecta que tiene fallos y no deja activarlo, de esta manera, protegemos
        nuestro sistema de errores

        Nos indica que fichero es el que falla y el nº de línea exacto.
        Le ponemos la N y lo activamos

        Ahora, una vez activado, le quitamos la N y guardamos. Al actualizar, vemos
        que vuelve a darnos error y si entramos en nuestra web, solo mostrará
        el fondo en blanco y el código de error de antes

        ¿Por qué? WP no comprueba todos los códigos de PHP una vez están activados.
        Solo los revisa antes de activarlos para que en caso de error, no se activen
        y no den fallos. Pero si la modificación propensa a error se realiza
        una vez activado, el sistema no se puede autoproteger

        Pero a fin de cuentas, estamos haciendo un curso de desarrollo de plugins,
        por lo que lo logico es que lo probemos y desarrollemos en un entorno
        de pruebas antes de pasarlo a real.

        WordPress trae funciones de depuración incorporadas.

        Por defecto el modo de depuración está inactivo, pero es prácticamente imprescindible 
        activarlo cuando comiences un trabajo de desarrollo de temas o plugins.
        WP_DEBUG se lanza desde el archivo de configuración de WordPress, el famoso wp-config.php, 
        normalmente situado en la carpeta de instalación de WordPress, aunque puedes encontrarlo en otro sitio.
        En principio la activación de WP_DEBUG es sencilla, solo tienes que ponerlo en true o false, 
        dependiendo de si lo quieres tener activo o inactivo respectivamente.

        El siguiente paso recomendado sería activar el log de errores. Esto hará
        que dichos errores queden almacenados en el registro para revisarlos con
        posterioridad.

        Solo tenemos que añadir la línea:

        **define ( 'WP_DEBUG_LOG', true);**

        en el fichero wp-config. El log se creará en wp-content, con el nombre
        debug.log

        Si ya tenemos un archivo de los errores y mensajes podemos evitar que 
        se muestren en las páginas en las que se generan. para ello hay que 
        activar la constante PHP llamada WP_DEBUG_DISPLAY. Una vez en marcha el 
        modo de depuración sigue activo pero no se mostrarán mensajes o errores 
        en tu sitio. De nuevo, es muy sencillo activarlo, solo hay que añadir 
        una línea más al archivo wp-config.php:
        
        **define ( 'WP_DEBUG_DISPLAY', false);**




    */
?>