<?php 

// Setup




// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/customizer/social.php' );
include( get_template_directory() . '/includes/customizer/misc.php' );
include( get_template_directory() . '/includes/customizer/enqueue.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'ac_enqueue' );
add_action( 'after_setup_theme', 'ac_setup_theme' );
add_action( 'widgets_init', 'ac_widgets');
add_action( 'customize_register', 'ac_customize_register' );
add_action( 'customize_preview_init', 'ac_customize_preview_init' );

// Shortcodes