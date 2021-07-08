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