<?php

function custom_header_options()
{
    add_settings_section('header_section', 'Select Header', null, 'headers-options');
    add_settings_field('selected_header', 'Select Header Style', 'header_option_display', 'headers-options', 'header_section');
    register_setting("header_section", "selected_header");
}
add_action('admin_init', 'custom_header_options');

function header_option_display()
{
    $selected = get_option('selected_header');
?>
    <select name="selected_header">
        <option value="">Default Header</option>
        <option value="header1" <?php selected($selected, 'header1'); ?>>Header 1</option>
        <option value="header2" <?php selected($selected, 'header2'); ?>>Header 2</option>
        <option value="header3" <?php selected($selected, 'header3'); ?>>Header 3</option>
    </select>
<?php }

function selected_header_display()
{
    add_menu_page('Headers Options', 'Headers Options', 'manage_options', 'headers-options', 'header_settings_page', 'dashicons-admin-tools', 99);
}
add_action('admin_menu', 'selected_header_display');
function header_settings_page()
{
?>
    <div class="wrap">
        <h1>Theme Options</h1>
        <h2><?php _e('Default Header'); ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/default.PNG'; ?>" alt="">
        <h2><?php _e('Header One'); ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/header1.PNG'; ?>" alt="">
        <form method="post" action="options.php">
            <?php
            settings_fields("header_section");
            do_settings_sections("headers-options");
            submit_button();
            ?>
        </form>
    </div>
<?php
}