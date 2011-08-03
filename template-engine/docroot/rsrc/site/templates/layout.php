<!DOCTYPE html>

<html lang="<?php echo $view->get_content_item( 'lang' ); ?>" dir="<?php echo $view->get_content_item( 'text-dir' ); ?>">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $view->get_content_item( 'charset' ); ?>" />

<title><?php echo $view->get_content_item( 'site-title' ) . ( strlen( $title = $view->get_content_item( 'title' ) ) ? " | {$title}" : "" ); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $view->get_content_item( 'primary-stylesheet' ); ?>" />

<?php echo $view->get_content_item( 'head' ); ?>


</head>


<body class="<?php echo join( " ", $view->get_content_item( 'body-classes' ) ); ?>">

<div id="SITE-primary-layout">

<div id="SITE-header">

<h1 id="SITE-page-heading">
Layout Templating Demo
</h1>


<nav id="SITE-primary-nav">

<ul class="SITE-nav-items">

<?php

$nav_items = array(

  'home' => array( 'label' => "Home", 'url' => "/" ),

  'sample-page' => array( 'label' => "Sample Page", 'url' => "/sample-page/" ),

  'blog' => array( 'label' => "Blog", 'url' => "/blog/" ),

  'contact' => array( 'label' => "Contact", 'url' => "/contact/" )

);
// array


foreach ( $nav_items as $nav_id => $nav_item ) {

  $class = $nav_id == $view->get_config_item( 'site-section' ) ? "SITE-current" : "";

  echo <<<DOCHERE

<li class="SITE-nav-item {$class}">
<a href="{$nav_item[ 'url' ]}">{$nav_item[ 'label' ]}</a>
</li>

DOCHERE;

}
// foreach

?>

</ul>
<!-- .SITE-nav-items -->

</nav>
<!-- #SITE-primary-nav -->

</div>
<!-- #SITE-header -->


<?php

$gp_content_class = strlen( $view->get_content_item( 'secondary' ) ) ? "with" : "without";

?>


<section id="SITE-greater-primary-content" class="SITE-<?php echo $gp_content_class; ?>-secondary-content">

<?php

if ( strlen( $view->get_content_item( 'primary-content-heading' ) ) ) {

?>

<h1 id="SITE-primary-content-heading">
<?php echo $view->get_content_item( 'primary-content-heading' ); ?>

</h1>

<?php

}
// if

?>


<div id="SITE-primary-content">

<?php echo $view->get_content_item( 'primary' ); ?>


</div>
<!-- #SITE-primary-content -->


<?php

if ( strlen( $view->get_content_item( 'secondary' ) ) ) {

?>

<div id="SITE-secondary-content">

<?php

echo $view->get_content_item( 'secondary' )

?>

</div>
<!-- #SITE-secondary-content -->

<?php

}
// if

?>

</section>
<!-- #SITE-greater-primary-content -->


<div id="SITE-footer">

Copyright 2011 Whatever

</div>
<!-- #SITE-footer -->

</div>
<!-- #SITE-primary-layout -->


<?php echo $view->get_content_item( 'footer' ); ?>


</body>

</html>

