<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kcr
 */

?>

<footer class="site-footer">

  <?php
  if (is_front_page() && is_home()) :
  ?>
    <div class="site-footer__contact">
      <div class="inner taC">
        <h2 class="title__type01">お問合せ・ご相談</h2>
        <p>小林クリエイトのサービス・製品に関するお問い合わせはお気軽にご相談ください。</p>
        <div class="wrap">
          <h3>業務改善ついて詳しく知りたい方はこちら</h3>
          <div class="btn-set">
            <p class="btn__type01 mail">
              <a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">お問合せはこちら</span><span class="effect"></span></a>
            </p>
            <p class="btn__type01--white book">
              <a href="<?php echo esc_url(home_url('/')); ?>useful/"><span class="text">お役立ち資料はこちら</span><span class="effect"></span></a>
            </p>
          </div>
        </div>
      </div>
    </div><!-- .site-footer__contact -->
  <?php endif; ?>
  <nav class="nav__f-nav">
    <div class="back-to-top"></div>
    <div class="inner">
      <div class="col">
        <h2>コンテンツ</h2>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>useful/">お役立ち資料</a></li>
        </ul>
      </div>
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
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>purpose/shortening_lead_time_reducing_in-house_inventory/">リードタイム短縮・社内在庫品低減</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>purpose/reduction_man-hours/">作業工数低減</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>purpose/quality_improvement_error_prevention/">品質向上・ミス防止</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>purpose/preventive_maintenance-_danger_prediction/">予防保全・危険予知</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>purpose/cost_reduction/">コスト低減</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>purpose/kanban_kaizen/">かんばん方式・カイゼン向けソリューション</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>purpose/traceability/">トレーサビリティ</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>process/vehicle_transportation_management/">工程内の車両との連携・輸送資材管理</a></li>
        </ul>
      </div>
      <div class="col">
        <h2>ソリューション</h2>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>mold_management/">金型管理ソリューション</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>rfid_solution/">RFIDソリューション</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>paper_media_solution/">ペーパーメディアソリューション</a></li>
        </ul>
      </div>
      <div class="col">
        <h2>関連情報</h2>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>strength/">小林クリエイトの強み</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>case/">実績・事例</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>news/">ニュース・新着情報</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>contact/">お問合せ</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>mail-magazine/">メールマガジン登録</a></li>
        </ul>
      </div>
      <div class="col">
        <h2>その他</h2>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>sitemap/">サイトマップ</a></li>
          <li><a href="https://k-cr.jp/privacy/" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a></li>
          <li><a href="https://k-cr.jp/corporate/outline/" target="_blank" rel="noopener noreferrer">会社概要</a></li>
        </ul>
        <p class="footer_txt">※QRコードは（株）デンソーウェーブの登録商標です。<br>
          その他、当Webサイトに記載されている企業・団体・製品・サービス等の表示は
          各社の登録商標であることがあります。</p>
      </div>
    </div>
  </nav><!-- .nav__f-nav -->
  <div class="site-footer__info">
    <p class="copyright">&copy; <?php echo date('Y'); ?> Kobayashi Create Co.,Ltd.</p>
  </div><!-- .site-footer__info -->

</footer><!-- .site-footer -->
</div><!-- #content -->

</div><!-- #page -->
<?php wp_footer(); ?>
<!-- k-cr.jp に対する OneTrust Cookie 同意通知の始点 -->
<script src="https://cdn-au.onetrust.com/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="ac6c6fd1-4144-469c-bf5b-a3d5c1afdc08"></script>
<script type="text/javascript">
  function OptanonWrapper() {}
</script>
<!-- k-cr.jp に対する OneTrust Cookie 同意通知の終点 -->
<script type="text/javascript">
  var _trackingid = 'LFT-11986-1';

  (function() {
    var lft = document.createElement('script');
    lft.type = 'text/javascript';
    lft.async = true;
    lft.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//track.list-finder.jp/js/ja/track.js';
    var snode = document.getElementsByTagName('script')[0];
    snode.parentNode.insertBefore(lft, snode);
  })();
</script>
<script src="<?php echo assets_path() ?>js/all.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<!-- slickのJavaScript -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
  jQuery('#slick').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    dots: false,
  });

  jQuery(function() {
    jQuery('.related__box_title').matchHeight();
  });

  jQuery(function() {
    var bnr = jQuery('.bnrArea');

    jQuery(window).on('load scroll', function() {
      if (jQuery(this).scrollTop() > 1000) {
        bnr.addClass('active');
      } else {
        bnr.removeClass('active');
      }
    });

    jQuery(window).on('load scroll', function() {
      var height = jQuery(document).height(),
        position = window.innerHeight + jQuery(window).scrollTop(),
        footer = jQuery('footer').height();
      if (height - position < footer) {
        bnr.addClass('stop');
      } else {
        bnr.removeClass('stop');
      }
    });
  });

  AOS.init({
    offset: 120,　//初期値
    delay: 0,　//初期値
    anchor: 'top-bottom', //初期値
    duration: 800,　//初期値　400
    easing: 'ease',　//初期値
    once: true,　//初期値　false
  });
</script>
</body>

</html>