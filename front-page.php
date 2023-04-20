<?php

/**
 * The Home template file
 *
 * @package kcr
 */

get_header();
?>

<main id="primary" class="site-main" role="main">
	<section class="main-visual">
		<div class="inner">
			<p class="title-sub">現地・現物・現実による課題解決</p>
			<!-- <h1 class="title-main mv_h1"><span class="mn_title_l"></span><span class="mn_title_r">向けサイト</span></h1> -->
			<h1 class="title-main fs-44rem">スマートファクトリー　ソリューションサイト<br><span class="fs-08em">製造業・自動車関連製造業</span></h1>
			<img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/factoridge_mv.png" class="factoridge_mv_img" alt="Factoridge" width="580" height="246" data-aos="fade">
			<!-- <p class="title-bottom"><?php bloginfo('name'); ?></p> -->
			<p class="lead">私たちは生産現場(Factory)における情報伝達の橋渡し(Bridge)をお手伝いして、<br>モノづくり領域のデジタルトランスフォーメーションを加速させます。<br>小林クリエイトでは、<span>現場改善を実現するためのお問合せ・ご相談を受付中です。</span></p>
			<p class="btn__type01 book--white main-visual__btn">
				<a href="<?php echo esc_url(home_url('/')); ?>useful/"><span class="text">お役立ち資料はこちら</span><span class="effect"></span></a>
			</p>
		</div>
	</section>
	<section class="home__search">
		<div class="inner">
			<h2 class="title__type01 mt0" data-aos="fade-up">ニーズ・課題から探す</h2>
			<div class="lead" data-aos="fade-up">
				<p>いざ、業務改善に取り組もうとしても、<br>
					どのような工程を踏んで推進していくべきか、不安に思うことがあるでしょう。</p>
				<p>また業務改善に取り組む中でも、<br>
					効果的な方法で改善を実施できていないケースもあると思います。</p>
				<p>ここでは、日々の業務改善を成功に導く「正しい解決方法」についてご紹介します。</p>
			</div>
		</div>
		<section class="home__search-category category01">
			<div class="inner-sub">
				<h2 class="title__type02" data-aos="fade-up">受注・調達・生産・出荷<br>各工程においてお困りの方</h2>
				<ul class="items">
					<li data-aos="fade-up" data-aos-delay="200"><a href="<?php echo esc_url(home_url('/')); ?>process/procurement_ordering/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-01.jpg);">
								<span class="text">調達・発注</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="400"><a href="<?php echo esc_url(home_url('/')); ?>process/production/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-02.jpg);">
								<span class="text">生産</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="600"><a href="<?php echo esc_url(home_url('/')); ?>process/order_shipment/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-03.jpg);">
								<span class="text">受注・出荷</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="800"><a href="<?php echo esc_url(home_url('/')); ?>process/inspection/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-04.jpg);">
								<span class="text">検査</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="1000"><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-05.jpg);">
								<span class="text">その他</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
				</ul>
			</div>
		</section>
		<section class="home__search-category category02">
			<div class="inner-sub">
				<h2 class="title__type02" data-aos="fade-up">業務改善の方法について<br>お困りの方</h2>
				<ul class="items">
					<li data-aos="fade-up" data-aos-delay="200"><a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-01.jpg);">
								<span class="text">リードタイム短縮・<br>社内在庫品低減</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="400"><a href="<?php echo esc_url(home_url('/')); ?>purpose/reduction_man-hours/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-02.jpg);">
								<span class="text">作業工数低減</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="600"><a href="<?php echo esc_url(home_url('/')); ?>purpose/quality_improvement_error_prevention/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-03.jpg);">
								<span class="text">品質向上・ミス防止</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="800"><a href="<?php echo esc_url(home_url('/')); ?>purpose/preventive_maintenance-_danger_prediction/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-04.jpg);">
								<span class="text">予防保全・危険予知</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="1000"><a href="<?php echo esc_url(home_url('/')); ?>purpose/cost_reduction/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-05.jpg);">
								<span class="text">コスト低減</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="1200"><a href="<?php echo esc_url(home_url('/')); ?>purpose/kanban_kaizen/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-06.jpg);">
								<span class="text">かんばん方式・<br>カイゼン向け<br>ソリューション</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="1400"><a href="<?php echo esc_url(home_url('/')); ?>purpose/traceability/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-07.jpg);">
								<span class="text">トレーサビリティ</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li data-aos="fade-up" data-aos-delay="1600"><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-05.jpg);">
								<span class="text">工程内の車両との連携・<br>輸送資材管理</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
				</ul>
			</div>
		</section>
	</section>
	<section class="home__wp">
		<div class="inner">
			<h2 class="title__type01" data-aos="fade-up">お役立ち資料で学ぶ</h2>
			<ul class="items" data-aos="fade-up" data-aos-delay="200">
				<?php
				$paged     = get_query_var('paged') ? get_query_var('paged') : 1;
				$args      = array(
					'posts_per_page' => 6,
					'post_type'      => 'useful',
					'paged'          => $paged,
					'meta_query'    => array(
						array(
							'key'     => 'list_view',
							'value'     => '1',
							'compare' => '!='
						)
					),
				);
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) :
					while ($the_query->have_posts()) :
						$the_query->the_post();
				?>
						<li><a href="<?php the_permalink(); ?>">
								<img loading="lazy" class="image" src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt="" width="462" height="313">
								<span class="wrap">
									<span class="title">
										<?php echo esc_html(wp_strip_all_tags(get_the_title())); ?>
									</span>
								</span>
							</a></li>
				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>

			</ul>
			<p class="btn__type01">
				<a href="<?php echo esc_url(home_url('/')); ?>useful/"><span class="text">お役立ち資料はこちら</span><span class="effect"></span></a>
			</p>

		</div>
	</section>
	<section class="home__blog part__blog01">
		<div class="inner">
			<h2 class="title__type01" data-aos="fade-up">記事コラム</h2>
			<div class="wrap" data-aos="fade-up" data-aos-delay="200">
				<?php
				$paged     = get_query_var('paged') ? get_query_var('paged') : 1;
				$args      = array(
					'posts_per_page' => 3,
					'post_type'      => 'column',
					'paged'          => $paged,
					'order'          => 'DESC',
					'meta_key'       => 'blog_date',
					'orderby'        => 'meta_value',
				);
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) :
				?>
					<?php
					while ($the_query->have_posts()) :
						$the_query->the_post();
						$categories = get_the_category();
						$at_id = get_the_ID();
						$meta_values = get_post_meta($at_id, "blog_img", true);
						$img_url = wp_get_attachment_url($meta_values);
						$lead = get_post_meta($at_id, "lead", true);
						$taxonomy = get_the_terms($at_id, "column_category");
					?>
						<article class="item">
							<div class="image">
								<a href="<?php the_permalink(); ?>">
									<img loading="lazy" src="<?php echo esc_url($img_url); ?>" alt="" width="307" height="204">
								</a>
							</div>
							<div class="summary">
								<header>
									<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<?php if ($taxonomy) : ?>
										<ul class="categories">
											<?php foreach ($taxonomy as $category) : ?>
												<li><a href="<?php echo esc_url(get_term_link($category->slug, "column_category")); ?>"><?php echo esc_html($category->name); ?></a></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</header>
								<h4 class="text">
									<a href="<?php the_permalink(); ?>"><?php my_trim($lead, 121); ?></a>
								</h4>
							</div>
							</a>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>

			<p class="btn__type01--white">
				<a href="<?php echo esc_url(home_url('/')); ?>column/"><span class="text">記事コンテンツ一覧を見る</span><span class="effect"></span></a>
			</p>
		</div>
	</section>

	<section class="home__strength">
		<div class="inner">
			<h2 class="title__type01" data-aos="fade-up">小林クリエイトの強み</h2>
			<div class="lead" data-aos="fade-up" data-aos-delay="200">
				<p>SCMにおいて原価低減ソリューションを提供する小林クリエイトは、<br>
					80有余年の間、自動車関連業界をはじめとした製造業界全般で、<br>
					業務効率化・コスト低減など<br>
					現場改善のプロフェッショナルとしてサポートしてきました。</p>
			</div>
			<div class="wrap" data-style="linkbox" ] data-aos="fade-up" data-aos-delay="400">
				<p class="text">SCM分野で培った豊富なノウハウを基に、<br>業務効率化・コスト低減など現場改善のパートナーとしてサポートいたします。</p>
				<p class="btn__type01--white home__strength-btn">
					<a href="<?php echo esc_url(home_url('/')); ?>column/"><span class="text">記事コンテンツ一覧を見る</span><span class="effect"></span></a>
				</p>
			</div>
		</div>
	</section>

	<section class="home__case">
		<div class="inner">
			<h2 class="title__type01" data-aos="fade-up">実績・事例</h2>
			<div class="lead" data-aos="fade-up" data-aos-delay="200">
				<p>自動車業界向けのシステム事業着手から、25年以上の長きにわたり、<br>
					かんばん方式を熟知したプロフェッショナルとして、<br>
					200社以上の企業様の支援をしてきました。</p>
			</div>
			<div class="wrap" data-style="linkbox" ] data-aos="fade-up" data-aos-delay="400">
				<p class="text">かんばん方式を熟知したプロフェッショナルが、<br>自動車業界の企業様の現場改善を支援いたします。</p>
				<p class="btn__type01--white home__strength-btn">
					<a href="<?php echo esc_url(home_url('/')); ?>case/"><span class="text">実績・事例はこちら</span><span class="effect"></span></a>
				</p>
			</div>
		</div>
	</section>

	<section class="home__news">
		<div class="inner">
			<h2 class="title__type01" data-aos="fade-up">ニュース・新着情報</h2>
			<div class="news-list" data-aos="fade-up" data-aos-delay="200">
				<ul>
					<?php
					$args     = array(
						'posts_per_page' => 5,
						'post_type'      => 'news',
						'order'          => 'DESC',
						'meta_key'       => 'news_date',
						'orderby'        => 'meta_value',
					);
					$my_query = new WP_Query($args);
					if ($my_query->have_posts()) :
						while ($my_query->have_posts()) :
							$my_query->the_post();
							$date = new DateTimeImmutable(CFS()->get('news_date'));
					?>
							<li class="news-list__item">
								<a href="<?php the_permalink(); ?>">
									<time datetime="<?php echo esc_attr($date->format('Y-m-d')); ?>" class="time"><?php echo esc_html($date->format('Y/m/d')); ?></time>
									<span class="title"><?php the_title(); ?></span>
								</a>
							</li>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</ul>
			</div>
			<p class="btn__type01--white btn__type01--right">
				<a href="<?php echo esc_url(home_url('/')); ?>news/"><span class="text">ニュース・新着情報一覧を見る</span><span class="effect"></span></a>
			</p>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
