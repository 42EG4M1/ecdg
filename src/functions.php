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

  // auto title
  add_theme_support( 'title-tag' );
  
  // default jquery clear
  wp_deregister_script( 'jquery' );
  
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
 * remove srcset
 *
**/
add_filter( 'wp_calculate_image_srcset', '__return_false' );




/**
 *
 * trim position chenge in thumbnails
 *
**/
function test_resize_dimensions( $first, $orig_w, $orig_h, $dest_w, $dest_h, $crop ) {
  if( false ) return $first;
  if ( $crop ) {
    $aspect_ratio = $orig_w / $orig_h;
    $new_w = min($dest_w, $orig_w);
    $new_h = min($dest_h, $orig_h);
    if ( !$new_w ) {
      $new_w = intval($new_h * $aspect_ratio);
    }
    if ( !$new_h ) {
      $new_h = intval($new_w / $aspect_ratio);
    }
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);
    $s_x = ($orig_w - $crop_w) / 2;
    $s_y = 0;
  } else {
    $crop_w = $orig_w;
    $crop_h = $orig_h;
    $s_x = ($orig_w - $crop_w) / 2;
    $s_y = 0;
    list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
  }
  if ( $new_w >= $orig_w && $new_h >= $orig_h ) return false;
  return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'test_resize_dimensions', 10, 6 );




/**
 *
 * description
 *
**/
function my_description() {
  global $post;
  
  $desc = 'カラーミーショップデザインギャラリーは、カラーミーショップで制作されたECサイト（オンラインショップ）だけを集めたニッチなWebサイトギャラリーです。デザイン性の高いサイトを中心に、カスタマイズやデザインの参考となるようなハイクオリティなサイトを掲載しています。';
  $sub_desc = ' &#8211; カラーミーショップデザインギャラリー';
  $title = wp_get_document_title();
  $title = str_replace( $sub_desc, "", $title );
  
  if ( is_home() ) {
    echo $desc;
  } elseif ( is_single() ) {
    echo '「 ' . $title . ' 」の紹介ページ - ' . $desc;
  } elseif ( is_page() ) {
    echo 'カラーミーショップデザインギャラリーの ' . $title . ' ページ - ' . $desc;
  } elseif ( is_category() || is_tag() || is_tax() ) {
    echo '「 ' . $title . ' 」に関連するネットショップの一覧ページ - ' . $desc;
  } elseif ( is_date() || is_author() ) {
    echo '「 ' . $title . ' 」の投稿一覧ページ - ' . $desc;
  } elseif ( is_search() ) {
    echo '「 ' . $title . ' 」ページ - ' . $desc;
  } else {
    echo $desc;
  }
}




/**
 *
 * rss in eyecatch
 *
**/
function rss_post_thumbnail( $content ) {
  global $post;
  if ( has_post_thumbnail( $post->ID ) ) {
    $content = '<div>' . get_the_post_thumbnail( $post->ID,'thumbnail' ) . '</div>' . $content;
  }
  return $content;
}
add_filter( 'the_excerpt_rss', 'rss_post_thumbnail' );
add_filter( 'the_content_feed', 'rss_post_thumbnail' );




/**
 *
 * remove Contact Form 7 enqueues
 *
**/
function remove_contact_form_enqueues() {
  if ( is_page( 'contact' ) === false ) {
    wp_dequeue_style( 'contact-form-7' );
    wp_dequeue_script( 'contact-form-7' );
  }
}
add_action( 'wp_enqueue_scripts', 'remove_contact_form_enqueues' );




/**
 *
 * pagination
 *
**/
function my_pagination() {
  global $wp_query, $paged;
  $p_base = get_pagenum_link(1);
  $p_format = 'page/%#%';
  
  if ( $word = strpos($p_base, '?') ) {
    $p_base = get_option(home).(substr(get_option(home), -1 ,1) === '/' ? '' : '/')
      .'%_%'.substr($p_base, $word);
  } else {
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





/**
 *
 * quick tag
 *
**/
function my_add_quicktags() {
  if (wp_script_is('quicktags')) {
?>
<script type="text/javascript">
  QTags.addButton('qt-http', 'http入力', 'http:///', '', false);
</script>
<?php
  }
}
add_action( 'admin_print_footer_scripts', 'my_add_quicktags' );




/**
 *
 * search
 *
**/
function my_search_filter($query) {
  if ( !$query->is_admin && $query->is_search ) {
    $query->set( 'post_type', 'post' );
  }
  return $query;
}
add_filter( 'pre_get_posts', 'my_search_filter' );
  



/**
 *
 * submenu  category -> service
 *
**/
function change_post_label() {
  //global $menu;
  global $submenu;

  // var_dump($menu);
  // var_dump($submenu);

  $submenu['edit.php'][15][0] = 'サービス';
}
add_action( 'admin_menu', 'change_post_label' );




/**
 *
 * category -> service
 *
**/
function re_register_post_category_taxonomy() {
  global $wp_rewrite;
  
  $labels = array(
    'name'                  => 'サービス',
    'singular_name'         => 'サービス',
    'search_items'          => 'サービスを検索',
    'all_items'             => 'サービス一覧',
    'parent_item'           => '親',
    'parent_item_colon'     => '親',
    'edit_item'             => 'サービスの編集',
    'view_item'             => 'サービスを表示',
    'update_item'           => '更新',
    'add_new_item'          => '新規サービスを追加',
    'new_item_name'         => '新規サービス名',
    'not_found'             => '項目がありません',
    'no_terms'              => 'なし',
    'items_list_navigation' => 'リストナビゲーション',
    'items_list'            => 'リスト',
    'menu_name'             => 'サービス',
    'name_admin_bar'        => 'service'
  );
  
  register_taxonomy(
    'category',
    'post',
    array(
      'hierarchical'      => true,
      'query_var'         => 'service',
      'public'            => true,
      'show_ui'           => true,
      'show_admin_column' => true,
      '_builtin'          => true,
      'labels'            => $labels
    )
  );
}
add_action( 'init', 're_register_post_category_taxonomy' );




/**
 *
 * tag hierarchical
 *
**/
function re_register_post_tag_taxonomy() {
  global $wp_rewrite;
  
  $labels = array(
    'name'                  => 'タグ',
    'singular_name'         => 'タグ',
    'search_items'          => 'タグを検索',
    'all_items'             => 'タグ一覧',
    'parent_item'           => '親',
    'parent_item_colon'     => '親',
    'edit_item'             => 'タグの編集',
    'view_item'             => 'タグを表示',
    'update_item'           => '更新',
    'add_new_item'          => '新規タグを追加',
    'new_item_name'         => '新規タグ名',
    'not_found'             => '項目がありません',
    'no_terms'              => 'なし',
    'items_list_navigation' => 'リストナビゲーション',
    'items_list'            => 'リスト',
    'menu_name'             => 'タグ',
    'name_admin_bar'        => 'tag'
  );
  
  register_taxonomy(
    'post_tag',
    'post',
    array(
      'hierarchical'      => true,
      'query_var'         => 'tag',
      'public'            => true,
      'show_ui'           => true,
      'show_admin_column' => true,
      '_builtin'          => true,
      'labels'            => $labels
    )
  );
}
add_action( 'init', 're_register_post_tag_taxonomy' );




/**
 *
 * custom taxonomies
 *
**/
function create_post_type() {
  
  $labels = array(
    'name'                  => 'カラー',
    'singular_name'         => 'カラー',
    'search_items'          => 'カラーを検索',
    'all_items'             => 'カラー一覧',
    'parent_item'           => '親',
    'parent_item_colon'     => '親',
    'edit_item'             => 'カラーの編集',
    'view_item'             => 'カラーを表示',
    'update_item'           => '更新',
    'add_new_item'          => '新規カラーを追加',
    'new_item_name'         => '新しいカラーの名前',
    'not_found'             => '項目がありません',
    'no_terms'              => 'なし',
    'items_list_navigation' => 'リストナビゲーション',
    'items_list'            => 'リスト',
    'menu_name'             => 'カラー',
    'name_admin_bar'        => 'color'
  );
  
  register_taxonomy(
    'color',
    'post',
    array(
      'hierarchical'      => true,
      'query_var'         => 'color',
      'public'            => true,
      'show_ui'           => true,
      'sort'              => true,
      'show_admin_column' => true,
      'labels'            => $labels
    )
  );
}
add_action( 'init', 'create_post_type' );




/**
 *
 * admin page - footer coment remove
 *
**/
function custom_admin_footer() {}
add_filter( 'admin_footer_text', 'custom_admin_footer' );




/**
 *
 * maintenance
 *
**/
//*
function wpr_maintenance_mode() {
  if ( !current_user_can( 'read' ) || !is_user_logged_in()) { // 購読者権限以上 + ユーザーログイン
    wp_die('<h2>ただいまメンテナンス中です</h2><p>公開までいましばらくお待ちください。</p>');
  }
}
add_action( 'get_header', 'wpr_maintenance_mode' );
//*/





?>