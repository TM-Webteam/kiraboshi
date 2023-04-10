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


  <div class="ancwrap">
    <ul class="ancBox">
      <li class="ancBox__list"><a href="#sec01">着目すべき<br>「2つの連携」</a></li>
      <li class="ancBox__list"><a href="#sec02">連携でよくある<br>お困りごと</a></li>
      <li class="ancBox__list"><a href="#anc01">部品／<br>資材調達システム</a></li>
    </ul>
  </div>
  
  <section id="sec01" class="process__module02">
    <div class="inner">
      <h2 class="title__type01"><span class="sub">適切な在庫運用・管理を実施するために</span>調達・発注で求められる2つの連携</h2>
      <div class="lead">
        <p>「社内在庫品の低減」や「リードタイムの短縮」を実現するために、下記の2つの点に着目する必要があります。</p>
      </div>
    </div>
    <div class="container">
      <div class="wrap">
        <div class="item">
          <div class="num">1</div>
          <h3 class="title" data-text="協力会社との&#xa;連携"><span>協力会社との<br>連携</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_01_01.png" alt="">
        </div>
        <div class="item">
          <div class="num">2</div>
          <h3 class="title" data-text="複数工場での&#xa;情報連携"><span>複数工場での<br>情報連携</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_01_02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="sec02" class="process__module03">
    <div class="inner">
      <h2 class="title__type01">「調達・発注」の連携でよくあるお困りごと</h2>

      <div class="container">
        <a href="#anc01" class="item">
          <h3 class="title">生産変動に即した<br>部品調達ができていない</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_01_01.svg" alt="">
          </div>
        </a>
        <a href="#anc01" class="item">
          <h3 class="title">発注や受入のデータ入力が<br>手作業で非効率である</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_01_02.svg" alt="">
          </div>
        </a>
        <a href="#anc01" class="item">
          <h3 class="title">仕入先で指定の現品票を発行してもらいたい</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_01_03.svg" alt="">
          </div>
        </a>
        <a href="#anc01" class="item">
          <h3 class="title">導入費用をかけずに<br>複数工場での情報連携を行いたい</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_01_04.svg" alt="">
          </div>
        </a>
      </div>

    </div>
  </section>

  <section class="process__module04">
    <div class="inner">
      <h2 class="title__type01">受注・調達・生産・出荷に至るまで各工程における業務改善を実現</h2>
      <?php get_template_part('template-parts/part', 'process-wp'); ?>
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