<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

$employeeFields = [
    acf_text([
        'name' => 'position',
        'label' => 'Position',
        'instructions' => 'The employees position in the company. E.g. "iOS Developer"',
        'required' => true,
    ]),
    acf_image([
        'name' => 'image',
        'label' => 'Image',
        'instructions' => 'An image of the employee.',
        'required' => false,
        'mime_types' => '.jpg, .jpeg, .png',
    ]),
    acf_url([
        'name' => 'linkedin',
        'label' => 'LinkedIn URL',
        'instructions' => 'A URL to the employees LinkedIn. E.g. "https://se.linkedin.com/in/permalmqvist"',
        'required' => false,
    ]),
];

$employeeLocation = [
    [
        acf_location('post_type', 'employee')
    ]
];

acf_field_group([
    'title' => 'Employee',
    'fields' => $employeeFields,
    'style' => 'seamless',
    'location' => $employeeLocation,
    'hide_on_screen' => [
        0 => 'the_content',
    ],
]);
