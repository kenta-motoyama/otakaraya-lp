<?php
//不要なヘッダーを吐かないように設定
remove_action( 'wp_head' , 'index_rel_link');
remove_action( 'wp_head' , 'wp_generator');
remove_action( 'wp_head' , 'wp_shortlink_wp_head');
remove_action( 'wp_head' , 'start_post_rel_link');
remove_action( 'wp_head' , 'wlwmanifest_link');
remove_action( 'wp_head' , 'rsd_link');
remove_action( 'wp_head' , 'adjacent_posts_rel_link_wp_head');
remove_action( 'wp_head' , 'feed_links', 2 );
remove_action( 'wp_head' , 'feed_links_extra', 3);
remove_action('wp_head', 'rel_canonical');
foreach ( array( 'rss2_head', 'commentsrss2_head', 'rss_head', 'rdf_header', 'atom_head', 'comments_atom_head', 'opml_head', 'app_head' ) as $action ) {
    remove_action( $action, 'the_generator' );
}
//v4.2以降に入ってきた、jsとcssを除去
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


function dequeue_plugins_style() {
    //プラグインIDを指定し解除する
    wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);
