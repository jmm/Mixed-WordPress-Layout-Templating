<?php

$view->set_content_item( 'title', the_title( '', '', FALSE ) );

$view->set_content_item( 'primary-content-heading', $view->get_content_item( 'title' ) );


$view->start_set_content_item( 'primary' );


while ( have_posts() ) {

  the_post();

  $view->set_config_item( 'site-section', $post->post_name );

  the_content();

}
// while


$view->end_set_content_item( 'primary' );


include locate_template( array( 'wordpress-layout.php' ) );

