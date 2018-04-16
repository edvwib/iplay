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

<main role="main" class="home">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article>
            <div class="home_intro">
                <div class="container">
                    <div class="title_container">
                    <div class="logo_container">
                        <?php
                            $image = field('app_introduction_title_logo');
                        ?>
                        <img class="logo"
                            src="<?= $image['sizes']['large']; ?>"
                            alt="<?= $image['alt']; ?>">
                    </div>
                    <h1 class="title main_title">
                        <?= field('app_introduction_title'); ?>
                    </h1>
                    <h4 class="title secondary_title">
                        <?= field('app_introduction_title_secondary'); ?>
                    </h4>
                </div>
                <?php require('components/app_links.php'); ?>
                </div>
                <div class="app_display_container">
                    <?php if (have_rows('app_introduction_slideshow')):  ?>
                        <div class="frame">
                            <div class="swiper-wrapper">
                                <?php while (have_rows('app_introduction_slideshow')): the_row();
                                    $image = field('image'); ?>
                                    <img class="image swiper-slide" src="<?= $image['sizes']['large']; ?>" alt="">
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div><!-- /home_intro -->

            <div class="sectionDivider">
                <a href="#key_points_section_container" class="inner"><i class="fas fa-angle-down icon"></i></a>
            </div>

            <div class="key_points_section_container" id="key_points_section_container">
                <div class="title_container">
                    <h1 class="title main_title">
                        <?= field('key_features_title') ?>
                    </h1>
                </div>

                <?php if (have_rows('key_features_key_points')): ?>
                <div class="key_points_swiper_container">
                    <div class="key_points_wrapper swiper-wrapper">
                        <?php while (have_rows('key_features_key_points')): the_row(); ?>
                            <div class="key_point_container swiper-slide">
                                <div class="icon_container">
                                    <?php $icon = field('icon'); ?>
                                    <img class="icon"
                                        src="<?= $icon['sizes']['large'] ?>"
                                        alt="<?= $icon['alt'] ?>"
                                    >
                                </div>
                                <div class="title_container">
                                    <h3 class="title">
                                        <?= field('title') ?>
                                    </h3>
                                </div>
                                <div class="body_container">
                                    <p class="body">
                                        <?= field('body') ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <?php endif; ?>
            </div> <!-- /key_points_section_container -->

            <div class="newsletter_background">
                <div class="newsletter_container">
                    <div class="title_container">
                        <h1 class="title main_title">
                            <?= field('newsletter_title') ?>
                        </h1>
                    </div>
                    <div class="body_container">
                        <h4 class="title secondary_title">
                            <?= field('newsletter_body') ?>
                        </h4>
                    </div>
                    <form class="form" action="#" method="post">
                        <div class="email_container">
                            <input type="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="submit_container">
                            <button type="submit"><img src="<?= get_template_directory_uri()?>/assets/images/arrow-send.svg" alt="arrow"></button>
                        </div>
                    </form>
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
