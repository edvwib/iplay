<?php /* Template Name: Home */

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
?>

<?php get_header(); ?>

<main role="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article>
            <div class="home_intro">
                <div class="intro_header_container">
                    <h1 class="intro_header_main">
                        <?= the_field('title'); ?>
                    </h1>
                    <h4 class="intro_header_secondary">
                        <?= the_field('title_secondary'); ?>
                    </h4>
                </div>
                <div class="app_links_container">
                    <div class="appstore_link_container">
                        <a class="appstore_link" href="<?= the_field('appstore_url'); ?>">APP STORE</a>
                    </div>
                    <div class="googleplay_link_container">
                        <a class="googleplay_link" href="<?= the_field('googleplay_url'); ?>">GOOGLE PLAY</a>
                    </div>
                </div>
                <div class="app_display_container">
                    <div class="app_display_frame">
                        <img src="app_display_image" alt="">
                    </div>
                </div>
            </div>


        </article>
    <?php endwhile; else: ?>
        <article>
            <h1>No content... :(</h1>
        </article>
    <?php endif; ?>
</main>

<?php get_footer();
