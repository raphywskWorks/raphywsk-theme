<?php

/*

@package raphywsk-theme

*/

function rap_add_admin_page() 
{
    add_menu_page(
        'Rap Theme Options', 'Raphywsk', 'manage_options', 'raphywsk-theme', 'rap_create_page', 'dashicons-laptop'
    );
}

function rap_create_page() 
{

}

add_action('admin_menu', 'rap_add_admin_page');

