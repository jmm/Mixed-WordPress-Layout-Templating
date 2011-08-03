<?php

require_once "{$_SERVER[ 'DOCUMENT_ROOT' ]}/init.php";


$config[ 'site-section' ] = 'home';


ob_start();

?>

<link rel="stylesheet" type="text/css" href="rsrc/home.css" media="all" />

<?php

$content[ 'head' ] = ob_get_clean();


ob_start();

?>

<p>
This is the Home page primary content.
</p>

<p>
The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog
</p>

<?php

$content[ 'primary' ] = ob_get_clean();


include ( SITE_TEMPLATES_PATH . "/layout.php" );

