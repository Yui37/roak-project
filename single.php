<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="import shop in Higashihiroshima">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="http://loak.local/wp-content/themes/roak-project/style.css" type="text/css">
        <script src="https://kit.fontawesome.com/779dc48fa9.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="all-wrapper">
            <div class="single-page-top-wrapper full-width-container">
                <div class="single-page-top-texts col-sm-5 col-md-5">
                    <div class="single-page-top-text single-page-sub-title">
                        <p>アジアの色・香・味を楽しめる癒しの空間</p>
                    </div>
                    <div class="single-page-top-text single-page-main-title">
                        <h2>地球雑貨</h2>
                        <h1>ろーく</h1>
                    </div>
                </div>
            </div>
            <main>
                <div class="single-news-wrapper full-width-container">
                    <div class="single-news-top full-width-container">
                        <div class="return-to-toppage">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">← Back</a>
                        </div>
                        <h1 class="single-contents-main-title">News & Event</h1>
                        <h2 class="single-contents-sub-title">お知らせ</h2>
                    </div>
                    <div class="single-news-main full-width-container">
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="single-post col-md-9 col-sm-12">
                            <h1 class="single-post-title">
                                <?php the_title(); ?>
                            </h1>
                            <div class="single-post-pic">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="single-post-category"><?php the_category(' '); ?></div>
                            <div class="single-post-tags">
                                <?php the_tags(' ', '  '); ?>
                            </div>
                            <h2 class="single-post-date">
                                <?php the_time('F.d.Y'); ?>
                            </h2>
                            <P class="single-post-content">
                                <?php the_content( $more_link_text, $stripteaser ); ?>
                            </P>
                        </div>
                        <?php endwhile; ?>
                        <div class="sidebar col-md-3 col-sm-12">
                            <div class="sidebar-title">
                                <h2>More</h2>
                            </div>
                            <div class="sidebar-contents">
                                <div class="sidebar-content">
                                    <ul class="blog-title">
                                        <?php
                                            $newposts = array(
                                                'type' => 'postbypost',
                                                'limit' => 8
                                                );
                                            wp_get_archives($newposts);
                                        ?>
                                    </ul>
                                    <a href="#">
                                        <img src="images/o1080072014911165029.jpeg" class="side-content-img">
                                        <div class="side-content-text">
                                            <h2 class="post-category">イベント</h2>
                                            <h2 class="post-date">2020.1.30</h2>
                                            <h1 class="side-post-title">3月31日まで香り＋1点プレゼント(*´ω｀*)</h1>
                                            <P>現在、この世界に「香り」は数十万種類あると言われています。なんと人類は数千年前から「香り」の持つ効能を扱ってきました。例えば、約2000年前。古代エジプトの…</P>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar-blog-link">
                                <div class="container">
                                    <div class="sidebar-title">
                                        <h2>Blog</h2>
                                    </div>
                                </div>
                                <div class="blog-links">
                                    <div class="side-blog-link owner-blog">
                                        <a href="https://ameblo.jp/hanayaginaokazusato22" target="_blank" rel="noopener noreferrer">
                                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img004.jpg">
                                            <p>Owner Blog</p>
                                        </a>
                                    </div>
                                    <div class="side-blog-link kaori-blog">
                                        <a href="https://ameblo.jp/lm084622" target="_blank" rel="noopener noreferrer">
                                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/9F65.tmp.jpg">
                                            <p>Kaori Blog</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="return-to-toppage">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">← Back</a>
                        </div>
            <?php get_footer(); ?>
        </div>