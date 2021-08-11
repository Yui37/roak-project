<?php
  // css読み込み
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  //JSの読み込み
  wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/swiper.js', array( 'jquery' ), '1.0.0', true );

  function init_func(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
  }
  add_action('init', 'init_func');

  //記事一覧の本文の省略。。。削除
  function new_excerpt_more($more) {
    return '......';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

?>