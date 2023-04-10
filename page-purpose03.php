<?php

get_header();
get_template_part('template-parts/part', 'page-headding');
get_template_part('template-parts/bnr');
get_template_part('template-parts/roundbtn');
?>

<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME"></a></li>
    <li class="item"><span><?php the_title(); ?></span></li>
  </ul>
</nav>

<main id="primary" class="site-main">
  <section class="purpose__module02">
    <div class="inner">
      <h2 class="title__type01">このような課題で困っていませんか？</h2>
      <div class="wrap">

        <div class="item">
          <div class="image"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module02_03_01.jpg" alt=""></div>
          <div class="data">
            <h3 class="title__type02">誤品が発生してしまう</h3>
            <ul class="list">
              <li>取引先毎にQR/バーコードの照合条件が<br>異なるのでシステムの統一化ができない</li>
              <li>取引先が増えるとそれに伴いシステム改修が発生</li>
            </ul>
          </div>
        </div>

        <div class="item">
          <div class="image"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module02_03_02.jpg" alt=""></div>
          <div class="data">
            <h3 class="title__type02">品質管理に不安がある</h3>
            <ul class="list">
              <li>パレタイズが複雑化し目検でのチェックでは<br>品質の維持・向上が難しい</li>
              <li>作業者の属人性に頼っているところが多く、<br>品質にバラつきがある</li>
            </ul>
          </div>
        </div>
      </div>
  </section>
  <section class="purpose__module03">
    <div class="inner">
      <h2 class="title__type01">「誤品防止システム」と「品質の標準化」で品質向上・ミス防止を実現</h2>
      <div class="lead">
        <p>「多様な納入先への品質向上」「出荷作業の標準化」を実現するために、下記の2つの点に着目する必要があります。</p>
      </div>
    </div>
    <div class="container">
      <div class="wrap">
        <div class="item">
          <div class="num">1</div>
          <h3 class="title" data-text="誤品防止システム"><span>誤品防止システム</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module03_03_01.png" alt="">
        </div>
        <div class="item">
          <div class="num">2</div>
          <h3 class="title" data-text="品質の標準化"><span>品質の標準化</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module03_03_02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="purpose__module04">
    <div class="inner">
      <h2 class="title__type01">品質を向上させ、<br>ミスをなくす方法がわからない</h2>
      <div class="container">
        <h3 class="title__type02">「誤品」に関してよくあるお困りごと</h3>
        <div class="part__block01">
          <div class="item image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/purpose__module04_03_01.jpg);">
            <div class="title">主なご相談窓口</div>
            <div class="text">
              <p>工務部</p>
            </div>
          </div>
          <div class="arrow">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item text">
            <div class="title">よくある課題</div>
            <div class="text">
              <p>取引先ごとに照合条件が異なるため<br>誤品が発生している</p>
            </div>
          </div>
        </div>
        <h3 class="title__type02">「品質の維持・向上」に関してよくあるお困りごと</h3>
        <div class="part__block01">
          <div class="item image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/purpose__module04_03_02.jpg);">
            <div class="title">主なご相談窓口</div>
            <div class="text">
              <p>工務部</p>
            </div>
          </div>
          <div class="arrow">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item text">
            <div class="title">よくある課題</div>
            <div class="text">
              <p>出荷形態の変化により<br>パレタイズが複雑化してきており、<br>目検でのチェックでは<br>品質の維持・向上が難しい</p>
            </div>
          </div>
        </div>
        <div class="part__block01">
          <div class="item image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/purpose__module04_03_03.jpg);">
            <div class="title">主なご相談窓口</div>
            <div class="text">
              <p>製造部<br>製造現場<br>品質保証部</p>
            </div>
          </div>
          <div class="arrow">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item text">
            <div class="title">よくある課題</div>
            <div class="text">
              <p>作業工程で圧力をかける作業があるが、<br>作業者の属人性に頼っており、<br>品質の担保に不安がある</p>
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
        <img loading="lazy" class="bg" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module05_01_01.jpg" alt="">
        <img loading="lazy" class="arrow" src="<?php echo get_template_directory_uri(); ?>/images/img_arrow02.svg" alt="">
      </div>
    </div>
  </section>

  <section class="purpose__module06">
    <div class="inner">
      <h2 class="title__type03">品質向上・ミス防止を実現する<br>ソリューション</h2>
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