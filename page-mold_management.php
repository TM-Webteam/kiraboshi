<?php
global $body_class;
$body_class = '';
/*
Template Name: 金型管理ソリューション
*/
?>

<?php get_header();
get_template_part('template-parts/roundbtn', 'mold');
?>

<main id="add" class="mold">

  <section class="hero pos">
    <div class="containers">
      <h1 class="ttl-primary">金型管理のデータ化を実現『金型管理ソリューション』</h1>
      <div class="ttl-sub">紙で管理している金型台帳の煩わしい作業を効率化！</div>

      <div class="flex jcA">
        <div class="richBtn">
          <div class="richBtn__ttl"><span>3</span>分でわかる！資料をプレゼント</div>
          <p class="btn__type01 taC">
            <a href="#sec-form">
              <span class="richBtn__small">金型管理のデータ化の実現方法が分かる！</span><br>
              <span class="text"><span class="label">無料</span>カタログ資料をもらう</span>
              <span class="effect"></span>
            </a>
          </p>
          <div class="richBtn__txt">お申込み後、リアルタイムでお送りいたします！</div>
        </div>
        <div class="richBtn">
          <div class="richBtn__ttl">ご相談はお気軽に！</div>
          <p class="btn__type01--white taC">
            <a href="<?php echo esc_url(home_url('/')); ?>contact/" class="core">
              <span class="text">WEB相談・問合せする</span>
              <span class="effect"></span>
            </a>
          </p>
        </div>
      </div>

    </div>
  </section>

  <nav class="breadcrumb">
    <ul class="items">
      <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ico_home01.svg" alt="HOME" width="15" height="13"></a></li>
      <li class="item"><span>金型管理のデータ化を実現『金型管理ソリューション』</span></li>
    </ul>
  </nav>

  <section class="intro">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">金型管理の効率化を実現させるための<br>運用をサポート致します！</span></h2>
      <div class="lead">小林クリエイトは、創業から80有余年、自動車業界をはじめとした製造業において、<br>業務効率化やコスト低減などに繋がる現場改善をサポートしています。</div>
    </div>
  </section>
  <section class="doc">
    <div class="containers">
      <h2 class="taC"><span class="title__type01"><span class="txt-anim">よくある<b class="cR">3つの課題</b>と<b class="cB">解決策</b>を<br class="sp-only">まとめた資料をご進呈</span></h2>
      <a href="<?php echo esc_url(home_url('/')); ?>useful/mold_management/" class="flex aiC card">
        <figure class="card__img"><img src="<?php echo assets_path() ?>img/rfid-sol/img-doc.jpg" alt=""></figure>
        <summary class="card__box">
          <div class="card__box--txt">本書では、金型管理でよくある3つの課題と解決のために押さえておきたいポイントを解説。理想の金型管理を実現するソリューションをご紹介します。</div>
          <div class="card__box--btn"><span>詳細はこちら</span></div>
        </summary>
      </a>
    </div>
  </section>
  <section class="task">
    <div class="containers">
      <h2 class="ttl-secondary">金型の管理において<br>このような課題を抱えていませんか？</h2>
      <ul class="flex task__item">
        <li class="task__list">
          <a href="#anc01" class="task__list--box sp-flex">
            <div class="task__list--ttl"><span>課題1</span></div>
            <figure><img src="<?php echo assets_path() ?>img/mold/img-task01.jpg" alt="金型の所在や実績の管理が担当者依存となっている"></figure>
            <summary>金型の所在や実績の管理が<br>担当者依存となっている</summary>
          </a>
        </li>
        <li class="task__list">
          <a href="#anc03" class="task__list--box sp-flex">
            <div class="task__list--ttl"><span>課題2</span></div>
            <figure><img src="<?php echo assets_path() ?>img/mold/img-task02.jpg" alt="ショット数管理ができておらず、メンテナンスのタイミングが分からない"></figure>
            <summary>ショット数管理ができておらず、メンテナンスのタイミングが<br class="pc-only">分からない</summary>
          </a>
        </li>
        <li class="task__list">
          <a href="#anc03" class="task__list--box sp-flex">
            <div class="task__list--ttl"><span>課題3</span></div>
            <figure><img src="<?php echo assets_path() ?>img/mold/img-task03.jpg" alt="金型台帳への記録を手入力で行っており、手間がかかる"></figure>
            <summary>金型台帳への記録を手入力で<br>行っており、手間がかかる</summary>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="feature">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">『ぶっぴんさん for 金型』を活用すれば、<br class="pc-only">金型管理を効率化できます！</span></h2>
      <div id="anc01" class="card">
        <div class="card__ttl">担当者に依存せずに<br class="sp-only">金型の所在管理をする方法</div>
        <h3 class="ttl-tertiary">RFID・二次元コードの導入で所在管理を実現</h3>
        <div class="lead">ぶっぴんさん for 金型なら、金型の持出時や返却時に使用場所・保管場所を登録することで、<br class="pc-only">PC・タブレット上で金型の所在確認が可能です。</div>
        <figure class="card__img">
          <img src="<?php echo assets_path() ?>img/mold/img-feature01.png" alt="所在をタブレットでみえる化" class="pc-only">
          <img src="<?php echo assets_path() ?>img/mold/img-feature01-sp.png" alt="所在をタブレットでみえる化" class="sp-only">
        </figure>
      </div>
      <div id="anc03" class="card">
        <div class="card__ttl">手作業による抜け漏れ防止や<br class="sp-only">煩雑な記録作業を効率化する方法</div>
        <h3 class="ttl-tertiary">ショット数の実績をシステム上で記録でき、台帳入力も効率化</h3>
        <div class="lead">ぶっぴんさん for 金型なら、ショット数の実績管理と台帳記録をハンディターミナルで行うことで、<br class="pc-only">実績入力の効率化・抜け漏れを防止します。</div>
        <figure class="card__img">
          <img src="<?php echo assets_path() ?>img/mold/img-feature02.png" alt="金型のシリアルNoを照会・ショット数入力・システムで自動で台帳記録" class="pc-only">
          <img src="<?php echo assets_path() ?>img/mold/img-feature02-sp.png" alt="金型のシリアルNoを照会・ショット数入力・システムで自動で台帳記録" class="sp-only">
        </figure>
      </div>
    </div>
  </section>

  <section class="material">
    <div class="containers">
      <div class="flex jcC aiC">
        <figure class="material__img"><img src="<?php echo assets_path() ?>img/mold/img-wp.png" alt=""></figure>
        <summary class="material__box">
          <div class="material__box--txt">金型管理のデータ化を<br>実現するための方法が<span>3</span>分でわかる！</div>
          <div class="material__box--ttl">ぶっぴんさんfor金型</div>
          <p class="btn__type01">
            <a href="#sec-form">
              <span class="text"><span class="label">無料</span>資料ダウンロード</span>
              <span class="effect"></span>
            </a>
          </p>
        </summary>
      </div>
    </div>
  </section>



  <section class="brand end">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">『ぶっぴんさん for 金型』 <br class="sp-only"><b>3</b>つの特長</span></h2>
      <div class="flex jcA aiC brand__intro">
        <div class="lead">ぶっぴんさんfor金型は、リーダーによる読み取りだけで、紙の記入やPCへの入力がなくとも金型の貸出情報を管理できます！<br><br>また、お使いのPC・タブレットから、「金型毎の詳細な状況」や、「金型の情報共有」、「貸出状況のみのデータ出力」も簡単にできるなど多くのメリットがあります。</div>
        <figure class="lead pc-only"><img src="<?php echo assets_path() ?>img/mold/img-brand.jpg" alt="メリット"></figure>
      </div>
      <ul class="flex">
        <li class="card">
          <div class="card__ttl core"><span class="num01">RFタグを読み取るだけの<br class="pc-only">簡単貸出登録</span></div>
          <summary class="card__box">
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/mold/icon-brand01.svg" alt="RFタグを読み取るだけの簡単貸出登録"></figure>
            <div class="card__box--txt">金型の貸出・返却作業は、RFタグ・二次元コードの読み取りだけで、紙の記入やパソコンへの別途入力も不要です。</div>
          </summary>
        </li>
        <li class="card">
          <div class="card__ttl core"><span class="num02">シンプルで見やすい操作画面</span></div>
          <summary class="card__box">
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/mold/icon-brand02.svg" alt="RFタグを読み取るだけの簡単貸出登録"></figure>
            <div class="card__box--txt">金型毎のショット数実績、貸出状況、在庫状況など、詳細情報をシンプルな画面で確認可能です。</div>
          </summary>
        </li>
        <li class="card">
          <div class="card__ttl core"><span class="num03">使用状況/貸出状況の<br class="pc-only">データ出力が可能</span></div>
          <summary class="card__box">
            <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/mold/icon-brand03.svg" alt="RFタグを読み取るだけの簡単貸出登録"></figure>
            <div class="card__box--txt">金型の貸出状況などを簡単にデータ出力できるため、返却率の悪い工程のリストアップや返却催促ができます。</div>
          </summary>
        </li>
      </ul>
      <div class="brand__ttl">「二次元コード」もしくは<br class="sp-only">「RFID」どちらも選べる！</div>
      <figure class="brand__img">
        <img src="<?php echo assets_path() ?>img/mold/img-brand02.jpg" alt="「二次元コード」もしくは「RFID」どちらも選べる！" class="pc-only">
        <img src="<?php echo assets_path() ?>img/mold/img-brand02-sp.jpg" alt="「二次元コード」もしくは「RFID」どちらも選べる！" class="sp-only">
      </figure>
    </div>
  </section>

  <section id="DL" class="case__module05 wp__content">
    <div id="sec-form" class="inner">
      <h2 class="title__type01 mt0">サービスカタログダウンロード</h2>
    </div>
    <?php
    $args      = array(
      'name'      => 'buppinsan_for_kanagata',
      'post_type' => 'useful',
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) :
        $the_query->the_post();
    ?>
        <article class="flex wp__container">
          <h2 class="wp__main-title">
            <?php echo wp_strip_all_tags(get_the_title()); ?>
          </h2>
          <section class="wp__main">
            <div class="wp__main-image mb20"><img loading="lazy" src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt=""></div>
            <div class="pc-only">
              <div class="wp__main-copy"><?php echo wp_strip_all_tags(CFS()->get('copy')); ?></div>
              <div class="wp__main-lead">
                <?php echo wp_kses_post(CFS()->get('lead_sentence')); ?>
              </div>
              <div class="wp__main-toc">
                <div class="title">ダウンロードできる資料の内容</div>
                <?php
                $material_detail = CFS()->get('material_detail');
                ?>
                <div class="inner">
                  <?php foreach ($material_detail as $material_value) : ?>
                    <?php foreach ($material_value['paragraph'] as $paragraph) : ?>
                      <p class="item-title">
                        <?php echo esc_html($paragraph['title']); ?>
                      </p>
                      <ul class="items">
                        <?php foreach ($paragraph['caption'] as $caption) : ?>
                          <li>
                            <?php echo esc_html($caption['caption_title']); ?>
                          </li>
                        <?php endforeach ?>
                      </ul>
                    <?php endforeach ?>
                  <?php endforeach ?>
                </div>
              </div>
            </div>

            <?php
            $whitepaper_rec = CFS()->get('whitepaper_rec');
            if ($whitepaper_rec) :
              $bnr_class = 'type_';
            ?>
              <div class="wp__rec">
                <h2 class="title">その他おすすめ資料</h2>
                <?php
                foreach ($whitepaper_rec as $whitepaper_id) :
                  $material_image_type = CFS()->get('material_image_type', $whitepaper_id);
                  if ($material_image_type) {
                    foreach ($material_image_type as $key => $value) {
                      $bnr_class .= $key;
                    }
                  }
                ?>
                  <div class="wp__rec-item <?php echo esc_attr($bnr_class); ?>">
                    <div class="image"> <img loading="lazy" src="<?php echo esc_url(CFS()->get('material_image', $whitepaper_id)); ?>" alt=""> </div>
                    <div class="summary">
                      <div class="text fs-12rem">
                        <?php echo wp_kses(get_the_title($whitepaper_id), $allowed_html); ?>
                      </div>
                      <!-- <div class="lead">
												<?php echo wp_kses(CFS()->get('lead_sentence', $whitepaper_id), $allowed_html); ?>
											</div> -->
                    </div>
                  </div>
                  <p class="btn__type01--white btn__type01--center"> <a href="<?php echo esc_url(get_permalink($whitepaper_id)); ?>"><span class="text">ダウンロード</span><span class="effect"></span></a> </p>
              </div>
            <?php
                endforeach;
            ?>
          <?php
            endif;
          ?>
          </section>


          <aside class="info__form">
            <div class="info__form__ttl">ダウンロード申し込みフォーム</div>

            <input type="hidden" id="lf_form_uid" value="11986" /> <input type="hidden" id="lf_form_formid" value="<?php echo esc_attr(CFS()->get('form_id')); ?>" />
            <div id="lf_form_div"></div>
            <script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
          </aside>
      <?php
      endwhile;
    endif;

    // 投稿データをリセット
    wp_reset_postdata();
      ?>
        </article>
  </section>

  <section class="info">
    <div class="containers">
      <h2 class="ttl-secondary">お問合せ・ご相談</h2>
      <div class="info__lead">金型管理に関するお悩みをお持ちの方は、お気軽にご相談ください。</div>
      <div class="flex jcC aiC info__box">
        <div class="info__box--btn">
          <p class="btn__type01 mail">
            <a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">お問合せはこちら</span><span class="effect"></span></a>
          </p>
        </div>
        <div class="info__box--txt">
          <a href="tel:0522315172" class="tel"><span>052-231-5172</span></a>
          <div class="info-time">（平日：9：00～18：00）</div>
        </div>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>