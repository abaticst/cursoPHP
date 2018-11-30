<?php
    /*
        Creamos el fichero primer-plugin-output.php

        La función add_action se usa para asociar código a los ganchos o hooks de
        WordPress. ¿Y qué son los hooks? Puntos concretos (ubicaciones) dentro del código fuente
        de WordPress donde podemos conectar nuestras propias funciones para
        modificar ciertos aspectos o comportamientos de nuestro sitio.

        Porque aunque la primera idea que te puede surgir sea la de modificar
        el código fuente, eso es un error. No hay necesidad de ello, ya que gracias
        a los ganchos, podemos insertar nuestros códigos con mucha facilidad.

        Hay dos tipos de hooks: action hooks y filter hooks.

        *ACTION HOOKS -> Permiten añadir o quitar código en distintos puntos
        de WordPress

        *FILTER HOOKS -> Permiten modificar datos que hay dentro del código

        En esta clase vamos a hablar de los ACTION.

        Tenemos dos: add_action y remove_action

        Creamos segundo-plugin.php

        Ahora en el add_action, cambiamos la ubicación del hook

        ¿De donde se sacan? De aquí https://codex.wordpress.org/Plugin_Resources

        Bajamos hasta "Plugin Development - Reference" y abrimos "Plugin API/Action Reference"

        
    */
?>