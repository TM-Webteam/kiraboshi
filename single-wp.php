<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cac
 */

function my_delete_local_jquery()
{
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_delete_local_jquery');
get_header(2);

get_template_part('template-parts/part', 'page-headding');
$categories = get_the_category();
$date       = new DateTimeImmutable(CFS()->get('blog_date'));

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


<div class="page__content has-sidebar with-form">
	<main id="primary" class="site-main">

		<article class="wp__main">
			<!-- <div class="wp__main-title"><?php echo wp_strip_all_tags(CFS()->get('copy')); ?></div> -->
			<div class="wp__main-title"><?php echo CFS()->get('copy'); ?></div>
			<div class="wp__main-lead"><?php echo wp_kses_post(CFS()->get('lead_sentence')); ?></div>

			<div class="wp__main-toc">
				<div class="title">ダウンロードできる資料の内容</div>
				<?php
				$material_detail = CFS()->get('material_detail');
				?>
				<div class="inner">
					<?php foreach ((array)$material_detail as $material_value) : ?>
						<?php foreach ((array)$material_value['paragraph'] as $paragraph) : ?>
							<p class="item-title"><?php echo wp_strip_all_tags($paragraph['title']); ?></p>
							<ul class="items">
								<?php foreach ((array)$paragraph['caption'] as $caption) : ?>
									<li><?php echo wp_strip_all_tags($caption['caption_title']); ?></li>
								<?php endforeach ?>
							</ul>
						<?php endforeach ?>
					<?php endforeach ?>

				</div>
			</div>

      <!-- <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="bnr-useful"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bnr-useful.jpg" alt="まずは、問い合わせる"></a> -->

			<?php
			$whitepaper_rec = CFS()->get('whitepaper_rec');
			if ($whitepaper_rec) :
				$bnr_class = 'type_';
			?>
				<div class="wp__rec">
					<h2 class="title">その他おすすめ資料</h2>
					<?php
					foreach ($whitepaper_rec as $whitepaper_id) :
						$material_image_type = CFS()->get('material_image_type', $whitepaper_id);
						if ($material_image_type) {
							foreach ($material_image_type as $key => $value) {
								$bnr_class .= $key;
							}
						}
					?>
						<div class="wp__rec-item <?php echo $bnr_class; ?>">
							<div class="image"> <img loading="lazy" src="<?php echo esc_url(CFS()->get('material_image', $whitepaper_id)); ?>" alt=""> </div>
							<div class="summary">
								<div class="text">
									<?php echo wp_kses(get_the_title($whitepaper_id), $allowed_html); ?>
								</div>
								<div class="lead">
									<?php echo wp_kses_post(CFS()->get('lead_sentence', $whitepaper_id)); ?>
								</div>
							</div>
						</div>
						<p class="btn__type01--white btn__type01--center"> <a href="<?php echo esc_url(get_permalink($whitepaper_id)); ?>"><span class="text">ダウンロード</span><span class="effect"></span></a> </p>
				</div>
			<?php
					endforeach;
			?>
		<?php
			endif;
		?>
		</article>
	</main><!-- #main -->

	<aside id="secondary" class="sidebar">
		<div class="info__form">
			<div class="info__form__ttl">ダウンロード申し込みフォーム</div>
			<input type="hidden" id="lf_form_uid" value="11986" /> <input type="hidden" id="lf_form_formid" value="<?php echo esc_attr(CFS()->get('form_id')); ?>" />
			<div id="lf_form_div"></div>
			<script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
		</div>
	</aside>
</div><!-- .page__content -->
<?php get_footer(2); ?>