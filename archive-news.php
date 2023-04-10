<?php
/**
 * The template for displaying archive news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cac
 */
get_header();
get_template_part( 'template-parts/part', 'page-headding' );

?>
<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME"></a></li>
    <li class="item"><span>ニュース・新着情報一覧</span></li>
  </ul>
</nav>

<div class="page__content">
	<main id="primary" class="site-main">
  <div class="news-container">

  <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
    $args = array(
      'posts_per_page'   => 10,
      'post_type'    => 'news', 
      'paged' => $paged,
      'order' => 'DESC',
      'meta_key'=>'news_date',
      'orderby'=>'meta_value',

    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
    <div class="news-list">
    <ul>
    <?php while ($the_query->have_posts()) : $the_query->the_post();

      get_template_part( 'template-parts/content', 'news' );

    endwhile;?>
    </ul>
    </div>
    <?php endif; 
    $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
    the_posts_pagination(array( 
      'mid_size' => 2,
      'prev_text' => '<span>前へ</span>',
      'next_text' => '<span>次へ</span>'
    ));
  
    wp_reset_postdata();
 ?>
	</main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); ?>
