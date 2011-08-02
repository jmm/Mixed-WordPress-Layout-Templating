<?php

require_once "{$_SERVER[ 'DOCUMENT_ROOT' ]}/init.php";


$config[ 'site-section' ] = 'about';


$content[ 'title' ] = "About Us";


ob_start();

?>

<link rel="stylesheet" type="text/css" href="/inside/about/about.css" media="all" />

<?php

$content[ 'head' ] = ob_get_clean();


$content[ 'primary-content-heading' ] = $content[ 'title' ];


ob_start();

?>

<p>
This is the About (home) page primary content.
</p>

<p>
The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog
</p>

<?php

$content[ 'primary' ] = ob_get_clean();


include ( SITE_TEMPLATES_PATH . "/layout.php" );

