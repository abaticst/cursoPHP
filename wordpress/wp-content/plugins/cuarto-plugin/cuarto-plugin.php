<?php
    /*

        Plugin Name: emiliopm.com - Cuarto plugin
        Plugin URI:
        Description: En este plugin vamos a observar el manejo de errores
        Version: 1.0
        Author: Pablo Delgado
        Author URI: https://emiliopm.com
        License: GPLv3
    */

    add_filter('wp_nav_menu_objects','cp_new_nav_menu_items',10,2);
    function cp_new_nav_menu_items( $sorted_menu_items, $args ) {
        print_r( $sorted_menu_items );
        return $sorted_menu_items;
    }

    echo holaaaa


?>