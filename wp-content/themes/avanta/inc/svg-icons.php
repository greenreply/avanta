<?php
/**
 * Avanta SVG Icon helper functions
 *
 * @package WordPress
 * @subpackage Avanta
 * @since Avanta 1.0
 */

if ( ! function_exists( 'avanta_the_theme_svg' ) ) {
	/**
	 * Outputs the SVG markup for an icon in the avanta_SVG_Icons class.
	 *
	 * @since Avanta 1.0
	 *
	 * @param string $svg_name The name of the icon.
	 * @param string $group    The group the icon belongs to.
	 * @param string $color    Color code.
	 */
	function avanta_the_theme_svg( $svg_name, $group = 'ui', $color = '' ) {
		echo avanta_get_theme_svg( $svg_name, $group, $color ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in avanta_get_theme_svg().
	}
}

if ( ! function_exists( 'avanta_get_theme_svg' ) ) {

	/**
	 * Gets information about the SVG icon.
	 *
	 * @since Avanta 1.0
	 *
	 * @param string $svg_name The name of the icon.
	 * @param string $group    The group the icon belongs to.
	 * @param string $color    Color code.
	 */
	function avanta_get_theme_svg( $svg_name, $group = 'ui', $color = '' ) {

		// Make sure that only our allowed tags and attributes are included.
		$svg = wp_kses(
			avanta_SVG_Icons::get_svg( $svg_name, $group, $color ),
			array(
				'svg'     => array(
					'class'       => true,
					'xmlns'       => true,
					'width'       => true,
					'height'      => true,
					'viewbox'     => true,
					'aria-hidden' => true,
					'role'        => true,
					'focusable'   => true,
				),
				'path'    => array(
					'fill'      => true,
					'fill-rule' => true,
					'd'         => true,
					'transform' => true,
				),
				'polygon' => array(
					'fill'      => true,
					'fill-rule' => true,
					'points'    => true,
					'transform' => true,
					'focusable' => true,
				),
			)
		);

		if ( ! $svg ) {
			return false;
		}
		return $svg;
	}
}
