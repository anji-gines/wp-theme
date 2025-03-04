<?php
function register_member_taxonomy()
{
  register_taxonomy('member-taxonomy', array('media-post'), array(
    'labels' => array(
      'name' => __('担当メンバー'),
      'singular_name' => __('担当メンバー'),
    ),
    'public' => true,
    'hierarchical' => true, // カテゴリー形式
    'show_in_rest' => true, // ブロックエディタ対応
    'show_admin_column' => true, // 管理画面の一覧表示
    'rewrite' => array('slug' => 'member-category'),
  ));
}
add_action('init', 'register_member_taxonomy');
