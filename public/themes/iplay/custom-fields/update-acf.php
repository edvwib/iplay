<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

$updateFields = [

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
