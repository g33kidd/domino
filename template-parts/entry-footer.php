<?php if('post' === get_post_type()): ?>
<?php endif; ?>

<?php if(!is_single() && !post_password_required() && (comments_open() || get_comments_number()): ?>
    <span class="comments-link">
        <?php 
            comments_popup(
                __("Leave a comment", 'domino'), 
                __("1 Comment", 'domino'), 
                __("% Comments", 'domino')
            );
        ?>
    </span>
<?php endif; ?>