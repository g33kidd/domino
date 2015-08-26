<?php if('post' === get_post_type()): ?>
<?php endif; ?>

<?php if(!is_single() && !post_password_required() && (comments_open() || get_comments_number())): ?>
    <span class="comments-link">
        <?php 
            // Comments here...
        ?>
    </span>
<?php endif; ?>