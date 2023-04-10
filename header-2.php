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
  <meta name="robots" content="noindex,nofollow" />
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
	<!-- slickのCSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body <?php body_class(); ?> id="listing">
	<!-- Google Tag Manager (noscript) -->

	<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>

	<div id="page" class="site">

		<header id="masthead" class="site-header<?php echo esc_attr($lower_class); ?>">
			<div class="site-header__upper">
				<div class="site-title flex">
					<div>
						<img loading="lazy" class="site-title__logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_logo01.svg" alt="小林クリエイト株式会社">
					</div>
					<div>
						<img loading="lazy" class="site-title__logo icon-size" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/factoridge_header.png" alt="Factoridge">
						<!-- 						<?php if (is_front_page() && is_home()) : ?>
							<h1 class="site-title__text"><?php bloginfo('name'); ?></h1>
						<?php else : ?>
							<p class="site-title__text"><?php bloginfo('name'); ?></p>
						<?php endif; ?> -->
					</div>
				</div>
			</div>
		</header><!-- #masthead -->


		<div id="content" class="site-content<?php echo esc_attr($lower_class); ?>">