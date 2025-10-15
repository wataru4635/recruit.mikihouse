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
	if( $post->post_type == 'post' ) {
		return false;
	}
	if( $post->post_type == 'page' ) {
		return false;
	}
	if( $post->post_type == 'attachment' ) {
		return false;
	}
	return false;
}

add_filter( 'comments_open', 'comment_status_none', 10 , 2 );
function remove_menus() {
	remove_menu_page( 'edit-comments.php' );
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
	remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type_from_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_node('new-post');
}
add_action('admin_bar_menu', 'remove_default_post_type_from_admin_bar', 999);

// ==========================================================================
// 固定ページ（edit.php?post_type=page）をメディア（upload.php）の上に移動
// ==========================================================================

add_filter('custom_menu_order', '__return_true');
add_filter('menu_order', function ($menu_order) {
	$move   = 'edit.php?post_type=page';
	$before = 'upload.php';

	$from = array_search($move, $menu_order, true);
	$to   = array_search($before, $menu_order, true);

	if ($from === false || $to === false) return $menu_order;

	array_splice($menu_order, $from, 1);
	$to = array_search($before, $menu_order, true);
	array_splice($menu_order, $to, 0, $move);

	return $menu_order;
}, 999);

// ==========================================================================
// 管理画面サイドバーにインターンシップページ設定メニューを追加
// ==========================================================================
function add_internship_menu() {
	$internship_page = get_page_by_path('internship');
	
	if (!$internship_page) return;
	
	add_menu_page(
		'インターンシップ：各リンク設定',
		'インターンシップ：各リンク設定',
		'edit_pages',
		'post.php?post=' . $internship_page->ID . '&action=edit',
		'',
		'dashicons-admin-links',
		6
	);
}
add_action('admin_menu', 'add_internship_menu');

function fix_internship_menu_highlight($parent_file) {
	global $pagenow, $post;
	
	if ($pagenow == 'post.php' && isset($_GET['post'])) {
		$internship_page = get_page_by_path('internship');
		
		if ($internship_page && $_GET['post'] == $internship_page->ID) {
			$parent_file = 'post.php?post=' . $internship_page->ID . '&action=edit';
		}
	}
	return $parent_file;
}
add_filter('parent_file', 'fix_internship_menu_highlight');

function disable_classic_editor_for_internship() {
	global $pagenow, $post;
	
	if ($pagenow == 'post.php' && isset($_GET['post'])) {
		$internship_page = get_page_by_path('internship');
		
		if ($internship_page && $_GET['post'] == $internship_page->ID) {
			remove_post_type_support('page', 'editor');
		}
	}
}
add_action('admin_head', 'disable_classic_editor_for_internship');

// ==========================================================================
// インターンシップページ：過去のインターンシップ、年度更新ボタン
// ==========================================================================
add_action('add_meta_boxes_page', function($post){
	if ( get_page_template_slug($post) !== 'page-internship.php' ) return;

	add_meta_box(
		'internship_year_switcher',
		'過去のインターンシップ：年度更新',
		function($post){
			if ( ! function_exists('get_field') ) { echo '<p>ACF が有効ではありません。</p>'; return; }

			$past   = get_field('past', $post->ID);
			$title1 = (is_array($past) && !empty($past['year_1']['title'])) ? trim($past['year_1']['title']) : '';

			$after_g1_title = '（タイトル未設定のまま）';
			if ($title1 && preg_match('/(\d{4})/', $title1, $m)) {
				$after_g1_title = ((int)$m[1] + 1) . '年度';
			}
			$after_g2_title = $title1 !== '' ? esc_html($title1) : '（未設定）';

			$url = wp_nonce_url(
				admin_url('admin-post.php?action=internship_shift_years&post_id='.$post->ID),
				'internship_shift_years'
			);

			echo '<div class="inside">';

			echo '<p>「<strong>年度グループ①</strong>」の内容を「<strong>年度グループ②</strong>」に移動します。';
			echo '「<strong>年度グループ①</strong>」は空欄になり、タイトルのみ翌年度へ自動更新されます。</p>';

			echo '<div style="padding:10px;border-left:4px solid #2271b1;background:#f0f6fc;margin:8px 0 12px;">';
			echo '<p style="margin:0;"><strong>先に上部の「更新」ボタンで内容を保存してください。</strong><br>';
			echo 'その後、下の「<strong>年度を更新する</strong>」を押すと、保存済みの内容で年度の入れ替えを実行します。</p>';
			echo '</div>';

			echo '<div style="padding:10px;border:1px solid #e2e4e7;background:#f8f9fa;margin:8px 0 12px;">';
			echo '<p style="margin:0 0 6px;"><strong>更新後の表示</strong></p>';
			echo '<ul style="margin:0 0 0 1.2em;list-style:disc;">';
			echo '<li>年度グループ①：<code>' . esc_html($after_g1_title) . '</code></li>';
			echo '<li>年度グループ②：<code>' . $after_g2_title . '</code></li>';
			echo '</ul>';
			echo '</div>';

			echo '<p style="color:#b32d2e;"><strong>※元に戻せませんのでご注意ください</strong></p>';
			echo '<p><a href="'.esc_url($url).'" class="button button-primary" ';
			echo 'onclick="return confirm(\'年度グループ①の内容を年度グループ②に移動します。年度グループ①は空欄になり、タイトルのみ翌年度へ自動更新されます。実行してよろしいですか？\\n\\n※元に戻せませんのでご注意ください\');">';
			echo '年度を更新する</a></p>';

			echo '</div>';
		},
		'page','side','high'
	);
});

add_action('admin_post_internship_shift_years', function(){
	if ( ! current_user_can('edit_pages') ) wp_die('権限がありません。');
	check_admin_referer('internship_shift_years');

	$post_id = isset($_GET['post_id']) ? absint($_GET['post_id']) : 0;
	if ( ! $post_id ) wp_die('不正なリクエストです。');
	if ( ! function_exists('get_field') || ! function_exists('update_field') ) wp_die('ACF が有効ではありません。');

	$past   = get_field('past', $post_id);
	if ( ! is_array($past) ) $past = [];
	$group1 = isset($past['year_1']) && is_array($past['year_1']) ? $past['year_1'] : [];

	$past['year_2'] = $group1;

	$cleared = ['title' => ''];
	for ($i=1; $i<=10; $i++){
		$num = str_pad((string)$i, 2, '0', STR_PAD_LEFT);
		$cleared["item{$num}"] = ['link'=>'', 'text'=>''];
	}
	$past['year_1'] = $cleared;

	if ( ! empty($group1['title']) && preg_match('/(\d{4})/', $group1['title'], $m) ) {
		$past['year_1']['title'] = ((int)$m[1] + 1) . '年度';
	}

	update_field('past', $past, $post_id);

	$redirect = add_query_arg(['internship_msg'=>'shift_done'], get_edit_post_link($post_id,''));
	wp_safe_redirect($redirect);
	exit;
});

add_action('admin_notices', function(){
	if ( ! is_admin() ) return;
	if ( isset($_GET['internship_msg']) && $_GET['internship_msg']==='shift_done' ) {
		echo '<div class="notice notice-success is-dismissible"><p>年度グループ①の内容を年度グループ②へ移動しました。年度グループ①は空欄（タイトルのみ翌年度）に更新されました。</p></div>';
	}
});