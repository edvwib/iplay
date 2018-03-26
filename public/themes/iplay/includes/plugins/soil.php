<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/**
 * Clean up wp_head()
 *
 * Remove unnecessary <link>'s
 * Remove inline CSS and JS from WP emoji support
 * Remove inline CSS used by Recent Comments widget
 * Remove inline CSS used by posts with galleries
 * Remove self-closing tag
 */
add_theme_support('soil-clean-up');

/**
 * Remove version query string from all styles and scripts
 */
add_theme_support('soil-disable-asset-versioning');

// Move JS to footer
add_theme_support('soil-js-to-footer');

/*
 * Before: the_permalink(); => http://www.example.com/page-or-post/
 * After:  the_permalink(); => /page-or-post/
 */
add_theme_support('soil-relative-urls');
