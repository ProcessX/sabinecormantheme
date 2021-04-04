<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar">
            <ul class="link__li">
                <li class="link__el link__el--logo">
                    <a href="<?php echo get_home_url(); ?>" class="link withCounter">Accueil</a>
                </li>
                <li class="link__el">
                    <a href="<?php echo get_home_url(); ?>#work" class="link link--animated withCounter">Travaux</a>
                </li>
                <li class="link__el">
                    <a href="<?php echo get_home_url(); ?>#artist" class="link link--animated withCounter">L'artiste</a>
                </li>
                <li class="link__el">
                    <a href="<?php echo get_home_url(); ?>#contact" class="link link--animated withCounter">Contact</a>
                </li>
                <li class="link__el">
                    <a href="<?php echo get_home_url(); ?>#book" class="link link--animated withCounter">livres</a>
                </li>
            </ul>
        </nav>

        <button class="btn btn--burger">Menu</button>
    </header>