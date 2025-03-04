<?php

// メディア記事
function register_media_post_type()
{
  register_post_type('media-post', array(
    'labels' => array(
      'name'          => __('メディア記事'),
      'singular_name' => __('メディア記事'),
      'add_new'       => __('新規追加'),
    ),
    'public'        => true,
    'publicly_queryable' => true,
    'has_archive'   => true,
    'show_in_menu'  => true,
    'menu_position' => 7,
    'menu_icon'     => 'dashicons-camera-alt',
    'show_in_rest'  => true,
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', "revisions", "custom-fields"),
    'rewrite'       => array('slug' => 'media'),
    "taxonomies"    => array("post_tag", "media-taxonomy", "member-taxonomy", "solution-taxonomy"),
  ));
}
add_action('init', 'register_media_post_type');
