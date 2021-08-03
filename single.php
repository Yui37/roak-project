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
                            <div class="single-post-content">
                                <?php the_content( $more_link_text, $stripteaser ); ?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <div class="sidebar col-md-3 col-sm-12">
                            <div class="sidebar-title">
                                <h2>More</h2>
                                <p>最近の記事</p>
                            </div>
                            <div class="sidebar-contents">
                                <div class="sidebar-content">
                                <?php query_posts('posts_per_page=5&ignore_sticky_posts=1'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    <div class="new-entry">
                                        <div class="new-entry-thumb">
                                        <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
                                            <a href="<?php the_permalink(); ?>" class="new-entry-title"><?php the_post_thumbnail( 'thumb75' ); ?></a>
                                            <?php else: // サムネイルを持っていないときの処理 ?>
                                            <a href="<?php the_permalink(); ?>" class="new-entry-title"><img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="NO IMAGE" title="NO IMAGE" height="75" /></a>
                                            <?php endif; ?>
                                        </div><!-- /.new-entry-thumb -->
                                        <div class="new-entry-content">
                                            <a href="<?php the_permalink(); ?>">
                                            <div class="side-post-title"><?php the_title(); ?></div>
                                            <div class="single-post-category">
                                                <?php the_category(' '); ?>
                                            </div>
                                            <h2 class="single-post-date"><?php the_time('F.d.Y'); ?></h2>
                                            <div class="sidebar-post-content"><?php echo mb_strimwidth( strip_tags( get_the_content() ), 0, 100, '…', 'UTF-8' ); ?></div>
                                            </a>
                                        </div><!-- /.new-entry-content -->
                                    </div><!-- /.new-entry -->
                                    <?php endwhile; endif; ?>
                                    <?php wp_reset_query(); ?>
                                    <br style="clear:both;">
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
            <div class="prev-next">
                <div class="prev col-md-6">
                    <?php previous_post_link('%link', '前の記事へ'); ?>
                </div>
                <div class="next col-md-6">
                    <?php next_post_link('%link', '次の記事へ'); ?>
                </div>
            </div>
            <?php get_footer(); ?>
        </div>