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
          <div class="image"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module02_04_01.jpg" alt=""></div>
          <div class="data">
            <h3 class="title__type02">通い箱やパレットのような<br>循環輸送資材の管理が困難</h3>
            <ul class="list">
              <li>循環輸送資材を毎年購入しているものの、<br>不足するなど、適切な管理ができない</li>
              <li>循環資材の入出庫データが取得できない</li>
              <li>循環資材がどこにどれだけあるのか<br>把握できていない</li>
            </ul>
          </div>
        </div>

        <div class="item">
          <div class="image"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module02_04_02.jpg" alt=""></div>
          <div class="data">
            <h3 class="title__type02">品質チェックに費用がかかる</h3>
            <ul class="list">
              <!-- <li>実績データの照合に費用がかさむ</li> -->
              <li>取引先毎に異なる照合条件に合わせた<br>誤品チェックシステムの開発に費用がかさむ</li>
            </ul>
          </div>
        </div>

      </div>
  </section>
  <section class="purpose__module03">
    <div class="inner">
      <h2 class="title__type01">「循環輸送資材の管理」と「品質チェック」<br>改善でコスト低減を実現</h2>
      <div class="lead">
        <p>「コスト低減」を実現するために、下記の2つの点に着目する必要があります。</p>
      </div>
    </div>
    <div class="container">
      <div class="wrap">
        <div class="item">
          <div class="num">1</div>
          <h3 class="title" data-text="循環輸送資材の管理"><span>循環輸送資材の管理</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module03_04_01.png" alt="">
        </div>
        <div class="item">
          <div class="num">2</div>
          <h3 class="title" data-text="品質チェック"><span>品質チェック</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module03_04_02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="purpose__module04">
    <div class="inner">
      <h2 class="title__type01">「循環輸送資材の管理」や「品質チェック」で<br>どのようにコスト低減をすればよいかわからない</h2>
      <div class="container">
        <h3 class="title__type02">「循環輸送資材の管理」に関してよくあるお困りごと</h3>
        <div class="part__block01">
          <div class="item image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/purpose__module04_04_01.jpg);">
            <div class="title">主なご相談窓口</div>
            <div class="text">
              <p>物流管理部門<br>生産管理部</p>
            </div>
          </div>
          <div class="arrow">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item text">
            <div class="title">よくある課題</div>
            <div class="text">
              <p>循環資材の入出庫データの<br>取得ができずに、<br>どこにどれだけ循環資材があるのか<br>把握できていない</p>
            </div>
          </div>
        </div>
        <h3 class="title__type02">「品質チェック時の費用」に関してよくあるお困りごと</h3>
        <div class="part__block01">
          <div class="item image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/purpose__module04_04_02.jpg);">
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
              <p>取引先毎に異なる照合条件に合わせた<br>誤品チェックシステムの開発に<br>費用がかさむ</p>
            </div>
          </div>
        </div>
        <h3 class="title__type02">「二次元コードを読取する業務」に関してよくあるお困りごと</h3>
        <div class="part__block01">
          <div class="item image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/purpose__module04_02_02.jpg);">
            <div class="title">主なご相談窓口</div>
            <div class="text">
              <p>生産管理・工務部</p>
            </div>
          </div>
          <div class="arrow">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item text">
            <div class="title">よくある課題</div>
            <div class="text">
              <p>多種の2次元コードを読取したいが、<br>プログラム開発が必要</p>
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
      <h2 class="title__type03">コスト低減を実現する<br>ソリューション</h2>
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