<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kcr
 */

get_header();

get_template_part( 'template-parts/part', 'page-headding' );
$date = new DateTimeImmutable(CFS()->get('news_date'));
?>

<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME"></a></li>
    <li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">ニュース・新着情報一覧</a></li>
    <li class="item"><span><?php echo wp_strip_all_tags(get_the_title());?></span></li>
  </ul>
</nav>
<div class="page__content">
	<main id="primary" class="site-main">

  <article class="news__main">
    <div class="news__main-meta">
      <time datetime="<?php echo $date->format('Y-m-d'); ?>" class="time"><?php echo $date->format('Y/m/d'); ?></time>
    </div>
    <h1 class="news__main-title"><?php the_title(); ?></h1>

    <div class="news__main-article">
      <?php echo CFS()->get('comment') ?>
    </div>
  </article>


  <p class="btn__type01--back btn__type01--center">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>news/"><span class="text">ニュース・新着情報一覧に戻る</span><span class="effect"></span></a>
  </p>
	</main><!-- #main -->

</div><!-- .page__content -->
<?php get_footer(); ?>