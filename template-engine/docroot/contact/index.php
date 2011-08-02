<?php

require_once "{$_SERVER[ 'DOCUMENT_ROOT' ]}/init.php";


$view->set_config_item( 'site-section', 'contact' );


$view->set_content_item( 'title', "Contact Us" );


$view->set_content_item( 'primary-content-heading', $view->get_content_item( 'title' ) );


$view->start_set_content_item( 'primary' );

?>

<p>
This is the Contact page primary content.
</p>

<p>
The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
</p>

<p>
The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
</p>

<p>
The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
</p>

<p>
The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
</p>

<?php

$view->end_set_content_item( 'primary' );


$view->start_set_content_item( 'secondary' );

?>

<p>
This is the Contact page secondary (sidebar) content.
</p>


<p>
Blah blah blah, blah blah.  Blah blah blah, blah blah.Blah blah blah, blah blah.Blah blah blah, blah blah.Blah blah blah, blah blah.
</p>

<p>
Blah blah blah, blah blah.  Blah blah blah, blah blah.Blah blah blah, blah blah.Blah blah blah, blah blah.Blah blah blah, blah blah.
</p>

<?php

$view->end_set_content_item( 'secondary' );


echo $view->get_render( "layout.php" );

