<?php
    /*

    Plugin Name: emiliopm.com - Segundo plugin
    Plugin URI:
    Description: Este plugin añade el código de Google Analytics en el header de nuestro sitio
    Version: 1.0
    Author: Pablo Delgado
    Author URI: https://emiliopm.com
    License: GPLv3

    */

    defined( 'ABSPATH' ) or die( '¿Donde vas?' );

    add_action('wp_head','muestra_frase');

    add_action('the_post','muestra_frase');

    add_action('get_sidebar','muestra_frase');

    add_action('wp_footer','muestra_frase');

    remove_action('the_post','muestra_frase');



    function muestra_frase(){
        echo "Probando los action";
    }
?>