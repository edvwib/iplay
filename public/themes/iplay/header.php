<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <header>
        <div class="logo">
            <?php $logo = field('app_introduction_logo'); ?>
            <?php if ($logo): ?>
                <img src="<?= $logo['sizes']['large']; ?>"
                alt="<?= $logo['alt'] ?>">
            <?php endif; ?>
        </div>
        <nav role="navigation">
            <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </nav>
    </header>
