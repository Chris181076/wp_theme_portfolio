<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url");?>">
    <?php wp_head(); ?>
</head>
<body>
<header id="navbar">
<div id="nameBar">
        <a href="<?php echo get_home_url(); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2025/04/Lutopia__6_-removebg-preview.webp" alt="logo"></a>
        <p class="name">Christelle Web Developper</p>
    </div>
    <div id="buttonsBar">
    <?php 
    wp_nav_menu( array(
        'theme_location'  => 'primary_menu',
        'container'       => false, // Pas de div autour
        'menu_class'      => 'menu', // Classe UL
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'link_before'     => '<span>', // Ajouter un span autour du texte des liens
        'link_after'      => '</span>', // Fermer le span
        'depth'           => 5  // Affichage des sous-menus (0 pour tous les niveaux)
    ) );
    ?>
</div>
</header>

