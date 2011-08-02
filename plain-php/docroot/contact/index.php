<?php

require_once "{$_SERVER[ 'DOCUMENT_ROOT' ]}/init.php";


$config[ 'site-section' ] = 'contact';


$content[ 'title' ] = "Contact Us";


$content[ 'primary-content-heading' ] = $content[ 'title' ];


ob_start();

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

$content[ 'primary' ] = ob_get_clean();


ob_start();

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

$content[ 'secondary' ] = ob_get_clean();


include ( SITE_TEMPLATES_PATH . "/layout.php" );

