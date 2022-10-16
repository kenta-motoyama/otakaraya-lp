<?php
// カスタム投稿作成
add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type(
    'special',
    array(
      'labels' => array(
        'name' => '特集・バナー',
        'singular_name' => '特集・バナー',
        'all_items' => '特集・バナー一覧',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 15,
      'menu_icon'     => 'dashicons-megaphone',
      'rewrite' => array(
        'with_front' => false
      ),
      'supports' => array('title', 'thumbnail', 'custom-fields', 'author', 'revisions')
    )
  );

  register_post_type(
    'game',
    array(
      'labels' => array(
        'name' => 'ゲーム',
        'singular_name' => 'ゲーム',
        'all_items' => 'ゲーム一覧',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 15,
      'menu_icon'     => 'dashicons-games',
      'rewrite' => array(
        'with_front' => false
      ),
      'supports' => array('title', 'thumbnail', 'editor','custom-fields', 'author', 'revisions')
    )
  );

  register_post_type(
    'player',
    array(
      'labels' => array(
        'name' => '選手',
        'singular_name' => '選手',
        'all_items' => '選手一覧',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 15,
      'menu_icon'     => 'dashicons-universal-access',
      'rewrite' => array(
        'with_front' => false
      ),
      'supports' => array('title', 'thumbnail', 'custom-fields', 'author', 'revisions')
    )
  );

  register_post_type(
    'sponsor',
    array(
      'labels' => array(
        'name' => 'スポンサー',
        'singular_name' => 'スポンサー',
        'all_items' => 'スポンサー一覧',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 15,
      'menu_icon'     => 'dashicons-building',
      'rewrite' => array(
        'with_front' => false
      ),
      'supports' => array('title', 'thumbnail', 'editor','custom-fields', 'author', 'revisions')
    )
  );

  register_post_type(
    'interview',
    array(
      'labels' => array(
        'name' => 'インタビュー',
        'singular_name' => 'インタビュー',
        'all_items' => 'インタビュー記事一覧',
      ),
      'show_in_rest' => true,
      'public' => true,
      'has_archive' => true,
      'menu_position' => 15,
      'menu_icon'     => 'dashicons-format-status',
      'rewrite' => array(
        'with_front' => false
      ),
      'supports' => array('title', 'thumbnail', 'editor','custom-fields', 'author', 'revisions')
    )
  );
  register_post_type(
    'slider',
    array(
      'labels' => array(
        'name' => 'トップカルーセル',
        'singular_name' => 'トップカルーセル',
        'all_items' => 'トップカルーセル一覧',
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 15,
      'menu_icon'     => 'dashicons-images-alt2',
      'rewrite' => array(
        'with_front' => false
      ),
      'supports' => array('title', 'thumbnail','custom-fields', 'author', 'revisions')
    )
  );

  // register_post_type(
  //   'special',
  //   array(
  //     'labels' => array(
  //       'name' => __('特集'),
  //       'singular_name' => __('特集'),
  //       'all_items' => '記事一覧',
  //     ),
  //     'public' => true,
  //     'has_archive' => true,
  //     'menu_position' => 5,
  //     'menu_icon'     => 'dashicons-format-aside',
  //     'rewrite' => array(
  //       'with_front' => false
  //     ),
  //     'supports' => array('title', 'thumbnail', 'custom-fields', 'author', 'trackbacks', 'revisions', 'page-attributes')
  //   )
  // );


  // register_taxonomy(
  //   'news_tag',
  //   array('news', 'special'),
  //   array(
  //     'hierarchical' => false,
  //     'update_count_callback' => '_update_post_term_count',
  //     'label' => '関連ワード',
  //     'singular_label' => '関連ワード',
  //     'query_var' => true,
  //     'public' => true,
  //     'show_ui' => true
  //   )
  // );

  // register_taxonomy(
  //   'management_cat',
  //   array('management'),
  //   array(
  //     'hierarchical' => true,
  //     'update_count_callback' => '_update_post_term_count',
  //     'label' => 'マネジメントカテゴリ',
  //     'singular_label' => 'マネジメントカテゴリ',
  //     'query_var' => true,
  //     'public' => true,
  //     'show_ui' => true
  //   )
  // );
}


// function Change_news_menulabel()
// {
//   global $menu;
//   global $submenu;
//   var_dump($submenu);
//   // $name = 'テンプレート';
//   // $menu[20][0] = $name;
//   // $submenu['edit.php?post_type=page'][5][0] = $name . '一覧';
//   // $submenu['edit.php?post_type=page'][10][0] = '新しい' . $name;
// }
// function Change_news_objectlabel()
// {
//   global $wp_post_types;
//   $name = 'テンプレート';
//   $labels = &$wp_post_types['post']->labels;
//   $labels->name = $name;
//   $labels->singular_name = $name;
//   $labels->add_new = _x('追加', $name);
//   $labels->add_new_item = $name . 'の新規追加';
//   $labels->edit_item = $name . 'の編集';
//   $labels->new_item = '新規' . $name;
//   $labels->view_item = $name . 'を表示';
//   $labels->search_items = $name . 'を検索';
//   $labels->not_found = $name . 'が見つかりませんでした';
//   $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
// }
// add_action('init', 'Change_news_objectlabel');
// add_action('admin_menu', 'Change_news_menulabel');
// function add_origin_menu_at_admin_view()
// {
//   // メニューに「ニュース」を追加
//   // add_menu_page('音楽ニュース', '音楽ニュース', 'edit_dashboard', 'post-new.php?post_type=news&type=1', '', 'dashicons-admin-post', 5);
//   // add_menu_page('美容・コスメニュース', '美容・コスメニュース', 'edit_dashboard', 'post-new.php?post_type=news&type=2', '', 'dashicons-admin-post', 5);
//   // add_menu_page('エンタメニュース', 'エンタメニュース', 'edit_dashboard', 'post-new.php?post_type=news&type=3', '', 'dashicons-admin-post', 5);
//   add_submenu_page('edit.php?post_type=news', '登録（音楽）', '<div class="dashicons dashicons-format-audio"></div> 音楽登録', 'read', 'post-new.php?post_type=news&type=2', '');
//   add_submenu_page('edit.php?post_type=news', '登録（エンタメ）', '<div class="dashicons dashicons-buddicons-tracking"></div> エンタメ登録', 'read', 'post-new.php?post_type=news&type=3', '');
//   add_submenu_page('edit.php?post_type=news', '登録（美容・コスメ）', '<div class="dashicons dashicons-heart"></div> 美容・コスメ登録', 'read', 'post-new.php?post_type=news&type=4', '');

//   add_submenu_page('edit.php?post_type=special', '登録（音楽）', '<div class="dashicons dashicons-format-audio"></div> 音楽登録', 'read', 'post-new.php?post_type=special&type=2', '');
//   add_submenu_page('edit.php?post_type=special', '登録（エンタメ）', '<div class="dashicons dashicons-buddicons-tracking"></div> エンタメ登録', 'read', 'post-new.php?post_type=special&type=3', '');
//   add_submenu_page('edit.php?post_type=special', '登録（美容・コスメ）', '<div class="dashicons dashicons-heart"></div> 美容・コスメ登録', 'read', 'post-new.php?post_type=special&type=4', '');

// }
// add_action('admin_menu', 'add_origin_menu_at_admin_view');


function my_add_filter()
{
  global $post_type;
  if ('news' == $post_type || 'special' == $post_type) {
?>
    <select name="news_cat">
      <option value="">関連カテゴリ指定なし</option>
      <?php
      $terms = get_terms('news_cat');
      foreach ($terms as $term) { ?>
        <option value="<?php echo $term->slug; ?>"
      <?php if ($_GET['news_cat'] == $term->slug) {
        print 'selected';
      } ?>><?php echo $term->name; ?></option>
      <?php
      }
      ?>
    </select>
<?php
  }
}
// add_action('restrict_manage_posts', 'my_add_filter');

/* ステータス追加 */

// function wordpress_reject_post_status()
// {
//   register_post_status('kyakka', array(
//     'label'                     => _x("却下", 'post'),
//     'public'                    => false,
//     'exclude_from_search'       => false,
//     'show_in_admin_all_list'    => true,
//     'show_in_admin_status_list' => true,
//     'label_count'               => _n_noop('却下 (%s)', '却下 (%s)'),
//   ));
// }
// add_action('init', 'wordpress_reject_post_status');

// function wordpress_reject_post_status_list()
// {
//   global $post;
//   $complete = '';
//   $label = '';
//   if ($post->post_type == 'post') {
//     if ($post->post_status == 'kyakka') {
//       $complete = ' selected="selected"';
//       $label = '<span id="post-status-display"> 却下</span>';
//     }
//     echo '
//             <script>
//             jQuery(document).ready(function($){
//             $("select#post_status").append("<option value=\"kyakka\" ' . $complete . '>却下</option>");
//             $(".misc-pub-section label").append("' . $label . '");
//             });
//             </script>
//         ';
//   }
// }
// add_action('admin_footer-post.php', 'wordpress_reject_post_status_list');



//メンバーカラー取得
function get_member_color($slugname,$trim = null){

  $post_id = get_page_by_path($slugname, "OBJECT", "player");
  $post_id = $post_id->ID;

  if($trim){
    return ltrim(get_field('member_color',$post_id),$trim);
  } else {
    return get_field('member_color',$post_id);
  }
}
//メンバーギャラリー取得
function get_member_gallery($slugname,$type = "pc"){

  $post_id = get_page_by_path($slugname, "OBJECT", "player");
  $post_id = $post_id->ID;

  return get_field('member_top_gallery_'.$type,$post_id)['url'];
}





/* 【管理画面】投稿編集画面で不要な項目を非表示にする */
function my_remove_post_support() {
  // remove_post_type_support('interview','title');           // タイトル
  // remove_post_type_support('interview','editor');          // 本文
  // remove_post_type_support('interview','author');          // 作成者
  remove_post_type_support('interview','thumbnail');       // アイキャッチ画像
  remove_post_type_support('interview','excerpt');         // 抜粋
  remove_post_type_support('interview','trackbacks');      // トラックバック
  remove_post_type_support('interview','custom-fields');   // カスタムフィールド
  remove_post_type_support('interview','comments');        // コメント
  remove_post_type_support('interview','revisions');       // リビジョン
  remove_post_type_support('interview','page-attributes'); // 表示順
  remove_post_type_support('interview','post-formats');    // 投稿フォーマット


  remove_post_type_support('slider','thumbnail');       // アイキャッチ画像


}
add_action('init','my_remove_post_support');

/**
 * 投稿画面から不要な枠(メタボックス)を無効にします。
 */
 function remove_post_meta_boxes() {
	remove_meta_box( 'slugdiv', 'interview', 'normal' ); // スラッグ
	// remove_meta_box( 'submitdiv', 'post', 'side' ); // 公開
}
add_action( 'admin_menu', 'remove_post_meta_boxes' );