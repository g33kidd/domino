<?php get_header(); ?>

  <div class="container">
    <div id="primary" class="content-area">
      <div id="main" class="site-main" role="main">

        <div class="large-404-text">Oops... 404!</div>
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="not-found">
              <h1><?php esc_html_e( 'That page can&rsquo;t be found.', 'domino' ); ?></h1>
            </div>
            <div class="try-search">
              <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a quick search?', 'domino' ); ?></p>
              <?php get_search_form(); ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
