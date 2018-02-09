<?php 

function ac_social_customizer_section( $wp_customize ) {

  // SECTION
  $wp_customize->add_section( 'ac_social_section', array(
    'title'           => __( 'Udemy Social Settings', 'udemy' ),
    'priority'        => 30,
    'panel'         => 'udemy',
  ));

  // SETTINGS
  $wp_customize->add_setting( 'ac_facebook_handle', array(
    'default'         => '',
    'transport'       => 'refresh',
  ));

  $wp_customize->add_setting( 'ac_instagram_handle', array(
    'default'         => '',
    'transport'       => 'refresh',
  ));

  $wp_customize->add_setting( 'ac_twitter_handle', array(
    'default'         => '',
    'transport'       => 'refresh',
  ));

  $wp_customize->add_setting( 'ac_phone_number', array(
    'default'         => '',
    'transport'       => 'refresh',
  ));

  $wp_customize->add_setting( 'ac_email', array(
    'default'         => '',
    'transport'       => 'refresh',
  ));


  // CONTROLLERS
  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ac_social_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'udemy' ),
            'section'        => 'ac_social_section',
            'settings'       => 'ac_facebook_handle',
        )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ac_social_instagram_input',
        array(
            'label'          => __( 'instagram Handle', 'udemy' ),
            'section'        => 'ac_social_section',
            'settings'       => 'ac_instagram_handle',
        )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ac_social_twitter_input',
        array(
            'label'          => __( 'twitter Handle', 'udemy' ),
            'section'        => 'ac_social_section',
            'settings'       => 'ac_twitter_handle',
        )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ac_social_phone_input',
        array(
            'label'          => __( 'phone Number', 'udemy' ),
            'section'        => 'ac_social_section',
            'settings'       => 'ac_phone_number',
        )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ac_social_email_input',
        array(
            'label'          => __( 'email', 'udemy' ),
            'section'        => 'ac_social_section',
            'settings'       => 'ac_email',
        )
    )
  );

}