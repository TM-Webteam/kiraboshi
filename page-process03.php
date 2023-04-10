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
      <li class="ancBox__list"><a href="#anc01">誤品チェック／<br>実績収集システム</a></li>
      <li class="ancBox__list"><a href="#anc02">トヨタWG共通SDI対応<br>出荷システム</a></li>
      <li class="ancBox__list"><a href="#anc03">チケット仕分<br>システム</a></li>
      <li class="ancBox__list"><a href="#anc04">パレタイズ照合<br>システム</a></li>
    </ul>
  </div>

  <section id="sec01" class="process__module02">
    <div class="inner">
      <h2 class="title__type01"><span class="sub">ミスのない受注・出荷を実施するために</span>受注・出荷で求められる2つのポイント</h2>
    </div>
    <div class="container">
      <div class="wrap">
        <div class="item">
          <div class="num">1</div>
          <h3 class="title" data-text="煩雑作業での&#xa;ミス防止"><span>煩雑作業での<br>ミス防止</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_03_01.png" alt="">
        </div>
        <div class="item">
          <div class="num">2</div>
          <h3 class="title" data-text="受注・出荷の&#xa;システム化"><span>受注・出荷の<br>システム化</span></h3>
          <img loading="lazy" class="image" src="<?php echo get_template_directory_uri(); ?>/images/process__module02_03_02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="sec02" class="process__module03">
    <div class="inner">
      <h2 class="title__type01">「受注・出荷」でよくあるお困りごと</h2>

      <div class="container">
        <a href="#anc01" class="item">
          <h3 class="title">顧客に対して<br>誤品が発生している</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_03_01.svg" alt="">
          </div>
        </a>
        <a href="#anc02" class="item">
          <h3 class="title">複数社のEDIに対応をしたいが、<br>多画面多端末状況になっている</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_03_02.svg" alt="">
          </div>
        </a>
        <a href="#anc03" class="item">
          <h3 class="title">納品帳票の仕分け単位が細かく、<br>納品帳票を顧客ごとに<br>仕分ける工数が増大している</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_03_03.svg" alt="">
          </div>
        </a>
        <a href="#anc04" class="item">
          <h3 class="title">出荷形態の変化によりパレタイズが<br>複雑化してきており、目検でのチェックでは<br>品質の担保をするだけでなく、<br>全体的なコストの低減が難しい</h3>
          <div class="image">
            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/process__module03_03_04.svg" alt="">
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