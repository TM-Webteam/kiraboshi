<?php

get_header();
get_template_part('template-parts/part', 'page-headding');
?>

<nav class="breadcrumb">
	<ul class="items">
		<li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico_home01.svg" alt="HOME" width="15" height="13"></a></li>
		<li class="item"><span>サイトマップ</span></li>
	</ul>
</nav>

<div class="page__content">
	<main id="primary" class="site-main">
		<section class="sitemap-container">
			<div class="col">
				<h2>工程別で探す</h2>
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/procurement_ordering/">調達・発注</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/production/">生産</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/order_shipment/">受注・出荷</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/inspection/">検査</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">その他</a></li>
				</ul>
			</div>
			<div class="col">
				<h2>目的別で探す</h2>
				<div class="row">
					<div class="col-sub">
						<ul>
							<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">リードタイム短縮・社内在庫品低減</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/reduction_man-hours/">作業工数低減</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/quality_improvement_error_prevention/">品質向上・ミス防止</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/preventive_maintenance-_danger_prediction/">予防保全・危険予知</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">工程内の車両との連携・輸送資材管理</a></li>
						</ul>
					</div>
					<div class="col-sub">
						<ul>
							<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/cost_reduction/">コスト低減</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/kanban_kaizen/">かんばん方式・<br>カイゼン向けソリューション</a></li>
							<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/traceability/">トレーサビリティ</a></li>
						</ul>
					</div>
				</div>
			</div>
      <div class="col">
				<h2>ソリューション</h2>
				<ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>rfid_solution/">RFIDソリューション</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>mold_management/">金型管理ソリューション</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>paper_media_solution/">ペーパーメディアソリューション</a></li>
				</ul>
			</div>
			<div class="col">
				<h2><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></h2>
				<ul>
					<?php
					$args = array(
						'type'         => 'blog',
						'child_of'     => 0,
						'parent'       => '',
						'orderby'      => 'name',
						'order'        => 'ASC',
						'hide_empty'   => 1,
						'hierarchical' => 1,
						'exclude'      => '',
						'include'      => '',
						'number'       => '',
						'taxonomy'     => 'category',
						'pad_counts'   => false,
					);

					$categories = get_categories($args);
					foreach ($categories as $category) :
					?>
						<li class="item"><a href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>"><?php echo esc_html($category->name); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="col">
				<h2><a href="<?php echo esc_url(home_url('/')); ?>useful/">お役立ち資料</a></h2>
				<ul>
					<?php
					$args = array(
						'type'         => 'useful',
						'child_of'     => 0,
						'parent'       => '',
						'orderby'      => 'name',
						'order'        => 'ASC',
						'hide_empty'   => 1,
						'hierarchical' => 1,
						'exclude'      => '',
						'include'      => '',
						'number'       => '',
						'taxonomy'     => 'wp_category',
						'pad_counts'   => false,
					);

					$categories = get_categories($args);
					foreach ($categories as $category) :
					?>
						<li class="item"><a href="<?php echo esc_url(get_category_link($category->cat_ID)); ?>"><?php echo esc_html($category->name); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="col">
				<h2>小林クリエイトについて</h2>
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')); ?>case/">実績・事例</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>strength/">小林クリエイトの強み</a></li>
					<li><a href="https://k-cr.jp/corporate/outline/" target="_blank" rel="noopener noreferrer">会社概要</a></li>
				</ul>
			</div>
			<div class="col">
				<h2>その他</h2>
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')); ?>news/">ニュース・新着情報</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>contact/">お問合せ・見積り依頼</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>mail-magazine/">メールマガジン登録</a></li>
					<li><a href="https://k-cr.jp/privacy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a></li>
				</ul>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); ?>