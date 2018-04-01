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

<main role="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article>
            <header>
                <h1><?php the_title(); ?></h1>
            </header>

            <?php the_content(); ?>

            <div class="employees">
                <?php
                $args = [
                    'numberposts' => 10,
                    'post_type'   => 'employee'
                ];
                $employees = get_posts($args);

                if ($employees) {
                    foreach ($employees as $employee): ?>

                        <h3 class="employee-name">
                            <?= $employee->post_title ?>
                        </h3>
                        <?php die(var_dump(field('image'))); ?>
                        <img class="employee-img"
                            src="<?= $employee->image ?>"
                            alt="<?= $employee->post_title.' image' ?>"
                        >
                        <p class="employee-position">
                            <?= $employee->position ?>
                        </p>

                    <?php die(var_dump($employee)); endforeach;
                }
                ?>
            </div> <!-- /Employees -->



        </article>
    <?php endwhile; else: ?>
        <article>
            <h1>No content... :(</h1>
        </article>
    <?php endif; ?>
</main>

<?php get_footer();
