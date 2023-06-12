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
$args = array(
	'taxonomy' => 'wp_task',
);
$categories_task = get_categories($args);
?>
<nav class="breadcrumb">
	<ul class="items">
		<li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME" width="15" height="13"></a></li>
		<li class="item"><a href="<?php echo esc_url(home_url('/')); ?>useful/">お役立ち資料</a></li>
		<li class="item"><span><?php esc_html(single_cat_title()); ?></span></li>
	</ul>
</nav>
<?php
$args = array(
	'type'         => 'useful',
	'child_of'     => 0,
	'parent'       => 0,
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => '',
	'taxonomy'     => 'wp_category',
	'pad_counts'   => false,
);

$categories = get_categories($args);
if ($categories) :
?>
	<section class="category-list">
		<div class="inner">
			<div class="title">資料カテゴリから探す</div>
			<ul class="items">
				<?php foreach ($categories as $category) :
					$term_slug = $category->slug;
					$current = "";
					if ($term_slug == $term) {
						$current = ' class="current"';
					}
				?>
					<li class="item"><a href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>" <?php echo $current; ?>><?php echo esc_html($category->name); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	<?php if ($categories_task) : ?>
		<!-- 課題から探す -->
		<div class="inner">
			<div class="title">課題から探す</div>
			<ul class="items">
				<?php foreach ($categories_task as $category) : ?>
					<li class="item"><a href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>"><?php echo esc_html($category->name); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>

<div class="page__content">
	<main id="primary" class="site-main">
		<div class="wp-container flex">

			<?php
			$taxonomy_slug = 'wp_category';

			$paged     = get_query_var('paged') ? get_query_var('paged') : 1;
			$args      = array(
				'posts_per_page' => 15,
				'post_type'      => 'useful',
				'paged'          => $paged,
				$taxonomy_slug   => $term,
			);
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
				while ($the_query->have_posts()) :
					$the_query->the_post();

					get_template_part('template-parts/content', 'whitepaper');

				endwhile;
			endif;?>

    </div>

    <?php
    $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
    the_posts_pagination(
      array(
        'mid_size'  => 2,
        'prev_text' => '<span>前へ</span>',
        'next_text' => '<span>次へ</span>',
      )
    );

    wp_reset_postdata();
    ?>

	</main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); ?>