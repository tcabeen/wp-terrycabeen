<?php
/**
 * Child Theme functions and definitions
 *
 * Sets up helper functions that are specific to the child theme or overrides any pluggable
 * functions of the same name that are part of the parent theme.
 *
 * (see http://codex.wordpress.org/Theme_Development and http://codex.wordpress.org/Child_Themes)
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

// Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 625;
