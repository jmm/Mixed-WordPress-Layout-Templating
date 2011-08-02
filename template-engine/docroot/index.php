<?php

require_once "{$_SERVER[ 'DOCUMENT_ROOT' ]}/init.php";


$view->set_config_item( 'site-section', 'about' );


$view->set_content_item( 'title', "About Us" );


$view->start_set_content_item( 'head' );

?>

<link rel="stylesheet" type="text/css" href="/inside/about/about.css" media="all" />

<?php

$view->end_set_content_item( 'head' );


$view->set_content_item( 'primary-content-heading', $view->get_content_item( 'title' ) );


$view->start_set_content_item( 'primary' );

?>

<p>
This is the About (home) page primary content.
</p>

<p>
The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog
</p>

<?php

$view->end_set_content_item( 'primary' );


echo $view->get_render( "layout.php" );

