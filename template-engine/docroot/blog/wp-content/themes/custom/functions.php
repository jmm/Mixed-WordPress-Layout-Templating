<?php

require_once "{$_SERVER[ 'DOCUMENT_ROOT' ]}/init.php";


$content_width = $content_width ? $content_width : 558;


/**
 * Initialize widgets
 *
 * @return void
 */

function jmm_widgets_init() {

  $theme_text_domain = 'jmm-starter';

  register_sidebar( array(

    'name' => __( 'Primary Widget Area', $theme_text_domain ),

    'id' => 'primary-widget-area',

    'description' => __( 'The primary widget area', $theme_text_domain ),

    'before_widget' => '<li id="%1$s" class="widget-container %2$s"><section>',

    'after_widget' => '</section></li>',

    'before_title' => '<h1 class="widget-title">',

    'after_title' => '</h1>',

  ) );


  return;

}
// jmm_widgets_init


add_action( 'widgets_init', 'jmm_widgets_init' );

