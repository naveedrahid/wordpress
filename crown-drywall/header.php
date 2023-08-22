<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CROWN_DRYWALL
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <style>
        body {
            font-family: "<?php echo get_theme_mod('font_family_setting', 'Arial, sans-serif'); ?>", sans-serif;
            font-size: <?php echo get_theme_mod('font_size_setting', '16px'); ?>;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
    require_once MENU_FILE_DIR;
    $selected_header = get_option('selected_header');
    if (!empty(SELECTED_HEADER)) {
        if (SELECTED_HEADER === 'header1') {
            get_template_part('header1');
        } elseif (SELECTED_HEADER === 'header2') {
            get_template_part('header2');
        } elseif (SELECTED_HEADER === 'header3') {
            get_template_part('header3');
        }
    } else {

    ?>
        <?php //wp_body_open(); 
        ?>
        <div id="page" class="site">

            <header class="mainHeader">
                <div class="topnav d-flex justify-content-end">
                    <div class="infoBox d-none d-lg-block">
                        <i class="fa-solid fa-clock"></i>
                        <span>Monday - Friday, 8AM to 5PM</span>
                    </div>
                </div>
                <nav class="navbar-expand-lg">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="logoCenter headCol d-lg-none d-md-block">
                            <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
                        </div>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                            <div class="leftMenu headCol">
                                <?php
                                    $defaults = array(
                                        'container'            => 'ul',
                                        'container_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                                        'container_id'         => '',
                                        'container_aria_label' => '',
                                        'menu_class'           => 'menu',
                                        'menu_id'              => '',
                                        'echo'                 => true,
                                        'before'               => '',
                                        'after'                => '',
                                        'link_before'          => '',
                                        'link_after'           => '',
                                        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'theme_location' => 'left-menu',
                                    );
                                    wp_nav_menu($defaults);
                                ?>

                            </div>
                            <div class="logoCenter headCol d-none d-lg-block">
                                <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
                            </div>
                            <div class="rightMenu headCol">
                                <?php
                                $defaults = array(
                                    'container'            => 'ul',
                                    'container_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                                    'container_id'         => '',
                                    'container_aria_label' => '',
                                    'menu_class'           => 'menu',
                                    'menu_id'              => '',
                                    'echo'                 => true,
                                    'before'               => '',
                                    'after'                => '',
                                    'link_before'          => '',
                                    'link_after'           => '',
                                    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'theme_location' => 'right-menu',
                                );
                                wp_nav_menu($defaults);
                                ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        <?php } ?>