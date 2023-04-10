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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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