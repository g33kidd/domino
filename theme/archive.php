<?php
/**
 * The template for displaying archive pages.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Domino
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div id="primary" class="content-area <?= get_content_class(); ?>">
                <div id="main" class="site-main" role="main">
                    
                    <?php if(have_posts()) : ?>
                        <header class="page-header">
                            <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                        </header>

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