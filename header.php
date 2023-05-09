<?php

/**
 * The header for our theme
 *
 * @package kcr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
	<script type='text/javascript' src='h<?php echo home_url(); ?>/wp-includes/js/wp-embed.min.js'></script>
	<?php
	if (is_front_page() && is_home()) {
		$lower_class = '';
	} else {
		$lower_class = ' lower';
	}
	?>
  
	<!-- Open Graph data -->
	<!--   <meta property="og:title" content="<?php bloginfo('name') ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo get_site_url(); ?>">
  <meta property="og:image" content="https://k-cr-test.intrakun.com/wp-content/uploads/2021/03/ogp_1200x630.jpg">
  <meta property="og:description" content="<?php bloginfo('description') ?>">
  <meta property="og:site_name" content="<?php bloginfo('name') ?>"> -->

	<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="jDmg0GEH3D8QUhPlE6vFMvql3IfpqFfti2WgADaGzug" />
	<script src="//kitchen.juicer.cc/?color=AA/jNikgdfc=" async></script>
  
  <!-- Web font -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/fch8ijv.css">
	<!-- slickのCSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css">
  <script src="https://www.googleoptimize.com/optimize.js?id=OPT-T4PCCW2"></script>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->

	<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>

	<div id="page" class="site">

		<header id="masthead" class="site-header<?php echo esc_attr($lower_class); ?>">
			<div class="site-header__upper">
				<div class="site-title">
					<!-- <a href="https://k-cr.jp/" rel="home" target="_blank">
						<img loading="lazy" class="site-title__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_logo01.svg" alt="小林クリエイト株式会社">
					</a> -->
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img loading="lazy" class="site-title__logo icon-size" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/factoridge_header.png" alt="Factoridge">
						<!-- 						<?php if (is_front_page() && is_home()) : ?>
							<h1 class="site-title__text"><?php bloginfo('name'); ?></h1>
						<?php else : ?>
							<p class="site-title__text"><?php bloginfo('name'); ?></p>
						<?php endif; ?> -->
					</a>
				</div>
				<div class="btn-set">
					<div class="search-wrapper active">
						<form id="form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
							<div class="input-holder">
								<input id="s-box" name="s" type="text" class="search-input" placeholder="キーワードで検索" />
								<button id="s-btn-area" class="search-icon"><span></span></button>
							</div>
						</form>
					</div>
					<p class="btn__type01 mail">
						<a href="<?php echo esc_url(home_url('/')); ?>contact/" class="header_cta"><span class="text">お問合せ・お見積り依頼</span><span class="effect"></span></a>
					</p>
					<p class="btn__type01--white book">
						<a href="<?php echo esc_url(home_url('/')); ?>useful/" class="header_cta"><span class="text">お役立ち資料</span><span class="effect"></span></a>
					</p>
					<p class="btn__type01--white magazine">
						<a href="<?php echo esc_url(home_url('/')); ?>mail-magazine/" class="header_cta"><span class="text">メールマガジン新規登録</span><span class="effect"></span></a>
					</p>
				</div>
				<div class="g-nav-sp">
					<div class="overlay" data-style="visibility"></div>
					<div class="button" tabindex="0">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					<nav class="g-nav-sp__content" tabindex="0">
						<ul>
							<li>
								<div class="search-wrapper active">
									<form id="form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
										<div class="input-holder">
											<input id="s-box" name="s" type="text" class="search-input" placeholder="キーワードで検索" />
											<button id="s-btn-area" class="search-icon"><span></span></button>
										</div>
									</form>
								</div>
							</li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
							<li class="parent"><a href="<?php echo esc_url(home_url('/')); ?>process/procurement_ordering/">工程別で探す</a>
								<ul class="child">
									<li><a href="<?php echo esc_url(home_url('/')); ?>process/procurement_ordering/">調達・発注</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>process/production/">生産</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>process/order_shipment/">受注・出荷</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>process/inspection/">検査</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">その他</a></li>
								</ul>
							</li>
							<li class="parent"><a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">目的別で探す</a>
								<ul class="child">
									<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">リードタイム短縮・社内在庫品低減</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/reduction_man-hours/">作業工数低減</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/quality_improvement_error_prevention/">品質向上・ミス防止</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/preventive_maintenance-_danger_prediction/">予防保全・危険予知</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/cost_reduction/">コスト低減</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/kanban_kaizen/">かんばん方式・カイゼン向けソリューション</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/traceability/">トレーサビリティ</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">工程内の車両との連携・輸送資材管理</a></li>
								</ul>
							</li>
              <li class="parent"><a href="javascript:void(0)" class="disabled">ソリューション</a>
								<ul class="child">
                  <li><a href="<?php echo esc_url(home_url('/')); ?>mold_management/">金型管理ソリューション</a></li>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>rfid_solution/">RFIDソリューション</a></li>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>paper_media_solution/">ペーパーメディアソリューション</a></li>
								</ul>
							</li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>strength/">小林クリエイトの強み</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>case/">実績・事例</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></li>
						</ul>
						<p class="btn__type01 mail mt30">
							<a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">お問合せ</span><span class="effect"></span></a>
						</p>
						<p class="btn__type01--white book">
							<a href="<?php echo esc_url(home_url('/')); ?>useful/"><span class="text">お役立ち資料</span><span class="effect"></span></a>
						</p>
					</nav>
				</div>
			</div>
			<div class="site-header__bottom">
				<nav class="g-nav-pc">
					<ul>
						<li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
						<li class="parent">
							<a href="<?php echo esc_url(home_url('/')); ?>process/procurement_ordering/">工程別で探す</a>
							<div class="menu__full child">
								<div class="mega__parent"><a href="<?php echo esc_url(home_url('/')); ?>process/procurement_ordering/">工程別で探す</a></div>
								<div class="mega__child">
									<div class="megaBox">
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>process/procurement_ordering/">調達・発注</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>process/production/">生産</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>process/order_shipment/">受注・出荷</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>process/inspection/">検査</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">その他</a></div>
									</div>
								</div>
							</div>
						</li>
						<li class="parent">
							<a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">目的別で探す</a>
							<div class="menu__full child">
								<div class="mega__parent"><a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">目的別で探す</a></div>
								<div class="mega__child">
									<div class="megaBox">
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">リードタイム短縮・社内在庫品低減</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>purpose/reduction_man-hours/">作業工数低減</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>purpose/quality_improvement_error_prevention/">品質向上・ミス防止</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>purpose/preventive_maintenance-_danger_prediction/">予防保全・危険予知</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>purpose/cost_reduction/">コスト低減</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>purpose/kanban_kaizen/">かんばん方式・カイゼン向けソリューション</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>purpose/traceability/">トレーサビリティ</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">工程内の車両との連携・輸送資材管理</a></div>
									</div>
								</div>
							</div>
						</li>
            <li class="parent">
							<a href="javascript:void(0)">ソリューション</a>
							<div class="menu__full child">
								<div class="mega__parent"><a href="javascript:void(0)" class="disabled">ソリューション</a></div>
								<div class="mega__child">
									<div class="megaBox">
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>mold_management/">金型管理ソリューション</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>rfid_solution/">RFIDソリューション</a></div>
										<div class="megaBox__ttl"><a href="<?php echo esc_url(home_url('/')); ?>paper_media_solution/">ペーパーメディアソリューション</a></div>
									</div>
								</div>
							</div>
						</li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>strength/">小林クリエイトの強み</a></li>
						<li><a href="<?php echo esc_url(home_url('/')); ?>case/">実績・事例</a></li>
						<li>
							<a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a>
							<div class="menu__full child">
								<div class="mega__parent"><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></div>
								<div class="mega__child">
									<div class="megaBox">
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

										$categories_h = get_categories($args);
										foreach ($categories_h as $category_h) :
										?>
											<div class="megaBox__ttl"><a href="<?php echo esc_url(get_category_link($category_h->cat_ID)); ?>"><?php echo esc_html($category_h->name); ?></a></div>
										<?php endforeach; ?>

									</div>
								</div>
							</div>
						</li>
					</ul>
				</nav>

			</div>
		</header><!-- #masthead -->


		<div id="content" class="site-content<?php echo esc_attr($lower_class); ?>">