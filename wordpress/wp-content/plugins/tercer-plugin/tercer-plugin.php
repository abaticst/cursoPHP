<?php
    /*

    Plugin Name: emiliopm.com - Tercer plugin
    Plugin URI:
    Description: 
    Version: 1.0
    Author: Pablo Delgado
    Author URI: https://emiliopm.com
    License: GPLv3

    */

    defined( 'ABSPATH' ) or die( '¿Donde vas?' );

    //add_filter('the_title','modificar_titulo');

    /*function modificar_titulo($titulo){

        $titulo = 'Entrada importante: ' . $titulo;
        return $titulo;

    }*/
    
    /*function modificar_titulo($titulo){

        if(in_category('sin-categoria')){
            $titulo = 'Entrada importante: ' . $titulo;
        }
        return $titulo;
    }*/

    //add_filter('content_save_pre','modificar_contenido');

    /*function modificar_contenido($contenido){

        $contenido = str_replace("Lorem","PABLO",$contenido);
        
        return $contenido;

    }*/

    add_filter('the_content','no_se_que_hace');

    function no_se_que_hace($contenido){

        $icono_mail = plugins_url('mail-icon.png', __FILE__);

        $nuevo_contenido = $contenido;

        $nuevo_contenido .= '<div>';

        $nuevo_contenido .= '<a href="mailto:?';
        $nuevo_contenido .= 'subject=Esta entrada es increíble';
        $nuevo_contenido .= '&body=¡Hola!%0A%0A' . get_the_title() .'%0A%0A' . get_permalink();
        $nuevo_contenido .= '. Espero que te guste %0A%0A">';

        if (!empty($icono_mail)){
            $nuevo_contenido .= '<img src="' . $icono_mail .'" width="75px" /></a>';
        } else {
            $new_content .= 'Enviar por email';
        }

        $nuevo_contenido .= '</div>';
        return $nuevo_contenido;
    }

?>