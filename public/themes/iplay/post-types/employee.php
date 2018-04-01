<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

register_extended_post_type('employee', [
        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'published' => [
                'title'       => 'Added on',
                'meta_key'    => 'date_added',
                'date_format' => 'Y/m/d'
            ],
            'genre' => [
                // 'taxonomy' => 'genre'
            ]
        ],

        # Add a dropdown filter to the admin screen:
        'admin_filters' => [
            'genre' => [
                // 'taxonomy' => 'genre'
            ]
        ],

        'supports' => [
            'page-attributes'
        ],

    ], [
        'singular' => 'Employee',
        'plural'   => 'Employees',
        'slug'     => 'employee'
    ]);
