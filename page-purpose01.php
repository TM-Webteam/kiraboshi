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
          <div class="image"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module02_01_01.jpg" alt=""></div>
          <div class="data">
            <h3 class="title__type02">リードタイム短縮・部品調達に関わる管理工数低減</h3>
            <ul class="list">
              <li>かんばんメンテナンスに工数がかかる</li>
              <li>発注や受入のデータ入力が手作業で非効率</li>
              <li>仕入先に指定の現品票を発行してもらいたい</li>
            </ul>
          </div>
        </div>

        <div class="item">
          <div class="image"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module02_01_02.jpg" alt=""></div>
          <div class="data">
            <h3 class="title__type02">調達部品の社内在庫品が<br>多すぎる</h3>
            <ul class="list">
              <li>生産変動に即した部品調達ができていない</li>
              <li>複数拠点・物流拠点との情報連携ができていない</li>
            </ul>
          </div>
        </div>

      </div>
  </section>
  <section class="purpose__module03">
    <div class="inner">
      <h2 class="title__type01">「かんばん方式」と「発注情報の電子化」で<br>リードタイム短縮と社内在庫品低減を実現</h2>
      <div class="lead">
        <p>「社内在庫品低減」や「リードタイム短縮」を実現するために、下記の2つの点に着目する必要があります。</p>
      </div>
    </div>
    <div class="container">
      <div class="wrap">
        <div class="item">
          <div class="num">1</div>
          <h3 class="title" data-text="かんばん方式"><span>かんばん方式</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module03_01_01.png" alt="">
        </div>
        <div class="item">
          <div class="num">2</div>
          <h3 class="title" data-text="発注情報の電子化"><span>発注情報の電子化</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/purpose__module03_01_02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="purpose__module04">
    <div class="inner">
      <h2 class="title__type01">部品や資材の調達で<br>どのように管理・運用すればよいかわからない</h2>
      <div class="container">
        <h3 class="title__type02">「リードタイム」に関してよくあるお困りごと</h3>
        <div class="part__block01">
          <div class="item image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/purpose__module04_01_01.jpg);">
            <div class="title">主なご相談窓口</div>
            <div class="text">
              <p>工務部<br>生産管理部</p>
            </div>
          </div>
          <div class="arrow">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item text">
            <div class="title">よくある課題</div>
            <div class="text">
              <p>リターナブルかんばんを用いた<br>かんばん調達を行っており、<br>発注情報の電子化ができないことや<br>かんばんのメンテナンスに工数がかかる</p>
            </div>
          </div>
        </div>
        <h3 class="title__type02">「社内在庫品」に関してよくあるお困りごと</h3>
        <div class="part__block01">
          <div class="item image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/purpose__module04_01_02.jpg);">
            <div class="title">主なご相談窓口</div>
            <div class="text">
              <p>工務部<br>生産管理部</p>
            </div>
          </div>
          <div class="arrow">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item text">
            <div class="title">よくある課題</div>
            <div class="text">
              <p>生産計画からの計画発注を行っており<br>生産変動に即した部品調達が<br>できていない</p>
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
      <h2 class="title__type03">リードタイムの短縮・社内在庫品の低減<br>ソリューション</h2>
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