<?php
/**
 * The template for displaying all single posts.
 *
 * @package Domino
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div id="primary" class="content-area <?= get_content_class(); ?>">
                <div id="main" class="site-main" role="main">
                    
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('templates/content', 'single'); ?>
                        <?php the_post_navigation(); ?>
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