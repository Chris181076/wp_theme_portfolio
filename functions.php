<?php
function portfolio_thumbnail()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'portfolio_thumbnail');

if (! function_exists('portfolio_register_nav_menu')) {

    function portfolio_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_menu'  => __('Footer Menu', 'text_domain'),
        ));
    }
    add_action('after_setup_theme', 'portfolio_register_nav_menu', 0);
}

function my_load_scripts()
{
    wp_enqueue_script('custom_js', get_template_directory_uri() . "/js/custom.js", array(), '1.0.0', true);
    if (is_single('animation') || is_page('about')) {
        wp_enqueue_script('custom1_js', get_template_directory_uri() . "/js/custom1.js", array(), '1.0.0', true);
    }
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js',
        array(), // Pas de dépendance
        null,
        true // Charger dans le footer
    );
    wp_enqueue_script(
        'gsap-flip',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/Flip.min.js',
        array('gsap'), // Dépend de GSAP
        null,
        true
    );
    wp_enqueue_script(
        'popper-js',
        'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js',
        array('popper-js'),
        null,
        true
    );

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'splittext',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/SplitText.min.js',
        array('gsap'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'my_load_scripts');

function mytheme_enqueue_styles()
{

    if (is_single('carrousel')) {
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null);
    }

    wp_enqueue_style('theme-style', get_stylesheet_uri(), array('bootstrap-css'), filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function enqueue_lightbox_assets()
{
    wp_enqueue_style('lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css');
    wp_enqueue_script('lightbox-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_lightbox_assets');

