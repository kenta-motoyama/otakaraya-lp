<?php

//ログインロゴ変更
function login_logo_image() {
  echo '<style type="text/css">
    #login h1 a {
        background: url(' . get_bloginfo('template_directory') . '/assets/img/logo_otakaraya.png) no-repeat !important;
        background-size:contain !important;
        width: 320px;
        height: 67px;
    }
  </style>';
}
add_action('login_head', 'login_logo_image');

//左上ロゴ変更
function hide_before_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'hide_before_admin_bar_render' );

//favicon
function admin_favicon() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_bloginfo('template_url').'/assets/img/favicon.ico" />';
}
add_action( 'admin_head', 'admin_favicon' );

// プラグイン・テーマエディタの無効化
define('DISALLOW_FILE_EDIT',true);



// アイキャッチ画像利用
add_theme_support( 'post-thumbnails' );





   function remove_wp_nodes()
{
  global $wp_admin_bar; // 上部ツールバーのグローバル変数

	$wp_admin_bar->remove_node( 'comments' ); // コメント

	//寄稿者（アルバイト用権限）
	if (current_user_can('contributor')) {
		$wp_admin_bar->remove_menu('new-content');
	}


}
add_action('admin_bar_menu', 'remove_wp_nodes', 99);


//ダッシュボード非表示
function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);        // 現在の状況
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);  // 最近のコメント
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);   // 被リンク
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);          // プラグイン
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);        // クイック投稿
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);      // 最近の下書き
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);            // WordPressブログ
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);          // WordPressフォーラム
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );

//ようこそ削除
remove_action( 'welcome_panel', 'wp_welcome_panel' );

//管理画面用CSS追加
function my_admin_style() {
  echo '<style>
  #latest-comments{display:none;}
  </style>'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');


//管理画面内 デフォルトメニュー変更
// function Change_post_menulabel() {
// 	global $menu;
// 	global $submenu;

//     // var_dump($menu);
//     // var_dump($submenu);
//   $name = 'NEWS';
// 	$menu[5][0] = $name;
// 	$submenu['edit.php'][5][0] = $name.'一覧';
// 	$submenu['edit.php'][10][0] = '新しい'.$name;
// }
// function Change_post_objectlabel() {
// 	global $wp_post_types;
// 	$name = 'NEWS';
// 	$labels = &$wp_post_types['post']->labels;
// 	$labels->name = $name;
// 	$labels->singular_name = $name;
// 	$labels->add_new = _x('追加', $name);
// 	$labels->add_new_item = $name.'の新規追加';
// 	$labels->edit_item = $name.'の編集';
// 	$labels->new_item = '新規'.$name;
// 	$labels->view_item = $name.'を表示';
// 	$labels->search_items = $name.'を検索';
// 	$labels->not_found = $name.'が見つかりませんでした';
// 	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
// }
// add_action( 'init', 'Change_post_objectlabel' );
// add_action( 'admin_menu', 'Change_post_menulabel' );


// function Change_page_menulabel() {
// 	global $menu;
// 	global $submenu;
// 	$name = '下層ページ';
// 	$menu[20][0] = $name;
// 	$submenu['edit.php?post_type=page'][5][0] = $name.'一覧';
// 	$submenu['edit.php?post_type=page'][10][0] = '新しい'.$name;
// }
// function Change_page_objectlabel() {
// 	global $wp_post_types;
// 	$name = '下層ページ';
// 	$labels = &$wp_post_types['post']->labels;
// 	$labels->name = $name;
// 	$labels->singular_name = $name;
// 	$labels->add_new = _x('追加', $name);
// 	$labels->add_new_item = $name.'の新規追加';
// 	$labels->edit_item = $name.'の編集';
// 	$labels->new_item = '新規'.$name;
// 	$labels->view_item = $name.'を表示';
// 	$labels->search_items = $name.'を検索';
// 	$labels->not_found = $name.'が見つかりませんでした';
// 	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
// }
// add_action( 'init', 'Change_page_objectlabel' );
// add_action( 'admin_menu', 'Change_page_menulabel' );




function remove_menus () {
  global $menu; // 左メニューのグローバル変数
  remove_menu_page('edit-comments.php'); // コメントメニュー
  // remove_menu_page('edit.php'); // 投稿

  // remove_submenu_page('edit.php','edit-tags.php?taxonomy=category'); // 標準カテゴリ
  remove_submenu_page('edit.php','edit-tags.php?taxonomy=post_tag'); // 標準タグ

	// remove_submenu_page( 'edit.php?post_type=post', 'post-new.php?post_type=info' );
	//寄稿者（アルバイト用権限）
	if (current_user_can('contributor')) {

		remove_menu_page('edit.php'); //NEWS

		remove_menu_page('edit.php?post_type=page'); //テンプレート
		remove_menu_page('edit-comments.php'); //コメントメニュー
		remove_menu_page('themes.php'); //外観メニュー
		remove_menu_page('plugins.php'); //プラグインメニュー
		remove_menu_page('tools.php'); //ツールメニュー
		remove_menu_page('options-general.php'); //設定メニュー

		remove_menu_page('edit.php?post_type=ad_settings'); //広告設定

	}


}
add_action('admin_menu', 'remove_menus', 99);



function my_remove_meta_boxes() {

	// remove_meta_box('postexcerpt','post','normal' );      // 抜粋
	// remove_meta_box('trackbacksdiv','post','normal' );    // トラックバック
	// remove_meta_box('slugdiv','post','normal');           // スラッグ
	// remove_meta_box('postcustom','post','normal' );       // カスタムフィールド
	// remove_meta_box('commentsdiv','post','normal' );      // コメント
	// remove_meta_box('submitdiv','post','normal' );        // 公開
	// remove_meta_box('categorydiv','post','normal');       // カテゴリー
	// remove_meta_box('tagsdiv-post_tag','post','normal' ); // タグ
	// remove_meta_box('commentstatusdiv','post','normal' ); // ディスカッション
	// remove_meta_box('authordiv','post','normal' );        // 作成者
	// remove_meta_box('revisionsdiv','post','normal' );     // リビジョン
	// remove_meta_box('formatdiv','post','normal' );        // フォーマット
	// remove_meta_box('pageparentdiv','post','normal' );    // 属性

}
add_action('admin_menu','my_remove_meta_boxes' );


//投稿（NEWS）の一覧制御
function custom_columns($columns) {
  // var_dump($columns);
  unset($columns['categories']);
  unset($columns['tags']);
  unset($columns['comments']);
  return $columns;
}
add_filter( 'manage_posts_columns', 'custom_columns' );

//フッターテキスト
function custom_admin_footer() {
	//テーマのバージョン取得
	$template = get_template(); //テーマ
	$theme_data = wp_get_theme($template); //テーマオブジェクト
	//取得情報
	$name = $theme_data->get( 'Name' ); //テーマの名前
	$description= $theme_data->get( 'Description' ); //テーマの説明
	$version = $theme_data->get( 'Version' ); //テーマのバージョン
	$theme_uri = $theme_data->get( 'ThemeURI' ); //テーマURI
	$author = $theme_data->get( 'Author' ); //テーマのオーナー
	$author_uri = $theme_data->get( 'AuthorURI' ); //テーマのオーナーURI
	$template = $theme_data->get( 'Template' ); //テーマのテンプレート
	$tags = $theme_data->get( 'Tags' ); //テーマのタグ

	$tags = implode(',',$tags); //タグの連結

	// echo $name .' ' . $version . ' created by <a href="'.$author_uri.'" target="_blank">'.$author.'</a>';
	echo 'created by <a href="'.$author_uri.'" target="_blank">ETB-RIGHTS</a>';
}
add_filter( 'admin_footer_text', 'custom_admin_footer' );


//アクティビティログに追加
function custom_post_in_activity( $query ) {
	global $pagenow;
	$custom_post_types = get_post_types( array( '_builtin'=>false, 'public'=>true, ), 'names', 'and' ); // カスタム投稿取得
	if( !$custom_post_types ){
		return;
	}else{
		if ( is_admin() && !$query->is_main_query() && $query->get( 'post_type' ) && $pagenow == 'index.php' ) {
			array_push($custom_post_types, 'post', 'page'); //投稿と固定ページ追加
			$query->set( 'post_type', $custom_post_types ); //ループの変更
		}
	}
}
add_action( 'pre_get_posts', 'custom_post_in_activity' );


function add_my_option_field() {
  add_settings_field( 'twitter_url', 'Twitter URL', 'display_twitter_option', 'general' );
  add_settings_field( 'youtube_url', 'Youtube URL', 'display_youtube_option', 'general' );
  add_settings_field( 'instagram_url', 'Instagram URL', 'display_insta_option', 'general' );
  add_settings_field( 'mildom_url', 'Mildom URL', 'display_mildom_option', 'general' );
  // add_settings_field( 'sponser_text', 'スポンサー募集文言', 'display_sponser_option', 'general' );

	register_setting( 'general', 'twitter_url' );
	register_setting( 'general', 'youtube_url' );
	register_setting( 'general', 'instagram_url' );
	register_setting( 'general', 'mildom_url' );
	// register_setting( 'general', 'sponser_text' );
}

add_filter( 'admin_init', 'add_my_option_field' );

function display_twitter_option() {
  $twitter_url = get_option( 'twitter_url' );
  ?>
    <input name="twitter_url" id="twitter_url" type="text" value="<?php echo esc_html( $twitter_url ); ?>" class="regular-text">
    <!-- <p class="description">フィールド入力のヒント出したい時とかはこんな感じで記述する</p> -->
  <?php
}
function display_youtube_option() {
  $youtube_url = get_option( 'youtube_url' );
  ?>
    <input name="youtube_url" id="youtube_url" type="text" value="<?php echo esc_html( $youtube_url ); ?>" class="regular-text">
    <!-- <p class="description">フィールド入力のヒント出したい時とかはこんな感じで記述する</p> -->
  <?php
}
function display_insta_option() {
  $instagram_url = get_option( 'instagram_url' );
  ?>
    <input name="instagram_url" id="instagram_url" type="text" value="<?php echo esc_html( $instagram_url ); ?>" class="regular-text">
    <!-- <p class="description">フィールド入力のヒント出したい時とかはこんな感じで記述する</p> -->
  <?php
}
function display_mildom_option() {
  $mildom_url = get_option( 'mildom_url' );
  ?>
    <input name="mildom_url" id="mildom_url" type="text" value="<?php echo esc_html( $mildom_url ); ?>" class="regular-text">
    <!-- <p class="description">フィールド入力のヒント出したい時とかはこんな感じで記述する</p> -->
  <?php
}
function display_sponser_option() {
  $sponser_text = get_option( 'sponser_text' );
  ?>
    <textarea name="sponser_text" id="sponser_text" rows="8" type="text" class="regular-text"><?php echo esc_html( $sponser_text ); ?></textarea>
    <!-- <p class="description">フィールド入力のヒント出したい時とかはこんな感じで記述する</p> -->
  <?php
}


 
// add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
  $screen = get_current_screen();
  if ( $screen->post_type == 'player' ) {
    $content .= '<p>推奨サイズ：640px × 640px（1:1の比率でピッタリ収まります）</p>';
  } else if ( $screen->post_type == 'page' ) {
    $content .= '<p>推奨サイズ：640px × 640px（1:1の比率でピッタリ収まります）※TEAM専用でそれ以外は使用しておりません。</p>';
  } else {
    $content .= '<p>推奨サイズ：640px × 360px（16:9の比率でピッタリ収まります）</p>';
  }
  return $content;
}
 

//WebPのアップロードを許可
function add_upload_mines($mines) {
  $mines['webp'] = 'image/webp';
  return $mines;
}
add_filter('mime_types', 'add_upload_mines');

//メディア画面のWebPサムネイルを表示する
function enable_webp_thumbnail ($result, $path) {
  if ($result === true) return $result;
  //ファイルがWebPかどうか判定する
  $info = getimagesize($path);
  if ($info[2] === IMAGETYPE_WEBP) {
    $result = true;
  }
  return $result;
}
add_filter('file_is_displayable_image', 'enable_webp_thumbnail', 10, 2);


add_action( 'init', 'my_add_pages_categories' ) ; 
function my_add_pages_categories()
{
    register_taxonomy_for_object_type( 'category', 'page' ) ;
}
add_action( 'pre_get_posts', 'my_set_page_categories' ) ;
function my_set_page_categories( $query )
{
    if ( $query->is_category== true && $query->is_main_query()){
        $query->set( 'post_type', array( 'post', 'page', 'nav_menu_item' )) ;
    }
}