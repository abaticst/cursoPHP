<?php
    /*

    Plugin Name: emiliopm.com - Primer plugin (Salida en el header)
    Plugin URI:
    Description: Este plugin añade el código de Google Analytics en el header de nuestro sitio
    Version: 1.0
    Author: Pablo Delgado
    Author URI: https://emiliopm.com
    License: GPLv3

    */

    defined( 'ABSPATH' ) or die( '¿Donde vas?' );

    add_action('wp_head', 'primer_plugin_output');

    function primer_plugin_output(){ ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;
            i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
            a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;
            m.parentNode.insertBefore(a,m)})(window,document,'script',
            'https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-0000000-0', 'auto');
            ga('send', 'pageview');
        </script>
    <?php }
    ?>