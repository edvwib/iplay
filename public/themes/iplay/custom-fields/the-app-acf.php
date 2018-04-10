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
            acf_repeater([
                'name' => 'feature_timeline',
                'label' => 'Features timeline',
                'sub_fields' => [
                    acf_text([
                        'name' => 'title',
                        'label' => 'Title',
                        'instructions' => 'The main keyword for the feature.',
                        'required' => false,
                    ]),
                    acf_date_picker([
                        'name' => 'date',
                        'label' => 'Date',
                        'instructions' => 'The date the feature will become available. You can also have previous features here as well.',
                        'required' => false,
                    ]),
                ]
            ]),
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
            acf_textarea([
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
