<?php
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
    if (!is_admin()){
        echo 'Hola mundo';
    }