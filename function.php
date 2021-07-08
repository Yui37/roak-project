<?php
    // css読み込み
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // menuの項目作成
    function register_my_menus() {
        register_nav_menus(
          array(
            'menu' => __( 'Menu' )
           )
         );
       }
       add_action( 'init', 'register_my_menus' );

    function theme_setup() {
      add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'theme_setup');

    //記事一覧の本文の省略。。。削除
    function new_excerpt_more($more) {
      return '......';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
?>