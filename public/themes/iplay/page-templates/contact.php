<?php /* Template Name: Contact */

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
?>

<?php get_header(); ?>

<main role="main" class="contact">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article>
            <div class="contact_introduction_container">
                <div class="title_container">
                    <h1 class="title main_title">
                        <?= field('contact_introduction_title'); ?>
                    </h1>
                </div>
                <div class="image_container">
                    <?php $image = field('contact_introduction_map'); ?>
                    <img class="image"
                        src="<?= $image['sizes']['large']; ?>"
                        alt="<?= $image['alt']; ?>">
                </div>
                <div class="contact_info">
                    <a class="phone_container">
                        <img src="<?= get_template_directory_uri()?>/assets/images/googleplay_icon.png" alt="" class="icon">
                        <p class="phone" href="phone:<?= field('contact_introduction_phone'); ?>">
                            <?= field('contact_introduction_phone'); ?>
                        </p>
                    </a>
                    <a class="email_container">
                        <img src="<?= get_template_directory_uri()?>/assets/images/googleplay_icon.png" alt="" class="icon">
                        <p class="email" href="mailto:<?= field('cotact_introduction_email'); ?>">
                            <?= field('contact_introduction_email'); ?>
                        </p>
                    </a>
                </div>
            </div>

            <div class="sectionDivider">
                <div class="inner"></div>
            </div>

            <div class="contact_form_container">
                <div class="title_container">
                    <h1 class="title main_title">
                        <?= field('contact_form_title'); ?>
                    </h1>
                </div>
                <form action="#" class="form">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email Address">
                    <textarea name="message" rows="5" placeholder="Message"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>

            <div class="the_team_container">
                <div class="title_container">
                    <h1 class="title main_title">
                        <?= field('the_team_title'); ?>
                    </h1>
                </div>
                <div class="employee_container">
                    <?php while (have_rows('the_team_employees')): the_row(); ?>
                        <div class="employee">
                            <?php $image = field('image'); ?>
                            <img src="<?= $image['sizes']['large']; ?>" alt="<?= $image['sizes']; ?>">
                            <p class="name"><?= field('name'); ?></p>
                        </div>
                    <?php endwhile; ?>
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
