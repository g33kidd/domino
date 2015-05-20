<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Domino
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div id="primary" class="content-area <?= get_content_class(); ?>">
                <div id="main" class="site-main" role="main">
                    
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content', 'page'); ?>
                        <?php if(comments_open() || get_comments_number()):
                            comments_template();
                        endif; ?>
                    <?php endwhile; ?>

                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>