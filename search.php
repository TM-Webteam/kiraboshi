<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kcr
 */

get_header();
get_template_part( 'template-parts/part', 'page-headding' );

?>
<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME"></a></li>
    <li class="item"><span>検索結果</span></li>
  </ul>
</nav>

<div class="page__content">
	<main id="primary" class="site-main">
  <div class="search-container">

    <?php if ( have_posts() ) : 
      
      $allsearch = new WP_Query("s=$s&posts_per_page=-1");
      $key = wp_specialchars($s, 1);
      $count = $allsearch->post_count;
      echo '<h1>「'.$key.'」 で検索した結果：'.$count.' 件</h1>';?>

      <div class="search-list">
        <ul>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

        <?php 
				get_template_part( 'template-parts/content', 'search' );

			endwhile; ?>
      </ul>
      </div>


      <?php 
          the_posts_pagination(array( 
            'mid_size' => 2,
            'prev_text' => '<span>前へ</span>',
            'next_text' => '<span>次へ</span>'
          ));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); ?>

