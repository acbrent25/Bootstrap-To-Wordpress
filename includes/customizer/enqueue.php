<?php

function ac_customize_preview_init(){
	wp_enqueue_script(
		'ac_theme_customizer',
		get_template_directory_uri().'/assets/js/theme-customize.js',
		array( 'jquery', 'customize-preview' ),
		false,
		true
	);
}