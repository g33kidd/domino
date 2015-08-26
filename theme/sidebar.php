<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Domino
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}

?>

<?php if(is_sidebar_enabled($page_id)): ?>
    <div id="secondary" class="widget-area <?= get_sidebar_class(); ?>" role="complementary">
    	<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
<?php endif; ?>
