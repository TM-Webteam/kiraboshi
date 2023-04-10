<?php
/**
 * Template part for displaying page content in page-blog-table.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */

$date = new DateTimeImmutable( CFS()->get( 'news_date' ) );

?>

<li class="news-list__item">
  <a href="<?php the_permalink(); ?>">
	<time datetime="<?php echo esc_attr( $date->format( 'Y-m-d' ) ); ?>" class="time"><?php echo esc_html( $date->format( 'Y/m/d' ) ); ?></time>
	<span class="title"><?php the_title(); ?></span>
  </a>
</li>
