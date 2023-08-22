<?php

function crownDrywall_widget_registration($name, $id, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle)
{
    register_sidebar(array(
        'name' => $name,
        'id' => $id,
        // 'description' => $description,
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}

function crownDrywall_multiple_widget_init()
{
    crownDrywall_widget_registration('Footer widget 1', 'footer-sidebar-1', '<div id="%1$s" class="widget %2$s">', '</div>', '<h6 class="widgettitle">', '</h6>');
    crownDrywall_widget_registration('Footer widget 2', 'footer-sidebar-2', '<div id="%1$s" class="widget %2$s">', '</div>', '<h6 class="widgettitle">', '</h6>');
    crownDrywall_widget_registration('Footer widget 3', 'footer-sidebar-3', '<div id="%1$s" class="widget %2$s">', '</div>', '<h6 class="widgettitle">', '</h6>');
    crownDrywall_widget_registration('Footer widget 4', 'footer-sidebar-4', '<div id="%1$s" class="widget %2$s">', '</div>', '<h6 class="widgettitle">', '</h6>');
}

add_action('widgets_init', 'crownDrywall_multiple_widget_init');