<?php /* Template Name: Updates */

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
?>

<?php get_header(); ?>

<main role="main" class="updates">
    <article class="updates_container">
        <div class="categories_header">Categories:</div>
        <?php
            $categories = get_terms( array(
                'taxonomy' => 'category',
                'hide_empty' => true,
            ) );
        ?>
        <ul class="categories">
            <?php foreach ($categories as $category): ?>
                <li class="category_container">
                    <span class="category">
                        <?= $category->name ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </article>

    <?php
        $updates = new WP_Query(['post_type'=> 'update',]);
        if($updates->have_posts() ) : while ( $updates->have_posts() ) : $updates->the_post();
                the_title();
            endwhile;
        endif;
    ?>
</main>

<?php get_footer();

var_dump($categories);
