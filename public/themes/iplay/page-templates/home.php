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
                    <div class="intro_header_logo_container">
                        <?php
                            $image = field('app_introduction_title_logo');
                            ?>
                            <img class="intro_header_title_logo" src="<?= $image['sizes']['large']; ?>" alt="">
                    </div>
                    <h1 class="intro_header_main">
                        <?= field('app_introduction_title'); ?>
                    </h1>
                    <h4 class="intro_header_secondary">
                        <?= field('app_introduction_title_secondary'); ?>
                    </h4>
                </div>
                <div class="app_links_container">
                    <div class="appstore_link_container">
                        <a class="appstore_link" href="<?= field('app_introduction_appstore_url'); ?>">APP STORE</a>
                    </div>
                    <div class="googleplay_link_container">
                        <a class="googleplay_link" href="<?= field('app_introduction_googleplay_url'); ?>">GOOGLE PLAY</a>
                    </div>
                </div>
                <div class="app_display_container">
                    <div class="app_display_frame">
                        <?php
                        $image = field('app_introduction_app_display');
                        ?>
                        <img class="app_display_image" src="<?= $image['sizes']['large']; ?>" alt="">
                    </div>
                </div>
            </div><!-- /home_intro -->


            <div class="key_points_section_container">
                <div class="key_points_title_container">
                    <h1 class="key_points_title">
                        <?= field('key_features_title') ?>
                    </h1>
                </div>

                <?php if (have_rows('key_features_key_points')): ?>
                    <div class="key_points_container">
                        <?php while (have_rows('key_features_key_points')): the_row(); ?>
                            <div class="key_point_container">
                                <div class="key_point_icon_container">
                                    <?php $icon = field('icon'); ?>
                                    <img class="key_point_icon"
                                        src="<?= $icon['sizes']['large'] ?>"
                                        alt="<?= $icon['alt'] ?>"
                                    >
                                </div>
                                <div class="key_point_title_container">
                                    <h3 class="key_point_title">
                                        <?= field('title') ?>
                                    </h3>
                                </div>
                                <div class="key_point_body_container">
                                    <p class="key_point_body">
                                        <?= field('body') ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div> <!-- /key_points_section_container -->


            <div class="newsletter_container">
                <div class="title_container">
                    <h1 class="title">
                        <?= field('newsletter_title') ?>
                    </h1>
                </div>
                <div class="body_container">
                    <p class="body">
                        <?= field('newsletter_body') ?>
                    </p>
                </div>
                <div class="form_container">
                    <form class="form" action="#" method="post">
                        <input type="email" name="email" placeholder="Email Address">
                        <input type="submit" value="Sign Up">
                    </form>
                </div>
                <div class="image_container">
                    <?php $image = field('newsletter_image'); ?>
                    <img class="image"
                        src="<?= $image['sizes']['large']; ?>"
                        alt="<?php $image['alt']; ?>"
                    >
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
