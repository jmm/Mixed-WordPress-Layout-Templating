<?php

$theme_text_domain = 'jmm-starter';


if ( $wp_query->max_num_pages > 1 ) {

?>

<div id="pagination-nav-top" class="navigation">

<div class="nav-previous">

<?php

  next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', $theme_text_domain ) );

?>


</div>
<!-- .nav-previous -->


<div class="nav-next">

<?php

  previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', $theme_text_domain ) );

?>


</div>
<!-- .nav-next -->

</div>
<!-- #pagination-nav-top -->

<?php

}
// if


if ( ! have_posts() ) {

  echo <<<DOCHERE

<p>
Sorry, no content was found.
</p>

DOCHERE;


  get_search_form();

}
// if


while ( have_posts() ) {

  the_post();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1 class="entry-title">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h1>


<div class="entry-meta">

<div class="entry-date">

<?php

  echo get_the_date();

?>

</div>


</div>
<!-- .entry-meta -->


<?php

  if ( is_archive() || is_search() ) {

?>

<div class="entry-summary">

<?php

    the_excerpt();

?>


</div>
<!-- .entry-summary -->

<?php

  }
  // if


  else {

?>

<div class="entry-content">

<?php

    the_content( __( 'Read more...', $theme_text_domain ) );


    wp_link_pages(

      array(

        'before' => '<div class="page-link">' . __( 'Pages:', $theme_text_domain ),

        'after' => '</div>' )

    );

?>

</div>
<!-- .entry-content -->

<?php

  }
  // else

?>

<div class="entry-utility">

<?php

  ob_start();

  comments_popup_link(

    __( 'Leave a comment', $theme_text_domain ),

    __( '1 Comment', $theme_text_domain ),

    __( '% Comments', $theme_text_domain )

  );


  $link_groups = array(

    'categories' => array(

      'pattern' => '<span class="%1$s">Posted in</span> %2$s',

      'class' => '',

      'data' => get_the_category_list( ', ' )

    ),


    'tags' => array(

      'pattern' => '<span class="%1$s">Tagged</span> %2$s',

      'class' => '',

      'data' => get_the_tag_list( '', ', ' )

    ),


    'comments' => array( 'data' => ob_get_clean() ),


    'edit' => array( 'data' => get_edit_post_link(

      __( 'Edit', $theme_text_domain ),

      '<span class="edit-link">',

      '</span>'

    ) )

  );
  // array


  foreach ( $link_groups as $lg_key => $link_group ) {

    if ( ! strlen( $link_group[ 'data' ] ) ) {

      unset( $link_groups[ $lg_key ] );

      continue;

    }
    // if


    elseif ( $link_group[ 'pattern' ] ) {

      $link_group[ 'data' ] = sprintf(

        $link_group[ 'pattern' ],

        $link_group[ 'class' ],

        $link_group[ 'data' ]

      );

    }
    // elseif


    $link_groups[ $lg_key ] = <<<DOCHERE
<span class="{$lg_key}-links">

{$link_group[ 'data' ]}

</span>
<!-- .{$lg_key}-links -->
DOCHERE;

  }
  // foreach


  $link_groups_delim = '<span class="meta-sep">|</span>';

  $link_groups = join( "\n\n{$link_groups_delim}\n\n", $link_groups );

  echo $link_groups;

?>


</div>
<!-- .entry-utility -->

</article>
<!-- #post-<?php the_ID(); ?> -->


<?php

  comments_template( '', true );

}
// while


if ( $wp_query->max_num_pages > 1 ) {

?>

<div id="pagination-nav-top" class="navigation">

<div class="nav-previous">

<?php

  next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', $theme_text_domain ) );

?>


</div>
<!-- .nav-previous -->


<div class="nav-next">

<?php

  previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', $theme_text_domain ) );

?>


</div>
<!-- .nav-next -->

</div>
<!-- #pagination-nav-top -->

<?php

}
// if

