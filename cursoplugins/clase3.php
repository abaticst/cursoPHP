<?php
    /*
        Creamos el fichero primer-plugin-output.php

        La función add_action se usa para asociar código a los ganchos o hooks de
        WordPress. ¿Y qué son los hooks? Puntos concretos dentro del código fuente
        de WordPress donde podemos conectar nuestras propias funciones para
        modificar ciertos aspectos o comportamientos de nuestro sitio.

        Porque aunque la primera idea que te puede surgir sea la de modificar
        el código fuente, eso es un error. No hay necesidad de ello, ya que gracias
        a los ganchos, podemos insertar nuestros códigos con mucha facilidad.

        Hay dos tipos de hooks: action hooks y filter hooks.

        *ACTION HOOKS -> Permiten añadir o quitar código en distintos puntos
        de WordPress (ubicaciones)

        *FILTER HOOKS -> Permiten modificar datos que hay dentro del código

        En esta clase vamos a hablar de los ACTION.

        Tenemos dos: add_action y remove_action

        Creamos segundo-plugin.php

        /*

        Plugin Name: emiliopm.com - Segundo plugin
        Plugin URI:
        Description: Este plugin añade el código de Google Analytics en el header de nuestro sitio
        Version: 1.0
        Author: Pablo Delgado
        Author URI: https://emiliopm.com
        License: GPLv3

        *//*

    add_action('wp_head','muestra_frase');

    function muestra_frase(){
        echo "Probando los action";
    }

    *//*
        Ahora en el add_action, cambiamos la ubicación del hook

        ¿De donde se sacan? De aquí https://codex.wordpress.org/Plugin_Resources

        Bajamos hasta "Plugin Development - Reference" y abrimos "Plugin API/Action Reference"

        
    */
?>