<?php

/**
 * kcr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kcr
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.9');
}

if (!function_exists('kcr_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kcr_setup()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'kcr'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kcr_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');
	}
endif;
add_action('after_setup_theme', 'kcr_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kcr_content_width()
{
	$GLOBALS['content_width'] = apply_filters('kcr_content_width', 640);
}
add_action('after_setup_theme', 'kcr_content_width', 0);


function assets_path()
{
  return esc_url(bloginfo('stylesheet_directory') . '/assets/');
}

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Enqueue scripts and styles.
 */
function kcr_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('kcr-style', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION);
	wp_enqueue_style('kcr-style_tm', get_template_directory_uri() . '/css/style_tm.css', array(), _S_VERSION);
	wp_enqueue_style('google-webfont-style', 'https://fonts.googleapis.com/css2?family%3DNoto%2BSans%2BJP%3Awght%40100%3B300%3B400%3B500%3B700%3B900', array(), _S_VERSION);
	// wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/vendor/slick.css', array(), _S_VERSION );
	// wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/vendor/slick-theme.css', array(), _S_VERSION );
	// wp_enqueue_style( 'drawer', get_template_directory_uri() . '/css/vendor/drawer.css', array(), _S_VERSION );
	// wp_enqueue_script( 'js-slick', get_template_directory_uri() . '/js/vendor/slick.min.js', array( 'jquery' ), _S_VERSION, true );
	// wp_enqueue_script( 'js-drawer', get_template_directory_uri() . '/js/vendor/drawer.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script('js-common', get_template_directory_uri() . '/js/common.min.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'kcr_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// ----------------------------------------------
// Hide unused WP menu items
// ----------------------------------------------

function remove_menus()
{
	// remove_menu_page( 'index.php' );                  //Dashboard
	// remove_menu_page( 'jetpack' );                    //Jetpack*
	remove_menu_page('edit.php');                   // Posts
	// remove_menu_page( 'upload.php' );                 //Media
	// remove_menu_page( 'edit.php?post_type=page' );    //Pages
	remove_menu_page('edit-comments.php');          // Comments
	// remove_menu_page( 'themes.php' );                 //Appearance
	// remove_menu_page( 'plugins.php' );                //Plugins
	// remove_menu_page( 'users.php' );                  //Users
	// remove_menu_page( 'tools.php' );                  //Tools
	// remove_menu_page( 'options-general.php' );        //Settings
}
add_action('admin_menu', 'remove_menus');

add_action(
	'init',
	function () {
		remove_filter('the_excerpt', 'wpautop');
		remove_filter('the_content', 'wpautop');
	}
);

// ----------------------------------------------
// Find if is child or page
// ----------------------------------------------
add_theme_support('post-thumbnails');
function is_tree($page_id, $use_slug = true)
{
	if ($use_slug === true && !is_string($page_id)) {
		return false;
	} elseif ($use_slug !== true && !is_int($page_id)) {
		return false;
	}
	if ($use_slug === true) {
		$page_data = get_page_by_path($page_id);
		if (null === $page_data) {
			return false;
		}
		$page_id = $page_data->ID;
	}

	global $post;
	if (is_page($page_id)) {
		return true;
	}

	$anc = get_post_ancestors($post->ID);
	foreach ($anc as $ancestor) {
		if (is_page() && $ancestor == $page_id) {
			return true;
		}
	}

	return false;
};


add_filter('page_template_hierarchy', 'my_page_templates');

function my_page_templates($templates)
{
	global $wp_query;

	$template = get_page_template_slug();
	$pagename = $wp_query->query['pagename'];

	if ($pagename && !$template) {
		$pagename = str_replace('/', '__', $pagename);
		$decoded  = urldecode($pagename);

		if ($decoded == $pagename) {
			array_unshift($templates, "page-{$pagename}.php");
		}
	}

	return $templates;
}

$allowed_html = array(
	'a'      => array(
		'href'   => array(),
		'target' => array(),
	),
	'br'     => array(),
	'p'      => array(),
	'strong' => array(),
	'span'   => array(
		'style' => array(),
	),
);


function my_trim($str, $num, $display = true)
{
	if (empty($str) || empty($num)) {
		return;
	} else {
		$content      = '';
		$remove_array = array("\r\n", "\r", "\n", ' ', '　');
		$content      = wp_trim_words(strip_shortcodes($str), $num, '...');
		$content      = str_replace($remove_array, '', $content);
		if ($display == false) {
			return $content;
		} else {
			echo $content;
		}
	}
}

/**
 * ページネーション出力関数
 * $paged : 現在のページ
 * $pages : 全ページ数
 * $range : 左右に何ページ表示するか
 * $show_only : 1ページしかない時に表示するかどうか
 */

function pagination($pages, $paged, $range = 2, $show_only = false)
{

	$pages = (int) $pages;    // float型で渡ってくるので明示的に int型 へ
	$paged = $paged ?: 1;       // get_query_var('paged')をそのまま投げても大丈夫なように

	// 表示テキスト
	$text_first  = '« 最初へ';
	$text_before = '‹ 前へ';
	$text_next   = '次へ ›';
	$text_last   = '最後へ »';

	if ($show_only && $pages === 1) {
		// １ページのみで表示設定が true の時
		echo '<div class="pagination"><span class="current pager">1</span></div>';
		return;
	}

	if (1 === $pages) {
		return;    // １ページのみで表示設定もない場合
	}

	if (1 !== $pages) {
		// ２ページ以上の時
		echo '<div class="pagination">';
		if ($paged > $range + 1) {
			// 「最初へ」 の表示
			echo '<a href="', esc_url(get_pagenum_link(1)), '" class="first">', esc_html($text_first), '</a>';
		}
		if ($paged > 1) {
			// 「前へ」 の表示
			echo '<a href="', esc_url(get_pagenum_link($paged - 1)), '" class="prev">', esc_html($text_before), '</a>';
		}
		for ($i = 1; $i <= $pages; $i++) {

			if ($i <= $paged + $range && $i >= $paged - $range) {
				// $paged +- $range 以内であればページ番号を出力
				if ($paged === $i) {
					echo '<span class="current pager">', wp_strip_all_tags($i), '</span>';
				} else {
					echo '<a href="', esc_url(get_pagenum_link($i)), '" class="pager">', esc_html($i), '</a>';
				}
			}
		}
		if ($paged < $pages) {
			// 「次へ」 の表示
			echo '<a href="', esc_url(get_pagenum_link($paged + 1)), '" class="next">', esc_html($text_next), '</a>';
		}
		if ($paged + $range < $pages) {
			// 「最後へ」 の表示
			echo '<a href="', esc_url(get_pagenum_link($pages)), '" class="last">', esc_html($text_last), '</a>';
		}
		echo '</div>';
	}
}


add_action('transition_post_status', 'myfunction', 10, 3);
function myfunction($new_status, $old_status, $post)
{

	// 公開ステータスに切り替わるタイミングで実行
	if (('new' === $old_status && 'publish' === $new_status) || ('draft' === $old_status && 'publish' === $new_status) || ('future' === $old_status && 'publish' === $new_status)) {

		if ('blog' === $post->post_type) {
			$current_post_id = $post->ID;

			// 自動投稿するときのステータスをここで指定します。
			$draft_my_options = array(
				'post_title'   => get_the_title($current_post_id),
				'post_content' => '',
				'post_status'  => 'publish',
				'post_type'    => 'news',
			);
			// 新しい記事を投稿しつつ、その記事のidを取得
			// この行が実行されるタイミングで投稿そのものは完了していることに注意
			$newpost_id = wp_insert_post($draft_my_options);

			if ($newpost_id) {
				// カスタムフィールドに値を挿入
				$news_date    = CFS()->get('blog_date', $current_post_id);
				$news_comment = CFS()->get('lead', $current_post_id);

				$field_data = array(
					'news_date' => $news_date,
					'comment'   => $news_comment,
				);
				$post_data  = array('ID' => $newpost_id);
				CFS()->save($field_data, $post_data);
			}
		}
	}
}

function my_aioseop_description($description)
{
	global $post;
	if (is_singular('news')) {
		// $comment = CFS()->get( 'comment', $post->ID );
		$comment = CFS()->get('comment', $post->ID);

		$description = mb_strimwidth(strip_tags(str_replace(array("\r\n", "\r", "\n"), '', $comment)), 0, 120, '…', 'UTF-8');
	}

	return $description;
}
add_filter('aioseo_description', 'my_aioseop_description');

function change_posts_paging($query)
{

	// 管理画面やメインクエリーでない場合は除外
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	// 検索結果ページ
	if ($query->is_search()) {
		// 公開されてる記事のみ検索
		$query->set('post_status', 'publish');
		return;
	}
}
add_action('pre_get_posts', 'change_posts_paging');

//内部リンクをブログカードにするショートコード
function show_blogcard($atts)
{
	// extract(shortcode_atts(array(
	// 	'url' => "",
	// 	'title' => "",
	// 	'excerpt' => ""
	// ), $atts));

	$atts = shortcode_atts(array(
		'url' => "",
	), $atts, 'sc_blogcard');

	//URLから投稿IDを取得
	$id = url_to_postid($atts['url']);

	//URLから投稿IDを取得
	// $id = url_to_postid($url);
	// $blog_img = CFS()->get('blog_img', $id);
	// $lead = CFS()->get('lead', $id);
	// $material_image = CFS()->get('material_image', $id);
	// $lead_sentence = CFS()->get('lead_sentence', $id);

	$meta_values = get_post_meta($id, "blog_img", true);
	$blog_img = wp_get_attachment_url($meta_values);
	$meta_values = get_post_meta($id, "material_image", true);
	$material_image = wp_get_attachment_url($meta_values);
	$lead_sentence = get_post_meta($id, "lead_sentence", true);
	$lead = get_post_meta($id, "lead", true);

	//タイトルを取得
	if (empty($title)) {
		$title = strip_tags(get_the_title($id));
	}

	//アイキャッチ画像を取得
	if ($blog_img) {
		$img_tag = '<img src="' . $blog_img . '" alt="' . $title . '" />';
	}
	if ($material_image) {
		$img_tag = '<img src="' . $material_image . '" alt="' . $title . '" />';
	}

	//ブログカード部分のHTML
	$sc_blogcard .= '
  <div class="blogcard">
  <a href="' . $atts['url'] . '">
   <div class="blogcard_thumbnail">' . $img_tag . '</div>
   <div class="blogcard_content">
    <div class="blogcard_title">' . $title . '</div>
    <div class="blogcard_excerpt">' . $lead . $lead_sentence . '</div>
   </div>
   <div class="clear"></div>
  </a>
  </div>';
	return $sc_blogcard;
}
//ショートコードに追加
add_shortcode("sc_blogcard", "show_blogcard");
