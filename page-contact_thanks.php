<?php
/*
	Template Name: お問合せ　完了画面
*/
get_header();

get_template_part( 'template-parts/part', 'page-headding' );

?>

<nav class="breadcrumb">
  <ul class="items">
  <li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico_home01.svg" alt="HOME"></a></li>
	<li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">お問合せ・見積り依頼</a></li>
	<li class="item"><span>送信完了</span></li>
  </ul>
</nav>
<div class="page__content">
	<main id="primary" class="site-main">
	<section class="thanks contact">

	  <h1>お問合せ・お見積り依頼いただきまして<br>誠にありがとうございます</h1>
	  <p>後日、弊社担当者よりご連絡させていただきます。</p>
	  <p class="btn__type01--back btn__type01--center">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="text">トップページへ戻る</span><span class="effect"></span></a>
	  </p>
		</section>
	
    </main><!-- #main -->
</div><!-- .page__content -->

<?php get_footer(); ?>
