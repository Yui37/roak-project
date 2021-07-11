<header>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
    <div class="menus">
        <div class="nomal-menu">
            <ul class="menu">
                <li class="menu-item home">
                    <a href="#home-title">
                        <h1>Home</h1>
                        <p>ホーム</p>
                    </a>
                </li>
                <li class="menu-item news-event">
                    <a href="#news-event-title">
                        <h1>News&Event</h1>
                        <p>お知らせ</p>
                    </a>
                </li>
                <li class="menu-item concrpt">
                    <a href="#concept-title">
                        <h1>Concept</h1>
                        <p>コンセプト</p>
                    </a>
                </li>
                <li class="menu-item service">
                    <a href="#service-title">
                        <h1>Service</h1>
                        <p>お取り扱い</p>
                    </a>
                </li>
                <li class="menu-item location">
                    <a href="#location-title">
                        <h1>Location</h1>
                        <p>店舗案内</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="hamburger-menu">
            <nav id="s-navi" class="pcnone">
                <div id="nav-drawer">
                    <input id="nav-input" type="checkbox" class="nav-unshown">
                    <label id="nav-open" for="nav-input"><span></span></label>
                    <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                    <div id="nav-content">
                        <div class="hamburger-top">MENU<label class="cancel" for="nav-input"></label></div>
                        <ul class="menu">
                            <li class="menu-item home">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <h1>Home</h1>
                                    <p>ホーム</p>
                                </a>
                            </li>
                            <li class="menu-item news-event">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <h1>News&Event</h1>
                                    <p>お知らせ</p>
                                </a>
                            </li>
                            <li class="menu-item concrpt">
                                <a href="#concept-title">
                                    <h1>Concept</h1>
                                    <p>コンセプト</p>
                                </a>
                            </li>
                            <li class="menu-item service">
                                <a href="#service-title">
                                    <h1>Service</h1>
                                    <p>お取り扱い</p>
                                </a>
                            </li>
                            <li class="menu-item location">
                                <a href="#location-title">
                                    <h1>Location</h1>
                                    <p>店舗案内</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>