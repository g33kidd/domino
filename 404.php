<?php 
/**
 * Page for displaying 404 errors.
 * @package domino
 */
get_header(); ?>
    
    <div id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <div class="container">
                    
                <div class="large-404-text">Oops... 404.</div>

                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                        <div class="row">
                            <div class="col-md-6">
                                <section class="error-404 not-found">
                                    <header class="page-header">
                                        <h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'domino' ); ?></h1>
                                    </header>
                                </section>
                            </div>
                            <div class="col-md-6">
                                <div class="page-content">
                                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'domino' ); ?></p>
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php get_footer(); ?>