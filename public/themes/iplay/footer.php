<?php

/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
?>

<nav class="navigation_footer">
    <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>

    <div class="footer_social">
        <?php while (have_rows('footer_social_links', get_option('page_on_front'))): the_row(); ?>
            <a href="<?= field('url'); ?>" title="<?= field('name'); ?>"> <?php
                $icon = field('icon');
                if ($icon) {
                    ?><img data-src="<?= $icon['sizes']['large']; ?>" alt="<?= $icon['alt']; ?>"><?php
                } else {
                    ?><i class="<?= field('fa_icon'); ?>"></i><?php
                }

            ?>
            </a>
        <?php endwhile; ?>
    </div>

    <div class="copyright">
        &copy; <?php echo date("Y"); ?> All rights reserved.
    </div>

</nav>



<?php
wp_footer();
?>
</body>
</html>
