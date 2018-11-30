<?php
    /*
        
        Previamente, configurar GitHub solo para esto y el fichero .gitignore
    
        Lo primero que vamos a hacer es crear la carpeta para el plugin

        Nos vamos a plugins y creamos una carpeta llamada "primer-plugin"

        La estructura dentro de la carpeta de un plugin suele ser:

        * Nombre_del_plugin.php: archivo principal. Contiene una cabecera con los datos
        estándar.

        * uninstall.php: define la forma en la que el plugin será borrado correctamente

        * index.php: es un fichero vacío PHP para ocultar la estructura de carpetas del plugin

        * readme.txt: solo si el plugin se va a subir al repositorio wordpress

        * admnin: directorio q contiene subdirectorios con ficheros .php, .css, .js etc para el backend

        * languages: directorio que contiene las traducciones

        * includes: directorio que contiene ficheros .php auxiliares

        * public: directorio que contiene subdirectorios con ficheros para el frontend

        Creamos la cabecera en el fichero "primer-plugin-header.php"

        Además, todos los ficheros PHP de nuestro plugin deben llevar la línea de ABSPATH
        para evitar que un usuario pueda ejecutar código PHP introduciendo la ruta directamente
        en el navegador (imagina que ese código borra cosas de la BBDD, eso es inseguro)

        Probamos: http://localhost/cursoPHP/wordpress/wp-content/plugins/primer-plugin/primer-plugin-header.php

        Si ahora vamos a nuestro wp-admin deberia aparecer. Lo activamos

        Obviamente, este plugin no hace nada.

        Ahora añadimos:

        echo 'Hola mundo';

        Se va a mostrar en el front y en el back

        Para evitar el back, ponemos:

        if (!is_admin()){
            echo 'Hola mundo';
        }

    */
    
?>  