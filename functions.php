<?php
/**
 * Ekiline functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ekiline
 */

/**
 * Estilos CSS y Javascript
 * Incorporar desde el tema padre Ekiline, manteniendo el orden.
 *
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/#3-enqueue-stylesheet
 */
function ekiline_child_scripts() {
	wp_enqueue_style( 'bootstrap-5', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5', 'all' );
	wp_enqueue_style( 'parent-ekiline', get_template_directory_uri() . '/style.css', array(), '5', 'all' );
}
add_action( 'wp_enqueue_scripts', 'ekiline_child_scripts', 1 );

/**
 * UTILIDADES:
 * Ver estilos durante la edición.
 *
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 * add_action( 'after_setup_theme', 'ekiline_child_block_editor_setup', 100 );
 */
function ekiline_child_block_editor_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( [ 'style.css' ] );
}

/**
 * Inicializar nueva combinacion de parametros en customizer.
 *
 * @link https://developer.wordpress.org/reference/functions/set_theme_mod/
 */
function ekiline_child_theme_mods() {
	set_theme_mod( 'ekiline_range_header', '60' );
	set_theme_mod( 'ekiline_inversemenu', true );
}
add_action( 'after_switch_theme', 'ekiline_child_theme_mods' );

