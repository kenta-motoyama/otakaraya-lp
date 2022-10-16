<?php


function the_pagination()
{
  // 一覧ページのクエリ
  global $wp_query;
  // ありそうもない数字をセット
  $big = 999999999;
  // １ページ以下なら非表示
  if ($wp_query->max_num_pages <= 1) return;
  return paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'prev_text'          => '&laquo;',
    'next_text'          => '&raquo;',
    'total' => $wp_query->max_num_pages,
    'type' => 'array', // arrayに変更
    'end_size' => 2,
    'mid_size' => 2
  ));
}

// function redirect_special_permalink($redirect_url, $requested_url)
// {
// echo $redirect_url;
// return false;
// // $match_url = array(
// // 'aaa'
// // );
// // foreach ($match_url as $url) {
// // if (strpos($requested_url, $url)) return false;
// // }
// // return $redirect_url;
// }
// add_filter('redirect_canonical', 'redirect_special_permalink', 10, 2);


function disable_redirect_canonical($redirect_url)
{
  if (is_404()) {
    return false;
  }
}
add_filter("redirect_canonical", "disable_redirect_canonical");




//wp_titleの$sepが空文字または半角スペースの場合は余分な空白削除
function my_title_fix($title, $sep, $seplocation)
{
  if (!$sep || $sep == " ") {
    $title = str_replace(' ' . $sep . ' ', $sep, $title);
  }
  return $title;
}
add_filter('wp_title', 'my_title_fix', 10, 3);


// 勝手なPタグを削除

// <script>および, <style>タグ内を除去

function strip_js_css_inner($text)
{
  $text = preg_replace('!<script.*?>.*?</script.*?>!is', '', $text);
return preg_replace('!<style.*?>.*?</style.*?>!is', '', $text);
}
//コンテンツ内の非SSL URLを表示前にSSL化する
function chagne_site_url_html_to_https_ex($the_content)
{
//httpとhttpsURLの取得
if (strpos(site_url(), 'https://') !== false) {
$http_url = str_replace('http://', 'https://', site_url());
$https_url = site_url();
} else {
$http_url = site_url();
$https_url = str_replace('http://', 'https://', site_url());
}
//投稿本文の内部リンクを置換
$the_content = str_replace($http_url, $https_url, $the_content);
return $the_content;
}
add_filter('the_content', 'chagne_site_url_html_to_https_ex', 1);



function etb_admin_style()
{
wp_enqueue_style('etb_admin_style', get_template_directory_uri() . '/assets/css/admin.css');
}
add_action('admin_enqueue_scripts', 'etb_admin_style');

function etb_admin_script()
{
wp_enqueue_script('etb_admin_script', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), '', true);
}
add_action('admin_enqueue_scripts', 'etb_admin_script');




function byte_format($size, $dec=-1, $separate=false){
  $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
  $digits = ($size == 0) ? 0 : floor( log($size, 1024) );

  $over = false;
  $max_digit = count($units) -1 ;

  if($digits == 0){
      $num = $size;
  } else if(!isset($units[$digits])) {
      $num = $size / (pow(1024, $max_digit));
      $over = true;
  } else {
      $num = $size / (pow(1024, $digits));
  }

  if($dec > -1 && $digits > 0) $num = sprintf("%.{$dec}f", $num);
  if($separate && $digits > 0) $num = number_format($num, $dec);

  return ($over) ? $num . $units[$max_digit] : $num . $units[$digits];
}



function ps_get_root_page( $cur_post, $cnt = 0 ) {
	if ( $cnt > 100 ) { return false; }
	$cnt++;
	if ( $cur_post->post_parent == 0 ) {
		$root_page = $cur_post;
	} else {
		$root_page = ps_get_root_page( get_post( $cur_post->post_parent ), $cnt );
	}
	return $root_page;
}



/* 特定のプラグイン 更新通知 非表示 */
//プラグインの更新通知を非表示
// add_filter("pre_site_transient_update_plugins", "__return_null");

// add_filter('site_option__site_transient_update_plugins', 'plugin_hide_update_notice');
// function plugin_hide_update_notice($data) {
//   $plugin_name = 'all-in-one-seo-pack/all-in-one-seo-pack.php'; //当該プラグインのPlugin Nameのコメントがあるファイルのパスを記述（pluginsディレクトリより下を記述）
//   if (isset($data->response[$plugin_name])) {
//     unset($data->response[$plugin_name]);
//   }
//   return $data;
// }


//記事から最初の画像取得
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
      $first_img = "/cms/wp-content/themes/hsg/assets/img/no-image.jpg";
  }
  return $first_img;
}



add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
  }
  return $classes;
}



if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' => '共通設定', // ページタイトル
    'menu_title' => '共通設定', // メニュータイトル
    'menu_slug' => 'theme-general-settings', // メニュースラッグ
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}