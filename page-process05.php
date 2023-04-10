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
      <li class="ancBox__list"><a href="#sec02">よくある<br>お困りごと</a></li>
      <li class="ancBox__list"><a href="#anc01">「RFID」で工程内の<br>車両との連携</a></li>
      <li class="ancBox__list"><a href="#anc02">RePaX</a></li>
    </ul>
  </div>

  <section id="sec01" class="process__module02">
    <div class="inner">
      <h2 class="title__type01"><span class="sub">車両・輸送資材管理を実践するために</span>工程内の車両との連携・輸送資材管理で求められる2つのポイント</h2>
      <!-- <div class="lead">
        <p>受注・出荷で求められる2つのポイント</p>
      </div> -->
    </div>
    <div class="container">
      <div class="wrap">
        <div class="item">
          <div class="num">1</div>
          <h3 class="title" data-text="管理工数の&#xa;低減"><span>管理工数の<br>低減</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_05_01.png" alt="">
        </div>
        <div class="item">
          <div class="num">2</div>
          <h3 class="title" data-text="輸送資材の&#xa;トレーサビリティ"><span>輸送資材の<br>トレーサビリティ</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_05_02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="sec02" class="process__module03">
    <div class="inner">
      <h2 class="title__type01">「工程内の車両との連携・輸送資材管理」でよくあるお困りごと</h2>

      <div class="container">
        <a href="#anc01" class="item">
          <h3 class="title">検査時に車両からの乗り降りが発生する</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_05_01.svg" alt="">
          </div>
        </a>
        <a href="#anc01" class="item">
          <h3 class="title">車両の検査をする際に検査設備を動かすのに<br>工数がかかる</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_05_02.svg" alt="">
          </div>
        </a>
        <a href="#anc02" class="item">
          <h3 class="title">通い箱やパレットのような循環輸送資材の<br>保有数・保有先がわからない</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_05_03.svg" alt="">
          </div>
        </a>
        <a href="#anc02" class="item">
          <h3 class="title">輸送先で紛失している可能性もあり<br>余分なコストがかかっている</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_05_04.svg" alt="">
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
        <h2 class="title__type01 mt0 mb10">ご相談・お問い合わせ</h2>
        <div class="lead">
          <p>業務改善でお困りのことがございましたら、<br class="d-none d-pc-inline">まずはお気軽にご相談ください。</p>
          <p>弊社のプロフェショナルが課題・悩みをヒアリングして、<br class="d-none d-pc-inline">最適なご提案をさせていただきます。</p>
        </div>
        <p class="btn__type01 mail">
          <a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">ご相談・お問い合わせ</span><span class="effect"></span></a>
        </p>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/part', 'blog-list'); ?>
  <?php get_template_part('template-parts/part', 'wp'); ?>
</main><!-- #main -->
<?php get_footer(); ?>