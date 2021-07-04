<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="import shop in Higashihiroshima">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="http://loak.local/wp-content/themes/roak-project/style.css" type="text/css">
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