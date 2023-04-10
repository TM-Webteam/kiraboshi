<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kcr
 */

get_header();
get_template_part('template-parts/part', 'page-headding');
?>


<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME"></a></li>
    <li class="item"><span>ページが見つかりません</span></li>
  </ul>
</nav>

<div class="page__content">
  <main id="primary" class="site-main">
    <section class="thanks taC">
      <h2>ページが見つかりませんでした。</h2>
      <p>お探しのページが存在しないか、アクセスできません。<br>
        サイト内検索をお試しいただくか、メニューより目的のページをお探しください。</p>

<!--       <p class="btn__type01 icon-none mt30"><a href="<?php echo esc_url(home_url('/')); ?>">
          <svg width="460" height="62">
            <rect x="2" y="2" rx="26" fill="none" stroke="url(#grad1)" width="100%" height="54"></rect>
          </svg>
          <span>トップページへ戻る</span></a>
      </p> -->
    <p class="btn__type01--back btn__type01--center">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="text">トップページへ戻る</span><span class="effect"></span></a>
    </p>
    </section>

  </main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); ?>