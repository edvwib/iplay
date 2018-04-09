<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

$theappFields = [
    acf_group([
        'name' => 'upcoming',
        'label' => 'The app, upcoming features',
        'sub_fields' => [
            acf_text([
                'name' => 'title',
                'label' => 'Title',
                'instructions' => 'Title for the upcoming features.',
                'required' => false,
            ]),

            //repeater here with features
        ],
    ]),

    acf_group([
        'name' => 'about',
        'label' => 'About the app',
        'sub_fields' => [
            acf_text([
                'name' => 'title',
                'label' => 'Title',
                // 'instructions' => 'Title.',
                'required' => false,
            ]),
            acf_wysiwyg([
                'name' => 'body',
                'label' => 'Body',
                'instructions' => 'More in-depth information about the app goes here.',
                'required' => false,
            ]),

            // repeater here for image slideshow maybe
            acf_image([
                'name' => 'image',
                'label' => 'Image',
                'instructions' => 'This image will be displayed below the body.',
                'required' => false,
                'mime_types' => '.jpg, .jpeg, .png, .svg',
                'return_value' => 'object',
            ]),
        ],
    ]),
];

$theappLocation = [
    [
        acf_location('page_template', 'page-templates/the-app.php')
    ]
];

acf_field_group([
    'title' => 'The app',
    'fields' => $theappFields,
    'style' => 'seamless',
    'location' => $theappLocation,
    'hide_on_screen' => [
        0 => 'the_content',
    ],
]);
