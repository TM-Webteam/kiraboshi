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
      <li class="ancBox__list"><a href="#sec01">求められる<br>「2つのポイント」</a></li>
      <li class="ancBox__list"><a href="#sec02">連携でよくある<br>お困りごと</a></li>
      <li class="ancBox__list"><a href="#anc01">検査仕様書表示<br>システム</a></li>
      <li class="ancBox__list"><a href="#anc02">音声認識入力<br>システム</a></li>
    </ul>
  </div>

  <section id="sec01" class="process__module02">
    <div class="inner">
      <h2 class="title__type01"><span class="sub">検査における無駄を減らすために</span>検査で求められる2つのポイント</h2>
    </div>
    <div class="container">
      <div class="wrap">
        <div class="item">
          <div class="num">1</div>
          <h3 class="title" data-text="検査業務の効率向上"><span>検査業務の効率向上</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_04_01.png" alt="">
        </div>
        <div class="item">
          <div class="num">2</div>
          <h3 class="title" data-text="検査履歴の管理"><span>検査履歴の管理</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_04_02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="sec02" class="process__module03">
    <div class="inner">
      <h2 class="title__type01">「検査」の連携でよくあるお困りごと</h2>

      <div class="container">
        <a href="#anc01" class="item">
          <h3 class="title">検査仕様書を台帳管理（紙媒体）しているため<br>探すのに時間がかかる</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_04_01.svg" alt="">
          </div>
        </a>
        <a href="#anc01" class="item">
          <h3 class="title">検査した結果の履歴がデータ化されていない</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_04_02.svg" alt="">
          </div>
        </a>
        <a href="#anc02" class="item">
          <h3 class="title">検査作業を行いながら入力を行う際、<br>一旦作業を止める必要がある</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_04_03.svg" alt="">
          </div>
        </a>
        <a href="#anc02" class="item">
          <h3 class="title">検査で手入力したデータを、PC上に転記して<br>2度手間になっている。</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_04_04.svg" alt="">
          </div>
        </a>
      </div>

    </div>
  </section>

  <section class="process__module04">
    <div class="inner">
      <h2 class="title__type01">受注・調達・生産・出荷に至るまで<br>各工程における業務改善を実現</h2>
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