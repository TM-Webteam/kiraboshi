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
get_header();
get_template_part('template-parts/part', 'page-headding');
?>

<nav class="breadcrumb">
	<ul class="items">
		<li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico_home01.svg" alt="HOME" width="15" height="13"></a></li>
		<li class="item"><span>お問合せ・見積り依頼</span></li>
	</ul>
</nav>

<div class="page__content">
	<main id="primary" class="site-main">

    <section class="contact__list">
      <dl class="contact__list--box">
        <dt class="ttl">以下のようなお悩み、課題があれば<br class="sp-only">お気軽にご相談ください。</dt>
        <dd class="txt">
          <ul>
            <li>【よくあるお悩み】</li>
            <li>現場業務の効率化のためにRFIDの導入を検討している</li>
            <li>最適な金型管理の方法を模索している</li>
            <li>パレット・通い箱の所在把握がしたい</li>
            <li>検査業務のデータ入力を効率化したい</li>
            <li>現場で使用する用紙・ラベル・プリンタのコスト低減を図りたい</li>
          </ul>
        </dd>
        <dd class="txt">
          <ul>
            <li>【よくあるご相談内容】</li>
            <li>製品・ソリューションについて具体的に知りたい<br>（費用感、事例、デモ実施、導入イメージ）</li>
            <li>まずは自社の現場改善について直接相談したい</li>
          </ul>
        </dd>
      </dl>
    </section>

		<section class="contact__form full">
			<div class="inner">
				<div class="info__form">
					<input type="hidden" id="lf_form_uid" value="11986" />
					<input type="hidden" id="lf_form_formid" value="2aOTjc9i" />
					<div id="lf_form_div"></div>
					<script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
				</div>
			</div>

		</section>


	</main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); ?>