<?php
global $body_class;
$body_class = '';
/*
Template Name: ペーパーメディアソリューション
*/
?>

<?php get_header();
get_template_part('template-parts/roundbtn', 'paper');
?>

<main id="add" class="paper-sol">

  <section class="hero pos">
    <div class="containers">
      <h1 class="ttl-primary">ペーパーメディアソリューション</h1>
      <div class="ttl-sub">製造業向けの用紙・ラベル・プリンタにおけるお悩みを解決！</div>

      <div class="flex jcA">
        <div class="richBtn">
          <div class="richBtn__ttl">ご相談はお気軽に！</div>
          <p class="btn__type01--white taC">
            <a href="#sec-form" class="core">
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
      <li class="item"><span>ペーパーメディアソリューション</span></li>
    </ul>
  </nav>

  <section class="intro">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">創業から現在まで、80年以上のサポート実績</span></h2>
      <div class="lead">小林クリエイトではすべてのお取引先様へ目的に合わせた用紙を提案・販売をしており、<br>用紙・ラベル・プリンタにまつわるお困りごとを解決致します。</div>
      <ul class="flex jcC">
        <li class="card">
          <div class="card__ttl">お取引先社数</div>
          <div class="card__txt"><span class="v1">20,000<small> 社 以上</small></span></div>
        </li>
        <li class="card">
          <div class="card__ttl">事業開始</div>
          <div class="card__txt"><span class="v2">1937<small> 年</small></span></div>
        </li>
      </ul>
    </div>
  </section>

  <section class="faq">
    <div class="containers">
      <h2 class="ttl-secondary">用紙・ラベル・プリンタにおいて<br>以下のようなお困りごとを抱えていませんか？</h2>
      <div class="faqBox">
        <div class="question">現在、使用している当社以外のサーマル紙と同じ品質の安い用紙はないか？</div>
        <div class="answer">当社独自のデータベースより、発色感度、印字耐性の比較を行い、候補用紙を選定致します。</div>
      </div>
      <div class="faqBox">
        <div class="question">SDGsも考慮した環境配慮製品ラベルを導入したい。</div>
        <div class="answer">①脱プラスティックラベル<br>②再生材料を使用したラベル<br>③CO2排出量の削減になるラベル<br>などのご提案が可能です。</div>
      </div>
      <div class="faqBox">
        <div class="question">トナー印字の用紙をフィルムケースに入れていたが、トナーが溶融してしまった。</div>
        <div class="answer">実際の運用する期間、環境を想定した評価を実施し、最適なプリント方式とフィルムケース素材をご提案致します。</div>
      </div>
      <div class="faqBox">
        <div class="question">プリンタ純正ラベルを使用していたが、時間が経つと剥がれてしまう事象が発生した。</div>
        <div class="answer">印字条件、被着体、貼り付け後の保管環境をヒアリングした上で原因を調査、トラブルを回避できるラベルをご提案致します。</div>
      </div>
      <div class="faqBox">
        <div class="question">古紙回収可能なラベルが欲しい。</div>
        <div class="answer">表面基材、粘着剤、剥離紙すべて古紙回収対応となっているラベル製品をご提案致します。</div>
      </div>
      <div class="faqBox">
        <div class="question">捺印適正のあるサーマル用紙がほしい。</div>
        <div class="answer">当社独自のデータベースより、捺印適正のあるサーマル用紙をご提案致します。</div>
      </div>
      <div class="faqBox">
        <div class="question">消毒用アルコールで印字が消えてしまった。　</div>
        <div class="answer">耐アルコール性の高い用紙、またはプリント方式の見直しをご提案致します。</div>
      </div>
    </div>
  </section>

  <section class="reason">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">用紙にまつわるお困りごとで<br>小林クリエイトが選ばれる<b>5</b>つの理由</span></h2>

      <div class="flex aiC card">
        <div class="card__num">01</div>
        <div class="card__ttl">
          <h3 class="ttl-tertiary">ノウハウを基にした提案力</h3>
          <div class="lead">創業以来培ってきた印刷ノウハウと知見から、現場に<br class="pc-only">訪問した上で、コスト・用途・運用方法に合わせた<br class="pc-only">最適なご提案が可能です。</div>
        </div>
        <figure class="card__img"><img src="<?php echo assets_path() ?>img/paper-sol/img-reason01.jpg" alt="ノウハウを基にした提案力"></figure>
      </div>

      <div class="flex aiC card">
        <div class="card__num">02</div>
        <div class="card__ttl">
          <h3 class="ttl-tertiary">用紙にまつわる豊富な<br>ラインナップよりご提供</h3>
          <div class="lead">特定のメーカーに囚われることなく、コスト削減など<br class="pc-only">貴社の要件に合わせた最適な用紙・ラベル、周辺機器のご提案が可能です。</div>
        </div>
        <figure class="card__img"><img src="<?php echo assets_path() ?>img/paper-sol/img-reason02.jpg" alt="用紙にまつわる豊富なラインナップよりご提供"></figure>
      </div>

      <div class="flex fS aiC card">
        <div class="card__num">03</div>
        <div class="card__ttl row">
          <h3 class="ttl-tertiary">ヒアリング～運用方法に至るまで一貫したトータルサポート</h3>
          <div class="lead">用紙・ラベルの選定における導入前のヒアリングから、<br class="pc-only">プリンタ・スキャナの運用方法に至るまで、現場の運用状況に合わせたサポートが可能です。</div>
        </div>
        <figure class="card__img full">
          <img src="<?php echo assets_path() ?>img/paper-sol/img-reason03.png" alt="ヒアリング～運用方法に至るまで一貫したトータルサポート" class="pc-only">
          <img src="<?php echo assets_path() ?>img/paper-sol/img-reason03-sp.png" alt="ヒアリング～運用方法に至るまで一貫したトータルサポート" class="sp-only">
        </figure>
      </div>

      <div class="flex aiC card">
        <div class="card__num">04</div>
        <div class="card__ttl">
          <h3 class="ttl-tertiary">日本全国で運用・サポートが可能</h3>
          <div class="lead">お近くの拠点で運用・サポートを致します。</div>
          <dl class="card__ttl--summry">
            <dd>＜本社＞<br>〒448-8656　愛知県刈谷市小垣江町北高根115</dd>
            <dd>＜拠点＞</dd>
            <dd>札幌・盛岡・仙台・北関東・千葉・東京・西東京・横浜・新潟・富山・長野・静岡・浜松・名古屋・刈谷・京都・大阪・神戸・<br class="pc-only">和歌山・岡山・広島・四国・松山・福岡・北九州・熊本・大分</dd>
            <dd class="note">※営業拠点の詳細は、下記のフォームよりお問合せください。</dd>
          </dl>
        </div>
        <figure class="card__img"><img src="<?php echo assets_path() ?>img/paper-sol/img-reason04.jpg" alt="日本全国で運用・サポートが可能"></figure>
      </div>

      <div class="flex aiC card">
        <div class="card__num">05</div>
        <div class="card__ttl">
          <h3 class="ttl-tertiary">データベースを基に課題に応じた<br class="pc-only">ご提案が可能</h3>
          <div class="lead">長年蓄積してきたデータベースを基に、<br class="pc-only">現場の課題に合わせた製品をご提案致します。</div>
          <div class="card__ttl--note">※右図は、ご提案の基になるデータベースや比較表の一例になります。</div>
        </div>
        <figure class="card__img"><img src="<?php echo assets_path() ?>img/paper-sol/img-reason05.jpg" alt="ノウハウを基にした提案力"></figure>
      </div>

    </div>
  </section>

  <section class="case-study end">
    <div class="containers">
      <h2 class="taC"><span class="title__type01">印刷ソリューションにおけるご提案の実例紹介</span></h2>
      <div class="lead">小林クリエイトでは、以下のような用紙・ラベル・プリンタに対する<br>お悩みごとを解決できるご提案を致します。</div>
      <ul class="flex">
        <li class="card">
          <div class="card__ttl core">屋外で使用できる用紙が欲しい</div>
          <div class="card__txt">「鋼材への取付」「電線ケーブルへの取付」「パレットの表示」など、屋外の環境下で用紙を使用されたい場合、一般的な用紙や合成紙に比べ、耐水性や強度が優れている「不織布」のご提案が可能です。また、レーザープリンター適正のある当社オリジナル高耐性不織布もご用意しております。</div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/paper-sol/img-case-study01.jpg" alt="屋外で使用できる用紙が欲しい"></figure>
        </li>
        <li class="card">
          <div class="card__ttl core">運用方法を変えずに<br>コストダウンを図りたい</div>
          <div class="card__txt">運用方法を変えずに、同等品質の用紙に切り替えたいとお考えの方は、以下のような比較表やデータベースを基に候補用紙の選定を行ったうえでコストダウンを図れる用紙をご提案致します。</div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/paper-sol/img-case-study02.jpg" alt="運用方法を変えずにコストダウンを図りたい"></figure>
        </li>
      </ul>
    </div>
  </section>

  <section id="DL" class="case__module05 wp__content">
    <div id="sec-form" class="inner">
      <h2 class="title__type01 mt0">ホワイトペーパーダウンロード</h2>
    </div>
    <?php
    $args      = array(
      'name'      => 'manufacturing_premise_paper_label',
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
      <div class="info__lead">用紙・ラベル・プリンタに関するお悩みをお持ちの方は、お気軽にご相談ください。</div>
      <div class="flex jcC aiC info__box">
        <div class="info__box--btn">
          <p class="btn__type01 mail">
            <a href="<?php echo esc_url(home_url('/')); ?>contact/"><span class="text">お問合せはこちら</span><span class="effect"></span></a>
          </p>
        </div>
        <!-- <div class="info__box--txt">
          <a href="tel:0522315172" class="tel"><span>052-231-5172</span></a>
          <div class="info-time">（平日：9：00～18：00）</div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- <section id="sec-form" class="please">
    <div class="containers">
      <div class="please__ttl"><ruby>カ<rt>・</rt>ン<rt>・</rt>タ<rt>・</rt>ン<rt>・</rt></ruby><span>1分</span>で完了！</div>
      <div class="please__lead">製造業向けの<span>紙・ラベル・プリンタにおける課題</span>をお持ちの方や、<br><span>コストシミュレーション</span>をされたい方は、</div>
      <div class="please__txt">まずは<span>こちらからお問合せ</span>ください！</div>
      <section id="DL" class="case__module05 wp__content">
        <article>
          <aside class="info__form">
            <input type="hidden" id="lf_form_uid" value="11986"/> <input type="hidden" id="lf_form_formid" value="gw5KslI5"/> 
            <div id="lf_form_div"></div> 
            <script type="text/javascript" src="//lmsg.jp/js/ja/form.js"></script>
          </aside>
        </article>
      </section>
    </div>
  </section> -->

</main>

<?php get_footer(); ?>