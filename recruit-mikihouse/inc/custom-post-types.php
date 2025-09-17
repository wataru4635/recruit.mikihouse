<?php
// ==========================================================================
// カスタム投稿：NEWS（タクソノミーあり）
// ==========================================================================
function create_post_type_news() {
	register_post_type(
		'news',
		array(
			'labels' => array(
				'name' => 'NEWS',
				'singular_name' => 'NEWS',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'news'),
			'supports' => array('title', 'editor', 'thumbnail'),
			'show_in_rest' => true,
			'menu_icon' => 'dashicons-edit',
			'menu_position' => 5,
			'taxonomies' => array('news_category'),
		)
	);

	register_taxonomy(
		'news_category',
		'news',
		array(
			'label' => 'カテゴリ',
			'hierarchical' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'rewrite' => array('slug' => 'news-category'),
			'show_in_rest' => true,
		)
	);
}
add_action('init', 'create_post_type_news');