<?php

//カスタムヘッダー
add_custom_image_header('', '__return_false');

define('NO_HEADER_TEXT', true);
define('HEADER_TEXTCOLOR', '');
define('HEADER_IMAGE', '%s/images/top/reakoi_top.png');
define('HEADER_IMAGE_WIDTH', 1200);
define('HEADER_IMAGE_HEIGHT', 284);

//カスタムメニュー
register_nav_menus(
   array(
     'place_grobal' => 'グローバル',
     'place_utility' => 'ユーティリティ',
   )
 );

 // アイキャッチ画像を利用できるようにする
 add_theme_support('post-thumbnails');

 // アイキャッチ画像サイズ
 set_post_thumbnail_size(90, 90 ,true);

 //アーカイブ用画像サイズ
 add_image_size('large_thumbnail', 658, 113, true);

 //ウィジェット

register_sidebar(array(
  'name' => 'サイドバーウィジェットエリア（上）',
  'id' => 'primary-widget-area',
  'description' => 'サイドバー上部のウィジェットエリア',
  'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h1 class="widget-title">',
  'after_title' => '</h1>',
));

register_sidebar(array(
  'name' => 'サイドバーウィジェットエリア（下）',
  'id' => 'secondary-widget-area',
  'description' => 'サイドバー下部のウィジェットエリア',
  'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h1 class="widget-title">',
  'after_title' => '</h1>',
));