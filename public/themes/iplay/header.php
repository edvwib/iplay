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
        <a class="logo" href="/">
            <img src="<?= get_template_directory_uri()?>/assets/images/iplay_logo.png" alt="logo">
        </a>
        <div class="hamburger_icon_container">
            <img class="hamburger_icon" src="<?= get_template_directory_uri()?>/assets/images/hamburger_icon.png" alt="menu icon">
        </div>
        <nav role="navigation">
            <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </nav>
    </header>
