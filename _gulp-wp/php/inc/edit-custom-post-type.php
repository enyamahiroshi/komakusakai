<?php
/********************************************************************************
 デフォルトの「投稿」ポストの編集
*********************************************************************************/
function edit_admin_menus() {
  global $menu;
  global $submenu;
  $menu[5][0] = '新着情報';
  $submenu['edit.php'][5][0] = 'すべての記事';
}
add_action('admin_menu', 'edit_admin_menus');


/********************************************************************************
 カスタム投稿タイプの設定
*********************************************************************************/

// ---------------- ここからカスタム投稿タイプ設定のセット ----------------
global
$cpSlug,       // カスタム投稿のスラッグ名
$cpName,       // カスタム投稿の表示名
$cpTaxSlug1,   // カスタム投稿のタクソノミーのスラッグ名（ _category or _tag ）
$cpTaxName1,   // カスタム投稿のタクソノミーの表示名（ カテゴリー か タグ ）
$rewriteslug1, // リライトルールを書き換えて sample/カテゴリー名/… という自然なURLにする場合
$cpTaxName2,   // カスタム投稿のタクソノミーの表示名（ カテゴリー か タグ ）
$cpTaxSlug2,   // カスタム投稿のタクソノミーのスラッグ名（ _category or _tag ）
$rewriteslug2; // リライトルールを書き換えて sample/カテゴリー名/… という自然なURLにする場合

$cpSlug       = 'recruit';
$cpName       = '採用情報';
$cpTaxSlug1   = 'recruit_category';
$cpTaxName1   = '採用情報カテゴリー';
$rewriteslug1 = 'category';
$cpTaxSlug2   = 'recruit_tag';
$cpTaxName2   = '採用情報タグ';
$rewriteslug2 = 'tag';

add_action( 'init', function() {
	// カスタム投稿タイプを作成
	$labels = array(
		'name'               => $GLOBALS['cpName'], //管理画面などで表示する名前（単数形）
		'singular_name'      => $GLOBALS['cpName'], //管理画面などで表示する名前（単数形）
		'menu_name'          => $GLOBALS['cpName'], //管理画面メニューで表示する名前（nameより優先される）
		'add_new'            => '新規追加', //メニューの新規追加ボタンのラベル
		'add_new_item'       => $GLOBALS['cpName'].'追加', //新規作成ページのタイトルに表示される名前
		'new_item'           => '新規'.$GLOBALS['cpName'], //一覧ページの「新規追加」ボタンのラベル
		'edit_item'          => $GLOBALS['cpName'].'を編集', //編集ページのタイトルに表示される名前
		'view_item'          => $GLOBALS['cpName'].'を表示', //編集ページの「投稿を表示」ボタンのラベル
		'search_items'       => $GLOBALS['cpName'].'検索', //一覧ページの検索ボタンのラベル
		'not_found'          => '記事が見つかりません', //一覧ページに投稿が見つからなかったときに表示
		'not_found_in_trash' => 'ゴミ箱に記事はありません', //ゴミ箱に何も入っていないときに表示
		'parent_item_colon'  => '',
	);
	$args = array(
    'label'               => $GLOBALS['cpSlug'],
		'labels'              => $labels,
		'public'              => true, // ユーザーが内容を投稿する場合true(通常はtrue)
		'publicly_queryable'  => true,
		'show_in_rest'        => true, // Gutenberg 有効化
		'show_ui'             => true,
		'query_var'           => true,
		'capability_type'     => 'post',
		'has_archive'         => true, // アーカイブページを作成するか否かを設定(trueでindexページを作成)
		'hierarchical'        => true, // 階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
		'exclude_from_search' => false, // WPの検索機能から検索した際、検索対象に含めるか否かを設定（※trueの場合は検索対象に含めない）
		'menu_position'       => 5,
		'supports'            => array( // 管理画面から投稿できる項目を設定
		'title', // タイトル表示を有効に
		'editor', // 本文の表示を有効に
		// 'custom-fields', カスタムフィールド
		'thumbnail', // アイキャッチ画像
		)
	);
	register_post_type( $GLOBALS['cpSlug'], $args );
	// ▼カスタムタクソノミーを作成
	// カテゴリータイプ
	// $args = array(
	// 	'label'        => $GLOBALS['cpTaxName1'],
	// 	'public'       => true,
	// 	'show_ui'      => true,
	// 	'query_var'    => true,
	// 	'rewrite'      => array( 'slug' => $GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug1'], ), //urlを任意に指定する場合 → array( 'slug' => 'aaa/bbb', default： true )
	// 	'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	// );
	// register_taxonomy( $GLOBALS['cpTaxSlug1'], $GLOBALS['cpSlug'], $args );
	// タグタイプ
	// $args = array(
	// 	'label'        => $GLOBALS['cpTaxName2'],
	// 	'public'       => true,
	// 	'show_ui'      => true,
	// 	'rewrite'      => array( 'slug' => $GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug2'], ), //urlを任意に指定する場合 → array( 'slug' => 'aaa/bbb', default： true )
	// 	'hierarchical' => false, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	// 	'show_in_rest' => true, //Gutenbergでのカテゴリー表示用
	// );
	// register_taxonomy( $GLOBALS['cpTaxSlug2'], $GLOBALS['cpSlug'], $args );
});
// リライトルール（カスタムタクソノミーの分）
add_rewrite_rule($GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug1'].'/([^/]+)/?$', 'index.php?'.$GLOBALS['cpTaxSlug1'].'=$matches[1]', 'top');
add_rewrite_rule($GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug1'].'/([^/]+)/page/?([0-9]{1,})/?$',	'index.php?'.$GLOBALS['cpTaxSlug1'].'=$matches[1]&paged=$matches[2]', 'top');
add_rewrite_rule($GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug2'].'/([^/]+)/?$', 'index.php?'.$GLOBALS['cpTaxSlug2'].'=$matches[1]', 'top');
add_rewrite_rule($GLOBALS['cpSlug'].'/'.$GLOBALS['rewriteslug2'].'/([^/]+)/page/?([0-9]{1,})/?$',	'index.php?'.$GLOBALS['cpTaxSlug2'].'=$matches[1]&paged=$matches[2]', 'top');
/* --
// 投稿画面にてタクソノミー検索を可能にする
add_action('restrict_manage_posts', function() {
global $post_type;
if ( $GLOBALS['cpSlug'] == $post_type ) {
	?>
	<select name="<?php echo $GLOBALS['cpTaxSlug']; ?>">
		<option value="">カテゴリー指定なし</option>
		<?php
		$terms = get_terms($GLOBALS['cpTaxSlug1']);
		foreach ($terms as $term) { ?>
			<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
		<?php } ?>
	</select>
	<?php
}
});
-- */
// カスタム投稿に編集者属性を与える
function allowAuthorEditing()
{
  add_post_type_support( $GLOBALS['cpSlug'], 'author' );
}
add_action('init','allowAuthorEditing');
// ---------------- ここまでカスタム投稿タイプ設定のセット ----------------


// ---------------- ここからカスタム投稿タイプ設定のセット ----------------
global
$cpSlug2,       // カスタム投稿のスラッグ名
$cpName2,       // カスタム投稿の表示名
$cpTaxSlug1,   // カスタム投稿のタクソノミーのスラッグ名（ _category or _tag ）
$cpTaxName1,   // カスタム投稿のタクソノミーの表示名（ カテゴリー か タグ ）
$rewriteslug1, // リライトルールを書き換えて sample/カテゴリー名/… という自然なURLにする場合
$cpTaxName2,   // カスタム投稿のタクソノミーの表示名（ カテゴリー か タグ ）
$cpTaxSlug2,   // カスタム投稿のタクソノミーのスラッグ名（ _category or _tag ）
$rewriteslug2; // リライトルールを書き換えて sample/カテゴリー名/… という自然なURLにする場合

$cpSlug2       = 'banner';
$cpName2       = 'バナー';
$cpTaxSlug1   = 'banner_category';
$cpTaxName1   = 'バナーカテゴリー';
$rewriteslug1 = 'category';
$cpTaxSlug2   = 'banner_tag';
$cpTaxName2   = 'バナータグ';
$rewriteslug2 = 'tag';

add_action( 'init', function() {
	// カスタム投稿タイプを作成
	$labels = array(
		'name'               => $GLOBALS['cpName2'], //管理画面などで表示する名前（単数形）
		'singular_name'      => $GLOBALS['cpName2'], //管理画面などで表示する名前（単数形）
		'menu_name'          => $GLOBALS['cpName2'], //管理画面メニューで表示する名前（nameより優先される）
		'add_new'            => '新規追加', //メニューの新規追加ボタンのラベル
		'add_new_item'       => $GLOBALS['cpName2'].'追加', //新規作成ページのタイトルに表示される名前
		'new_item'           => '新規'.$GLOBALS['cpName2'], //一覧ページの「新規追加」ボタンのラベル
		'edit_item'          => $GLOBALS['cpName2'].'を編集', //編集ページのタイトルに表示される名前
		'view_item'          => $GLOBALS['cpName2'].'を表示', //編集ページの「投稿を表示」ボタンのラベル
		'search_items'       => $GLOBALS['cpName2'].'検索', //一覧ページの検索ボタンのラベル
		'not_found'          => '記事が見つかりません', //一覧ページに投稿が見つからなかったときに表示
		'not_found_in_trash' => 'ゴミ箱に記事はありません', //ゴミ箱に何も入っていないときに表示
		'parent_item_colon'  => '',
	);
	$args = array(
    'label'               => $GLOBALS['cpSlug2'],
		'labels'              => $labels,
		'public'              => true, // ユーザーが内容を投稿する場合true(通常はtrue)
		'publicly_queryable'  => true,
		'show_in_rest'        => true, // Gutenberg 有効化
		'show_ui'             => true,
		'query_var'           => true,
		'capability_type'     => 'post',
		'has_archive'         => true, // アーカイブページを作成するか否かを設定(trueでindexページを作成)
		'hierarchical'        => true, // 階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
		'exclude_from_search' => false, // WPの検索機能から検索した際、検索対象に含めるか否かを設定（※trueの場合は検索対象に含めない）
		'menu_position'       => 5,
		'supports'            => array( // 管理画面から投稿できる項目を設定
		'title', // タイトル表示を有効に
		// 'editor', // 本文の表示を有効に
		// 'custom-fields', カスタムフィールド
		// 'thumbnail', // アイキャッチ画像
		)
	);
	register_post_type( $GLOBALS['cpSlug2'], $args );
	// ▼カスタムタクソノミーを作成
	// カテゴリータイプ
	// $args = array(
	// 	'label'        => $GLOBALS['cpTaxName1'],
	// 	'public'       => true,
	// 	'show_ui'      => true,
	// 	'query_var'    => true,
	// 	'rewrite'      => array( 'slug' => $GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug1'], ), //urlを任意に指定する場合 → array( 'slug' => 'aaa/bbb', default： true )
	// 	'hierarchical' => true, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	// );
	// register_taxonomy( $GLOBALS['cpTaxSlug1'], $GLOBALS['cpSlug2'], $args );
	// タグタイプ
	// $args = array(
	// 	'label'        => $GLOBALS['cpTaxName2'],
	// 	'public'       => true,
	// 	'show_ui'      => true,
	// 	'rewrite'      => array( 'slug' => $GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug2'], ), //urlを任意に指定する場合 → array( 'slug' => 'aaa/bbb', default： true )
	// 	'hierarchical' => false, //階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
	// 	'show_in_rest' => true, //Gutenbergでのカテゴリー表示用
	// );
	// register_taxonomy( $GLOBALS['cpTaxSlug2'], $GLOBALS['cpSlug2'], $args );
});
// リライトルール（カスタムタクソノミーの分）
add_rewrite_rule($GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug1'].'/([^/]+)/?$', 'index.php?'.$GLOBALS['cpTaxSlug1'].'=$matches[1]', 'top');
add_rewrite_rule($GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug1'].'/([^/]+)/page/?([0-9]{1,})/?$',	'index.php?'.$GLOBALS['cpTaxSlug1'].'=$matches[1]&paged=$matches[2]', 'top');
add_rewrite_rule($GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug2'].'/([^/]+)/?$', 'index.php?'.$GLOBALS['cpTaxSlug2'].'=$matches[1]', 'top');
add_rewrite_rule($GLOBALS['cpSlug2'].'/'.$GLOBALS['rewriteslug2'].'/([^/]+)/page/?([0-9]{1,})/?$',	'index.php?'.$GLOBALS['cpTaxSlug2'].'=$matches[1]&paged=$matches[2]', 'top');
/* --
// 投稿画面にてタクソノミー検索を可能にする
add_action('restrict_manage_posts', function() {
global $post_type;
if ( $GLOBALS['cpSlug2'] == $post_type ) {
	?>
	<select name="<?php echo $GLOBALS['cpTaxSlug']; ?>">
		<option value="">カテゴリー指定なし</option>
		<?php
		$terms = get_terms($GLOBALS['cpTaxSlug1']);
		foreach ($terms as $term) { ?>
			<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
		<?php } ?>
	</select>
	<?php
}
});
-- */
// カスタム投稿に編集者属性を与える
function allowAuthorEditing2()
{
  add_post_type_support( $GLOBALS['cpSlug2'], 'author' );
}
add_action('init','allowAuthorEditing2');
// ---------------- ここまでカスタム投稿タイプ設定のセット ----------------

?>