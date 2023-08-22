<?php 

class Custom_Cpt_ForAll {

    public function create_custom_post_cpt( $labelName, $cptSlug, $fullName, $icon ) {

        $labels = array(
            'name' => _x( $labelName, 'Post Type General Name' ),
            'singular_name' => _x( $labelName, 'Post Type Singular Name' ),
            'menu_name' => _x( $labelName, 'Admin Menu text' ),
            'name_admin_bar' => _x( $labelName, 'Add New on Toolbar' ),
            'archives' => __( $labelName . ' Archives' ),
            'attributes' => __( $labelName . 'Attributes' ),
            // 'parent_item_colon' => __( 'Parent Slider Painting:'),
            'all_items' => __( $labelName ),
            'add_new_item' => __( 'Add New ' . $labelName ),
            'add_new' => __( 'Add New' ),
            'new_item' => __( 'New ' . $labelName ),
            'edit_item' => __( 'Edit ' . $labelName ),
            'update_item' => __( 'Update ' . $labelName ),
            'view_item' => __( 'View ' . $labelName ),
            'view_items' => __( 'View' . $labelName ),
            'search_items' => __( 'Search ' . $labelName ),
            'not_found' => __( 'Not found' ),
            'not_found_in_trash' => __( 'Not found in Trash' ),
            'featured_image' => __( 'Featured Image' ),
            'set_featured_image' => __( 'Set featured image' ),
            'remove_featured_image' => __( 'Remove featured image' ),
            'use_featured_image' => __( 'Use as featured image' ),
            'insert_into_item' => __( 'Insert into' . $labelName ),
            'uploaded_to_this_item' => __( 'Uploaded to this' . $labelName ),
            'items_list' => __( 'Sliders list' ),
            'items_list_navigation' => __( $labelName . ' list navigation' ),
            'filter_items_list' => __( 'Filter ' . $labelName . ' list' ),
        );
        $rewrite = array(
            'slug' => $cptSlug,
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        );
        $args = array(
            'label' => __( $fullName ),
            'description' => __( '' ),
            'labels' => $labels,
            'menu_icon' => $icon,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields' ),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'exclude_from_search' => true,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'rewrite' => $rewrite,
        );
        register_post_type( $cptSlug, $args );
    }
}
?>