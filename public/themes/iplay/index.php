<?php
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
            <header>
                <h1><?php the_title(); ?></h1>
            </header>

            <?php the_content(); ?>
        </article>
    <?php endwhile; else: ?>
        <article>
            <p>No content... :(</p>
        </article>
    <?php endif; ?>
</main>

<?php get_footer();
