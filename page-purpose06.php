<?php

get_header();
get_template_part('template-parts/part', 'page-headding');
get_template_part('template-parts/bnr');
get_template_part('template-parts/roundbtn');
?>

<nav class="breadcrumb">
	<ul class="items">
		<li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico_home01.svg" alt="HOME"></a></li>
		<li class="item"><span><?php the_title(); ?></span></li>
	</ul>
</nav>

<main id="primary" class="site-main">
	<section class="purpose__module02">
		<div class="inner">
			<h2 class="title__type01">このような課題で困っていませんか？</h2>
			<div class="wrap">

				<div class="item">
					<div class="image"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/purpose__module02_06_01.jpg" alt=""></div>
					<div class="data">
						<h3 class="title__type02">かんばんの管理が煩雑</h3>
						<ul class="list">
							<li>かんばんの増減管理が上手くできていないため、生産変動に即した部品調達ができていない</li>
						</ul>
					</div>
				</div>

				<div class="item">
					<div class="image"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/purpose__module02_06_02.jpg" alt=""></div>
					<div class="data">
						<h3 class="title__type02">複数社のＥＤＩ対応を統一したい</h3>
						<ul class="list">
							<li>多画面多端末の解消がしたい</li>
							<li>多種多様なデータレイアウトが存在する</li>
							<li>多種多様なかんばんが存在する</li>
						</ul>
					</div>
				</div>

			</div>
	</section>
	<section class="purpose__module03">
		<div class="inner">
			<h2 class="title__type01">「かんばん管理」と「受注出荷システムの共通化」で<br>業務改善を実現</h2>
			<div class="lead">
				<p>「業務改善」を実現するために、下記の2つの点に着目する必要があります。</p>
			</div>
		</div>
		<div class="container">
			<div class="wrap">
				<div class="item">
					<div class="num">1</div>
					<h3 class="title" data-text="かんばん管理の&#10;工数改善"><span>かんばん管理の<br>工数改善</span></h3>
					<img loading="lazy" class="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/purpose__module03_06_01.png" alt="">
				</div>
				<div class="item">
					<div class="num">2</div>
					<h3 class="title" data-text="受注出荷システムの&#10;共通化"><span>受注出荷システムの<br>共通化</span></h3>
					<img loading="lazy" class="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/purpose__module03_06_02.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="purpose__module04">
		<div class="inner">
			<h2 class="title__type01">「かんばん管理の工数改善」や「受注出荷システムの共通化」で<br>どのように業務改善をすればよいかわからない</h2>
			<div class="container">
				<h3 class="title__type02">「かんばん管理の工数改善」に関してよくあるお困りごと</h3>
				<div class="part__block01">
					<div class="item image" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/purpose__module04_06_01.jpg);">
						<div class="title">主なご相談窓口</div>
						<div class="text">
							<p>工務部<br>生産管理部</p>
						</div>
					</div>
					<div class="arrow">
						<img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_arrow01.svg" alt="arrow">
					</div>
					<div class="item text">
						<div class="title">よくある課題</div>
						<div class="text">
							<p>かんばんの増減管理に工数がかかる</p>
						</div>
					</div>
				</div>
				<h3 class="title__type02">「受注出荷システムの共通化」に関してよくあるお困りごと</h3>
				<div class="part__block01">
					<div class="item image" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/purpose__module04_06_02.jpg);">
						<div class="title">主なご相談窓口</div>
						<div class="text">
							<p>工務部<br>生産管理部</p>
						</div>
					</div>
					<div class="arrow">
						<img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_arrow01.svg" alt="arrow">
					</div>
					<div class="item text">
						<div class="title">よくある課題</div>
						<div class="text">
							<p>各社のＥＤＩ対応が始まり、<br>多端末多画面になってしまう</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="purpose__module05">
		<div class="inner">
			<h2 class="title__type01">小林クリエイトなら、<br>目的に応じた業務改善を実現</h2>
			<div class="container">
				<ul class="list">
					<li>創業以来、80有余年の支援実績</li>
					<li>SCMにおける現場改善に特化した豊富なノウハウを保有</li>
					<li>ニッチ領域における豊富でトータルに支援できるソリューションラインナップ</li>
				</ul>
				<img loading="lazy" class="bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/purpose__module05_01_01.jpg" alt="">
				<img loading="lazy" class="arrow" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/img_arrow02.svg" alt="">
			</div>
		</div>
	</section>

	<section class="purpose__module06">
		<div class="inner">
			<h2 class="title__type03">カイゼンを実現する<br>ソリューション</h2>
			<?php get_template_part('template-parts/part', 'purpose-wp'); ?>
		</div>
	</section>

	<section class="part__contact01">
		<div class="inner">
			<div class="container">
				<h2 class="title__type01 mt0 mb10">お問合せ・ご相談</h2>
				<div class="lead">
					<p>業務改善でお困りのことがございましたら、<br class="d-none d-pc-inline">まずはお気軽にご相談ください。</p>
					<p>弊社のプロフェショナルが課題・悩みをヒアリングして、<br class="d-none d-pc-inline">最適なご提案をさせていただきます。</p>
				</div>
				<p class="btn__type01 mail">
					<a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">お問合せ・ご相談</span><span class="effect"></span></a>
				</p>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/part', 'blog-list'); ?>
	<?php get_template_part('template-parts/part', 'wp'); ?>
</main><!-- #main -->
<?php get_footer(); ?>