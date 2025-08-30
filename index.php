<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<main class="rwapp-main">
    <div class="rwapp-container">
        <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            else :
                echo '<p>No content found.</p>';
            endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
