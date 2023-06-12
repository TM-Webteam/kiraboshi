<?php

/**
 * Template part for displaying page content in page-blog-table.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */
$pdf_url = CFS()->get('url');
?>

<!-- <article class="wp-item">

  <div class="image">
    <?php if (!empty($pdf_url)) : ?>
      <a href="<?php echo $pdf_url; ?>" onclick="lfTrackPageview(" <?php echo $pdf_url; ?>","<?php echo strip_tags(get_the_title()); ?>");" target="_blank"><img src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt=""></a>
    <?php else : ?>
      <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt=""></a>
    <?php endif; ?>
  </div>
  <div class="summary">
    <?php if (!empty($pdf_url)) : ?>
      <h2 class="title"><a href="<?php echo $pdf_url; ?>" onclick="lfTrackPageview(" <?php echo $pdf_url; ?>","<?php echo strip_tags(get_the_title()); ?>");" target="_blank"><?php the_title(); ?></a></h2>
    <?php else : ?>
      <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php endif; ?>
    <p class="phrase"><?php echo esc_html(wp_strip_all_tags(CFS()->get('copy'))); ?></p>
    <div class="footer">


      <?php if (!empty($pdf_url)) : ?>
        <p class="btn__type01 pdf btn__type01--right">
          <a href="<?php echo $pdf_url; ?>" onclick="lfTrackPageview(" <?php echo $pdf_url; ?>","<?php echo strip_tags(get_the_title()); ?>");" target="_blank"><span class="text">資料ダウンロード（登録不要）</span><span class="effect"></span></a>
        </p>
      <?php else : ?>
        <p class="btn__type01 btn__type01--right">
          <a href="<?php the_permalink(); ?>"><span class="text">ダウンロード</span><span class="effect"></span></a>
        </p>
      <?php endif; ?>
    </div>
  </div>
</article> -->


<?php if (!empty($pdf_url)) : ?>

  <a href="<?php echo $pdf_url; ?>" onclick="lfTrackPageview("<?php echo $pdf_url; ?>","<?php echo strip_tags(get_the_title()); ?>");" target="_blank" class="wp-card">
    <div class="wp-card__img"><img src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt=""></div>
    <h2 class="wp-card__ttl"><?php the_title(); ?></h2>
    <div class="wp-card__txt"><?php echo esc_html(wp_strip_all_tags(CFS()->get('copy'))); ?></div>
    <div class="wp-card__btn"><span class="blank">閲覧する（登録不要）</span></div>
  </a>

<?php else : ?>

  <a href="<?php the_permalink(); ?>" class="wp-card">
    <div class="wp-card__img"><img src="<?php echo esc_url(CFS()->get('material_image')); ?>" alt=""></div>
    <h2 class="wp-card__ttl"><?php the_title(); ?></h2>
    <div class="wp-card__txt"><?php echo esc_html(wp_strip_all_tags(CFS()->get('copy'))); ?></div>
    <div class="wp-card__btn"><span class="dl">ダウンロード</span></div>
  </a>

<?php endif; ?>