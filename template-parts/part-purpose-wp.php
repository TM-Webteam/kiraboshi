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
$whitepaper_datas = CFS()->get('purpose_whitepaper');
if ($whitepaper_datas) :
?>

	<?php
	foreach ($whitepaper_datas as $purpose_whitepaper_id) :
		$purpose_whitepaper_title = get_the_title($purpose_whitepaper_id);
		$purpose_whitepaper_lead  = CFS()->get('lead_sentence', $purpose_whitepaper_id);

		$purpose_datas = CFS()->get('purpose', $purpose_whitepaper_id);
		if ($purpose_datas) :
			foreach ($purpose_datas as $v1) :
				$purpose_goods_img  = $v1['purpose_goods_img'];
				$purpose_goods_img_text  = $v1['purpose_goods_img_text'];
				$purpose_goods_name = $v1['purpose_goods_name'];
				if (!empty($v1['purpose_goods_img_url'])) {
					$img_url = $v1['purpose_goods_img_url'];
				} else {
					$img_url = get_permalink($purpose_whitepaper_id);
				}
				if ($slug === $v1['purpose_trouble_slug']) :

	?>
					<div class="sub-section">
						<h4 class="title02"><?php echo wp_kses($purpose_whitepaper_title, $allowed_html); ?></h4>
						<div class="text">
							<?php echo wp_kses_post($purpose_whitepaper_lead); ?>
						</div>
						<?php
						if ($purpose_goods_img) :
						?>
							<div class="image">
								<a href="<?php echo $img_url; ?>"><img src="<?php echo esc_url($purpose_goods_img); ?>" alt=""></a>
								<?php
								if ($purpose_goods_img_text) :
								?>
									<p style="text-align:center;"><?php echo $purpose_goods_img_text; ?></p>
								<?php endif; ?>

							</div>
              <p class="btn__type01 taC">
                <a href="<?php echo $img_url; ?>"><span class="text dl"><span class="label">無料</span>資料ダウンロード</span><span class="effect"></span></a>
              </p>
						<?php endif; ?>
					</div>
					<?php
					if ($v1['purpose_trouble']) :
						foreach ($v1['purpose_trouble'] as $v2) :
							$purpose_trouble_title    = $v2['purpose_trouble_title'];
							$purpose_trouble_task     = $v2['purpose_trouble_task'];
							$purpose_trouble_img      = $v2['purpose_trouble_img'];
							$purpose_trouble_solution = $v2['purpose_trouble_solution'];
					?>
							<h2 class="title__type02"><?php echo wp_kses($purpose_trouble_title, $allowed_html); ?></h2>
							<div class="container">
								<div class="part__block01">
									<div class="item text">
										<div class="title">よくある課題</div>
										<div class="text"><?php echo wp_kses_post($purpose_trouble_task, $allowed_html); ?></div>
									</div>
									<div class="arrow">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_arrow01.svg" alt="arrow">
									</div>
									<div class="item image" style="background-image:url(<?php echo esc_url($purpose_trouble_img); ?>);">
										<div class="title"><?php echo wp_kses($purpose_goods_name, $allowed_html); ?>で解決できること</div>
										<div class="text"><?php echo wp_kses($purpose_trouble_solution, $allowed_html); ?></div>
									</div>
								</div>
							</div>
					<?php
						endforeach;
					endif;
					?>
	<?php
				endif;
			endforeach;
		endif;
	endforeach;
	?>

<?php endif; ?>