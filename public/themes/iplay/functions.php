<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

// Require Advanced Custom Fields
require template_path('includes/plugins/acf.php');

// Require Soil
require template_path('includes/plugins/soil.php');

// Require extended-cpts
require template_path('includes/plugins/extended-cpts.php');

add_action('after_setup_theme', function () {
    if (is_admin()) {
        show_admin_bar(true);
    }
});


// Remove default post type from WordPress Dashboard
add_action('admin_menu', 'customprefix_remove_default_post_type_menu_item');
function customprefix_remove_default_post_type_menu_item()
{
    remove_menu_page('edit.php');
}



// Rename title on custom post types
add_filter('enter_title_here', 'change_default_title');
function change_default_title($title)
{
    $screen = get_current_screen();

    if ('employee' == $screen->post_type) {
        $title = 'Full name here';
    } elseif ('custom_post_type_2' == $screen->post_type) {
        $title = 'CPT2 New Title';
    } elseif ('custom_post_type_3' == $screen->post_type) {
        $title = 'CPT3 New Title';
    }
    return $title;
}
