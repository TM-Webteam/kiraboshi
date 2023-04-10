<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */

?>

<section class="purpose__blog part__blog01">
	<div class="inner">
		<h2 class="title__type01">ノウハウをもっと知りたい方へ</h2>
		<div class="wrap">
			<?php
			$category_ids = array();
			$category_ids = CFS()->get('show_category');

			$paged     = get_query_var('paged') ? get_query_var('paged') : 1;
			$args      = array(
				'posts_per_page' => 3,
				'post_type'      => 'column',
				'paged'          => $paged,
				'order'          => 'DESC',
				'meta_key'       => 'blog_date',
				'orderby'        => 'meta_value',
				'category__in'   => $category_ids,
			);
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
			?>
				<?php
				while ($the_query->have_posts()) :
					$the_query->the_post();
					$categories = get_the_category();
					$at_id = get_the_ID();
					$meta_values = get_post_meta($at_id, "blog_img", true);
					$img_url = wp_get_attachment_url($meta_values);
					$lead = get_post_meta($at_id, "lead", true);
					$taxonomy = get_the_terms($at_id, "column_category");
				?>

					<article class="item">
						<div class="image">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo esc_url($img_url); ?>" alt="">
							</a>
						</div>
						<div class="summary">
							<header>
								<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php if ($taxonomy) : ?>
									<ul class="categories">
										<?php foreach ($taxonomy as $category) : ?>
											<li><a href="<?php echo esc_url(get_term_link($category->slug, "column_category")); ?>"><?php echo esc_html($category->name); ?></a></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</header>
							<h4 class="text">
								<a href="<?php the_permalink(); ?>"><?php my_trim($lead, 121); ?></a>
							</h4>
						</div>
						</a>
					</article>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
		<p class="btn__type01 mb0">
			<a href="<?php echo esc_url(home_url('/')); ?>column/"><span class="text">記事コンテンツ一覧を見る</span><span class="effect"></span></a>
		</p>
	</div>

</section>