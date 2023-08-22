<?php

function woodmart_child_enqueue_styles()
{
    $timestamp = current_datetime()->format('Y-m-d H:i:s');
    $style_url = get_stylesheet_directory_uri() . '/style.css?' . $timestamp;
    wp_enqueue_style('child-style', $style_url, array('parent-style'));
}
add_action('wp_enqueue_scripts', 'woodmart_child_enqueue_styles');

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');

include(get_stylesheet_directory() . '/customizer-utils.php');
include(get_stylesheet_directory() . '/cpt-utils.php');

if (!function_exists('crownDrywallCustomScripts')) {
	function crownDrywallCustomScripts()
	{
		wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js',  array('jquery'), null, true);
	}
	add_action('wp_enqueue_scripts', 'crownDrywallCustomScripts');
}

function custom_multiple_cpt() {
    require_once CUSTOM_CPT_FILE_DIR;
    $custom_cpt_for_all = new Custom_Cpt_ForAll();
    $custom_cpt_for_all->create_custom_post_cpt('Home slider', 'home-slider', 'Home slider', 'dashicons-images-alt2');
    $custom_cpt_for_all->create_custom_post_cpt('Our Services', 'services', 'Our Services', 'dashicons-admin-generic');
    $custom_cpt_for_all->create_custom_post_cpt('Our Testimonials', 'testimonials', 'Our Testimonials', 'dashicons-images-alt');
}

add_action('init', 'custom_multiple_cpt');


function acf_gallery_loop()
{
    $images = get_field('slider_gallery');
    if ($images) : ?>
        <div class="gallery_slider">
            <?php foreach ($images as $image_id) : ?>
                <div class="gallery_slider_inner">
                    <img src="<?php echo $image_id; ?>" class="img-fluid" />
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif;
}
add_shortcode('gallery_code', 'acf_gallery_loop');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options-all',
        'capability'    => false,
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Areas Serve',
        'menu_title'    => 'Areas Serve',
        'parent_slug'   => 'theme-options-all',
    ));
}


