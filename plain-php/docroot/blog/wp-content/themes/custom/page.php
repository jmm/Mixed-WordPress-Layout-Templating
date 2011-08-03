<?php

$content[ 'title' ] = the_title( '', '', FALSE );

$content[ 'primary-content-heading' ] = $content[ 'title' ];


ob_start();


while ( have_posts() ) {

  the_post();

  $config[ 'site-section' ] = $post->post_name;

  the_content();

}
// while


$content[ 'primary' ] = ob_get_clean();


include locate_template( array( 'wordpress-layout.php' ) );

