<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php wp_head(); ?>
</head>

<!-- HEADER -->

<header class="header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logoqd.jpg" alt="logo portfolio">
            </a>
        </div>
        <div class="nav">
            <ul class="nav-list">
                <?php
                wp_nav_menu(array(
                    'menu' => 'confiturecocotte',
                    'menu_class'     => 'header-menu',
                    'orderby'        => 'menu_order'
                ));
                ?>
            </ul>
        </div>
        <div class="menu-burger" id="menu-burger"><span class="material-icons">
                menu
            </span></div>
    </div>
</header>

<main>

    <section>