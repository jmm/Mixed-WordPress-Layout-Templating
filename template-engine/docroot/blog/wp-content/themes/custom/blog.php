<?php

$view->set_content_item( 'title', wp_title( "", false ) );


$view->start_set_content_item( 'head' );

?>

<link rel="stylesheet" type="text/css" media="all" href="/rsrc/blog/section.css" />

<?php

$view->end_set_content_item( 'head' );


$view->start_set_content_item( 'primary' );

include locate_template( array( 'loop.php' ) );

$view->end_set_content_item( 'primary' );


$view->start_set_content_item( 'secondary' );

?>

<ul class="widgets" id="widgets-primary">

<?php

dynamic_sidebar( 'Primary Widget Area' );

?>

</ul>
<!-- #widgets-primary -->

<?php

$view->end_set_content_item( 'secondary' );


include locate_template( array( 'wordpress-layout.php' ) );

