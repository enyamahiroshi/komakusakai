<?php
/* -------------------------------------------------------------
//  各種設定ファイル読込み
// ------------------------------------------------------------*/
get_template_part( 'inc/edit', 'custom-post-type' );
get_template_part( 'inc/setting', 'system' );

/* -------------------------------------------------------------
//  自動更新設定
// ------------------------------------------------------------*/
// add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_true' );

/* -------------------------------------------------------------
//  CSS,JSファイルの読込
// ------------------------------------------------------------*/
// ダッシュボードのヘッダーにファイル追加
function import_files_to_admin_header() {
  wp_enqueue_style( 'admin_style', get_template_directory_uri() . '/assets/admin/admin.css' );
  // wp_enqueue_style( 'admin-editor_style', get_template_directory_uri() . '/assets/admin/admin-editor.css' );
}
add_action( 'admin_enqueue_scripts', 'import_files_to_admin_header' );
// ヘッダーにファイル追加
function import_files_to_header() {
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
  // slick.js スライダー
  if ( is_page('ikedaclinic') ) {
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css');
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/js/slick/slick-theme.css');
  }
}
add_action( 'wp_enqueue_scripts', 'import_files_to_header' );

// フッターにファイル追加
function import_files_to_footer() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', true, array());
  // slick.js スライダー
  if ( is_page('ikedaclinic') ) {
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', true, array());
    wp_enqueue_script( 'run-slick', get_stylesheet_directory_uri() . '/assets/js/slick/run-slick.js', true, array());
  }
}
add_action('wp_footer', 'import_files_to_footer');

/* -------------------------------------------------------------
//  All in one ：　アーカイブやカスタム投稿でも機能するようにする
// ------------------------------------------------------------*/
//ディスクリプション
function my_description( $description ){
  if( is_archive() ){
    $description = 'ディスクリプションを入力';
  } elseif( is_post_type_archive() ){
    $description = '';
  }
  return $description;
}
add_filter('aioseop_description', 'my_description');

//キーワード
function my_keywords($keywords){
  if(is_archive()){
    $keywords = 'キーワードを入力';
  } elseif( is_post_type_archive() ){
    $description = '';
  }
  return $keywords;
}
add_filter('aioseop_keywords', 'my_keywords');

/* -------------------------------------------------------------
//  メインループの表示件数を制御
// ------------------------------------------------------------*/
// 表示件数制御
// -1ですべて表示

add_action('pre_get_posts','my_pre_get_posts');
function my_pre_get_posts( $query ) {

  if(is_admin() || ! $query -> is_main_query()) { return; } //ダッシュボードはスルー

  // if($query -> is_front_page()) { //フロントページ
  //   $query -> set('posts_per_page', 10); //表示件数
  // }
  if($query->is_home()){ // アーカイブページ
    $query->set( 'posts_per_page', 20); //表示件数
  }
  // if($query->is_month()){ // 月別アーカイブ
  //   $query->set('posts_per_page', -1); //表示件数
  // }
  // if($query->is_year()){ // 年別アーカイブ
  //   $query->set('posts_per_page', 10); //表示件数
  // }
  // if($query->is_author()){ // 作成者アーカイブ
  //   $query->set('posts_per_page', 10); //表示件数
  // }
  // if($query->is_category()){ // カテゴリーアーカイブ
  //   $query->set('posts_per_page', 10); //表示件数
  // }
  // if($query->is_search()){ // 検索結果ページ
  //   $query->set('posts_per_page', 10); //表示件数
  // }
  // if($query->is_page('journal')){ // 固定ページ
  // $query->set('posts_per_page', 2); //表示件数
  // }
  // //カスタム投稿タイプのアーカイブ
  // if($query -> is_post_type_archive()){
  // $query -> set('posts_per_page', 20); //表示件数
  //   // $query -> set('order', 'ASC'); //昇順
  //   // $query -> set('orderby', 'date'); //日
  // }
  // //カスタムタクソノミーのアーカイブ
  // if($query -> is_tax()){
  // $query -> set('posts_per_page', 20); //表示件数
  //   // $query -> set('order', 'ASC'); //昇順
  //   // $query -> set('orderby', 'date'); //日
  // }

}

/* -------------------------------------------------------------
// body_class
// ------------------------------------------------------------*/
function remove_body_class( $wp_classes, $extra_classes ) {
  // templateが付いているclass名か数字が付いているclass名をまとめて削除
  $wp_classes = preg_grep( "/template|\d/", $wp_classes, PREG_GREP_INVERT );
  // 追加
  if (is_page()) {
    $page = get_page(get_the_ID());
    // $extra_classes[] = 'page-' . $page->post_name;
    if ($page->post_parent) {
      $extra_classes[] = 'page-child---' . get_page_uri($page->post_parent);
    }
  }
  return array_merge( (array) $wp_classes, (array) $extra_classes );
}
add_filter( 'body_class', 'remove_body_class' , 10, 2 );

/* -------------------------------------------------------------
// previous_post_link() と next_post_link() にクラス付加
// ------------------------------------------------------------*/
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="btn prev-link" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="btn next-link" href=', $output);
}

/* -------------------------------------------------------------
//the_excerpt() の内容変更
// ------------------------------------------------------------*/
// 区切り文字数を変える
function custom_excerpt_length( $length ) {
  return 125; //デフォルトは「110」
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// 省略文字を変える
function new_excerpt_more($more) {
	return '...'; //デフォルトは「【...】」
}
add_filter('excerpt_more', 'new_excerpt_more');

/* -------------------------------------------------------------
// カスタムメニュー
// ------------------------------------------------------------*/
// 有効化
add_theme_support('menus');
// liに付与されるclassやidを消す
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  // ただし以下のid,classは残す
  return is_array($var) ? array_intersect($var, array(
  'current-menu-item',
  'link-item-pp',
  'link-item-recruit',
  'current-page-ancestor',
  )) : '';
}

/* -------------------------------------------------------------
// 標準ギャラリーのCSSを停止
// ------------------------------------------------------------*/
add_filter( 'use_default_gallery_style', '__return_false' );

/* -------------------------------------------------------------
// アイキャッチの設定
// ------------------------------------------------------------*/
// アイキャッチを有効にする
add_theme_support( 'post-thumbnails' );
// アイキャッチの基本サイズ設定
set_post_thumbnail_size(300, 300, false) ;

/* -------------------------------------------------------------
//  記事作成後にカテゴリーの構造を保つようにする
// ------------------------------------------------------------*/
function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
  $args['checked_ontop'] = false;
  return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );

/* -------------------------------------------------------------
//  ダッシュボードにてカテゴリー編集一覧に列を追加する
// ------------------------------------------------------------*/
$column_name = 'cat-color';
// 列を追加
function my_manage_edit_category_columns($columns){
	$index = 2; // カラムの位置
	return array_merge(
    array_slice($columns, 0, $index),
    array($column_name => 'カテゴリー色'),
    array_slice($columns, $index)
  );
}
add_filter("manage_edit-category_columns", "my_manage_edit_category_columns");
// 追加した列の各行に値を表示
function my_manage_category_custom_column($string, $column_name, $id) {
	if ($column_name == $column_name){
    $cat_ID = 'category_'.$id;
    $cat_color = get_field_object('cf_catecolor',$cat_ID);
    $value = $cat_color['value'];
    $label = $cat_color['choices'][ $value ]; // ラベルを取得
    echo $label; // ラベルを表示
	}
}
add_action('manage_category_custom_column', 'my_manage_category_custom_column', 10, 3);
// 追加した列のソート
// function my_manage_edit_category_sortable_columns($columns){
//   $columns[$column_name] = 'COLOR';
//   return $columns;
// }
// add_filter('manage_edit-category_sortable_columns', 'my_manage_edit_category_sortable_columns');

/* -------------------------------------------------------------
//  cf7：ホスト名、IP、ブラウザ情報などを取得
// ------------------------------------------------------------*/
add_filter('wpcf7_special_mail_tags', 'wpcf7_special_mail_tag_for_remote_host',10,2);
function wpcf7_special_mail_tag_for_remote_host($output, $name){
 if(!isset($re_addr)){ $re_addr = $_SERVER['REMOTE_ADDR']; }
 if('wpcf7.remote_host' == $name){ $output = gethostbyaddr($re_addr); }
 return $output;
}

add_filter('wpcf7_special_mail_tags', 'wpcf7_special_mail_tag_for_remote_ua',10,2);
function wpcf7_special_mail_tag_for_remote_ua($output, $name){
 if(!isset($u_agent)){ $u_agent = $_SERVER['HTTP_USER_AGENT']; }
 if('wpcf7.remote_ua' == $name){ $output = $u_agent; }
 return $output;
}