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
      <li class="ancBox__list"><a href="#sec01">求められる<br>「2つの改善」</a></li>
      <li class="ancBox__list"><a href="#sec02">よくある<br>お困りごと</a></li>
      <li class="ancBox__list"><a href="#anc02">音声認識入力<br>システム</a></li>
      <li class="ancBox__list"><a href="#anc03">RFID検知信号灯鳴動<br>システム</a></li>
      <li class="ancBox__list"><a href="#anc04">RFID<br>探索アプリ</a></li>
    </ul>
  </div>

  <section id="sec01" class="process__module02">
    <div class="inner">
      <h2 class="title__type01"><span class="sub">最適な生産現場を実現するために</span>生産現場で求められる2つの改善</h2>
    </div>
    <div class="container">
      <div class="wrap">
        <div class="item">
          <div class="num">1</div>
          <h3 class="title" data-text="管理の改善"><span>管理の改善</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_02_01.png" alt="">
        </div>
        <div class="item">
          <div class="num">2</div>
          <h3 class="title" data-text="作業の標準化"><span>作業の標準化</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_02_02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="sec02" class="process__module03">
    <div class="inner">
      <h2 class="title__type01">「生産」でよくあるお困りごと</h2>

      <div class="container">
        <a href="#anc01" class="item">
          <h3 class="title">材料の先入先出の管理ができてない</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_02_01.svg" alt="">
          </div>
        </a>
        <a href="#anc02" class="item">
          <h3 class="title">生産実績入力・検査実績入力を<br>行う工数削減をしたい</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_02_02.svg" alt="">
          </div>
        </a>
        <a href="#anc03" class="item">
          <h3 class="title">フォークリフトとの接触など、<br>事故が発生してしまう</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_02_03.svg" alt="">
          </div>
        </a>
        <a href="#anc04" class="item">
          <h3 class="title">入庫または工程間で扱う<br>製品を探すのに時間がかかる</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_02_04.svg" alt="">
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