<?php
/**
 * The template for displaying search results pages.
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
                            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'domino' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        </header>
                    
                        <?php while(have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/content', 'search'); ?>
                        <?php endwhile; ?>
                        <?php the_posts_navigation(); ?>

                    <?php else: ?>
                        <?php get_template_part('template-parts/content', 'none'); ?>
                    <?php endif; ?>

                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>