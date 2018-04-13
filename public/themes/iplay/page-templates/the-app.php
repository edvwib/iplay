<?php /* Template Name: The App */

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
?>

<?php get_header(); ?>

<main role="main" class="the_app">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article>
            <div class="upcoming">
                <div class="title_container">
                    <h1 class="title main_title">
                        <?= field('upcoming_title'); ?>
                    </h1>
                </div>
                <?php if (have_rows('upcoming_feature_timeline')): $i = 0; ?>
                    <div class="upcoming_features_container">
                        <?php while (have_rows('upcoming_feature_timeline')): the_row(); $i++;?>
                            <?php $isPast = strtotime("now") > strtotime(field('date')); ?>
                            <div class="feature_container
                                <?= $i%2 != 0 ? 'up' : 'down'; ?>
                                <?= $isPast ? 'green' : ''; ?>"
                            >
                                <?= $i%2 == 0 ? '<div class="block"></div>' : ''?>
                                <h5 class="feature_title"><?= field('title'); ?></h5>
                                <h6 class="feature_date">
                                    <?php
                                    $date = DateTime::createFromFormat("Y-m-d", field('date'));
                                    echo $isPast ? 'Released ' : 'Releases ';
                                    echo $date->format('M Y');
                                    ?>
                                </h6>
                                <?= $i%2 != 0 ? '<div class="block"></div>' : ''?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div><!-- /upcoming -->

            <div class="about">
                <div class="title_container">
                    <h1 class="title">
                        <?= field('about_title'); ?>
                    </h1>
                </div>

                <div class="body_container">
                    <p class="body">
                        <?= field('about_body'); ?>
                    </p>
                </div>

                <div class="app_display_container">
                    <div class="frame">
                        <?php
                        $image = field('about_image');
                        ?>
                        <img class="image" src="<?= $image['sizes']['large']; ?>" alt="">
                    </div>
                </div>
            </div><!-- /about -->

            <?php require('components/app_links.php'); ?>

        </article>
    <?php endwhile; else: ?>
        <article>
            <h1>No content... :(</h1>
        </article>
    <?php endif; ?>
</main>

<?php get_footer();
