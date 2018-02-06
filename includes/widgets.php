<?php 

function ac_widgets() {
  register_sidebar(array(
    'name'           => __( 'Sidebar One', 'udemy' ),
    'id'             => 'ac_sidebar_1',
    'description'    => __('Sidebar One for Udemy', 'udemy' ),
    'before_widget'  => '<div id="%1$s" class="widget clearfix %2$s">',
    'after_widget'   => '</div>',
    'before_title'   => '<h4>',
    'after_title'   => '</h4>',
  ));
}