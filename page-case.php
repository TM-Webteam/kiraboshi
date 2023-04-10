<?php
function my_delete_local_jquery()
{
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_delete_local_jquery');
get_header();
get_template_part('template-parts/part', 'page-headding');
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
<nav class="breadcrumb">
	<ul class="items">
		<li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico_home01.svg" alt="HOME"></a></li>
		<li class="item"><span><?php the_title(); ?></span></li>
	</ul>
</nav>
<main id="primary" class="site-main">
	<section class="case__module02">
		<div class="flex ancArea inner">
			<h2 class="title__type01">自動車業界向けのシステム事業着手から、<br>25年以上の長きにわたり、自動車業界の<br class="d-none d-pc-inline">300社以上の企業様を支援してきました。</h2>
			<a href="#DL" class="ancBtn"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img-anc.png" alt=""></a>
		</div>
		<div class="container">
			<div class="wrap">
				<div class="item">
					<a href="#sct01">
						<h3 class="title" data-text="カイゼンを熟知"><span>カイゼンを熟知</span></h3> <img loading="lazy" class="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/case__module02_01_01.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#sct02">
						<h3 class="title" data-text="受発注システム提供&#xa;トップの実績"><span>受発注システム提供<br>トップの実績</span></h3> <img loading="lazy" class="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/case__module02_01_02.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="sct01" class="case__module03">
		<div class="inner">
			<h2 class="title__type01">カイゼンを熟知した本物の現場改善</h2>
			<div class="lead">
				<p><span>カイゼンの採用=効率改善というわけではありません。</span></p>
				<p>カイゼンを採用した現場改善において、<strong>以下の2点が最重要事項となります。</strong></p>
			</div>
			<dl class="list01">
				<dt>concept<span>1</span></dt>
				<dd>カイゼンに対応できる解決策の提示</dd>
				<dt>concept<span>2</span></dt>
				<dd>カイゼンのノウハウを熟知した人材</dd>
			</dl>
			<p class="text">弊社では、上記の2点をコンセプトに置いたサービスを展開しています。</p>
		</div>
		<div class="container">
			<div class="inner">
				<ul class="list02">
					<li>ニッチ分野における豊富なソリューションラインナップ</li>
					<li>カイゼンを熟知したプロフェッショナルが支える万全のサポート体制</li>
				</ul>
				<h3 class="title">小林クリエイトでは<br><span>「貴社の現場でカイゼンしたい要望」を伺い、</span><br>どう実現するか<span>具体的なご提案をいたします。</span><br>まずはお気軽にご相談ください。</h3> <img loading="lazy" class="bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/case__module03_01_01.png" alt="">
			</div>
		</div>
		<div class="image-wrap01">
			<figure>
				<img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/case__module03_01_02_blur.jpg" alt="">
			</figure>
			<p class="btn__type01 btn__type01--center mail"> <a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">お問合せはこちら</span><span class="effect"></span></a> </p>
		</div>
	</section>
	<section id="sct02" class="case__module04">
		<div class="inner">
			<h2 class="title__type01">自動車業界向け<br>受発注システム提供トップの実績</h2>
			<div class="wrap"> <img loading="lazy" class="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/case__module04_01_01.jpg" alt="">
				<div class="text">
					<p>長年培ったかんばん調達から指示調達までのノウハウを基に、小林クリエイトは日本国内全体で約330社、1115拠点の車体メーカー様や部品メーカー様の部品調達に関わる受発注システム導入を支援しています。QRコードやRFIDなど、自動認識技術を活用したシステム構築の強みを活かし、貴社のEDI調達をシステムと媒体の両面からサポート致します。</p>
				</div>
				<div class="text-over">
					<p><strong>現場改善のヒント</strong>を詳しくご覧になりたい方はぜひ下記フォームよりダウンロードしてご覧ください。</p>
				</div>
			</div>
			<div class="arrow"> <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_arrow04.svg" alt=""> </div>
		</div>
	</section>
	<section id="DL" class="case__module05 wp__content">
		<div class="inner">
			<h2 class="title__type01 mt0">事例資料ダウンロード</h2>
		</div>
		<?php
		$args      = array(
			'name'      => 'production_system',
			'post_type' => 'useful',
		);
		$the_query = new WP_Query($args);
		if ($the_query->have_posts()) :
			while ($the_query->have_posts()) :
				$the_query->the_post();
		?>
				<article class="wp__container">
					<h2 class="wp__main-title">
						<?php echo wp_strip_all_tags(get_the_title()); ?>
					</h2>
					<section class="wp__main">
						<div class="wp__main-image"><img loading="lazy" src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt=""></div>
						<div class="wp__main-copy"><?php echo wp_strip_all_tags(CFS()->get('copy')); ?></div>
						<div class="wp__main-lead">
							<?php echo wp_kses_post(CFS()->get('lead_sentence')); ?>
						</div>
						<div class="wp__main-toc">
							<div class="title">ダウンロードできる資料の内容</div>
							<?php
							$material_detail = CFS()->get('material_detail');
							?>
							<div class="inner">
								<?php foreach ($material_detail as $material_value) : ?>
									<?php foreach ($material_value['paragraph'] as $paragraph) : ?>
										<p class="item-title">
											<?php echo esc_html($paragraph['title']); ?>
										</p>
										<ul class="items">
											<?php foreach ($paragraph['caption'] as $caption) : ?>
												<li>
													<?php echo esc_html($caption['caption_title']); ?>
												</li>
											<?php endforeach ?>
										</ul>
									<?php endforeach ?>
								<?php endforeach ?>
							</div>
						</div>
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
									<div class="wp__rec-item <?php echo esc_attr($bnr_class); ?>">
										<div class="image"> <img loading="lazy" src="<?php echo esc_url(CFS()->get('material_image', $whitepaper_id)); ?>" alt=""> </div>
										<div class="summary">
											<div class="text fs-12rem">
												<?php echo wp_kses(get_the_title($whitepaper_id), $allowed_html); ?>
											</div>
											<!-- <div class="lead">
												<?php echo wp_kses(CFS()->get('lead_sentence', $whitepaper_id), $allowed_html); ?>
											</div> -->
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
					</section>


					<aside class="info__form">
						<div class="info__form__ttl">ダウンロード申し込みフォーム</div>

						<input type="hidden" id="lf_form_uid" value="11986" /> <input type="hidden" id="lf_form_formid" value="<?php echo esc_attr(CFS()->get('form_id')); ?>" />
						<div id="lf_form_div"></div>
						<script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
					</aside>
			<?php
			endwhile;
		endif;

		// 投稿データをリセット
		wp_reset_postdata();
			?>
				</article>
	</section>
</main>
<!-- #main -->
<?php get_footer(); ?>