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

?>
<?php
$whitepaper_rec = CFS()->get('useful_whitepaper');
if ($whitepaper_rec) :
	$bnr_class = 'type_';
	foreach ($whitepaper_rec as $whitepaper_id) :
		$material_image_type = CFS()->get('material_image_type', $whitepaper_id);
		if ($material_image_type) {
			foreach ($material_image_type as $key => $value) {
				$bnr_class .= $key;
			}
		}
?>
		<section class="part__wp">
			<div class="inner">
				<h2 class="title__type01 mt0">お役立ち資料で学ぶ</h2>
				<h3 class="title"><?php echo wp_kses(get_the_title($whitepaper_id), $allowed_html); ?></h3>
				<div class="wrap">
					<div class="image <?php echo esc_attr($bnr_class); ?>">
						<!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_wp_dummy01.jpg" alt=""> -->
						<img src="<?php echo esc_url(CFS()->get('material_image', $whitepaper_id)); ?>" alt="">
					</div>
					<div class="data">
						<div class="text">
							<?php echo wp_strip_all_tags(CFS()->get('copy', $whitepaper_id)); ?>
						</div>
						<p class="btn__type01">
							<a href="<?php echo esc_url(get_permalink($whitepaper_id)); ?>"><span class="text"><span class="label">無料</span>資料ダウンロード</span><span class="effect"></span></a>
						</p>
					</div>
				</div>
			</div>
		</section>
	<?php
	endforeach;
	?>
<?php
endif;
?>