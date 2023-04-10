<?php
global $body_class;
$body_class = '';
/*
Template Name: RFIDソリューション
*/
?>

<?php get_header();
get_template_part('template-parts/roundbtn', 'rfid');
?>

<main id="add" class="rfid-sol">

  <section class="hero pos">
    <div class="containers">
      <h1 class="ttl-primary">小林クリエイトの<br class="sp-only">『RFIDソリューション』</h1>
      <div class="ttl-sub">製造業の現場改善を実現するための<br class="sp-only">RFIDソリューションをご提供します。</div>

      <div class="flex jcA">
        <div class="richBtn">
          <div class="richBtn__ttl"><span>3</span>分でわかる！資料をプレゼント</div>
          <p class="btn__type01 taC">
            <a href="#sec-form">
              <span class="richBtn__small">RFIDを活用した現場改善事例が分かる！</span><br>
              <span class="text"><span class="label">無料</span>事例資料をもらう</span>
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
      <li class="item"><span>小林クリエイトの『RFIDソリューション』</span></li>
    </ul>
  </nav>

  <section class="intro">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">製造業の現場改善を実現させるための<br>運用をサポート致します！</span></h2>
      <div class="lead">小林クリエイトは、創業から80有余年、自動車業界をはじめとした製造業において、<br>業務効率化やコスト低減などに繋がる現場改善をサポートしています。</div>
    </div>
  </section>



  <section class="task">
    <div class="containers">
      <h2 class="ttl-secondary">製造業の現場改善において<br>このような課題を抱えていませんか？</h2>
      <ul class="flex task__item">
        <li class="task__list">
          <a href="#anc01" class="task__list--box sp-flex">
            <div class="task__list--ttl"><span>課題1</span></div>
            <figure><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-task01.jpg" alt="工場内や納品先で通い箱・パレットが紛失する"></figure>
            <summary>工場内や納品先で<br>通い箱・パレットが紛失する</summary>
          </a>
        </li>
        <li class="task__list">
          <a href="#anc02" class="task__list--box sp-flex">
            <div class="task__list--ttl"><span>課題2</span></div>
            <figure><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-task02.jpg" alt="工具や治具の備品管理ができていない"></figure>
            <summary>工具や治具の備品管理が<br>できていない</summary>
          </a>
        </li>
        <li class="task__list">
          <a href="#anc03" class="task__list--box sp-flex">
            <div class="task__list--ttl"><span>課題3</span></div>
            <figure><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-task03.jpg" alt="先入れ・先出しができておらず材料が廃棄になった"></figure>
            <summary>先入れ・先出しができておらず<br>材料が廃棄になった</summary>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="feature">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">製造業の現場改善で培ったノウハウを活用し、<br>貴社に最適な RFID 製品を運用サポート致します。</span></h2>

      <div id="anc01" class="card">
        <div class="card__ttl">工場内や納品先で通い箱・<br class="sp-only">パレットの紛失を防ぐ方法</div>
        <h3 class="ttl-tertiary">RFIDを活用した『所在のみえる化』を実現</h3>
        <div class="lead">ハンディーリーダーやゲート型リーダーで読み取ることで、<br class="pc-only">循環輸送資材の「総量」や「いつ・どこへ出荷したか」「返却されているか」を可視化できます。</div>
        <figure class="card__img">
          <img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-feature01.png" alt="RFIDを活用した『所在のみえる化』を実現">
        </figure>
        <ul class="flex item">
          <li class="item__box">
            <div class="item__box--ttl">課題</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item01.svg" alt="課題"></figure>
            <div class="item__box--txt">通い箱・パレットが紛失したことによる追加購入が発生。</div>
          </li>
          <li class="item__box">
            <div class="item__box--ttl bg-R">解決策</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item02.svg" alt="解決策"></figure>
            <div class="item__box--txt">パソコンやタブレットで個別・種別ごとの照会が簡単にでき、利用状況を把握。</div>
          </li>
          <li class="item__box">
            <div class="item__box--ttl bg-R">効果</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item03.svg" alt="効果"></figure>
            <div class="item__box--txt">ムダな追加購入のコストを削減。<br>通い箱・パレットの所有者判別によるムダな工数を削減。</div>
          </li>
        </ul>
      </div>

      <div id="anc02" class="card">
        <div class="card__ttl">工具や治具の備品管理を行う方法</div>
        <h3 class="ttl-tertiary">RFIDを活用した『所在のみえる化』による備品管理</h3>
        <div class="lead">RF タグを備品などに取り付けることで、物品の所在を簡単に特定・管理ができます。</div>
        <h4 class="ttl-quaternary"><span>検査機器の<br class="sp-only">所在管理業務</span></h4>
        <ul class="flex item">
          <li class="item__box">
            <div class="item__box--ttl">課題</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item04.svg" alt="課題"></figure>
            <div class="item__box--txt">貸出用計測器が紛失しやすいので、所在を適切に把握したい。</div>
          </li>
          <li class="item__box">
            <div class="item__box--ttl bg-R">解決策</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item05.svg" alt="解決策"></figure>
            <div class="item__box--txt">貸出用計測器の所在をタブレットでみえる化。</div>
          </li>
          <li class="item__box">
            <div class="item__box--ttl bg-R">効果</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item06.svg" alt="効果"></figure>
            <div class="item__box--txt">貸出先が現場間で共有でき、<br>紛失が少なくなった。</div>
          </li>
        </ul>
        <h4 class="ttl-quaternary mt40"><span>加工治具の<br class="sp-only">ロケーション管理</span></h4>
        <ul class="flex item">
          <li class="item__box">
            <div class="item__box--ttl">課題</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item07.svg" alt="課題"></figure>
            <div class="item__box--txt">治具置き場に加工治具が格納されていないことがあり、探すまでに時間を要する。</div>
          </li>
          <li class="item__box">
            <div class="item__box--ttl bg-R">解決策</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item08.svg" alt="解決策"></figure>
            <div class="item__box--txt">治具の所在をパソコンでみえる化。</div>
          </li>
          <li class="item__box">
            <div class="item__box--ttl bg-R">効果</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item09.svg" alt="効果"></figure>
            <div class="item__box--txt">膨大な治具を探す手間が省け、<br>作業の段取りが早くなった。</div>
          </li>
        </ul>
      </div>

      <div id="anc03" class="card">
        <div class="card__ttl">先入れ・先出しができないことによる<br class="sp-only">材料ロスを抑える方法</div>
        <h3 class="ttl-tertiary">RFID を活用した<br>『先入れ・先出しのみえる化』による廃棄ロスの削減</h3>
        <div class="lead">RFIDを活用した”みえる化”を行ったことで、誰でも簡単に操作が行え、材料のムダを削減することができます。</div>
        <ul class="flex item">
          <li class="item__box">
            <div class="item__box--ttl">課題</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item10.svg" alt="課題"></figure>
            <div class="item__box--txt">使用期限の異なる材料を、作業者の経験と勘で運搬している。先入れ・先出しが徹底されておらず、ムダな廃棄が発生している。</div>
          </li>
          <li class="item__box">
            <div class="item__box--ttl bg-R">解決策</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item11.svg" alt="解決策"></figure>
            <div class="item__box--txt">RFタグを付与することで、何の資材がいつ、どこに出荷され、どのくらいあるのかを正確に把握・管理。</div>
          </li>
          <li class="item__box">
            <div class="item__box--ttl bg-R">効果</div>
            <figure class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-item12.svg" alt="効果"></figure>
            <div class="item__box--txt">先入れ・先出しの標準化を実現。</div>
          </li>
        </ul>
      </div>

    </div>
  </section>

  <section class="material">
    <div class="containers">
      <div class="flex jcC aiC">
        <figure class="material__img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-wp.png" alt="RFID × 製造現場 改善ネタ集"></figure>
        <summary class="material__box">
          <div class="material__box--txt">RFIDを用いた<br>現場改善の方法が<span>3</span>分でわかる！</div><br>
          <div class="material__box--ttl">RFID × 製造現場 改善ネタ集</div>
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

  <section class="doc">
    <div class="containers">
      <h2 class="taC"><span class="title__type01"><small>小林クリエイトのノウハウ・知見をご紹介</small><br>RFID導入前のお役立ち資料</span></h2>
      <div class="flex jcC">
        <a href="<?php echo esc_url(home_url('/')); ?>useful/rfid_before_introduction_checksheet/" class="card">
          <div class="card__ttl bound-anim"><span>RFID導入を検討するなら<br class="sp-only">まずは読んでおきたい</span></div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/mold/img-doc01.jpg" alt=""></figure>
          <div class="card__txt">本書では、RFIDの特長を活かし、導入効果を最大限引き出すために事前に確認すべきポイントをチェックシート形式でご紹介します。</div>
          <div class="card__btn"><span>詳細はこちら</span></div>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>useful/3min_rfid_selection_method/" class="card">
          <div class="card__ttl bound-anim"><span>環境や材質に最適な<br class="sp-only">RFタグ・ラベルがわかる！</span></div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/mold/img-doc02.jpg" alt=""></figure>
          <div class="card__txt">本書では、使用環境や対象物の材質など、よくあるケース別で適切なRFタグ・ラベルの選定方法をご紹介します。</div>
          <div class="card__btn"><span>詳細はこちら</span></div>
        </a>
      </div>
    </div>
  </section>


  <section class="brand">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">RFID を導入することで得られる<br class="sp-only">5つのメリット</span></h2>
      <div class="brand__intro">製造現場で RFID を導入することで、<br>以下の5つの効果が得られます。</div>
      <ul class="flex jcC">
        <li class="card col2">
          <div class="card__ttl core"><span class="num01">どこでも読み書きができる</span></div>
          <summary class="card__box">
            <figure class="card__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/icon-brand01.svg" alt="どこでも読み書きができる"></figure>
            <div class="card__box--txt">RFID はスキャナーをかざす必要がないため、距離が離れた製品に対しても、読み取りや書込みが簡単にできます。</div>
          </summary>
        </li>
        <li class="card col2">
          <div class="card__ttl core"><span class="num02">読み込み対象が隠れていても<br class="pc-only">認識可能</span></div>
          <summary class="card__box">
            <figure class="card__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/icon-brand02.svg" alt="読み込み対象が隠れていても認識可能"></figure>
            <div class="card__box--txt">箱に梱包されている製品やパレットに積まれている製品など、読み込む対象物が隠れている場合でも、 RFID を活用すると読み書きが可能です。</div>
          </summary>
        </li>
      </ul>
      <ul class="flex">
        <li class="card">
          <div class="card__ttl core"><span class="num03">複数のタグの一括読み取りを実現</span></div>
          <summary class="card__box">
            <figure class="card__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/icon-brand03.svg" alt="複数のタグの一括読み取りを実現"></figure>
            <div class="card__box--txt">RFID は複数のタグを一度に読み取るだけで認識できるため、作業工数の大幅削減が期待できます。</div>
          </summary>
        </li>
        <li class="card">
          <div class="card__ttl core"><span class="num04">活用シーンに応じた<br class="pc-only">データの書き換えが可能</span></div>
          <summary class="card__box">
            <figure class="card__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/icon-brand04.svg" alt="活用シーンに応じたデータの書き換えが可能"></figure>
            <div class="card__box--txt">読み込んだデータを活用シーンに応じて、情報の追加や変更が容易にできます。</div>
          </summary>
        </li>
        <li class="card">
          <div class="card__ttl core"><span class="num05">偽造防止にも役立つ<br class="pc-only">セキュリティ性</span></div>
          <summary class="card__box">
            <figure class="card__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/icon-brand05.svg" alt="偽造防止にも役立つセキュリティ性"></figure>
            <div class="card__box--txt">RFID に用いられている IC チップは複製が困難であるため、偽造防止など高いセキュリティ性を誇ります。</div>
          </summary>
        </li>
      </ul>

    </div>
  </section>

  <section class="package">
    <div class="containers">
      <h2 class="taC"><span class="title__type01"><small>小林クリエイトが提供する</small><br>RFIDのパッケージシステム</span></h2>
      <ul class="flex item">
        <li class="item__box">
          <div class="item__box--ttl">循環輸送資材の所在をみえる化<br>『RePaX』</div>
          <a href="<?php echo esc_url(home_url('/')); ?>useful/repax/" class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-package01.jpg" alt="RePaX"></a>
          <div class="item__box--txt">RePaXはハンディリーダーやゲート型リーダーで読み取った循環輸送資材の総量や、いつ、どこへ出荷したか、返却されているかを可視化するシステムです。</div>
        </li>
        <li class="item__box">
          <div class="item__box--ttl">金型管理をデータ化<br>『ぶっぴんさん for 金型』</div>
          <a href="<?php echo esc_url(home_url('/')); ?>useful/buppinsan_for_kanagata/" class="item__box--img"><img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-package02.jpg" alt="ぶっぴんさん for 金型"></a>
          <div class="item__box--txt">ぶっぴんさんfor金型は、金型の使用実績をハンディターミナルに入力することで、金型の使用実績のデータ化を実現。定期的な金型のメンテナンスができる環境を整え、金型管理の課題を解決します。</div>
        </li>
      </ul>
    </div>
  </section>

  <section class="cost">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">RFID を活用したコスト削減事例</span></h2>
      <div class="lead">輸送資材の管理において RFID 導入前後1年間の輸送資材購入数を比較してみました。<br><br>RFID のソリューション製品である「RePaX」を導入し、<br>輸送資材の通過実績をみえる化することで、<br>年間3,000個購入していた輸送資材を年間1,000個まで削減することができ、<br>年間1,000万円のコスト削減を実現しました。</div>
      <figure class="cost__img">
        <img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-cost.jpg" alt="1,000万円のコスト削減" class="pc-only">
        <img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-cost-sp.jpg" alt="1,000万円のコスト削減" class="sp-only">
      </figure>
    </div>
  </section>

  <section class="step end">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">お客様にお手間をかけることなく<br>RFID のスムーズな導入をサポート致します。</span></h2>
      <div class="flex jcC">
        <figure class="step__img">
          <img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-step01.png" alt="導入前の事前検討" class="pc-only">
          <img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-step01-sp.png" alt="導入前の事前検討" class="sp-only">
        </figure>
        <figure class="step__img">
          <img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-step02.png" alt="設計・構築・導入" class="pc-only">
          <img loading="lazy" src="<?php echo assets_path() ?>img/rfid-sol/img-step02-sp.png" alt="設計・構築・導入" class="sp-only">
        </figure>
      </div>
    </div>
  </section>

  <section id="DL" class="case__module05 wp__content">
    <div id="sec-form" class="inner">
      <h2 class="title__type01 mt0">ホワイトペーパーダウンロード</h2>
    </div>
    <?php
    $args      = array(
      'name'      => 'rfid_manufacturing_site_improvement',
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
          </section>


          <aside class="info__form">
            <div class="info__form__ttl">ダウンロード申し込みフォーム</div>

            <input type="hidden" id="lf_form_uid" value="11986" />
            <input type="hidden" id="lf_form_formid" value="<?php echo esc_attr(CFS()->get('form_id')); ?>" />
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
      <div class="info__lead">RFID製品に関するお悩みをお持ちの方は、お気軽にご相談ください。</div>
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