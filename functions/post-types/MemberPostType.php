<?php
function register_member_post_type()
{
  register_post_type('member', array(
    'labels' => array(
      'name'          => __('メンバー'),
      'singular_name' => __('メンバー'),
      'add_new'       => __('新規追加'),
      'add_new_item'  => __('新規追加'),
    ),
    'public'        => true,
    'has_archive'   => false, // 一覧ページは不要かも
    'show_in_menu'  => true,
    'show_in_rest'  => true, // REST API & ブロックエディタ対応
    'publicly_queryable' => true,
    'menu_position' => 5, // メディア記事の下に配置
    'menu_icon'     => 'dashicons-admin-users', // 管理画面のアイコン
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'rewrite'       => array('slug' => 'member'),
  ));
}
add_action('init', 'register_member_post_type');
