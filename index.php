<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="import shop in Higashihiroshima">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
        <link rel="stylesheet" href="http://loak.local/wp-content/themes/roak-project/style.css" type="text/css">
        <script src="https://kit.fontawesome.com/779dc48fa9.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="all-wrapper">
            <?php get_header(); ?>
            <div class="top-wrapper">
                <a id="home-from-footer"></a>
                <a id="home-title"></a>
                    <div class="top-photos">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wilsan-u-aiUIs74ejx8-unsplash.jpg" height=900px width=100%>
                    </div>
                <div class="top-texts">
                    <p>アジアの色・香・味を楽しめる癒しの空間</p>
                    <h2>地球雑貨</h2>
                    <h1>ろーく</h1>
                </div>
            </div>
            <a id="news-event-from-footer"></a>
            <a id="news-event-title"></a>
            <main>
                <div class="news-wrapper">
                    <div class="container">
                        <h1 class="contents-main-title">News & Event</h1>
                        <h2 class="contents-sub-title">お知らせ</h2>
                        <div class="kanren">
                            <?php
                            $kanrenpost_no = 10; //表示したい記事数
                            $categories = get_the_category( $post->ID );
                            $category_ID = array();
                            foreach ( $categories as $category ):
                                array_push( $category_ID, $category->cat_ID );
                            endforeach;
                            $args = array(
                                'post__not_in' => array( $post->ID ),
                                'posts_per_page' => $kanrenpost_no,
                                'category__in' => $category_ID,
                                'orderby' => 'DESC',
                            );
                            $st_query = new WP_Query( $args ); ?>
                        </div>
                        <div class="posts">
                        <?php query_posts('posts_per_page=5&ignore_sticky_posts=1'); ?>
                            <?php
                            if ( $st_query->have_posts() ): ?>
                            <div class="mainvisual">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                    <?php
                                    while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
                                    <!-- 実装部分 -->
                                    <!-- 各スライド -->
                                        <div class="swiper-slide">
                                            <ul class="clearfix">
                                            <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
                                                <a href="<?php the_permalink() ?>" class="post-pic"><?php the_post_thumbnail( 'medium' ); ?></a>
                                                <?php else: // サムネイルを持っていないときの処理 ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="100" height="100" />
                                                <?php endif; ?>
                                                <div class="kanren-title">
                                                    <li>
                                                        <a href="<?php the_permalink() ?>">
                                                        <div class="post-category">
                                                            <?php the_category(' '); ?>
                                                        </div>
                                                        <h2 class="post-date"><?php the_time('F.d.Y'); ?></h2>
                                                        <h1 class="post-title"><?php the_title(); ?></h1>
                                                        <div class="post-content"><?php echo mb_strimwidth( strip_tags( get_the_content() ), 0, 150, '…', 'UTF-8' ); ?></div>
                                                        </a>
                                                    </li>
                                                </div>
                                            </ul>
                                        </div>
                                    <?php endwhile; ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <?php else: ?>
                            <p>関連記事はありませんでした</p>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <div class="blog-wrapper">
                    <div class="container">
                        <h1 class="contents-main-title">Blog</h1>
                        <h2 class="contents-sub-title">ブログ</h2>
                        <p class="blog-info">オーナー・店長によるブログもございます<br>ろーくの日常はこちらから</p>
                    </div>
                    <div class="blog-links">
                        <div class="blog-link owner-blog">
                            <a href="https://ameblo.jp/hanayaginaokazusato22" target="_blank" rel="noopener noreferrer">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img004.jpg">
                                <p>Owner Blog</p>
                            </a>
                        </div>
                        <div class="blog-link kaori-blog">
                            <a href="https://ameblo.jp/lm084622" target="_blank" rel="noopener noreferrer">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/9F65.tmp.jpg">
                                <p>Kaori Blog</p>
                            </a>
                        </div>
                    </div>
                </div>
                <a id="concept-from-footer"></a>
                <a id="concept-title"></a>
                <div class="concept-wrapper">
                    <div class="concept-title">
                        <h1 class="contents-main-title concept-title">Concept</h1>
                        <h2 class="contents-sub-title concept-title">コンセプト</h2>
                    </div>
                    <h2 class="concept-main-text">ろーくとはタイ語で「世界（地球）」という意味です</h2>
                    <p class="concept-sub-text">店名の「ろーく」は店主の古くからの友人<br>多田チャニントーン氏からいただきました。<br>タイの古都、スコータイご出身で、<br>広島日タイ友好教会副会長としてもご活躍中の方です</p>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="concept-more">
                                <h2>More</h2>
                                <p>詳細</p>
                            </div>
                        </button>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="concept-content history">
                                    <div class="history-text concept-content-text">
                                        <h1>History</h1>
                                        <P>これまでも雑貨やインテリアには興味があり<br>海外にも縁がありましたが<br>中でも度々訪れるタイの文化、異文化との美しい調和、<br>発展していく姿に魅了されて<br>タイ雑貨を扱うお店をオープンさせました</P>
                                    </div>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_173243_778.jpg" class="concept-content-img">
                                </div>
                                <div class="concept-content idea">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_173527_125.jpg"
                                    class="concept-content-img idea-img">
                                    <div class="concept-content-text idea-text">
                                        <h1>Idea</h1>
                                        <P>人間が生活していくうえで必需品ではない雑貨ですが<br>雑貨は人の心や日常を色鮮やかに<br>そして豊かにするスパイスであり、癒しです<br>タイから離れた日本でも<br>この隠れ家でアジアの文化や安らぎを感じていただけます</P>
                                    </div>
                                </div>
                                <div class="concept-content vision">
                                    <div class="vision-text concept-content-text">
                                        <h1>Vision</h1>
                                        <P>さらに癒しの空間でのヒーリング・セラピーにより<br>お客様の心身のケアにも携わると共に<br>癒しを提供することを目指します<br>お店やイベント通じて人や地域の壁をなくし<br>国と国との国境を越えて心の交流が出来るような<br>架け橋となっていきます</P>
                                    </div>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/felix-lindvik-eW98E7X1QfE-unsplash (1).jpg" class="concept-content-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a id="service-from-footer"></a>
                <a id="service-title"></a>
                <div class="service-wrapper">
                    <div class="service-title-wrapper">
                        <h1 class="contents-main-title  service-title-main">Service</h1>
                        <h2 class="contents-sub-title service-title-sub">お取り扱い</h2>
                    </div>
                    <div class="item-list">
                        <h1 class="item-list-title">Item List</h1>
                        <div class="item-category">
                            <h2>アジアン雑貨</h2>
                            <h2>天然石</h2>
                            <h2>天使＆魔法のアイテム</h2>
                            <h2>ヒーリングセラピー・トリートメント</h2>
                            <h2>イベント・教室</h2>
                        </div>
                        <button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="detaile">
                                <h2>Detaile</h2>
                                <p>詳細</p>
                            </div>
                        </button>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="item">
                                    <div class="item-text">
                                        <div class="item-text-title">
                                            <h1>アジアン雑貨</h1>
                                            <p>タイに直接買付に行ったもの、<br>タイ現地よりオンラインを利用してセレクトしたもの、<br>様々な品をお取り扱いしております
                                            </p>
                                            <p>旬な雑貨<br>衣料<br>アクセサリー<br>オーガニックなコスメ<br>スキンケアグッズ　etc…</p>
                                        </div>
                                    </div>
                                    <div class="item-images">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_182403_485.jpg">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_182618_095.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-text">
                                        <div class="item-text-title">
                                            <h1>天然石</h1>
                                            <p>店長でスピリチュアルセラピストのKAORIが選び抜いた天然石<br>オリジナルで1点ものハンドメイドの天然石アクセサリーは<br>お客様のエネルギーに合わせてお作りします</p>
                                        </div>
                                    </div>
                                    <div class="item-images">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/IMG_20210410_112422_514.jpg">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_182425_245.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-text">
                                        <div class="item-text-title">
                                            <h1>天使＆魔法のアイテム</h1>
                                            <p>天使や魔法関連のアイテムはオラクルカード、タロットカード、<br>魔除け•浄化ツール、ヒーリングキャンドルなど他では手に入らないものも…</p>
                                        </div>
                                    </div>
                                    <div class="item-images">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_182731_032.jpg">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/A8D646F1-1D7F-411B-A2C0-E39629EC2B85.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-text">
                                        <div class="item-text-title">
                                            <h1>ヒーリング•セラピー•トリートメント</h1>
                                            <p>店長でスピリチュアルセラピストのKAORIによる個人セッションや<br>クリスタルとアロマを使用するトリートメントは、<br>ろーくの母屋…龍の間にて受けられます</p>
                                        </div>
                                    </div>
                                    <div class="item-images">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/S__140648494.jpg">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_182818_917.jpg">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-text">
                                        <div class="item-text-title">
                                            <h1>イベント•教室</h1>
                                            <p>•年に3回は【ドラゴンヒーリングフェア】<br>•数日間連続で「癒やし」「自然」をテーマにしたイベント<br>•春分、夏至、秋分、冬至、満月や新月に合わせてお茶会やバザール、ヒーリングイベント<br>•オラクルカードリーディング教室<br>•アクセサリー教室など</p>
                                        </div>
                                    </div>
                                    <div class="item-images">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_190606_216.jpg">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_190616_391.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a id="location-from-footer"></a>
                <a id="location-title"></a>
                <div class="location-wrapper">
                    <div class="container">
                        <h1 class="contents-main-title title-location">Location</h1>
                        <h2 class="contents-sub-title">店舗案内</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3292.892102860781!2d132.7301543152585!3d34.3786644079048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35506e441c781fdb%3A0xab7ae2f50254ec8a!2z5Zyw55CD6ZuR6LKo44KN44O844GP!5e0!3m2!1sja!2sjp!4v1628041077319!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="location-texts">
                            <h1>住所</h1>
                            <p>739-0034<br>広島県東広島市西条町大沢68-1</p>
                            <h1>交通情報</h1>
                            <p>JRバス停（三升腹）徒歩３分<br>新幹線口から　車５分<br>西条駅から　車１５分</p>
                            <h1>営業時間</h1>
                            <p>10:00~19:00</p>
                            <h1>定休日</h1>
                            <p>毎週木曜日</p>
                            <h1>お問い合わせ</h1>
                            <p>Tel: 082-420-2077<br>Mail: robikichi@yahoo.co.jp</p>
                        </div>
                    </div>
                </div>
            </main>
            <?php get_footer(); ?>
        </div>
