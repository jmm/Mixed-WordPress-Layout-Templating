<?php

$config[ 'site-section' ] = $config[ 'site-section' ] ? $config[ 'site-section' ] : 'blog';


$content[ 'charset' ] = get_bloginfo( 'charset' );

$content[ 'lang' ] = get_bloginfo( 'language' );

$content[ 'text-dir' ] = get_bloginfo( 'text-direction' );

$content[ 'site-title' ] = get_bloginfo( 'name' );

$content[ 'title' ] = wp_title( '', FALSE );


$content[ 'primary-stylesheet' ] = get_stylesheet_directory_uri() . "/style.css";


$content[ 'body-classes' ] = get_body_class();


ob_start();

do_action( 'wp_head' );

$buffer = ob_get_clean();


$content[ 'head' ] = <<<DOCHERE

{$content[ 'head' ]}

{$buffer}

DOCHERE;


ob_start();

do_action( 'wp_footer' );

$content[ 'footer' ] = ob_get_clean();


include ( SITE_TEMPLATES_PATH . "/layout.php" );

