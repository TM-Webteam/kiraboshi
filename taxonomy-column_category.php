<?php
global $category_slug;
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */

get_header();
// $category_slug = get_query_var('category_name');
$category_slug = $term;
get_template_part('template-parts/part', 'page-headding');
?>

<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME" width="15" height="13"></a></li>
    <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>column/">製造現場改善に役立つコラム集</a></li>
    <li class="item"><span><?php esc_html(single_cat_title()); ?></span></li>
  </ul>
</nav>

<!-- <section class="recommend">
  <div class="recommend-containers">
    <div class="taC"><h2 class="title__type01">おすすめコラム</h2></div>
    <a href="#" class="recommend__link">
      <div class="recommend__img"><figure><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/img-recommend01.jpg" alt="メンテナンス、充分にできていますか？金型管理でよくある課題と解決方法とは"></figure></div>
      <div class="recommend__box">
        <div class="recommend__box--telop"><span class="pickup">おすすめ</span><span>作業工数低減</span></div>
        <h3 class="recommend__box--ttl">メンテナンス、充分にできていますか？<br>金型管理でよくある課題と解決方法とは</h3>
        <div class="recommend__box--txt">金型は製造業においてなくてはならない存在ですが、金型の管理やメンテナンスは充分にできているでしょうか。本記事では、金型を管理するうえでよくある課題と、その解決方法について紹介します。</div>
      </div>
    </a>
  </div>
</section> -->

<div class="page__content has-sidebar">
  <main id="primary" class="site-main">


    <?php
    $queried_object = get_queried_object();
    $term_id = esc_html($queried_object->term_id);
    $term = wp_get_object_terms($post->ID, 'column_category');

    $args = array(
      'posts_per_page'   => 1, //5件表示する
      'post_type'    => 'useful',  //投稿タイプ
      'post_status' => 'publish',
      'orderby' => 'rand',
      'meta_key' => 'wp_cta', //カスタムフィールドのキー
      'meta_value' => $term_id, //カスタムフィールドの値
      'meta_compare' => 'LIKE' //'meta_value'のテスト演算子
    );

    $the_query = new WP_Query($args);
    // print_r($args);
    // print_r($num);
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
    ?>
        <div class="blog__wp mb40 <?php echo $bnr_class; ?>">
          <a href="<?php echo get_permalink(); ?>">
            <div class="image">
              <img loading="lazy" src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt="" width="164" height="116">
            </div>
            <div class="summary">
              <h3 class="title">お役立ち資料</h3>
              <div class="text fs-20rem"><?php echo get_the_title(); ?></div>
            </div>
          </a>
        </div>
    <?php
      endwhile;
    endif;
    ?>
    <div class="blog-container">

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      // $args = array(
      // // 'orderby' => 'post_date',
      // // 'order' => 'DESC',
      // 'post_status' => 'publish',
      // 'paged' => $paged,
      // 'post_type' => 'column',
      // 'term' => $term[0]->slug,
      // 'posts_per_page' => -1,
      // 'order' => 'DESC',
      // 'meta_key' => 'blog_date',
      // 'orderby' => 'meta_value'
      // );
      $args = array(
        'posts_per_page' => 10, //5件表示する
        'post_type' => 'column', //投稿タイプ
        'taxonomy' => 'column_category',
        // 'term' => $term[0]->slug,
        'term' => $category_slug,
        'post_status' => 'publish',
        'paged' => $paged,
        'meta_key' => 'blog_date',
        'orderby' => 'meta_value',
        'order' => 'DESC',
      );
      $the_query = new WP_Query($args);
      $num = $the_query->post_count;
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
          // $max_num_pages = $the_query->max_num_pages;

          get_template_part('template-parts/content', 'blog-table');
        endwhile;
      else : ?>
        <div class="archive_box">
          <p>選択のカテゴリに記事が見つかりませんでした</p>
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
    </div>
  </main><!-- #main -->

  <?php get_sidebar(); ?>
</div><!-- .page__content -->
<?php get_footer(); ?>