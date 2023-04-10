<?php

get_header();
get_template_part( 'template-parts/part', 'page-headding' );
?>

<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME"></a></li>
    <li class="item"><span><?php the_title(); ?></span></li>
  </ul>
</nav>

<div class="page__content">
	<main id="primary" class="site-main">
  <?php
		the_content();

		?>
	</main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); 
