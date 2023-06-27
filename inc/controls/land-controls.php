<?php


// yourseobook_main_land_panel
// yourseobook_land_sections


$wp_customize->add_setting( 'yourseobook_main_land_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_display_control',
  array(
    'label' => __( 'Landing Page Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_display_control', array(
    'selector' => '.main-land', // You can also select a css class
) );

// Landing Above the Fold

$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_above_the_fold_display_control',
  array(
    'label' => __( 'Above The Fold Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_above_the_fold_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_above_the_fold_display_control', array(
    'selector' => '.atf', // You can also select a css class
) );

// Landing Below the Fold

// yourseobook_main_land_below_the_fold_display_control
$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_below_the_fold_display_control',
  array(
    'label' => __( 'Below The Fold Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_below_the_fold_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_below_the_fold_display_control', array(
    'selector' => '.btf', // You can also select a css class
) );




// Landing About us Section


$wp_customize->add_setting( 'yourseobook_main_land_about_us_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_about_us_display_control',
  array(
    'label' => __( 'About us Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_about_us_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_about_us_display_control', array(
    'selector' => '.land-about', // You can also select a css class
) );




// Landing Services Section

$wp_customize->add_setting( 'yourseobook_main_land_services_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_services_display_control',
  array(
    'label' => __( 'Services Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_services_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_services_display_control', array(
    'selector' => '.landservices', // You can also select a css class
) );





// Landing FAQ's Section

$wp_customize->add_setting( 'yourseobook_main_land_faqs_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_faqs_display_control',
  array(
    'label' => __( 'Land FAQs Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_faqs_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_faqs_display_control', array(
    'selector' => '.landfaqs', // You can also select a css class
) );


// Landing Our Team Section

$wp_customize->add_setting( 'yourseobook_main_land_our_team_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_our_team_display_control',
  array(
    'label' => __( 'Land Our Team Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_our_team_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_our_team_display_control', array(
    'selector' => '.ourteam', // You can also select a css class
) );



// Landing Our Case Studies Section

$wp_customize->add_setting( 'yourseobook_main_land_our_case_studies_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_our_case_studies_display_control',
  array(
    'label' => __( 'Land Cases Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_our_case_studies_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_our_case_studies_display_control', array(
    'selector' => '.ourcases', // You can also select a css class
) );



// Landing Our Portfolio Section

$wp_customize->add_setting( 'yourseobook_main_land_company_portfolio_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_company_portfolio_display_control',
  array(
    'label' => __( 'Land Portfolio Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_our_portfolio_studies_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_company_portfolio_display_control', array(
    'selector' => '.ourportfolio', // You can also select a css class
) );



// Landing Latest News Section

$wp_customize->add_setting( 'yourseobook_main_land_latest_news_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_latest_news_display_control',
  array(
    'label' => __( 'Land Latest News Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_latest_news_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_latest_news_display_control', array(
    'selector' => '.latestnews', // You can also select a css class
) );


// Landing Our Portfolio Section

$wp_customize->add_setting( 'yourseobook_main_land_images_gallery_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_images_gallery_display_control',
  array(
    'label' => __( 'Land Images Gallery Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_images_gallery_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_images_gallery_display_control', array(
    'selector' => '.imagesgallery', // You can also select a css class
) );


// Landing Videos Section

$wp_customize->add_setting( 'yourseobook_main_land_video_gallery_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_video_gallery_display_control',
  array(
    'label' => __( 'Land Videos Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_video_gallery_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_video_gallery_display_control', array(
    'selector' => '.latestvideos', // You can also select a css class
) );


// Landing User Testimonials Section

$wp_customize->add_setting( 'yourseobook_main_land_users_reviews_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_users_reviews_display_control',
  array(
    'label' => __( 'Land User Testimonials Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_users_reviews_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_users_reviews_display_control', array(
    'selector' => '.userreviews', // You can also select a css class
) );





