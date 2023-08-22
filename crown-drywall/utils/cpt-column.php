<?php

function custom_shortcode_column_head($columns) {
    $columns['shortcode'] = 'Shortcode';
    return $columns;
}
add_filter('manage_cms-block_posts_columns', 'custom_shortcode_column_head');

function custom_shortcode_column_content($column_name, $post_id) {
    if ($column_name === 'shortcode') {
        $shortcode = "[cms-code id='$post_id']";
        echo esc_html($shortcode);
    }
}
add_action('manage_cms-block_posts_custom_column', 'custom_shortcode_column_content', 10, 2);

function cms_code_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => '',
    ), $atts);

    $post_id = intval($atts['id']);

    $post = get_post($post_id);

    if ($post) {
        return apply_filters('the_content', $post->post_content);
    }

    return ''; 
}
add_shortcode('cms-code', 'cms_code_shortcode');