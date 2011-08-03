<!DOCTYPE html>

<html lang="<?php echo $content[ 'lang' ]; ?>" dir="<?php echo $content[ 'text-dir' ]; ?>">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $content[ 'charset' ]; ?>" />

<title><?php echo $content[ 'site-title' ] . ( strlen( $content[ 'title' ] ) ? " | {$content[ 'title' ]}" : "" ); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $content[ 'primary-stylesheet' ]; ?>" />

<?php echo $content[ 'head' ]; ?>


</head>


<body class="<?php echo join( " ", $content[ 'body-classes' ] ); ?>">

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

  $class = $nav_id == $config[ 'site-section' ] ? "SITE-current" : "";

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

$gp_content_class = strlen( $content[ 'secondary' ] ) ? "with" : "without";

?>


<section id="SITE-greater-primary-content" class="SITE-<?php echo $gp_content_class; ?>-secondary-content">

<?php

if ( strlen( $content[ 'primary-content-heading' ] ) ) {

?>

<h1 id="SITE-primary-content-heading">
<?php echo $content[ 'primary-content-heading' ]; ?>

</h1>

<?php

}
// if

?>


<div id="SITE-primary-content">

<?php echo $content[ 'primary' ]; ?>


</div>
<!-- #SITE-primary-content -->


<?php

if ( strlen( $content[ 'secondary' ] ) ) {

  echo <<<DOCHERE

<div id="SITE-secondary-content">

{$content[ 'secondary' ]}

</div>
<!-- #SITE-secondary-content -->

DOCHERE;

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


<?php echo $content[ 'footer' ]; ?>


</body>

</html>

