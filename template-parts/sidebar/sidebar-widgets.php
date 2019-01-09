<?php
/**
 * Displays the sidebar widget area
 *
 * @package WordPress
 * @subpackage Project_cicero
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-main' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Sidebar', 'projectcicero' ); ?>">
		<?php
			if ( is_active_sidebar( 'sidebar-main' ) ) {
				?>
					<div class="widget-column sidebar-widget-1">
						<?php dynamic_sidebar( 'sidebar-main' ); ?>
					</div>
				<?php
			}
		?>
	</aside><!-- .widget-area -->

<?php endif; ?>
