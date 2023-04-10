<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */

global $post;
$slug = $post->post_name;

if (is_page('process05')) {
	$title__type03 = get_the_title() . 'ソリューション「RFID」';
} else {
	$title__type03 = get_the_title() . 'ソリューション';
}

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
$whitepaper_datas = CFS()->get('process_whitepaper');
$wp_cnt = 0;
if ($whitepaper_datas) :
?>
	<h2 class="title__type03"><?php echo wp_kses($title__type03, $allowed_html); ?></h2>
	<?php
	foreach ($whitepaper_datas as $process_whitepaper_id) :
		$process_whitepaper_title = get_the_title($process_whitepaper_id);
		$process_whitepaper_lead  = CFS()->get('lead_sentence', $process_whitepaper_id);

		$process_datas = CFS()->get('process', $process_whitepaper_id);
		if ($process_datas) :
			foreach ($process_datas as $v1) :
				$process_goods_img  = $v1['process_goods_img'];
				$process_goods_img_text  = $v1['process_goods_img_text'];
				$process_goods_name = $v1['process_goods_name'];
				if (!empty($v1['process_goods_img_url'])) {
					$img_url = $v1['process_goods_img_url'];
				} else {
					$img_url = get_permalink($process_whitepaper_id);
				}

				if ($slug === $v1['process_trouble_slug']) :
					$wp_cnt++;

	?>

					<h2 id="anc0<?php echo $wp_cnt; ?>" class="title__type01"><?php echo wp_kses($process_goods_name, $allowed_html); ?></h2>
					<div class="container">
						<div class="part__block01-title">
							<div class="item">お客様の課題</div>
							<div class="space"></div>
							<div class="item">当社サービスでの解決</div>
						</div>
						<?php
						if ($v1['process_trouble']) :
							foreach ($v1['process_trouble'] as $v2) :
								$process_trouble_title    = $v2['process_trouble_title'];
								$process_trouble_task     = $v2['process_trouble_task'];
								$process_trouble_img      = $v2['process_trouble_img'];
								$process_trouble_solution = $v2['process_trouble_solution'];

						?>
								<div class="part__block01">
									<div class="item text">
										<div class="title">お客様の課題</div>
										<div class="text"><?php echo wp_kses($process_trouble_task, $allowed_html); ?></div>
									</div>
									<div class="arrow">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_arrow01.svg" alt="arrow">
									</div>
									<div class="item image" style="background-image:url(<?php echo esc_url($process_trouble_img); ?>);">
										<div class="title">当社サービスでの解決</div>
										<div class="text"><?php echo wp_kses($process_trouble_solution, $allowed_html); ?></div>
									</div>
								</div>
						<?php
							endforeach;
						endif;
						?>
					</div>
					<div class="sub-section">
						<h4 class="title02"><?php echo wp_kses($process_whitepaper_title, $allowed_html); ?></h4>
						<div class="text">
							<?php echo wp_kses_post($process_whitepaper_lead); ?>
						</div>
						<?php
						if ($process_goods_img) :
						?>
							<div class="image">
								<a href="<?php echo $img_url; ?>"><img src="<?php echo esc_url($process_goods_img); ?>" alt=""></a>
								<?php
								if ($process_goods_img_text) :
								?>
									<p style="text-align:center;"><?php echo $process_goods_img_text; ?></p>
								<?php endif; ?>
							</div>
							<p class="btn__type01 taC">
								<a href="<?php echo $img_url; ?>"><span class="text dl"><span class="label">無料</span>資料ダウンロード</span><span class="effect"></span></a>
							</p>
						<?php endif; ?>
					</div>

	<?php
				endif;
			endforeach;
		endif;
	endforeach;
	?>
<?php endif; ?>