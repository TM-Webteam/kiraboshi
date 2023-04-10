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
  <section class="process__module02">
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
  <section class="process__module03">
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
      
      <h2 class="title__type03">検査ソリューション</h2>

      <h2 id="anc01" class="title__type01">「検査」課題の解決策</h2>
      <div class="container">
        <div class="part__block01-title">
          <div class="item">お客様の課題</div>
          <div class="space"></div>
          <div class="item">当社サービスでの解決</div>
        </div>
        <div class="part__block01">
          <div class="item text">
            <div class="title">お客様の課題</div>
            <div class="text"><p>検査仕様書を<br />台帳管理（紙媒体）しているため<br />探すのに時間がかかる</p></div>
          </div>
          <div class="arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item image" style="background-image:url(https://k-cr-test.intrakun.com/wp-content/uploads/2021/02/process__module05_05_01.jpg);">
            <div class="title">当社サービスでの解決</div>
            <div class="text"><p>仕様書を探す工数低減</p></div>
          </div>
        </div>
        <div class="part__block01">
          <div class="item text">
            <div class="title">お客様の課題</div>
            <div class="text"><p>検査した結果の履歴が<br />データ化されていない</p></div>
          </div>
          <div class="arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item image" style="background-image:url(https://k-cr-test.intrakun.com/wp-content/uploads/2021/02/process__module05_05_02.jpg);">
            <div class="title">当社サービスでの解決</div>
            <div class="text"><p>誰がいつ検査したかの履歴が取得可能</p></div>
          </div>
        </div>
      </div>

      <div class="sub-section">
        <h4 class="title02">検査仕様書表示システム</h4>
        <div class="text">
          <p>日本の製造現場ではペーパーレス化が進んでおらず、検査仕様書や作業手順書などを紙で管理している企業が多いです。しかし、紙で管理することには、「<strong>検査準備の手間がかかる</strong>」「<strong>検査履歴が残らない</strong>」などの明確なデメリットがあります。</p><p>本書では、仕様書のペーパーレス化により<strong>検査・管理の手間削減</strong>と<strong>検査履歴の蓄積</strong>が実現できる検査仕様書表示システムの機能や特徴・強みなどをご紹介しております。</p><p><strong>💡　こんな方におすすめ</strong></p><p><strong>✔</strong>検査の度に仕様書を探すのが面倒だと感じている方<br /><strong>✔</strong>検査仕様書や作業手順書などのペーパレス化に興味がある方<br /><strong>✔</strong>情報の更新やメンテナンスが大変だと感じている方</p>
        </div>
        <div class="image">
          <a href="<?php echo esc_url(home_url('/')); ?>useful/specification_display_system/"><img src="https://k-cr-test.intrakun.com/wp-content/uploads/2021/04/specification_display_system.png" alt=""></a>
        </div>
        <p class="btn__type01 taC">
          <a href="<?php echo esc_url(home_url('/')); ?>useful/specification_display_system/"><span class="text dl"><span class="label">無料</span>資料ダウンロード</span><span class="effect"></span></a>
        </p>
      </div>

      <h2 id="anc02" class="title__type01">「検査」課題の解決策</h2>
      <div class="container">
        <div class="part__block01-title">
          <div class="item">お客様の課題</div>
          <div class="space"></div>
          <div class="item">当社サービスでの解決</div>
        </div>
        <div class="part__block01">
          <div class="item text">
            <div class="title">お客様の課題</div>
            <div class="text"><p>検査作業を行いながら入力を行う際、<br />一旦作業を止める必要がある</p></div>
          </div>
          <div class="arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item image" style="background-image:url(https://k-cr-test.intrakun.com/wp-content/uploads/2021/02/process__module05_05_03-1.jpg);">
            <div class="title">当社サービスでの解決</div>
            <div class="text"><p>実績入力作業を手入力から<br />音声入力にすることで作業効率向上</p></div>
          </div>
        </div>
        <div class="part__block01">
          <div class="item text">
            <div class="title">お客様の課題</div>
            <div class="text"><p>検査で手入力したデータを、<br>PC上に転記して2度手間になっている</p></div>
          </div>
          <div class="arrow">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img_arrow01.svg" alt="arrow">
          </div>
          <div class="item image" style="background-image:url(https://k-cr-test.intrakun.com/wp-content/uploads/2021/02/process__module05_05_03-1.jpg);">
            <div class="title">当社サービスでの解決</div>
            <div class="text"><p>音声入力したデータはPC上に<br>自動入力データの転記作業が不要</p></div>
          </div>
        </div>
      </div>
      
      <div class="sub-section">
        <h4 class="title02">音声認識入力システム</h4>
        <div class="text">
          <p>測定業務、荷受け、仕分け作業などがハンズフリーの音声入力を<br />利用することで、操作画面をアイズフリーで作業ができます<br /><br /></p>
        </div>
        <div class="image">
          <a href="<?php echo esc_url(home_url('/')); ?>useful/speech_recognition_system/"><img src="https://k-cr-test.intrakun.com/wp-content/uploads/2021/04/speech_recognition_system.png" alt=""></a>
        </div>
        <p class="btn__type01 taC">
          <a href="<?php echo esc_url(home_url('/')); ?>useful/speech_recognition_system/"><span class="text dl"><span class="label">無料</span>資料ダウンロード</span><span class="effect"></span></a>
        </p>
      </div>
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