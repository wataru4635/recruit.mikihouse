<?php
// ==========================================================================
// 投稿から「タグ」機能を削除
// ==========================================================================
function remove_post_taxonomies() {
	unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'remove_post_taxonomies');
// ==========================================================================
// コメントの無効化
// ==========================================================================
function comment_status_none( $open, $post_id ) {
    $post = get_post( $post_id );
    //投稿のコメントを投稿できないようにします
    if( $post->post_type == 'post' ) {
        return false;
    }
    //固定ページのコメントを投稿できないようにします
    if( $post->post_type == 'page' ) {
        return false;
    }
    //メディアのコメントを投稿できないようにします
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return false;
}

add_filter( 'comments_open', 'comment_status_none', 10 , 2 );
function remove_menus() {
    remove_menu_page( 'edit-comments.php' ); // コメント
  }
  add_action( 'admin_menu', 'remove_menus', 999 );

// ==========================================================================
// ブロックエディターの無効化
// ==========================================================================

add_filter('use_block_editor_for_post', '__return_false');

// ==========================================================================
// カスタム投稿タイプ「news」のエディターを無効化（ブロックエディターとクラシックエディター両方）
// ==========================================================================
function disable_editor_for_news($use_block_editor, $post_type) {
	if ($post_type === 'news') {
		return false;
	}
	return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'disable_editor_for_news', 10, 2);

// クラシックエディターも無効化
function disable_classic_editor_for_news() {
	global $typenow;
	if ($typenow === 'news') {
		remove_post_type_support('news', 'editor');
	}
}
add_action('admin_head', 'disable_classic_editor_for_news');

// ==========================================================================
// デフォルトの投稿を非表示化
// ==========================================================================
function remove_default_post_type() {
	remove_menu_page('edit.php'); // 投稿メニューを非表示
}
add_action('admin_menu', 'remove_default_post_type');

// 管理バーからも投稿を非表示
function remove_default_post_type_from_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_node('new-post');
}
add_action('admin_bar_menu', 'remove_default_post_type_from_admin_bar', 999);

// ==========================================================================
// 固定ページ（edit.php?post_type=page）をメディア（upload.php）の上に移動
// ==========================================================================

add_filter('custom_menu_order', '__return_true'); // カスタム順序を有効化
add_filter('menu_order', function ($menu_order) {
    $move   = 'edit.php?post_type=page'; // 固定ページ
    $before = 'upload.php';              // メディア

    $from = array_search($move, $menu_order, true);
    $to   = array_search($before, $menu_order, true);

    if ($from === false || $to === false) return $menu_order;

    // いったん取り除いて…
    array_splice($menu_order, $from, 1);
    // “メディア” の直前に挿入（= 上に表示）
    $to = array_search($before, $menu_order, true);
    array_splice($menu_order, $to, 0, $move);

    return $menu_order;
}, 999); // ほかのプラグインより後に実行

