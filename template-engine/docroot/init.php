<?php

define( 'SITE_TEMPLATES_PATH', "{$_SERVER[ 'DOCUMENT_ROOT' ]}/rsrc/site/templates" );


require_once "{$_SERVER[ 'DOCUMENT_ROOT' ]}/rsrc/site/lib/jmm-view/jmm-view.php";

$view = new JMM_View( array(

  '_views_path' => SITE_TEMPLATES_PATH,

  '_this_alias' => 'view'

) );


$view->set_content_items( array(

  'charset' => 'UTF-8',

  'lang' => 'en-US',

  'text-dir' => 'ltr',

  'primary-stylesheet' => "/rsrc/site/site.css",

  'body-classes' => array(),

  'site-title' => "WordPress Layout Templating"

) );

