

<?php

function themename_customize_register($wp_customize){

    $wp_customize->add_panel('theme_settings', array(

        'title' => 'Theme Settings', 
    ));
     
   //  =============================
    //  = Logos Section                =
    //  =============================

   $wp_customize->add_section( 'custom_logo_section' , array(
    'title'      => __( 'Theme Logos', 'mytheme' ),
    'priority'   => 20,
    'panel' => 'theme_settings',
  ) );


  //  =============================
    //  = Header Logo              =
    //  =============================
    $wp_customize->add_setting('logo', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label'    => __('Logo', 'themename'),
        'section'  => 'custom_logo_section',
        'settings' => 'logo',
    )));
 

//  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('footer_logo', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'    => __('Footer Logo', 'themename'),
        'section'  => 'custom_logo_section',
        'settings' => 'footer_logo',
    )));



    //  =============================
    //  = Color Section                =
    //  =============================

   $wp_customize->add_section( 'colors_settings' , array(
    'title'      => __( 'Theme Colors', 'mytheme' ),
    'priority'   => 20,
    'panel' => 'theme_settings',
  ) );

    //  =============================
    //  = Primary Color Picker              =
    //  =============================
    $wp_customize->add_setting('primary_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __('Primary Color'),
        'section'  => 'colors_settings',
        'settings' => 'primary_color',
    )));


    //  =============================
    //  = Secondary Color Picker              =
    //  =============================
    $wp_customize->add_setting('secondary_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label'    => __('Secondary Color'),
        'section'  => 'colors_settings',
        'settings' => 'secondary_color',
    )));


    //  =============================
    //  = Optional Color Picker              =
    //  =============================
    $wp_customize->add_setting('optional_color', array(
        'default'           => '#fff',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
  
    ));
  
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'optional_color', array(
        'label'    => __('Optional Color'),
        'section'  => 'colors_settings',
        'settings' => 'optional_color',
    )));



    //  =============================
    //  = Socail media Section                =
    //  =============================

   $wp_customize->add_section( 'social_media_links' , array(
    'title'      => __( 'Social Media Links', 'mytheme' ),
    'priority'   => 30,
    'panel' => 'theme_settings',
  ) );
  

  //  =============================
    //  = Facebook Link                =
    //  =============================
    $wp_customize->add_setting('facebook', array(
        'default'        => '#',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('facebook', array(
        'label'      => __('Facebook'),
        'section'    => 'social_media_links',
        "settings" => "facebook",
    ));

  //  =============================
    //  = Youtube Link                =
    //  =============================
    $wp_customize->add_setting('youtube', array(
        'default'        => '#',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('youtube', array(
        'label'      => __('Youtube'),
        'section'    => 'social_media_links',
        "settings" => "youtube",
    ));

  //  =============================
    //  = Instagram Link                =
    //  =============================
    $wp_customize->add_setting('instagram', array(
        'default'        => '#',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('instagram', array(
        'label'      => __('Instagram'),
        'section'    => 'social_media_links',
        "settings" => "instagram",
    ));
   
  //  =============================
    //  = Twitter Link                =
    //  =============================
    $wp_customize->add_setting('twitter', array(
        'default'        => '#',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('twitter', array(
        'label'      => __('Twitter'),
        'section'    => 'social_media_links',
        "settings" => "twitter",
    ));
  
   //  =============================
    //  = LinkedIn Link                =
    //  =============================
    $wp_customize->add_setting('linkedin', array(
        'default'        => '#',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('linkedin', array(
        'label'      => __('Linked In'),
        'section'    => 'social_media_links',
        "settings" => "linkedin",
    )); 
   
   
       //  =============================
    //  = Theme Details                =
    //  =============================

   $wp_customize->add_section( 'theme_details' , array(
    'title'      => __( 'Theme Details', 'mytheme' ),
    'priority'   => 20,
    'panel' => 'theme_settings',
  ) );



  //  =============================
    //  = Phone Number                =
    //  =============================
    $wp_customize->add_setting('phone_number', array(
        'default'    => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('phone_number', array(
        'label'    => __('Phone Number'),
        'section'  => 'theme_details',
        "settings" => "phone_number",
    )); 

  
  //  =============================
    //  = Phone Number2                =
    //  =============================
    $wp_customize->add_setting('phone_number2', array(
        'default'    => '',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('phone_number2', array(
        'label'    => __('Phone Number2'),
        'section'  => 'theme_details',
        "settings" => "phone_number2",
    )); 

   
   //  =============================
    //  = Email                =
    //  =============================
    $wp_customize->add_setting('email', array(
        'default' => 'email@gmail.com',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('email', array(
        'label'    => __('Email'),
        'section'  => 'theme_details',
        "settings" => "email",
        'type'     => 'email'
    )); 
 
    //  =============================
    //  = Support Email                =
    //  =============================
    $wp_customize->add_setting('support_email', array(
        'default' => 'suupport@gmail.com',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('support_email', array(
        'label'    => __('Support Email'),
        'section'  => 'theme_details',
        "settings" => "support_email",
        'type'     => 'email'
    )); 
   
    //  =============================
    //  = Fax                =
    //  =============================
    $wp_customize->add_setting('fax', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('fax', array(
        'label'    => __('Fax'),
        'section'  => 'theme_details',
        "settings" => "fax",
        'type'     => 'text'
    )); 

    //  =============================
    //  = Timings                =
    //  =============================
    $wp_customize->add_setting('timings', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('timings', array(
        'label'    => __('Timings'),
        'section'  => 'theme_details',
        "settings" => "timings",
        'type'     => 'text'
    )); 


    //  =============================
    //  = Timings2               =
    //  =============================
    $wp_customize->add_setting('timings2', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('timings2', array(
        'label'    => __('Timings2'),
        'section'  => 'theme_details',
        "settings" => "timings2",
        'type'     => 'text'
    )); 

    //  =============================
    //  = Timings3               =
    //  =============================
    $wp_customize->add_setting('timings3', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('timings3', array(
        'label'    => __('Timings3'),
        'section'  => 'theme_details',
        "settings" => "timings3",
        'type'     => 'text'
    )); 

//  =============================
    //  = Address               =
    //  =============================
    $wp_customize->add_setting('address', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('address', array(
        'label'    => __('Address'),
        'section'  => 'theme_details',
        "settings" => "address",
        'type'     => 'text'
    )); 

//  =============================
    //  = Address2               =
    //  =============================
    $wp_customize->add_setting('address2', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('address2', array(
        'label'    => __('Address 2'),
        'section'  => 'theme_details',
        "settings" => "address2",
        'type'     => 'text'
    )); 


  //  =============================
    //  = Copyright                =
    //  =============================
    $wp_customize->add_setting('copyright', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('copyright', array(
        'label'    => __('Copyright'),
        'section'  => 'theme_details',
        "settings" => "copyright",
        'type'     => 'textarea'
    )); 
   
//  =============================
    //  = FooterAbout                =
    //  =============================
    $wp_customize->add_setting('footer_about', array(
        'default' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.",
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control('footer_about', array(
        'label'    => __('FooterAbout'),
        'section'  => 'theme_details',
        "settings" => "footer_about",
        'type'     => 'textarea'
    )); 



}
  
add_action('customize_register', 'themename_customize_register');



// add css to my theme


function custom_theme_customize_css(){ 

?>



<style type="text/css">
    
:root{
    --clr1:<?php echo get_theme_mod('primary_color');?>;
    --clr2:<?php echo get_theme_mod('secondary_color');?>;
}

</style> 


<?php 
}

add_action('wp_head','custom_theme_customize_css');



