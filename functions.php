<?php

require_once get_template_directory() . '/functions/load-functions.php';

function my_theme_enqueue_assets()
{
  // CSSの読み込み
  wp_enqueue_style(
    'my-theme-style', // ハンドル名
    get_template_directory_uri() . '/assets/css/main.css', // CSSファイルのURL
    array(),
  );

  // JavaScriptの読み込み
  wp_enqueue_script(
    'my-theme-script', // ハンドル名
    get_template_directory_uri() . '/assets/js/main.js', // JSファイルのURL
    array(), // 依存関係（jQueryなどがあれば配列で指定）
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
