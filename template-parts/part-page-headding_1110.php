<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */

$allowed_html = array(
	'a'      => array(
		'href'   => array(),
		'target' => array(),
	),
	'br'     => array(),
	'p'      => array(),
	'strong' => array(),
	'span'   => array(
		'style' => array(),
	),
);
if (is_404()) {
	$image_path = esc_url(get_template_directory_uri()) . "/images/main-visual__img01.jpg";
} else {
	$image_path = esc_url(CFS()->get('header_image'));
}

if (is_category() || is_post_type_archive('blog') || is_singular('blog') || is_post_type_archive('column') || is_singular('column') || is_tax('column_category')) {
	$page_id    = get_page_by_path('column');
	$page_id    = $page_id->ID;
	// $image_path = esc_url(CFS()->get('header_image', $page_id));
	$image_path = "/factoridge/wp-content/uploads/2021/02/page__headding_column_01-2.jpg";
}

if (is_post_type_archive('news') || is_singular('news')) {
	$page_id    = get_page_by_path('news');
	$page_id    = $page_id->ID;
	$image_path = esc_url(CFS()->get('header_image', $page_id));
}

if (is_post_type_archive('useful') || is_singular('useful') || is_tax('wp_category') || is_page('thanks') || is_tax('wp_task')) {
	$page_id    = get_page_by_path('useful');
	$page_id    = $page_id->ID;
	$image_path = esc_url(CFS()->get('header_image', $page_id));
}

if (is_page('contact/thanks')) {
	$image_path = esc_url(CFS()->get('header_image'));
}
if (is_page('mail-magazine')) {
	$image_path = esc_url(CFS()->get('header_image'));
}
if (is_search()) {
	$page_id    = get_page_by_path('search-results');
	$page_id    = $page_id->ID;
	$image_path = esc_url(CFS()->get('header_image', $page_id));
}

?>
<section class="page__headding 
<?php
if (is_page('strength') || is_page('case')) :
?>
	page__headding--lp<?php endif; ?>" style="background-image: url(<?php echo esc_url($image_path); ?>);">
	<div class="inner">
		<?php if (is_page()) : ?>
			<?php if (is_page('strength')) : ?>
				<p class="title-sub mt0">ソリューションパートナー</p>
				<h1 class="title"><?php the_title(); ?></h1>
			<?php elseif (is_page('case')) : ?>
				<p class="title-sub mt0">カイゼンを熟知したプロフェッショナルが現場改善をサポート</p>
				<h1 class="title"><?php the_title(); ?></h1>
			<?php elseif (is_page('sitemap') || is_page('contact') || is_page('contact/thanks') || is_page('mail-magazine') || is_page('mail-magazine_thanks') || is_page('privacy-policy')) : ?>
				<h1 class="title"><?php the_title(); ?></h1>
			<?php elseif (is_page('thanks')) : ?>
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="sublead">
					<p><?php echo wp_kses(CFS()->get('header_text', $page_id), $allowed_html); ?></p>
				</div>
			<?php else : ?>
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="sublead">
					<p><?php echo wp_kses(CFS()->get('header_text'), $allowed_html); ?></p>
				</div>
				<p class="btn__type01 mail">
					<a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">お問合せはこちら</span><span class="effect"></span></a>
				</p>
			<?php endif; ?>
		<?php elseif (is_category() || is_tax('column_category') || is_tax('column_tag')) : ?>
			<h1 class="title-wrap">
				<span class="title">製造現場改善に役立つコラム集</span>
				<span class="title-sub"><?php esc_html(single_cat_title()); ?></span>
			</h1>
			<?php if (!empty(category_description())) : ?>
				<div class="sublead">
					<p><?php echo esc_html(strip_tags(category_description())); ?></p>
				</div>
			<?php endif; ?>
		<?php elseif (is_post_type_archive('blog') or is_post_type_archive('column')) : ?>
			<h1 class="title">製造現場改善に役立つコラム集</h1>
			<div class="sublead">
				<p><?php echo wp_kses(CFS()->get('header_text', $page_id), $allowed_html); ?></p>
			</div>
		<?php elseif (is_singular('column') or is_post_type_archive('column')) : ?>
			<p class="title">製造現場改善に役立つコラム集</p>
			<div class="sublead">
				<p><?php echo wp_kses(CFS()->get('header_text', $page_id), $allowed_html); ?></p>
			</div>
		<?php elseif (is_tax('wp_category') or is_tax('wp_task')) : ?>
			<h1 class="title-wrap">
				<span class="title">お役立ち資料</span>
				<span class="title-sub"><?php esc_html(single_cat_title()); ?></span>
			</h1>
			<div class="sublead">
				<p><?php echo wp_kses(CFS()->get('header_text', $page_id), $allowed_html); ?></p>
			</div>
		<?php elseif (is_post_type_archive('useful')) : ?>
			<h1 class="title">お役立ち資料</h1>
			<div class="sublead">
				<p><?php echo wp_kses(CFS()->get('header_text', $page_id), $allowed_html); ?></p>
			</div>
		<?php elseif (is_singular('useful')) : ?>
			<div class="wp">
				<ul id="slick" class="image">
					<li><img src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt=""></li>
					<?php if (!empty(CFS()->get('material_image2'))) : ?>
						<li><img src="<?php echo esc_url(CFS()->get('material_image2')); ?>" alt=""></li>
					<?php endif; ?>
					<?php if (!empty(CFS()->get('material_image3'))) : ?>
						<li><img src="<?php echo esc_url(CFS()->get('material_image3')); ?>" alt=""></li>
					<?php endif; ?>
				</ul>
				<div class="summary">
					<?php $categories = get_the_terms($post->ID, 'wp_category'); ?>
					<?php if ($categories) : ?>
						<ul class="categories">
							<?php if ($categories) : ?>
								<?php foreach ($categories as $category) : ?>
									<li><?php echo esc_html($category->name); ?></li>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					<?php endif; ?>
					<h1 class="title"><?php the_title(); ?></h1>
				</div>
			</div>
		<?php elseif (is_singular('news')) : ?>
			<p class="title">ニュース・新着情報</p>
		<?php elseif (is_post_type_archive('news')) : ?>
			<h1 class="title">ニュース・新着情報一覧</h1>

		<?php elseif (is_404()) : ?>
			<h1 class="title">ページが見つかりませんでした。</h1>

		<?php endif; ?>
		<?php if (is_search()) : ?>
			<p class="title">検索結果</p>
		<?php endif; ?>
	</div>
</section>