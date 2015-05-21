<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Domino
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div id="primary" class="content-area <?= get_content_class(); ?>">
                <div id="main" class="site-main" role="main">
                    
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <?php get_template_part('templates/content', get_post_format()); ?>
                        <?php endwhile; ?>
                        <?php the_posts_navigation(); ?>
                    <?php else: ?>
                        <?php get_template_part('templates/content', 'none'); ?>
                    <?php endif; ?>

                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>