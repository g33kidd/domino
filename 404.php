<?php 
/**
 * Page for displaying 404 errors.
 * @package domino
 */
get_header(); ?>
    
    <div id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <div class="container">
                
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'domino' ); ?></h1>
                    </header>
                </section>

                <div class="page-content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'domino' ); ?></p>
                    <?php get_search_form(); ?>
                </div>

            </div>
        </div>
    </div>

<?php get_footer(); ?>