<?php



/*


    $header_nav_menu_background_color = get_theme_mod( 'yourseobook_header_nav_menu_background_color' );
    // $header_nav_menu_opacity = get_theme_mod( 'header_nav_menu_opacity' );
    // $header_nav_menu_font_size = get_theme_mod( 'yourseobook_header_nav_menu_font_size' );
    // $header_nav_menu_text_transform = get_theme_mod( 'yourseobook_header_nav_menu_text_transform' );
    // $header_nav_menu_text_decoration = get_theme_mod( 'yourseobook_header_nav_menu_text_decoration' );
    $header_nav_menu_width = get_theme_mod( 'yourseobook_header_nav_menu_width' );
    // $header_nav_menu_height = get_theme_mod( 'yourseobook_header_nav_menu_height');
    // $header_nav_menu_padding_top = get_theme_mod( 'yourseobook_header_nav_menu_padding_top' );
    // $header_nav_menu_padding_right = get_theme_mod( 'yourseobook_header_nav_menu_padding_right' );
    // $header_nav_menu_padding_bottom = get_theme_mod( 'yourseobook_header_nav_menu_padding_bottom' );
    // $header_nav_menu_padding_left = get_theme_mod( 'yourseobook_header_nav_menu_padding_left' );
    // $header_nav_menu_margin_top = get_theme_mod( 'yourseobook_header_nav_menu_margin_top' );
    // $header_nav_menu_margin_right = get_theme_mod( 'yourseobook_header_nav_menu_margin_right' );
    // $header_nav_menu_margin_bottom = get_theme_mod( 'yourseobook_header_nav_menu_margin_bottom' );
    // $header_nav_menu_margin_left = get_theme_mod( 'yourseobook_header_nav_menu_margin_left' );
     $header_nav_menu_border_radius = get_theme_mod( 'yourseobook_header_nav_menu_border_radius' );
     $header_nav_menu_border_size = get_theme_mod( 'yourseobook_header_nav_menu_border_size' );
     $header_nav_menu_border_type = get_theme_mod( 'yourseobook_header_nav_menu_border_type' );
     $header_nav_menu_border_color = get_theme_mod( 'yourseobook_header_nav_menu_border_color' );
    // $header_nav_menu_text_color = get_theme_mod( 'yourseobook_header_nav_menu_text_color' );
    // $header_nav_menu_float = get_theme_mod( 'yourseobook_header_nav_menu_float' );
    // $header_nav_menu_font_weight = get_theme_mod( 'yourseobook_header_nav_menu_font_weight' );
    // $header_nav_menu_text_align = get_theme_mod( 'yourseobook_header_nav_menu_text_align' );
    // $header_nav_menu_display = get_theme_mod( 'yourseobook_header_nav_menu_display' );
    // $header_nav_menu_position = get_theme_mod( 'yourseobook_header_nav_menu_position' );
    // $header_nav_menu_text_shadow_offset_x = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_offset_y = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_offset_blur_radius = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_color = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_box_shadow = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow' );
    // $header_nav_menu_box_shadow_top = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_box_shadow_right = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_right' );
    // $header_nav_menu_box_shadow_bottom = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_bottom' );
    // $header_nav_menu_box_shadow_left = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_left' );
    // $header_nav_menu_box_shadow_color = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_color' );

*/
// Start Master Header Navigation Menu
// yourseobook_header_main_navigation_master_menu_display_control
/*
$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_master_menu_display_control',
  array(
    'label' => __( 'Master Header Navigation Menu', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_master_menu_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_header_main_navigation_master_menu_display_control', array(
    'selector' => '.masterheadernavmenu', // You can also select a css class
) );*/
// End Master Header Navigation Menu
// Start Master Header Navigation Menu Search Bar
// yourseobook_header_main_navigation_master_menu_search_bar_display_control
$wp_customize->add_setting( 'yourseobook_header_nav_menu_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_nav_menu_display_control',
  array(
    'label' => __( 'Header Nav Menu Section Settings', 'yourseobook' ),
    'section' => 'yourseobook_header_nav_menu_sections'
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_header_nav_menu_display_control', array(
    'selector' => '#headerMenuMaster', // You can also select a css class
) );
// Start Master Header Navigation Menu Search Bar



// Yourseobook Header CTA Button Custom Class Control
// Start Main CTA Buttons PHP Class

$wp_customize->add_setting( 'yourseobook_header_nav_menu_display_controller_settings', array(
    // Add your setting arguments here
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
) );

$wp_customize->add_control( new Yourseobook_Header_Nav_Menu_Control( $wp_customize, 'yourseobook_header_nav_menu_display_controller_settings', array(
    'label' => __( 'Header Nav Menu Settings', 'yourseobook' ),
    'section' => 'yourseobook_header_nav_menu_sections',
) ) );

// header-cta-button


// width

		$wp_customize->add_setting( 'yourseobook_header_nav_menu_width',
			array(
				'default' => 200,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_nav_menu_width',
			array(
			// 'label' => __( 'Header Search Bar Width(px)', 'yourseobook' ),
			 'section' => 'yourseobook_header_nav_menu_sections',
				 'input_attrs' => array(
					'min' => 200,
					'max' => 300,
					'step' => 1,
				),
			)
		) );


// Background


$wp_customize->add_setting( 'yourseobook_header_nav_menu_links_color',
array(
'default' => 'rgba(255,255,255,1)',
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
));

$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_nav_menu_links_color',
	array(
		//'label' => __( 'Header CTA Button Background Color', 'yourseobook' ),
		//'description' => esc_html__( 'Sample color control with Alpha channel', 'yourseobook' ),
		//'section' => 'yourseobook_main_header_navigation_cta_button_sections',
		//'type' => 'color',
		'input_attrs' => array(
			'resetalpha' => false,
			'palette' => array(
				'rgba(99,78,150,1)',
				'rgba(67,78,150,1)',
				'rgba(34,78,150,.7)',
				'rgba(3,78,150,1)',
				'rgba(7,110,230,.9)',
				'rgba(234,78,150,1)',
				'rgba(99,78,150,.5)',
				'rgba(190,120,120,.5)',
			),
		),
	)
) );
// Start Header CTA Button Background Color

$wp_customize->add_setting( 'yourseobook_header_nav_menu_background_color',
array(
'default' => 'rgba(255,255,255,1)',
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
));

/*
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_cta_button_background_color',
	array(
		'label' => __( 'Header CTA Button Background Color', 'yourseobook' ),
		//'description' => esc_html__( 'Sample color control with Alpha channel', 'yourseobook' ),
		'section' => 'yourseobook_main_header_navigation_cta_button_sections',
		'type' => 'color',
		'input_attrs' => array(
			'resetalpha' => false,
			'palette' => array(
				'rgba(99,78,150,1)',
				'rgba(67,78,150,1)',
				'rgba(34,78,150,.7)',
				'rgba(3,78,150,1)',
				'rgba(7,110,230,.9)',
				'rgba(234,78,150,1)',
				'rgba(99,78,150,.5)',
				'rgba(190,120,120,.5)',
			),
		),
	)
) );
*/
// End Header CTA Button Background Color




           


		$wp_customize->add_setting( 'yourseobook_header_nav_menu_border_size',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_nav_menu_border_size',
			array(
			//	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
			//	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
				// 'input_attrs' => array(
				//	'min' => 0,
				//	'max' => 20,
				//	'step' => 1,
				//),
			)
		) );

                    


		$wp_customize->add_setting( 'yourseobook_header_nav_menu_border_radius',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_nav_menu_border_radius',
			array(
			//	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
			//	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
				// 'input_attrs' => array(
				//	'min' => 0,
				//	'max' => 20,
				//	'step' => 1,
				//),
			)
		) );



// Header Navigation Menu Search Box Seettings

$wp_customize->add_setting( 'yourseobook_header_nav_menu_border_color',
                    array(
                                      //   'default' => $this->defaults['sample_dropdown_select2_control_single'],
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'yourseobook_text_sanitization'
                    )
);

// Start Header CTA Button Background Color

$wp_customize->add_setting( 'yourseobook_header_nav_menu_border_color',
array(
'default' => 'rgba(255,255,255,1)',
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
));

$wp_customize->add_control( new Yourseobook_Customize_Alpha_Color_Control( $wp_customize, 'yourseobook_header_cta_button_background_color',
	array(
		//'label' => __( 'Header CTA Button Background Color', 'yourseobook' ),
		//'description' => esc_html__( 'Sample color control with Alpha channel', 'yourseobook' ),
		//'section' => 'yourseobook_main_header_navigation_cta_button_sections',
		'type' => 'color',
		'input_attrs' => array(
			'resetalpha' => false,
			'palette' => array(
				'rgba(99,78,150,1)',
				'rgba(67,78,150,1)',
				'rgba(34,78,150,.7)',
				'rgba(3,78,150,1)',
				'rgba(7,110,230,.9)',
				'rgba(234,78,150,1)',
				'rgba(99,78,150,.5)',
				'rgba(190,120,120,.5)',
			),
		),
	)
) );

// End Header CTA Button Background Color