<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

$homeFields = [
    acf_image([
        'name' => 'logo',
        'label' => 'Logo',
        'instructions' => 'The image that will be displayed at the top of the page, as well as in the navigation bar when the user scrolls down.',
        'required' => false,
        'mime_types' => '.jpg, .jpeg, .png',
        'return_value' => 'object',
    ]),
    acf_text([
        'name' => 'title',
        'label' => 'Title',
        'instructions' => 'This is the main title, that will be displayed on the top of the page.',
        'required' => false,
    ]),
    acf_text([
        'name' => 'title_secondary',
        'label' => 'Secondary title',
        'instructions' => 'This is the secondary title, that will be displayed below the main title, with a smaller font-size.',
        'required' => false,
    ]),
    acf_url([
        'name' => 'appstore_url',
        'label' => 'App Store URL',
        'instructions' => 'The link (URL) to the appplication on the App Store.',
        'required' => false,
    ]),
    acf_url([
        'name' => 'googleplay_url',
        'label' => 'Google Play URL',
        'instructions' => 'The link (URL) to the appplication on Google Play.',
        'required' => false,
    ]),
    acf_image([
        'name' => 'app_display',
        'label' => 'App display',
        'instructions' => 'The image to be displayed to the right on the start page.',
        'required' => false,
        'mime_types' => '.jpg, .jpeg, .png',
    ]),
];

$homeLocation = [
    [
        acf_location('page_template', 'page-templates/home.php')
    ]
];

acf_field_group([
    'title' => 'Home',
    'fields' => $homeFields,
    'style' => 'seamless',
    'location' => $homeLocation,
    'hide_on_screen' => [
        0 => 'the_content',
    ],
]);
