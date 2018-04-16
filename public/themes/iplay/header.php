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
        <a class="header_download" href="http://onelink.to/pq2etr">
            <span>DOWNLOAD THE APP</span>
        </a>
        <nav role="navigation">
            <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </nav>

        <div class="hamburger_button">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
        </div>
        <div class="hamburger_menu">
            <div class="social">
                <?php while (have_rows('footer_social_links', get_option('page_on_front'))): the_row(); ?>
                    <a href="<?= field('url'); ?>" title="<?= field('name'); ?>"> <?php
                        $icon = field('icon');
                        if (field('icon')) {
                            ?><img src="<?= $icon['sizes']['large']; ?>" alt="<?= $icon['alt']; ?>"><?php
                        } else {
                            ?><i class="<?= field('fa_icon'); ?>"></i><?php
                        }
                        ?>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </div>
    </header>
