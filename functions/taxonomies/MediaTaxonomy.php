<?php
function register_media_taxonomy()
{
  register_taxonomy('media-taxonomy', 'media-post', array(
    'labels' => array(
      'name'              => __('メディアカテゴリー'),
      'singular_name'     => __('メディアカテゴリー'),
      'search_items'      => __('カテゴリーを検索'),
      'all_items'         => __('すべてのカテゴリー'),
      'parent_item'       => __('親カテゴリー'),
      'parent_item_colon' => __('親カテゴリー:'),
      'edit_item'         => __('カテゴリーを編集'),
      'update_item'       => __('カテゴリーを更新'),
      'add_new_item'      => __('新しいカテゴリーを追加'),
      'new_item_name'     => __('新しいカテゴリー名'),
      'menu_name'         => __('メディアカテゴリー'),
    ),
    'public'            => true,
    'hierarchical'      => true, // カテゴリー形式
    'show_in_rest'      => true, // ブロックエディター対応
    'show_admin_column' => true, // 管理画面の一覧表示
    'rewrite'           => array('slug' => 'media-category'), // パーマリンク
  ));
}
add_action('init', 'register_media_taxonomy');
