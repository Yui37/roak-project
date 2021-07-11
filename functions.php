<?php
  // css読み込み
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  //thumbnail設定対応
  add_theme_support('post-thumbnails');

  //記事一覧の本文の省略。。。削除
  function new_excerpt_more($more) {
    return '......';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
?>
