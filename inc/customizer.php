<?php
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function {{theme_name}}_theme_customizer_register( $wp_customize ) {

    $helper = new {{Theme_ClassName}}();

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    //$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


    $wp_customize->add_section( '{{theme_name}}_theme_tracking_tags', array(
        'title'      => __('Tracking Tags','{{theme-name}}'),
        'priority'   => 190,
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
    ));

    $wp_customize->add_setting( '{{theme_name}}_theme_tracking_tags', array());
    $wp_customize->add_setting( '{{theme_name}}_theme_google_site_verification', array());

    $wp_customize->add_control(
    '{{theme_name}}_theme_google_tags',
        array(
            'label'    => __( 'Google Tags', '{{theme-name}}' ),
            'section'  => '{{theme_name}}_theme_tracking_tags',
            'settings' => '{{theme_name}}_theme_tracking_tags',
            'type' => 'text',
            'description' =>  __('Google Tag Manager ID','{{theme-name}}')
        )
    );

    $wp_customize->add_control(
    '{{theme_name}}_theme_google_site_verification',
        array(
            'label'    => __( 'Google Site Verification', '{{theme-name}}' ),
            'section'  => '{{theme_name}}_theme_tracking_tags',
            'settings' => '{{theme_name}}_theme_google_site_verification',
            'type' => 'text',
            'description' =>  __('Google Site Verification ID','{{theme-name}}')
        )
    );


    //navigation
    $wp_customize->add_section( '{{theme_name}}_theme_navigation_settings' , array(
        'title'      => __('Navigation Settings','{{theme-name}}'),
        'sanitize_callback' => 'wp_filter_nohtml_kses' //removes all HTML from content
    ));


    $wp_customize->add_setting( '{{theme_name}}_theme_show_search' , array());

    $wp_customize->add_control(
    '{{theme_name}}_theme_show_search',
        array(
            'label'    => __( 'Check to show', '{{theme-name}}' ),
            'section'  => '{{theme_name}}_theme_navigation_settings',
            'settings' => '{{theme_name}}_theme_show_search',
            'type' => 'checkbox',
            'description' =>  __('Show Search In Primary Menu','{{theme-name}}')
        )
    );



    //social
    $wp_customize->add_section( '{{theme_name}}_theme_social' , array(
        'title'      => __('Social','{{theme-name}}'),
        'priority'   => 195,
        'sanitize_callback' => 'esc_url_raw'
    ));



    $wp_customize->add_setting( '{{theme_name}}_theme_show_post_social_icons' , array());

    $wp_customize->add_control(
    '{{theme_name}}_theme_show_post_social_icons',
        array(
            'label'    => __( 'Check to show', '{{theme-name}}' ),
            'section'  => '{{theme_name}}_theme_social',
            'settings' => '{{theme_name}}_theme_show_post_social_icons',
            'type' => 'checkbox',
            'description' =>  __('Show on post','{{theme-name}}')
        )
    );

    if ( isset($helper->social_links) && is_array($helper->social_links) ) {

        foreach ( $helper->social_links as $key => $value ) {

            $wp_customize->add_setting( $value['key'] , array());

            $wp_customize->add_control(
                $value['key'],
                array(
                    'label'    => __( $value['label'] . ' Link', '{{theme-name}}' ),
                    'section'  => '{{theme_name}}_theme_social',
                    'settings' => $value['key'],
                    'type' => 'url',
                )
            );

        }
    }


    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => '{{theme_name}}_theme_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => '{{theme_name}}_theme_customize_partial_blogdescription',
        ) );
    }
}
add_action( 'customize_register', '{{theme_name}}_theme_customizer_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function {{theme_name}}_theme_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function {{theme_name}}_theme_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function {{theme_name}}_theme_customize_preview_js() {
    wp_enqueue_script( '{{theme-name}}-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', '{{theme_name}}_theme_customize_preview_js' );
