<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

$contactFields = [
    acf_group([
        'name' => 'contact_introduction',
        'label' => 'Contact Introduction',
        'sub_fields' => [
            acf_text([
                'name' => 'title',
                'label' => 'Title',
                'instructions' => 'Title for the contact page',
                'required' => false,
            ]),
            acf_image([
                'name' => 'map',
                'label' => 'Map',
                'instructions' => 'An image of a map displaying where your company is located.',
                'required' => false,
                'mime_types' => '.jpg, .jpeg, .png, .svg',
                'return_value' => 'object',
            ]),
            acf_text([
                'name' => 'phone',
                'label' => 'Phone',
                'instructions' => 'Your company\'s phone numer.',
                'required' => false,
            ]),
            acf_text([
                'name' => 'email',
                'label' => 'Email',
                'instructions' => 'Your company\'s email address.',
                'required' => false,
            ]),
        ],
    ]),

    acf_group([
        'name' => 'contact_form',
        'label' => 'Contact form',
        'sub_fields' => [
            acf_text([
                'name' => 'title',
                'label' => 'Title',
                'instructions' => 'This title will be displayed above the contact form.',
                'required' => false,
            ]),
        ],
    ]),
    acf_group([
        'name' => 'the_team',
        'label' => 'The team',
        'sub_fields' => [
            acf_text([
                'name' => 'title',
                'label' => 'Title',
                'instructions' => 'This title will be displayed above the grid of employees.',
                'required' => false,
            ]),

            // repeater here
            acf_image([
                'name' => 'image',
                'label' => 'Image',
                'instructions' => 'This image will be displayed to the right of the form for the newsletter.',
                'required' => false,
                'mime_types' => '.jpg, .jpeg, .png, .svg',
                'return_value' => 'object',
            ]),
        ],
    ]),
];

$contactLocation = [
    [
        acf_location('page_template', 'page-templates/contact.php')
    ]
];

acf_field_group([
    'title' => 'Contact',
    'fields' => $contactFields,
    'style' => 'seamless',
    'location' => $contactLocation,
    'hide_on_screen' => [
        0 => 'the_content',
    ],
]);
