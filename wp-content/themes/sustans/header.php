<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <title>

        <?php
            if(wp_title('', false)){
                echo wp_title() . ' - ' ;
            }
        ?>

        <?= get_bloginfo(); ?>

    </title>
</head>
<body>

    <?php
    
        if(is_user_logged_in()){
            wp_admin_bar_render();
        }

        $menu_location = get_nav_menu_locations();
        $menuID = $menu_location['primary-menu'];
        $menuItems = wp_get_nav_menu_items($menuID);
        
    ?>

    <header>
        
        <a href="">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo_desk.png" alt="">
            <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/logo_mobile.png" alt="">
        </a>

        <label for="open_menu">
            <input type="checkbox" id="open_menu">
            <span>
                <i class="fa-solid fa-bars"></i>
            </span>
        </label>

        <nav>
            <ul>
                <?php
                    foreach($menuItems as $key => $value){
                        $title = $value->title;
                        $url = $value->url
                        ?>

                            <li>
                                <a href="<?php $url ?>"><?= $title ?></a>
                            </li>

                        <?php
                    }
                ?>
            </ul>

            <form action="">
                <input type="search" placeholder="Search">
                <button>
                <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>

        </nav>

        

    </header>
