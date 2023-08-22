<?php 

function crownDrywall_customize_register($wp_customize) {
    $wp_customize->add_section('crownDrywall_theme_options', array(
        'title' => __('Theme Options'),
        'priority' => 10,
    ));

    $wp_customize->add_setting('copy_right', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field', 
    ));

    $wp_customize->add_control('copy_right', array(
        'label' => __('Add Copy Right'),
        'section' => 'crownDrywall_theme_options',
        'type' => 'text',
    ));
    $social_platforms = array(
        'facebook' => __('Facebook URL'),
        'instagram' => __('Instagram URL'),
        'twitter' => __('Twitter URL'),
        'linkedin' => __('LinkedIn URL'),
        'youtube' => __('YouTube URL'),
    );
    
    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting('social_url_' . $platform, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
    
        $wp_customize->add_control('social_url_' . $platform, array(
            'label' => $label,
            'section' => 'crownDrywall_theme_options',
            'type' => 'url',
        ));
    }
    
    $wp_customize->add_section('crownDrywall_contact_options', array(
        'title' => __('Contact Details'),
        'priority' => 10,
    ));

    $wp_customize->add_setting('theme_address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('theme_address', array(
        'label' => __('Address'),
        'section' => 'crownDrywall_contact_options',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('theme_phone_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('theme_phone_number', array(
        'label' => __('Phone Number'),
        'section' => 'crownDrywall_contact_options',
        'type' => 'text',
    ));

    $wp_customize->add_setting('theme_email', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('theme_email', array(
        'label' => __('Email'),
        'section' => 'crownDrywall_contact_options',
        'type' => 'email',
    ));

    $google_fonts = wp_remote_get('https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBMcaEF6aZ2gWU_5jH4vv7G5rLW7OG2RL0');
    $google_fonts = wp_remote_retrieve_body($google_fonts);
    $google_fonts = json_decode($google_fonts);
    
    $font_choices = array();
    foreach ($google_fonts->items as $font) {
        $font_choices[$font->family] = $font->family;
    }
    
    $wp_customize->add_setting('font_family_setting', array(
        'default' => 'Arial, sans-serif',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('font_family_control', array(
        'label' => __('Font Family'),
        'section' => 'crownDrywall_contact_options',
        'settings' => 'font_family_setting',
        'type' => 'select',
        'choices' => $font_choices,
    ));
}
add_action('customize_register', 'crownDrywall_customize_register');






