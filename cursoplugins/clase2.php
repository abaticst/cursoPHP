<?php
    /*
        
        Previamente, configurar GitHub solo para esto y el fichero .gitignore
    
        Lo primero que vamos a hacer es crear la carpeta para el plugin

        Nos vamos a plugins y creamos una carpeta llamada "primer-plugin"

        Creamos la cabecera en el fichero "primer-plugin-header.php"

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

    /*

    Plugin Name: emiliopm.com - Primer plugin
    Plugin URI:
    Description: Este será el mensaje que se visualice en el administrador
    de plugins de WordPress
    Version: 1.0
    Author: Pablo Delgado
    Author URI: https://emiliopm.com
    License: GPLv3

    */

    echo 'Hola mundo';
    
?>  