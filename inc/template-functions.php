<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package kcr
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kcr_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'kcr_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function kcr_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'kcr_pingback_header' );


if ( ! function_exists( 'kcr_post_nav' ) ) :
  function kcr_post_nav() {

  // single.phpで表示中の記事ID取得.
  $current_ID = get_the_ID();
  // pre_get_postsと同じクエリ条件を指定.
  $args = array(
    'post_type'      => 'news',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'meta_key'=>'news_date',
    'orderby'=>'meta_value',
    'fields'         => 'ids', // これでID配列を取得出来る.
  );
  $nav_query  = new WP_Query( $args );
  // これで$post_arrayにクエリ条件下の記事IDが配列として格納される.
  $post_array = $nav_query->posts;
  wp_reset_postdata();
  // 記事IDのキーを取得.
  $current_index = array_search( $current_ID, $post_array );
  // 次/前の記事IDを取得.
  if ( !is_null($current_index) ) {
    $next_post_ID = $post_array[ $current_index + 1 ];
    $prev_post_ID = $post_array[ $current_index - 1 ];
  }

    if ( ! $next_post_ID && ! $prev_post_ID ) {
      return;
    }
    ?>
    <nav class="navigation post-navigation">
      <div class="nav-links">
        <?php
          $pre_date = new DateTimeImmutable(get_post_meta($prev_post_ID , 'news_date' ,true));
          $next_date = new DateTimeImmutable(get_post_meta($next_post_ID , 'news_date' ,true));

          if($prev_post_ID) {
            echo '<div class="nav-previous"><a href="' . get_permalink( $prev_post_ID ) . '" rel="prev"><span class="date">'.$pre_date->format('Y/m/d').'</span><span class="title">' . get_the_title( $prev_post_ID ) . '</span></a></div>';
          }
          if($next_post_ID) {
            echo '<div class="nav-next"><a href="' . get_permalink( $next_post_ID ) . '" rel="next"><span class="date">'.$next_date->format('Y/m/d').'</span><span class="title">' . get_the_title( $next_post_ID ) . '</span></a></div>';
          }
        ?>

      </div><!-- .nav-links -->
    </nav><!-- .post-navigation -->
    <?php

  }
endif;