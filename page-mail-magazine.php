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
    <li class="item"><span>メールマガジン登録</span></li>
  </ul>
</nav>

<div class="page__content">
  <main id="primary" class="site-main">

    <section class="contact-container">
      <div class="lead">
        <p>メールマガジンのお申し込みありがとうございます。<br>ご登録は、下記フォームに必要事項をご記入の上、送信ボタンを押してください。</p>
        <p>メールマガジンは、受信されたメールマガジンの最下部よりいつでも配信停止処理が可能です。<br>また同業他社・個人の方のお申込みはお断りさせていただいておりますので予めご了承ください。</p>
      </div>
    </section>

    <div class="contact__flex">
      <section class="contact__novelty">
        <h2 class="contact__novelty--ttl">メールマガジン新規登録</h2>
        <div class="contact__novelty--menu">
          <table>
            <tr>
              <th>配信頻度</th>
              <td>月3～4回程度</td>
            </tr>
            <tr>
              <th>内容</th>
              <td>・現場改善に役立つノウハウ・トレンド情報・改善事例<br>（製造現場改善に役立つコラム集の掲載情報をいち早くお届け。）</td>
            </tr>
          </table>
        </div>
        <div class="contact__novelty--img">
          <p>【メールの一例】</p>
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/mail-sample.jpg" alt="メールの一例" width="592" height="601">
        </div>
      </section>
      <section class="contact__form">
        <div class="inner">
          <div class="info__form">
            <input type="hidden" id="lf_form_uid" value="11986" />
            <input type="hidden" id="lf_form_formid" value="brsYgcY9" />
            <div id="lf_form_div"></div>
            <script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
          </div>
        </div>
      </section>
    </div>

    


  </main><!-- #main -->
</div><!-- .page__content -->
<?php get_footer(); ?>