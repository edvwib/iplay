<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

$updateFields = [
    acf_group([
        'name' => 'update',
        'label' => 'Update post',
        'sub_fields' => [
            acf_image([
                'name' => 'image',
                'label' => 'image',
                'instructions' => 'This image will be displayed below the title on the post.',
                'required' => false,
                'mime_types' => '.jpg, .jpeg, .png, .svg',
                'return_value' => 'object',
            ]),
            acf_text([
                'name' => 'title_secondary',
                'label' => 'Secondary title',
                'instructions' => 'This title will be displayed below the image.',
                'required' => false,
            ]),
            acf_textarea([
                'name' => 'body',
                'label' => 'Body',
                'instructions' => 'The main content of the post.',
                'required' => true,
            ]),
        ],
    ]),
];

$updateLocation = [
    [
        acf_location('post_type', 'update')
    ]
];

acf_field_group([
    'title' => 'update',
    'fields' => $updateFields,
    'style' => 'seamless',
    'location' => $updateLocation,
    'hide_on_screen' => [
        0 => 'the_content',
    ],
]);
