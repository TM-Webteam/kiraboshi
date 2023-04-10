<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kcr
 */

?>

<li class="search-list__item">
  <a href="<?php the_permalink(); ?>">
    
    <span class="title"><?php the_title(); ?></span>
  </a>
</li>

