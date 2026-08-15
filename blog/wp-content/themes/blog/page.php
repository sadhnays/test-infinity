<?php
/**
 * Standard page template.
 *
 * @package Infinity_Softhub_Blog
 */

get_header();
?>
<main id="main-content" class="page-main" tabindex="-1">
    <?php while (have_posts()) : the_post(); ?>
        <header class="page-hero">
            <div class="container">
                <p class="blog-eyebrow">Infinity Softhub Technologies</p>
                <h1><?php the_title(); ?></h1>
            </div>
        </header>
        <div class="container page-content entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
        </div>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>

