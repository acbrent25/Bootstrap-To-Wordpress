<?php 

function ac_misc_customizer_section( $wp_customize ) {


  // SETTINGS
  $wp_customize->add_setting('ac_header_show_search', array(
    'default'       =>  'yes',
    'transport'     => 'postMessage'
  ));

  $wp_customize->add_setting('ac_header_show_cart', array(
    'default'       =>  'yes',
    'transport'     => 'postMessage'
  ));

  $wp_customize->add_setting('ac_footer_copyright_text', array(
    'default'       =>  'Copyright $copy; All Rights Reserved by Adam Champagne',
  ));

  $wp_customize->add_setting('ac_footer_tos_page', array(
    'default'       =>  0,
  ));

  $wp_customize->add_setting('ac_footer_privacy_page', array(
    'default'       =>  0,
  ));

  $wp_customize->add_setting('ac_show_header_popular_post_widget', array(
    'default'       =>  'false',
  ));

  $wp_customize->add_setting('ac_popular_post_title', array(
    'default'       =>  'Breaking News',
  ));

  // SECTION
  $wp_customize->add_section('ac_misc_section', array(
    'title'         =>  __( 'Misc settings', 'udemy'),
    'priority'      => 30,
    'panel'         => 'udemy'
  ));

  // CONTROLLERS
  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'ac_show_search_input',
        array(
            'label'          => __( 'Show Search Button in Header', 'udemy' ),
            'section'        => 'ac_misc_section',
            'settings'       => 'ac_header_show_search',
            'type'           => 'checkbox',
            'choices'        => array(
              'yes'          => __( 'Yes', 'udemy' )
            )
        )
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
          $wp_customize,
          'ac_show_cart_input',
          array(
              'label'          => __( 'Show Shopping Cart in Header', 'udemy' ),
              'section'        => 'ac_misc_section',
              'settings'       => 'ac_header_show_cart',
              'type'           => 'checkbox',
              'choices'        => array(
                'yes'          => __( 'Yes', 'udemy' )
              )
          )
      ));

      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ac_footer_copyright_input',
            array(
                'label'          => __( 'Copyright Info', 'udemy' ),
                'section'        => 'ac_misc_section',
                'settings'       => 'ac_footer_copyright_text',
            )
        )
      );

      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ac_footer_tos_page_input',
            array(
                'label'          => __( 'TOS Page', 'udemy' ),
                'section'        => 'ac_misc_section',
                'settings'       => 'ac_footer_tos_page',
                'type'           => 'dropdown-pages',

            )
      ));

      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ac_footer_privacy_policy_page_input',
            array(
                'label'          => __( 'Privacy Policy Page', 'udemy' ),
                'section'        => 'ac_misc_section',
                'settings'       => 'ac_footer_privacy_page',
                'type'           => 'dropdown-pages',

            )
      ));

      $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ac_show_header_popular_post_input',
            array(
                'label'          => __( 'Show Popular Posts', 'udemy' ),
                'section'        => 'ac_misc_section',
                'settings'       => 'ac_show_header_popular_post_widget',
                'type'           => 'checkbox',
                'choices'        => array(
                  'yes'          => __( 'Yes', 'udemy' )
                )
            )
        ));

        $wp_customize->add_control(
          new WP_Customize_Control(
              $wp_customize,
              'ac_popular_post_widget_title_input',
              array(
                  'label'          => __( 'Popular Post Title', 'udemy' ),
                  'section'        => 'ac_misc_section',
                  'settings'       => 'ac_popular_post_title',
              )
          ));
  



}