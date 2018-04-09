<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

$newsFields = [

];

$newsLocation = [
    [
        acf_location('page_template', 'page-templates/news.php')
    ]
];

acf_field_group([
    'title' => 'News',
    'fields' => $newsFields,
    'style' => 'seamless',
    'location' => $newsLocation,
    'hide_on_screen' => [
        0 => 'the_content',
    ],
]);
