<?php

/**
 * Template part for displaying page content in page-blog-table.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */

$categories = get_the_category();
$at_id = get_the_ID();
$blog_date = get_post_meta($at_id, "blog_date", true);
$date       = new DateTimeImmutable($blog_date);
$meta_values = get_post_meta($at_id, "blog_img", true);
$img_url = wp_get_attachment_url($meta_values);
$lead = get_post_meta($at_id, "lead", true);
$taxonomy = get_the_terms($at_id, "column_category");
?>
<article class="blog-item">
	<?php if (is_page('column') || is_category() || is_archive('column')) : ?>
		<a class="wrap" href="<?php the_permalink(); ?>">
			<?php if (is_front_page() && is_home()) : ?>
				<h3 class="title"><span><?php the_title(); ?></span></h3>
			<?php else : ?>
				<h2 class="title"><span><?php the_title(); ?></span></h2>
			<?php endif; ?>
			<div class="image">
				<span><img src="<?php echo esc_url($img_url); ?>" alt=""></span>
			</div>
			<div class="summary">


				<ul class="categories">
					<?php if ($taxonomy) : ?>
						<?php foreach ($taxonomy as $category) : ?>
							<li><span><?php echo esc_html($category->name); ?></span></li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
				<?php if (is_front_page() && is_home()) : ?>
					<h4 class="phrase"><?php my_trim($lead, 121); ?></h4>
				<?php else : ?>
					<h3 class="phrase"><?php my_trim($lead, 121); ?></h3>
				<?php endif; ?>
				<time datetime="<?php echo esc_attr($date->format('Y-m-d')); ?>" class="time"><?php echo esc_attr($date->format('Y/m/d')); ?></time>
			</div>
		</a>

	<?php else : ?>

		<div class="image">
			<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($img_url); ?>" alt=""></a>
		</div>
		<div class="summary">
			<?php if (is_front_page() && is_home()) : ?>
				<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php else : ?>
				<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>

			<ul class="categories">
				<?php if ($categories) : ?>
					<?php foreach ($categories as $category) : ?>
						<li><a href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>"><?php echo esc_html($category->name); ?></a></li>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
			<?php if (is_front_page() && is_home()) : ?>
				<h4 class="phrase"><?php my_trim($lead, 121); ?></h4>
			<?php else : ?>
				<h3 class="phrase"><?php my_trim($lead, 121); ?></h3>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</article>