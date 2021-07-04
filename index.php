<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="import shop in Higashihiroshima">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="http://loak.local/wp-content/themes/loak-webpage/style.css" type="text/css">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="menus">
                <div class="nomal-menu">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-menu',
                            )
                        );
                    ?>
                </div>
                <div class="hamburger-menu">
                    <nav id="s-navi" class="pcnone">
                        <div id="nav-drawer">
                            <input id="nav-input" type="checkbox" class="nav-unshown">
                            <label id="nav-open" for="nav-input"><span></span></label>
                            <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                            <div id="nav-content">
                                <div class="hamburger-top">MENU<label class="cancel" for="nav-input"></label></div>
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-menu',
                                        )
                                    );
                                ?>
                            </div>
                        </div>

                    </nav>
                </div>
            </div>
        </header>
        <div class="top-wrapper">
            <div class="top-photos">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wilsan-u-aiUIs74ejx8-unsplash.jpg" height=900px width=100%>
                <!-- <img src="images/lisheng-chang-m9BBVrPl87M-unsplash.jpg" height=900px width=100%>
                <img src="images/frida-aguilar-estrada-_ffkj8TnuGo-unsplash.jpg" height=900px width=100%>
                <img src="alin-meceanu-7WImcXVzyHk-unsplash.jpg" height=900px width=100%> -->
            </div>
            <div class="top-texts">
                <p>アジアの色・香・味を楽しめる癒しの空間</p>
                <h2>地球雑貨</h2>
                <h1>ろーく</h1>
            </div>
        </div>
        <main>
            <div class="news-wrapper">
                <div class="container">
                    <h1 class="contents-main-title">News & Event</h1>
                    <h2 class="contents-sub-title">お知らせ</h2>
                    <div class="posts-container">
                        <div class="posts">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="post">
                                <a href="#">
                                    <div class="blog-pic">
                                    <?php the_post_thumbnail(); ?>
                                    </div>
                                    <h2 class="post-category">イベント</h2>
                                    <h2 class="post-date"><?php the_time('F.d.Y'); ?></h2>
                                    <h1 class="post-title"><?php the_title(); ?></h1>
                                    <P class="post-content"><?php echo mb_strimwidth( strip_tags( get_the_content() ), 0, 400, '…', 'UTF-8' ); ?></P>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="pagenation">
                        <?php
                            $args = array(
                                'mid_size' => 1,
                                'prev_text' => '&lt;&lt;prev',
                                'next_text' => 'next&gt;&gt;',
                                'screen_reader_text' => ' ',
                            );
                            the_posts_pagination($args);
                        ?>
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
                        <a href="#" class="text-underline-hover">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/img004.jpg">
                            <p>Owner Blog</p>
                        </a>
                    </div>
                    <div class="blog-link kaori-blog">
                        <a href="#" class="text-underline-hover">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/9F65.tmp.jpg">
                            <p>Kaori Blog</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="concept-wrapper">
                <div class="concept-title">
                    <h1 class="contents-main-title concept-title">Concept</h1>
                    <h2 class="contents-sub-title concept-title">コンセプト</h2>
                </div>
                <h2 class="concept-main-text">ろーくとはタイ語で「世界（地球）」という意味です</h2>
                <p class="concept-sub-text">店名の「ろーく」は店主の古くからの友人<br>多田チャニントーン氏からいただきました。<br>タイの古都、スコータイご出身で、<br>広島日タイ友好教会副会長としてもご活躍中の方です。</p>
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
                                class="concept-content-img">
                                <div class="idea-text concept-content-text">
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
            <div class="service-wrapper">
                <div class="service-title-wrapper">
                    <h1 class="contents-main-title  service-title-main">Service</h1>
                    <h2 class="contents-sub-title service-title-sub">お取り扱い</h2>
                </div>
                <div class="item-list">
                    <h1 class="item-list-title">○ Item List ○</h1>
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
                                        <p>店長でスピリチュアルセラピストのKAORIによる個人セッションや<br>クリスタルとアロマを使用するトリートメントは、<br>ろーくの母屋…龍の間にて受けられます。</p>
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
            <div class="location-wrapper">
                <div class="container">
                    <h1 class="contents-main-title title-location">Location</h1>
                    <h2 class="contents-sub-title">店舗案内</h2>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/roke-map.png" class="roke-map">
                    <div class="location-texts">
                        <h1>○住所○</h1>
                        <p>739-0034<br>広島県東広島市西条町大沢68-1</p>
                        <h1>○交通情報○</h1>
                        <p>JRバス停（三升腹）徒歩３分<br>新幹線口から　車５分<br>西条駅から　車１５分</p>
                        <h1>○営業時間○</h1>
                        <p>10:00~19:00</p>
                        <h1>○定休日○</h1>
                        <p>毎週木曜日</p>
                        <h1>○お問い合わせ○</h1>
                        <p>Tel: 082-420-2077<br>Mail: robikichi@yahoo.co.jp</p>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-wrapper">
                <div class="footer-container">
                    <div class="shop-title">
                        <div class="shop-sub-title">
                            <p>アジアの色・香・味を楽しめる癒しの空間</p>
                        </div>
                        <div class="shop-main-title">
                            <h2>地球雑貨</h2>
                            <h1>ろーく</h1>
                        </div>
                    </div>
                    <div class="menu-and-logo">
                        <div class="menu-list">
                            <p>ホーム</p>
                            <p>お知らせ</p>
                            <p>コンセプト</p>
                            <p>お取り扱い</p>
                            <p>店舗案内</p>
                        </div>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/20210501_173253_983.jpg " class="logo">
                    </div>
                    <div class="sns-icons">
                        <a href="#" class="text-underline-hover"><i class="fab fa-instagram sns-icon instagram"></i></a>
                        <div class="facebook owner-facebook">
                            <a href="#" class="text-underline-hover"><i class="fab fa-facebook-f sns-icon"></i></a>
                            <p>Owner</p>
                        </div>
                        <div class="facebook kaori-facebook">
                            <a href="#" class="text-underline-hover"><i class="fab fa-facebook-f sns-icon"></i></a>
                            <p>Kaori</p>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>Copyright © chikyuzakka Loac</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/779dc48fa9.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>