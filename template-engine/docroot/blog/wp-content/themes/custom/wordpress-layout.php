<?php

$view->set_config_item( 'site-section', (

  $view->get_config_item( 'site-section' ) ?

  $view->get_config_item( 'site-section' ) :

  'blog'

) );


$view->set_content_item( 'charset', get_bloginfo( 'charset' ) );

$view->set_content_item( 'lang', get_bloginfo( 'language' ) );

$view->set_content_item( 'text-dir', get_bloginfo( 'text-direction' ) );

$view->set_content_item( 'site-title', get_bloginfo( 'name' ) );

$view->set_content_item( 'title', wp_title( '', FALSE ) );


$view->set_content_item( 'primary-stylesheet', ( get_stylesheet_directory_uri() . "/style.css" ) );


$view->set_content_item( 'body-classes', get_body_class() );


$view->start_set_content_item( 'head' );

echo $view->get_content_item( 'head' ) . "\n\n";

do_action( 'wp_head' );

$view->end_set_content_item( 'head' );


$view->start_set_content_item( 'footer' );

do_action( 'wp_footer' );

$view->end_set_content_item( 'footer' );


echo $view->get_render( "layout.php" );

