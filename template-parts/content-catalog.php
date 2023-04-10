<?php
/**
 * Template part for displaying page content in page-blog-table.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */

?>

<article class="wp-item">
  
  <div class="image">
	  <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( CFS()->get( 'material_image' ) ); ?>" alt=""></a>
  </div>
  <div class="summary">
	<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="phrase"><?php echo esc_html( wp_strip_all_tags( CFS()->get( 'copy' ) ) ); ?></p>
	<div class="footer">
	<p class="btn__type01 note"><a href="<?php the_permalink(); ?>">
		<svg width="277" height="62">
		  <rect x="2" y="2" rx="26" fill="none" stroke="url(#grad1)" width="100%" height="54"></rect>
		</svg>
		<span>カタログの詳細・ダウンロードはこちら</span></a>
	  </p>
	</div>
  </div>
</article>
