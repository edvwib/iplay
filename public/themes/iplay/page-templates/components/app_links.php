<?php
/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
?>

<div class="app_links_container">
    <a class="link" href="<?= field('app_introduction_appstore_url'); ?>">
        <div class="icon_container">
            <img class="icon" src="<?= get_template_directory_uri()?>/assets/images/apple_icon.png" alt="">
        </div>
        <div class="text_container">
            <p class="text">APP STORE</p>
        </div>
    </a>
    <a class="link" href="<?= field('app_introduction_googleplay_url'); ?>">
        <div class="icon_container">
            <img class="icon" src="<?= get_template_directory_uri()?>/assets/images/googleplay_icon.png" alt="">
        </div>
        <div class="text_container">
            <p class="text">GOOGLE PLAY</p>
        </div>
    </a>
</div>
