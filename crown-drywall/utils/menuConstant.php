<?php
class menuSettings {
    const PRIMARY_MENU = array(
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
        // 'theme_location' => 'left-menu',
    );
    public static function renderPrimaryMenu($theme_location = 'left-menu'){
        $defaults = self::PRIMARY_MENU;
        $defaults['theme_location'] = $theme_location;
        wp_nav_menu($defaults);
    }
}
