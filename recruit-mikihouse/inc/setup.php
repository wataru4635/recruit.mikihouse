<?php
// ==========================================================================
// WordPress テーマの基本設定
// ==========================================================================
function my_theme_setup() {
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');

    // タイトルタグ自動生成を有効化
    add_theme_support('title-tag');

    // RSSフィードリンクを自動生成
    add_theme_support('automatic-feed-links');

    // HTML5 マークアップのサポート（フォーム、コメント、ギャラリーなど）
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // ウィジェットの部分的なリフレッシュを有効化
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'my_theme_setup');

// ==========================================================================
// スクリプトとスタイルのエンキュー（共通 + 特定ページ）
// ==========================================================================
function enqueue_custom_scripts() {
    $theme_path = get_theme_file_path();
    $asset_uri  = get_theme_file_uri('/assets');

    // ファイルのバージョンを取得（存在すれば filemtime、なければテーマバージョン）
    $get_ver = function($file_path) {
        return file_exists($file_path) ? filemtime($file_path) : wp_get_theme()->get('Version');
    };

    // CSS（共通）- 最後に読み込む
    $style_file = '/css/style.css';
    wp_enqueue_style(
        'common-style',
        "{$asset_uri}{$style_file}",
        [],
        $get_ver("{$theme_path}/assets{$style_file}")
    );

    // JS（共通）- 最後に読み込む
    $script_file = '/js/script.js';
    wp_enqueue_script(
        'common-script',
        "{$asset_uri}{$script_file}",
        [],
        $get_ver("{$theme_path}/assets{$script_file}"),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// ==========================================================================
// ヘッダーへのプリロード
// ==========================================================================
function enqueue_preload_headers() {
  ?>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Noto+Sans+JP:wght@400;500;600;700&family=Zen+Kaku+Gothic+New:wght@500;600&family=Zen+Old+Mincho:wght@700;900&display=swap" rel="preload"
    as="style" fetchpriority="high">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Noto+Sans+JP:wght@400;500;600;700&family=Zen+Kaku+Gothic+New:wght@500;600&family=Zen+Old+Mincho:wght@700;900&display=swap" rel="stylesheet"
    media="print" onload="this.media='all'">
<?php
}
add_action('wp_head', 'enqueue_preload_headers');

// ==========================================================================
// 不要な head内のタグやスクリプトを削除する関数
// ==========================================================================
function codeups_clean_up_head() {
    // WordPressのバージョン情報を削除（セキュリティ対策）
    remove_action('wp_head', 'wp_generator');

    // 絵文字関連のスクリプトとスタイルを削除（パフォーマンス向上）
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // 外部ツールとの連携用の不要なタグを削除（セキュリティ・軽量化）
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');

    // 追加フィードリンクを削除（必要な場合は残す）
    remove_action('wp_head', 'feed_links_extra', 3);
  }

  // テーマが読み込まれた後に実行
  add_action('after_setup_theme', 'codeups_clean_up_head');