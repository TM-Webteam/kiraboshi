<?php

/**
 * The template for displaying archive news
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cac
 */
get_header();
get_template_part('template-parts/part', 'page-headding');

?>

<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME" width="15" height="13"></a></li>
    <li class="item"><span>製造現場改善に役立つコラム集</span></li>
  </ul>
</nav>
<section class="category-list">
  <div class="inner">
    <div class="title">記事カテゴリから探す</div>
    <ul class="items">
      <?php
      $args = array(
        'type'                     => 'blog',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'category',
        'pad_counts'               => false
      );

      $categories = get_categories($args);
      foreach ($categories as $category) : ?>
        <li class="item"><a href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>"><?php echo esc_html($category->name); ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<?php
$args = array(
  'posts_per_page'   => 1,
  'post_type'    => 'blog',
  // 'paged' => $paged,
  'order' => 'DESC',
  'meta_key' => 'blog_date',
  'orderby' => 'meta_value',
  'post_status' => 'publish',
  'meta_key' => 'recommend_flg',
  'meta_value' => '1'
);
$the_query = new WP_Query($args);
// print_r($the_query);
if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post();
    $p_id[] = get_the_ID();
    $categories = get_the_category();
  ?>
    <section class="recommend">
      <div class="recommend-containers">
        <div class="taC">
          <h2 class="title__type01">おすすめコラム</h2>
        </div>
        <a href="<?php the_permalink(); ?>" class="recommend__link">
          <div class="recommend__img">
            <figure><img loading="lazy" src="<?php echo esc_url(CFS()->get('blog_img')); ?>" alt="" width="410" height="230"></figure>
          </div>
          <div class="recommend__box">
            <div class="recommend__box--telop"><span class="pickup">おすすめ</span>
              <?php if ($categories) : ?>
                <?php foreach ($categories as $category) : ?>
                  <span><?php echo esc_html($category->name); ?></span>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <h3 class="recommend__box--ttl"><?php the_title(); ?></h3>
            <div class="recommend__box--txt"><?php my_trim(CFS()->get('lead'), 121); ?></div>
          </div>
        </a>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
<div class="page__content has-sidebar">
  <main id="primary" class="site-main">
    <div class="blog-container">

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page'   => 10,
        'post_type'    => 'blog',
        'paged' => $paged,
        'order' => 'DESC',
        'meta_key' => 'blog_date',
        'orderby' => 'meta_value',
        'post_status' => 'publish',
        'post__not_in' => $p_id,

      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) : ?>
        <div class="news-list">
          <ul>
            <?php while ($the_query->have_posts()) : $the_query->the_post();

              get_template_part('template-parts/content', 'blog-table');

            endwhile; ?>
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
    </div>
  </main><!-- #main -->
  <?php get_sidebar(); ?>
</div><!-- .page__content -->
<?php get_footer(); ?>