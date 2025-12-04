<?php
/**
 * Lightning Child Theme Functions
 */

// スタイルシートの読み込み
add_action( 'wp_enqueue_scripts', 'lightning_child_enqueue_styles' );
function lightning_child_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

// デバッグ: 読み込まれているテンプレートをログに出力
add_action('wp_footer', 'lightning_child_debug_template');
function lightning_child_debug_template() {
  if (is_page()) {
    $template = get_page_template();
    echo '<!-- デバッグ: 読み込まれているテンプレート = ' . $template . ' -->';
    echo '<!-- デバッグ: 子テーマパス = ' . get_stylesheet_directory() . ' -->';
    echo '<!-- デバッグ: 親テーマパス = ' . get_template_directory() . ' -->';
  }
}
