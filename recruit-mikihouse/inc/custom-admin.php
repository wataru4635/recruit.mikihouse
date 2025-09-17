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


