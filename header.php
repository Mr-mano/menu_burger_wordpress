<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<header>

<div class="bloc-top" style="background-image:url('<?php the_post_thumbnail_url('full')?>')">
        <span class="portfolio">Portfolio</span>
                <div class="container-name">
                    <span class="prenom">MANO</span>
                    <span class="nom">QUERE</span>
                </div>
            <div class="container-qualification">
                <span class="qualif">Developpeur Web</span>
                <span class="qualif2">Graphiste - Illustrateur</span>
            </div>
</div>


</header>
<nav id="navbar" >
    <?php wp_nav_menu(array('theme_location' => 'menu-principal','container' => 'nav',)); ?>
</nav>

<div class="container_burger">
    <span class="menu-burger">MENU</span>
</div>

<button class="nav-toggle" style="outline: none;"><span></span></button>
    