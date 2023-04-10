<?php

get_header();
get_template_part('template-parts/part', 'page-headding');
?>

<nav class="breadcrumb">
	<ul class="items">
		<li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico_home01.svg" alt="HOME"></a></li>
		<li class="item"><span><?php the_title(); ?></span></li>
	</ul>
</nav>

<main id="primary" class="site-main">
	<section class="strength__module02">
		<div class="inner">
			<h2 class="title__type01">創業から80有余年、自動車業界をはじめとした製造業において、<br class="d-none d-pc-inline">業務効率化やコスト低減などに繋がる改善など現場改善を<br>サポートしてきました。</h2>
		</div>
		<div class="container">
			<div class="wrap">
				<div class="item">
					<a href="#sct01">
						<h3 class="title" data-text="SCMにおける&#xa;原価低減&#xa;ソリューション"><span>SCMにおける<br>原価低減<br>ソリューション</span></h3>
						<img loading="lazy" class="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/strength__module02_01_01.png" alt="">
					</a>
				</div>
				<div class="item">
					<a href="#sct02">
						<h3 class="title" data-text="JAMA・JAPIA&#xa;標準帳票の提供&#xa;トップの実績"><span>JAMA・JAPIA<br>標準帳票の提供<br>トップの実績</span></h3>
						<img loading="lazy" class="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/strength__module02_01_02.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="sct01" class="strength__module03">
		<div class="inner">
			<h2 class="title__type01">SCM領域における豊富な原価低減ソリューションラインナップ</h2>

			<div class="lead">
				<p><span>生産現場のみえる化による現場改善を実施したい</span>と感じていませんか？</p>
				<p>小林クリエイトは<strong>SCM領域でみえる化による現場改善を実現</strong>します。</p>
			</div>
		</div>
		<div class="container">
			<div class="inner">
				<h3 class="title">小林クリエイトが<br>原価低減の提案が可能な理由とは？</h3>
				<dl class="list">
					<dt>concept<span>1</span></dt>
					<dd>システム開発・媒体供給などメーカーにとらわれることなく、<br class="d-none d-pc-inline">幅広い領域をサポート</dd>
					<dt>concept<span>2</span></dt>
					<dd>受注・調達・生産・出荷のあらゆる工程をサポート</dd>
				</dl>
				<p class="text">弊社では、上記の2点をコンセプトに置いたサービスを展開しており、<br class="d-none d-pc-inline">多くのお客様にご活用いただいております。</p>
				<img loading="lazy" class="bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/strength__module03_01_01.png" alt="">
			</div>
		</div>
		<div class="image-wrap01">
			<img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/strength__module03_01_02.png" alt="">
		</div>
		<div class="image-wrap02">
			<img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/strength__module03_01_03.png" alt="">
		</div>
	</section>

	<section id="sct02" class="strength__module04">
		<div class="inner">
			<h2 class="title__type01">JAMA・JAPIA標準帳票トップの実績</h2>
			<div class="wrap">
				<img loading="lazy" class="image" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/strength__module04_01_01.jpg" alt="">
				<div class="text">
					<p>創業から80有余年、小林クリエイトは自動車業界をはじめとした製造業において、創業から情報を繋ぐ領域で業務改善のお手伝いをしています。特に自動車メーカー様や部品メーカー様の小さな業務改善から物流業務の効率化など現場で抱える課題に真摯に取り組み、解決へのサポートをしています。<br>情報を伝える印刷加工製品から始まり、1999年に発行された自動車業界で利用されているJAMA・JAPIA標準帳票や現場改善の様々なソリューションまで小林クリエイトが培った課題解決のノウハウを基に貴社の業務効率化やコスト低減に繋がる改善を実現します。</p>
				</div>
				<div class="text-over">
					<p>長年培った実績を基に、自動車業界をはじめとした製造業において、<br class="d-none d-tb-inline">
						業務効率化やコスト低減などに繋がる改善など<strong>幅広く現場改善をサポート</strong><br class="d-none d-tb-inline">
						致します。</p>
				</div>
			</div>
		</div>
	</section>
	<section class="home__search strength__search">
		<div class="inner">
			<h2 class="title__type01 mt0">工程から最適なサポートをお探しの方はこちら</h2>
		</div>
		<section class="home__search-category category01">
			<div class="inner-sub">
				<ul class="items">
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/procurement_ordering/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-01.jpg);">
								<span class="text">調達・発注</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/production/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-02.jpg);">
								<span class="text">生産</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/order_shipment/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-03.jpg);">
								<span class="text">受注・出荷</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/inspection/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-04.jpg);">
								<span class="text">検査</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-05.jpg);">
								<span class="text">その他</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
				</ul>
			</div>
		</section>
		<div class="inner">
			<h2 class="title__type01 mt0">課題から最適なサポートをお探しの方はこちら</h2>
		</div>

		<section class="home__search-category category02">
			<div class="inner-sub">
				<ul class="items">
					<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-01.jpg);">
								<span class="text">リードタイム短縮・<br>社内在庫品低減</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/reduction_man-hours/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-02.jpg);">
								<span class="text">作業工数低減</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/quality_improvement_error_prevention/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-03.jpg);">
								<span class="text">品質向上・ミス防止</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/preventive_maintenance-_danger_prediction/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-04.jpg);">
								<span class="text">予防保全・危険予知</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/cost_reduction/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-05.jpg);">
								<span class="text">コスト低減</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/kanban_kaizen/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-06.jpg);">
								<span class="text">かんばん方式・<br>カイゼン向け<br>ソリューション</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>purpose/traceability/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category02-07.jpg);">
								<span class="text">トレーサビリティ</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">
							<span class="wrap" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/images/img_search_category01-05.jpg);">
								<span class="text">工程内の車両との連携・<br>輸送資材管理</span>
							</span>
							<span class="action">詳細を見る</span>
						</a></li>
				</ul>
			</div>
		</section>
	</section>
</main><!-- #main -->
<?php get_footer(); ?>