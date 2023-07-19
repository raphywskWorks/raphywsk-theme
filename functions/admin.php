<?php

/*

@package raphywsk-theme

*/

function rap_add_admin_page() 
{
    //Generate Raphywsk admin page
    add_menu_page(
        'Rap Theme Options', 
        'Raphywsk', 
        'manage_options', 
        'raphywsk_theme', 
        'rap_create_page', 
        'dashicons-laptop'
    );

    //Generate Sub Pages
    add_submenu_page(
        'raphywsk_theme', 
        'Rap Theme Options', 
        'Settings', 
        'manage_options', 
        'raphywsk_theme', 
        'rap_create_page'
    );

    add_submenu_page(
        'raphywsk_theme', 
        'Rap CSS Options', 
        'Custom CSS', 
        'manage_options', 
        'raphywsk_theme_css', 
        'rap_theme_css_options'
    );

}

function rap_create_page() 
{
    require_once(get_template_directory() . '/templates/raphywsk_settings.php');
}

function rap_theme_css_options()
{

}

add_action('admin_menu', 'rap_add_admin_page');

