<?php
global $at_id;
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cac
 */

get_header();

get_template_part('template-parts/part', 'page-headding');
$categories = get_the_category();
$at_id = $post->ID;
$blog_date = get_post_meta($at_id, "blog_date", true);
$date = new DateTimeImmutable(CFS()->get('blog_date'));
$meta_values = get_post_meta($at_id, "blog_img", true);
$img_url = wp_get_attachment_url($meta_values);
$lead = get_post_meta($at_id, "lead", true);
$taxonomy = get_the_terms($at_id, "column_category");
$taxonomy_tag = get_the_terms($at_id, "column_tag");
// $column_arr = get_post_meta($at_id);
// print_r($taxonomy_tag);
?>

<nav class="breadcrumb">
  <ul class="items">
    <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/ico_home01.svg" alt="HOME" width="15" height="13"></a></li>
    <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></li>
    <li class="item"><span><?php echo wp_strip_all_tags(get_the_title()); ?></span></li>
  </ul>
</nav>

<div class="page__content has-sidebar">
  <main id="primary" class="site-main">

    <article class="blog__main">
      <h1 class="blog__main-title fs-30rem"><?php the_title(); ?></h1>
      <div class="blog__main-meta">
        <time datetime="<?php echo $date->format('Y-m-d'); ?>" class="time"><?php echo $date->format('Y/m/d'); ?></time>

        <ul class="categories">
          <?php if ($taxonomy) : ?>
            <?php foreach ($taxonomy as $category) : ?>
              <li><a href="<?php echo esc_url(get_term_link($category->slug, "column_category")); ?>"><?php echo esc_html($category->name); ?></a></li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </div>
      <div class="blog__main-img">
        <img loading="lazy" src="<?php echo esc_url($img_url); ?>" alt="">
      </div>

      <div class="blog__main-lead"><?php echo $lead; ?></div>

      <div class="blog__main-toc">
        <div class="title">目次</div>
        <?php
        $paragraph_arr = CFS()->get('paragraph');
        $i = 0;
        ?>
        <div class="inner">
          <?php if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
              $i++;
              $i2 = 0;
          ?>
              <p class="item-title"><a href="#toc<?php echo $i ?>"><?php echo esc_html(strip_tags($paragraph['title'])) ?></a></p>
              <ul class="items">
                <?php foreach ((array)$paragraph['caption'] as $caption) :
                  $i2++;
                ?>
                  <li><a href="#toc<?php echo $i ?>-<?php echo $i2 ?>"><?php echo esc_html(strip_tags($caption['caption_title'])) ?></a></li>
                <?php endforeach ?>
              </ul>
          <?php endforeach;
          endif; ?>

        </div>
      </div>

      <?php
      $whitepaper_bnr_top = CFS()->get('whitepaper_bnr_top');
      if ($whitepaper_bnr_top) :
        $bnr_class = 'type_';
        foreach ($whitepaper_bnr_top as $whitepaper_id) :
          $material_image_type = CFS()->get('material_image_type', $whitepaper_id);
          if ($material_image_type) {
            foreach ($material_image_type as $key => $value) {
              $bnr_class .= $key;
            }
          }
      ?>

          <div class="blog__wp <?php echo $bnr_class; ?>">
            <a href="<?php echo get_permalink($whitepaper_id); ?>">
              <div class="image">
                <img loading="lazy" src="<?php echo esc_url(CFS()->get('material_image', $whitepaper_id)); ?>" alt="" width="164" height="116">
              </div>
              <div class="summary">
                <h3 class="title">お役立ち資料</h3>
                <div class="text fs-20rem"><?php echo get_the_title($whitepaper_id); ?></div>
              </div>
            </a>
          </div>
      <?php
        endforeach;
      endif;
      ?>

      <?php
      $i = 0;
      if ($paragraph_arr) : foreach ($paragraph_arr as $paragraph) :
          $i++;
          $i2 = 0;



      ?>
          <div class="blog__main-article">
            <h2 class="title01 fs-28rem" id="toc<?php echo $i; ?>"><?php echo $paragraph['title'] ?> </h2>
            <?php
            $paragraph_img = [];
            $paragraph_img[1] = '';
            $paragraph_img[2] = '';

            $values = $paragraph['image_view'];
            foreach ($values as $key => $value) {
              if ($paragraph['paragraph_img']) {
                $paragraph_img[$key] = '<img loading="lazy" src="' . $paragraph['paragraph_img'] . '" alt="">';
              }
            }
            ?>
            <?php if ($paragraph_img[1] != '') : ?>
              <div class="image">
                <?php echo $paragraph_img[1]; ?>
              </div>
            <?php endif; ?>
            <div class="text">
              <?php echo $paragraph['comment'] ?>
            </div>
            <?php if ($paragraph_img[2] != '') : ?>
              <div class="image">
                <?php echo $paragraph_img[2]; ?>
              </div>
            <?php endif; ?>
            <?php foreach ((array)$paragraph['caption'] as $caption) :
              $i2++;
              $caption_img = [];
              $caption_img[1] = '';
              $caption_img[2] = '';

              $values = $caption['caption_image_view'];
              foreach ((array)$values as $key => $value) {
                if ($caption['caption_img']) {
                  $caption_img[$key] = '<img loading="lazy" src="' . $caption['caption_img'] . '" alt="">';
                }
              }
            ?>
              <h3 class="title02" id="toc<?php echo $i; ?>-<?php echo $i2 ?>"><?php echo $caption['caption_title'] ?></h3>
              <?php if ($caption_img[1] != '') : ?>
                <div class="image">
                  <?php echo $caption_img[1]; ?>
                </div>
              <?php endif; ?>
              <div class="text">
                <?php echo wp_kses_post($caption['caption_comment']) ?>
              </div>
              <?php if ($caption_img[2] != '') : ?>
                <div class="image">
                  <?php echo $caption_img[2]; ?>
                </div>
              <?php endif; ?>
            <?php endforeach ?>
          </div>
      <?php endforeach;
      endif; ?>

      <?php
      $whitepaper_bnr_bottom = CFS()->get('whitepaper_bnr_bottom');
      if ($whitepaper_bnr_bottom) :
        $bnr_class = 'type_';
        foreach ($whitepaper_bnr_bottom as $whitepaper_id) :
          $material_image_type = CFS()->get('material_image_type', $whitepaper_id);
          if ($material_image_type) {
            foreach ($material_image_type as $key => $value) {
              $bnr_class .= $key;
            }
          }
      ?>

          <div class="blog__wp <?php echo $bnr_class; ?>">
            <a href="<?php echo get_permalink($whitepaper_id); ?>">
              <div class="image">
                <img loading="lazy" src="<?php echo esc_url(CFS()->get('material_image', $whitepaper_id)); ?>" alt="" width="164" height="116">
              </div>
              <div class="summary">
                <h3 class="title">お役立ち資料</h3>
                <div class="text fs-20rem"><?php echo get_the_title($whitepaper_id); ?></div>
              </div>
            </a>
          </div>
      <?php
        endforeach;
      endif;
      ?>


      <?php
      $column_bnr_service_lp = CFS()->get('column_bnr_service_lp');
      if (!empty($column_bnr_service_lp)) :
        foreach ((array)$column_bnr_service_lp as $key) :
      ?>
          <div class="image" style="margin-top: 40px;">
            <a href="<?php echo esc_url(CFS()->get('bnr_url', $key)); ?>">
              <div><img loading="lazy" src="<?php echo esc_url(CFS()->get('blogs_banners', $key)); ?>" alt="<?php the_title(); ?>"></div>
            </a>
          </div>
      <?php
        endforeach;
      endif;
      ?>



      <div class="keyword-search">関連キーワードから探す</div>
      <ul class="keyword-search__list">
        <?php if ($taxonomy_tag) : ?>
          <?php foreach ($taxonomy_tag as $category) : ?>
            <li><a href="<?php echo esc_url(get_term_link($category->slug, "column_tag")); ?>"><?php echo esc_html($category->name); ?></a></li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>

    </article>
  </main><!-- #main -->

  <?php get_sidebar();
  ?>
</div><!-- .page__content -->
<?php get_footer(); ?>