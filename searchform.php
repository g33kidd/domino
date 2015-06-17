<form action="<?= esc_url(home_url('/')); ?>">
    <div class="inner-addon right-addon">
        <i class="fa fa-search"></i>
        <input type="text" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>">
    </div>
</form>