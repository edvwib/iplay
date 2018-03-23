<?php
declare(strict_types=1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

// Require Advanced Custom Fields
require template_path('includes/plugins/acf.php');

add_action('after_setup_theme', function () {
    if (is_admin())
        show_admin_bar(true);


});
