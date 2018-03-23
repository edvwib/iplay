<?php

$header = <<<EOF
This file is part of IPLAY.
(c) IPY Holding AB.
For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$rules = [
    '@PSR2' => true,
    'header_comment' => [
      'header' => $header,
      'location' => 'after_open'
    ],
];

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/public/themes/iplay');

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder($finder);
