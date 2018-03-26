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

add_action('after_setup_theme', function () {
    if (is_admin()) {
        show_admin_bar(true);
    }
});
