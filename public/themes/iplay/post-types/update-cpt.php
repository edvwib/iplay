<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

register_extended_post_type('Update', [
    'admin_cols' => [
        'story_published' => [
            'title'       => 'Published',
            'meta_key'    => 'published_date',
            'date_format' => 'Y/m/d'
        ],
        'story_genre' => [
            'taxonomy' => 'category'
        ],
    ], [
		# Override the base names used for labels:
		'singular' => 'Update',
		'plural'   => 'Updates',
		'slug'     => 'update',
    ]
]);

register_extended_taxonomy('category', 'update', [
    'labels' => [
        'name' => 'Categories',
        'singular_name' => 'Category',
        'menu_name' => 'Categories'
    ]
]);

