<?php
/**
 *
 * functions
 *
**/




/**
 *
 * setup
 *
**/
function ecdg_setup() {

  // use eyecatch
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'my-eye-catch', 1000, 560, true );

  // auto title
  add_theme_support( 'title-tag' );
  
  // default jquery clear
  wp_deregister_script( 'jquery' );
  
  // enqueue
  if ( !is_admin() ) {
    // add style
    wp_enqueue_style( 'all-min', get_template_directory_uri() . '/assets/styles/all.min.css', array(), wp_get_theme()->get( 'Version' ) );
    // add script
    wp_enqueue_script( 'app-min', get_template_directory_uri() . '/assets/scripts/app.min.js', array(), wp_get_theme()->get( 'Version' ), true );
  }
  
  // clear wp_head
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
  remove_action( 'wp_head', 'rest_output_link_wp_head' );
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'template_redirect', 'rest_output_link_header', 11 );

}
add_action( 'after_setup_theme', 'ecdg_setup' );





/**
 *
 * ディスクリプション
 *
**/
function my_description(){
  global $post;
  $sub_desc = ' - カラーミーショップで制作されたネットショップの事例集';
  $content_summary = strip_tags($post->post_content);
  $content_summary = str_replace("\n", "", $content_summary);
  $content_summary = str_replace("\r", "", $content_summary);
  $content_summary = mb_substr($content_summary, 0, 160). "...";
  if (is_front_page()) {
    echo bloginfo('description');
  } elseif ((get_post_type() === 'news')) {
    if (is_single()) {
      echo $content_summary;
    } else {
      echo 'ファッションブランド「SHOKI JOETAKI」のニュース一覧ページです。ブランドに関するインフォメーションを掲載しています。' . $sub_desc;
    }
  } elseif ((get_post_type() === 'collections')) {
    if (is_single()) {
      echo 'SHOKI JOETAKI ';
      echo the_title() . ' コレクションの全アイテムを掲載しています。' . $sub_desc;
    } else {
      echo 'ファッションブランド「SHOKI JOETAKI」のコレクション一覧ページです。各シーズンごとにコレクションをご覧いただけます。' . $sub_desc;
    }
  } elseif ((get_post_type() === 'media')) {
    echo 'ファッションブランド「SHOKI JOETAKI」のメディア掲載情報一覧ページです。' . $sub_desc;
  } elseif ((get_post_type() === 'stockists')) {
    echo 'ファッションブランド「SHOKI JOETAKI」の取り扱い店舗一覧ページです。' . $sub_desc;
  } elseif (is_single()) {
    echo $content_summary;
  } elseif (is_page('about')) {
    echo 'ファッションブランド「SHOKI JOETAKI」のアバウトページです。' . $sub_desc;
  } elseif (is_page('contact')) {
    echo 'ファッションブランド「SHOKI JOETAKI」のコンタクトページです。ブランドに関するお問合せはこちらのページからどうぞ。' . $sub_desc;
  } elseif (is_home()) {
    echo 'ファッションブランド「SHOKI JOETAKI」のオフィシャルブログ。ブランドやファッションに関する日々の雑感。' . $sub_desc;
  } elseif (is_category() || is_tag() || is_date() || is_author()) {
    $title = wp_get_document_title();
    $title = str_replace(" &#8211; SHOKI JOETAKI OFFICIAL", "", $title);
    echo $title . ' のブログ記事一覧ページです。ファッションブランド「SHOKI JOETAKI」のオフィシャルブログ。' . $sub_desc;
  } else {
    echo bloginfo('description');
  }
}



/**
 *
 * パンくずリスト
 *
**/
function my_bread(){
  global $post;
  $title = wp_get_document_title();
  $title = str_replace(" &#8211; ", "", $title);
  define("SEPA","<span class='quo'>&rsaquo;</span>");// セパレーター
  if (is_home()) {
    echo '<span>Blog Top</span>';
  } elseif (is_category()) {
    echo '<a href="' . home_url() . '/blog/">Blog Top</a>' . SEPA;
    $cat = get_category(get_cat_ID(single_cat_title('', false)));
    // 親カテゴリがある場合
    if ($cat->parent) {
      $cate_pare = get_category_parents(get_cat_ID(single_cat_title('',false)),true,SEPA);
      // get_category_parentsが自カテゴリも生成するので除去
      for($i=0;$i<2;$i++){
        $cate_pare = substr($cate_pare, 0, strrpos($cate_pare, SEPA));
      }
      echo $cate_pare . SEPA;// 親カテゴリー
    } else {
      echo '<span>';
      single_cat_title();
      echo ' の記事一覧</span>';
    }
  } elseif (is_single()) {
    echo '<a href="' . home_url() . '/blog/">Blog Top</a>' . SEPA;
    while(have_posts()) {
      the_post();
      $cat = get_the_category();
      $cat = $cat[0];
      echo get_category_parents($cat->cat_ID, true, SEPA);// カテゴリー
      echo '<span>';
      the_title();// 記事タイトル
      echo '</span>';
    }
  } elseif (is_tag()) {
    echo '<a href="' . home_url() . '/blog/">Blog Top</a>' . SEPA . '<span>';
    single_tag_title();
    echo ' の記事一覧</span>';
  } elseif (is_date()) {
    echo '<a href="' . home_url() . '/blog/">Blog Top</a>' . SEPA . '<span>' . $title . ' の記事一覧</span>';
  } elseif (is_search()) {
    echo '<a href="' . home_url() . '/blog/">Blog Top</a>' . SEPA . '<span>「 ';
    the_search_query();
    echo ' 」の検索結果一覧</span>';
  } elseif (is_author()) {
    echo '<a href="' . home_url() . '/blog/">Blog Top</a>' . SEPA . '<span>投稿者 : ' . $title . ' の記事一覧</span>';
  } elseif (is_404()) {
    echo '<a href="' . home_url() . '/blog/">Blog Top</a>' . SEPA . '<span>404</span>';
  }
}




/**
 *
 * rssでアイキャッチ表示
 *
**/
function rss_post_thumbnail($content) {
  global $post;
  if(has_post_thumbnail($post->ID)) {
    $content = '<div>' . get_the_post_thumbnail($post->ID,'my-eye-catch') . '</div>' . $content;
  }
  return $content;
}
add_filter( 'the_excerpt_rss', 'rss_post_thumbnail' );
add_filter( 'the_content_feed', 'rss_post_thumbnail' );









/**
 *
 * ページャー
 *
**/
function my_paginate(){
  global $wp_query, $paged;

  $p_base = get_pagenum_link(1);
  $p_format = 'page/%#%';

  // ?の有無確認、有る場合は場所を特定
  if($word = strpos($p_base, '?')){
    // ?がある場合（検索結果）
    $p_base = get_option(home).(substr(get_option(home), -1 ,1) === '/' ? '' : '/')
      .'%_%'.substr($p_base, $word);
  } else{
    // ?が無い場合（カテゴリ、タグ等）
    $p_base .= (substr($p_base, -1 ,1) === '/' ? '' : '/') .'%_%';
  }

  echo paginate_links(array(
    'base' => $p_base,
    'format' => $p_format,
    'total' => $wp_query->max_num_pages,
    'mid_size' => 3,
    'current' => ($paged ? $paged : 1),
    'prev_text' => 'PREV',
    'next_text' => 'NEXT'
  )); 
}



























































?>