<?php

$content[ 'title' ] = wp_title( "", false );


ob_start();

?>

<link rel="stylesheet" type="text/css" media="all" href="/rsrc/blog/section.css" />

<?php

$content[ 'head' ] = ob_get_clean();


ob_start();

include locate_template( array( 'loop.php' ) );

$content[ 'primary' ] = ob_get_clean();


ob_start();

?>

<ul class="widgets" id="widgets-primary">

<?php

dynamic_sidebar( 'Primary Widget Area' );

?>

</ul>
<!-- #widgets-primary -->

<?php

$content[ 'secondary' ] = ob_get_clean();


include locate_template( array( 'wordpress-layout.php' ) );

