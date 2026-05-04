<?php
/**
 * Customizer Separator Control settings for this theme.
 *
 * @package WordPress
 * @subpackage Avanta
 * @since Avanta 1.0
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'avanta_Separator_Control' ) ) {
		/**
		 * Separator Control.
		 *
		 * @since Avanta 1.0
		 */
		class avanta_Separator_Control extends WP_Customize_Control {
			/**
			 * Renders the hr.
			 *
			 * @since Avanta 1.0
			 */
			public function render_content() {
				echo '<hr/>';
			}
		}
	}
}
