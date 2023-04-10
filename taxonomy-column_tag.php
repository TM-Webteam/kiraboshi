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
$taxonomy_tag = get_the_terms($at_id, "column_tag");
get_template_part('template-parts/part', 'page-headding');
?>

<!-- <section class="page__headding" style="background-image: url(/factoridge/wp-content/uploads/2021/02/page__headding_column_01-2.jpg);">
	<div class="inner">
		<h1 class="title">タグ一覧</h1>
		<div class="sublead"><p>現場改善に役立つ、<br>ノウハウ・事例・トレンドなどをお届けします。</p></div>
	</div>
</section> -->

<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME" width="15" height="13"></a></li>
    <li class="item"><span>タグ一覧</span></li>
  </ul>
</nav>


<div class="page__content has-sidebar">
  <main id="primary" class="site-main full">
    <div class="blog-container">

    <?php
      $queried_object = get_queried_object();
      $term_id = esc_html($queried_object->term_id);
      $term = wp_get_object_terms($post->ID, 'column_tag');

      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      // $args = array(
      //   // 'orderby' => 'post_date',
      //   // 'order' => 'DESC',
      //   'post_status' => 'publish',
      //   'paged' => $paged,
      //   'post_type' => 'column',
      //   'term' => $term[0]->slug,
      //   'posts_per_page' => -1,
      //   'order' => 'DESC',
      //   'meta_key' => 'blog_date',
      //   'orderby' => 'meta_value'
      // );
      $args = array(
        'posts_per_page'   => 10, //5件表示する
        'post_type'    => 'column',  //投稿タイプ
        'taxonomy' => 'column_tag',
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

</div><!-- .page__content -->
<?php get_footer(); ?>