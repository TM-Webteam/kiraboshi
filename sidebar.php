<?php
global $column_sidebnr_cta;
global $column_sidebnr_wp;
global $category_slug;
global $at_id;
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kcr
 */


?>

<aside id="secondary" class="sidebar">
	<div class="sidebar__category">
		<h2 class="title">記事カテゴリ一覧</h2>
		<ul class="list">
			<?php
			$args = array(
				'type'         => 'column',
				'child_of'     => 0,
				'parent'       => '',
				'orderby'      => 'name',
				'order'        => 'ASC',
				'hide_empty'   => 1,
				'hierarchical' => 1,
				'exclude'      => '',
				'include'      => '',
				'number'       => '',
				'taxonomy'     => 'column_category',
				'pad_counts'   => false,
			);

			$categories = get_categories($args);
			foreach ($categories as $category) :
			?>
				<li><a href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>"><?php echo esc_html($category->name); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>

	<div class="bnr-container">
		<?php
		$key = 'bnr_show_index';
		if (is_singular('column')) {
			$key = 'bnr_show_blog';
		}
		$args      = array(
			'posts_per_page' => 2,
			'post_type'      => 'blogs_banner',
			'meta_query'     => array(
				array(
					'key'     => $key,
					'value'   => true,
					'compare' => '=',
				),
			),
		);
		$the_query = new WP_Query($args);
		if ($the_query->have_posts()) :
			// $at_id = get_the_ID();
			// $at_id = $post->ID;
			$bnr_url = get_post_meta($at_id, "bnr_url", true);
			$meta_values = get_post_meta($at_id, "blogs_banners", true);
			$img_url = wp_get_attachment_url($meta_values);
		?>
			<ul class="bnr-items">
				<?php
				while ($the_query->have_posts()) :
					$the_query->the_post();
				?>
					<li class="bnr-item"><a href="<?php echo esc_url($bnr_url); ?>" target="_blank" rel="noopener"><img loading="lazy" src="<?php echo esc_url($img_url); ?>" alt="<?php the_title(); ?>">
							<p><?php the_title(); ?></p>
						</a></li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<?php ?>
	<div class="bnr-contact js-linkArea <?php echo $at_id; ?>">

		<?php
		// if (empty($column_sidebnr_cta)) :
		if (!is_category()) :
			// $column_sidebnr_cta = CFS()->get('column_sidebnr_cta');
			$column_sidebnr_cta = get_post_meta($at_id, "column_sidebnr_cta", false);
			// var_dump($column_sidebnr_cta);
			if (!empty($column_sidebnr_cta)) :
				foreach ((array)$column_sidebnr_cta as $key) :
					$sidebnr_cta_url = get_post_meta($key, "sidebnr_cta_url", true);
					$sidebnr_cta_url = get_post_meta($key, "sidebnr_cta_url", true);
					$meta_values = get_post_meta($key, "sidebnr_cta_img", true);
					$img_url = wp_get_attachment_url($meta_values);
		?>
					<a href="<?php echo esc_url($sidebnr_cta_url); ?>">
						<div><img loading="lazy" src="<?php echo esc_url($img_url); ?>" alt="<?php the_title(); ?>" width="300" height="393"></div>
					</a>
				<?php
				endforeach;
			else :
				?>
				<div class="wrapBox">
					<div class="wrap">
						<h3 class="title">お問合せはこちら</h3>
						<p class="text01">業務改善でお困りのことがございましたら、まずはお気軽にお問合せください。</p>
					</div>
					<div class="wrap-btn">
						<p class="btn__type01">
							<a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">お問合せはこちら</span><span class="effect"></span></a>
						</p>
					</div>
				</div>
			<?php
			endif;
		else :
			// foreach ($column_sidebnr_cta as $column_sidebnr_ctas) :
			$post_data = get_page_by_path($category_slug, OBJECT, 'sidebnr_cta');
			if (!empty($post_data)) :
				$post_id = $post_data->ID;
			?>
				<a href="<?php echo esc_url(CFS()->get('sidebnr_cta_url', $post_id)); ?>">
					<div><img loading="lazy" src="<?php echo esc_url(CFS()->get('sidebnr_cta_img', $post_id)); ?>" alt="<?php the_title(); ?>"></div>
				</a>
		<?php
			endif;
		// endforeach;
		endif;
		?>
		<?php
		$column_sidebnr_wp = get_post_meta($at_id, "column_sidebnr_wp", false);
		if (!empty($column_sidebnr_wp)) :

			foreach ($column_sidebnr_wp as $key) :
				$meta_values = get_post_meta($key, "sidebnr_wp_pc", true);
				$sidebnr_wp_pc = wp_get_attachment_url($meta_values);
				$meta_values = get_post_meta($key, "sidebnr_wp_sp", true);
				$sidebnr_wp_sp = wp_get_attachment_url($meta_values);
		?>
				<div class="useful-bnr">
					<a href="<?php echo get_permalink($key); ?>">
						<img loading="lazy" src="<?php echo esc_url($sidebnr_wp_pc); ?>" alt="<?php echo strip_tags(get_the_title($key)); ?>" class="pc-only">
						<img loading="lazy" src="<?php echo esc_url($sidebnr_wp_sp); ?>" alt="<?php echo strip_tags(get_the_title($key)); ?>" class="sp-only">
					</a>
				</div>
		<?php
			endforeach;
		endif;
		?>

	</div>
</aside><!-- #secondary -->