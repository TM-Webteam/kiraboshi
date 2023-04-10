<?php
/*
  Template Name: お役立ち資料 サンクス
*/
get_header();

get_template_part( 'template-parts/part', 'page-headding' );

?>

<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ico_home01.svg" alt="HOME"></a></li>
    <li class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>useful/">お役立ち資料</a></li>
    <li class="item"><span>ダウンロード申込完了</span></li>
  </ul>
</nav>

<div class="page__content">
	<main id="primary" class="site-main">
    <section class="thanks wp">
    <h1>資料ダウンロードいただきありがとうございました。</h1>
    <p>
    ご入力いただきましたメールアドレス宛に<br>資料のダウンロード用URLを送信させていただきました。
    </p>
    <p><a href="<?php echo esc_url(home_url('/')); ?>contact/" class="bnr-thanks"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bnr-thanks.jpg" alt="現場の業務改善について、困りごと・悩みの相談もする"></a></p>
	  <p class="btn__type01--back btn__type01--center">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="text">トップページへ戻る</span><span class="effect"></span></a>
	  </p>

    </section>

	</main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); ?>
