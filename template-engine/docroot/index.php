<?php

require_once "{$_SERVER[ 'DOCUMENT_ROOT' ]}/init.php";


$view->set_config_item( 'site-section', 'home' );


$view->start_set_content_item( 'head' );

?>

<link rel="stylesheet" type="text/css" href="rsrc/home.css" media="all" />

<?php

$view->end_set_content_item( 'head' );


$view->start_set_content_item( 'primary' );

?>

<p>
This is the Home page primary content.
</p>

<p>
The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog
</p>

<?php

$view->end_set_content_item( 'primary' );


echo $view->get_render( "layout.php" );

