<?php


function imax_customizer_config() {
	

    $url  = get_stylesheet_directory_uri() . '/inc/kirki/';
	
    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'i-max' ),
        'background-image' => __( 'Background Image', 'i-max' ),
        'no-repeat' => __( 'No Repeat', 'i-max' ),
        'repeat-all' => __( 'Repeat All', 'i-max' ),
        'repeat-x' => __( 'Repeat Horizontally', 'i-max' ),
        'repeat-y' => __( 'Repeat Vertically', 'i-max' ),
        'inherit' => __( 'Inherit', 'i-max' ),
        'background-repeat' => __( 'Background Repeat', 'i-max' ),
        'cover' => __( 'Cover', 'i-max' ),
        'contain' => __( 'Contain', 'i-max' ),
        'background-size' => __( 'Background Size', 'i-max' ),
        'fixed' => __( 'Fixed', 'i-max' ),
        'scroll' => __( 'Scroll', 'i-max' ),
        'background-attachment' => __( 'Background Attachment', 'i-max' ),
        'left-top' => __( 'Left Top', 'i-max' ),
        'left-center' => __( 'Left Center', 'i-max' ),
        'left-bottom' => __( 'Left Bottom', 'i-max' ),
        'right-top' => __( 'Right Top', 'i-max' ),
        'right-center' => __( 'Right Center', 'i-max' ),
        'right-bottom' => __( 'Right Bottom', 'i-max' ),
        'center-top' => __( 'Center Top', 'i-max' ),
        'center-center' => __( 'Center Center', 'i-max' ),
        'center-bottom' => __( 'Center Bottom', 'i-max' ),
        'background-position' => __( 'Background Position', 'i-max' ),
        'background-opacity' => __( 'Background Opacity', 'i-max' ),
        'ON' => __( 'ON', 'i-max' ),
        'OFF' => __( 'OFF', 'i-max' ),
        'all' => __( 'All', 'i-max' ),
        'cyrillic' => __( 'Cyrillic', 'i-max' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'i-max' ),
        'devanagari' => __( 'Devanagari', 'i-max' ),
        'greek' => __( 'Greek', 'i-max' ),
        'greek-ext' => __( 'Greek Extended', 'i-max' ),
        'khmer' => __( 'Khmer', 'i-max' ),
        'latin' => __( 'Latin', 'i-max' ),
        'latin-ext' => __( 'Latin Extended', 'i-max' ),
        'vietnamese' => __( 'Vietnamese', 'i-max' ),
        'serif' => _x( 'Serif', 'font style', 'i-max' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'i-max' ),
        'monospace' => _x( 'Monospace', 'font style', 'i-max' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
                // The developer recommends an image size of about 250 x 250
        'logo_image'   => get_template_directory_uri() . '/images/logo.png',
  
        // The color of active menu items, help bullets etc.
        //'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		//'color_accent' => '#e7e7e7',
		
		// The generic background color
		//'color_back' => '#f7f7f7',
	
        // Color used for secondary elements and desable/inactive controls
        //'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        //'color_select' => '#34495e',
		 
        
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_template_directory_uri() . '/inc/kirki/',

        'textdomain'   => 'i-max',
		
        'i18n'         => $strings,		
		
		
	);
	
	
	return $args;
}
add_filter( 'kirki/config', 'imax_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'imax_add_panels_and_sections' ); 
function imax_add_panels_and_sections( $wp_customize ) {
	
	/*
	* Add panels
	*/
	
	$wp_customize->add_panel( 'slider', array(
		'priority'    => 140,
		'title'       => __( 'Slider', 'i-max' ),
		'description' => __( 'Slides details', 'i-max' ),
	) );	

	$wp_customize->add_panel( 'rmenu', array(
		'priority'    => 140,
		'title'       => __( 'Responsive Menu', 'i-max' ),
		'description' => __( 'Responsive Menu Options', 'i-max' ),
	) );
	
    /**
     * Add Sections
     */
    $wp_customize->add_section('basic', array(
        'title'    => __('Basic Settings', 'i-max'),
        'description' => '',
        'priority' => 130,
    ));
	
    $wp_customize->add_section('layout', array(
        'title'    => __('Layout Options', 'i-max'),
        'description' => '',
        'priority' => 130,
    ));	
	
	
	
	$wp_customize->add_section('nxtopbar', array(
        'title'    => __('Topbar Options', 'i-max'),
        'description' => '',
        'priority' => 130,
    ));
	
    $wp_customize->add_section('nxheader', array(
        'title'    => __('Header Options', 'i-max'),
        'description' => '',
        'priority' => 130,
    ));	
	
    $wp_customize->add_section('nxfooter', array(
        'title'    => __('Footer Options', 'i-max'),
        'description' => '',
        'priority' => 130,
    ));	
	
	
		
	
    $wp_customize->add_section('social', array(
        'title'    => __('Social Links', 'i-max'),
        'description' => __('Insert full URL of your social link including http:// replacing #, <br /><b>Empty the field to hide the icon.</b>', 'i-max'),
        'priority' => 130,
    ));		
	
    $wp_customize->add_section('blogpage', array(
        'title'    => __('Default Blog Page', 'i-max'),
        'description' => '',
        'priority' => 150,
    ));	
	
    $wp_customize->add_section('fonts', array(
        'title'    => __('Fonts', 'i-max'),
        'description' => '',
        'priority' => 151,
    ));		
	
	// slider sections
	
	$wp_customize->add_section('slidersettings', array(
        'title'    => __('Slider Settings', 'i-max'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));		
	
	$wp_customize->add_section('slide1', array(
        'title'    => __('Slide 1', 'i-max'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));	
	$wp_customize->add_section('slide2', array(
        'title'    => __('Slide 2', 'i-max'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));	
	$wp_customize->add_section('slide3', array(
        'title'    => __('Slide 3', 'i-max'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));	
	$wp_customize->add_section('slide4', array(
        'title'    => __('Slide 4', 'i-max'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));	
	
	// promo sections
	
	$wp_customize->add_section('nxpromo', array(
        'title'    => __('More About i-max', 'i-max'),
        'description' => '',
        'priority' => 170,
    ));
	
	// Responsive Menu sections
	$wp_customize->add_section('rmgeneral', array(
        'title'    => __('General Options', 'i-max'),
        'panel' => 'rmenu',		
        'description' => '',
        'priority' => 170,
    ));	
	
    $wp_customize->add_section('rmsettings', array(
        'title'    => __('Menu Appearance', 'i-max'),
        'panel' => 'rmenu',
        'description' => '',
        'priority' => 180,
    ));
	
	// WooCommerce Settings
    $wp_customize->add_section('woocomm', array(
        'title'    => __('WooCommerce Theme Options', 'i-max'),
        'description' => '',
        'priority' => 191,
    ));						
	
}


function imax_custom_setting( $controls ) {

    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'top_phone',
        'label'    => __( 'Phone Number', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '1-000-123-4567',
        'priority' => 1,
		'description' => __( 'Phone number that appears on top bar.', 'i-max' ),
    );

	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'pre_loader',
		'label'       => __( 'Turn ON Page Preloader', 'i-max' ),
		'description' => __( 'Turn ON/OFF loding animation before page load', 'i-max' ),
		'section'     => 'layout',
		'default'     => 1,		
		'priority'    => 3,
	);		

    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'top_email',
        'label'    => __( 'Email Address', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => 'email@i-create.com',
        'priority' => 1,
		'description' => __( 'Email Id that appears on top bar.', 'i-max' ),		
    );
	
	$controls[] = array(
		'type'        => 'upload',
		'settings'     => 'logo',
		'label'       => __( 'Site header logo', 'i-max' ),
		'description' => __( 'Width 280px, height 72px max. Upload logo for header', 'i-max' ),
        'section'  => 'title_tagline',
		'default'     => get_template_directory_uri() . '/images/logo.png',
		'priority'    => 1,
	);
	
	$controls[] = array(
		'type'        => 'upload',
		'settings'     => 'logo_trans',
		'label'       => __( 'Transparent Logo', 'i-max' ),
		'description' => __( 'Optional transparent logo for transparent header', 'i-max' ),
        'section'  => 'title_tagline',
        'default'  => '',		
		'priority'    => 2,
	);		
	
	$controls[] = array(
		'type'        => 'color',
		'settings'     => 'primary_color',
		'label'       => __( 'Primary Color', 'i-max' ),
		'description' => __( 'Choose your theme color', 'i-max' ),
		'section'     => 'colors',
		'default'     => '#dd3333',
		'priority'    => 1,
	);	
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'topbar_bg',
		'label'       => __( 'Primary Colored Topbar BG', 'i-max' ),
		'description' => __( 'Turn off primary colored topbar background', 'i-max' ),
		'section'     => 'nxtopbar',
		'default'     => 1,		
		'priority'    => 3,
	);	

	/* Header controls */
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'nav_dropdown',
		'label'       => __( 'Primary Colored Dropdown Menu', 'i-max' ),
		'description' => __( 'Turn off primary colored dropdown Menu', 'i-max' ),
		'section'     => 'nxheader',
		'default'     => 1,		
		'priority'    => 3,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_search',
		'label'       => __( 'Show Search Icon', 'i-max' ),
		'description' => __( 'Turn the search ON/OFF on main navigation', 'i-max' ),
		'section'     => 'nxheader',
		'default'     => 1,
		'priority'    => 4,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'boxed-icons',
		'label'       => __( 'Boxed Menu Icons', 'i-craft' ),
		'description' => __( 'The crat and search icons will appear as boxed', 'i-craft' ),
		'section'     => 'nxheader',
		'default'     => 0,			
		'priority'    => 4,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'nav_upper',
		'label'       => __( 'Turn All Top Menu Item UPPERCASE', 'i-craft' ),
		'description' => __( 'Turns all top navigation manu item to UPPERCASE', 'i-craft' ),
		'section'     => 'nxheader',
		'default'  => 0,		
		'priority'    => 5,
	);				
			
	$controls[] = array(
		'type'        => 'radio-image',
		'settings'     => 'blog_layout',
		'label'       => __( 'Blog Posts Layout', 'i-max' ),
		'description' => __( '(Choose blog posts layout (one column/two column)', 'i-max' ),
		'section'     => 'layout',
		'default'     => '2',
		'priority'    => 2,
		'choices'     => array(
			'1' => get_template_directory_uri() . '/images/onecol.png',
			'2' => get_template_directory_uri() . '/images/twocol.png',
		),
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_full',
		'label'       => __( 'Show Full Content', 'i-max' ),
		'description' => __( 'Show full content on blog pages', 'i-max' ),
		'section'     => 'layout',
		'default'     => 0,
		'priority'    => 3,
	);		
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'wide_layout',
		'label'       => __( 'Wide layout', 'i-max' ),
		'description' => __( 'Check to have wide layou', 'i-max' ),
		'section'     => 'layout',
		'default'     => 1,
		'priority'    => 4,
	);
	
	$controls[] = array(
		'type'        => 'textarea',
		'settings'     => 'extra_style',
		'label'       => __( 'Additional style', 'i-max' ),
		'description' => __( 'add extra style(CSS) codes here', 'i-max' ),
		'section'     => 'layout',
		'default'     => '',
		'priority'    => 10,
	);	

	// social links
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_facebook',
        'label'    => __( 'Facebook', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_twitter',
        'label'    => __( 'Twitter', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_flickr',
        'label'    => __( 'Flickr', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_feed',
        'label'    => __( 'RSS', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_instagram',
        'label'    => __( 'Instagram', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_googleplus',
        'label'    => __( 'Google Plus', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_youtube',
        'label'    => __( 'YouTube', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_pinterest',
        'label'    => __( 'Pinterest', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
	    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_linkedin',
        'label'    => __( 'Linkedin', 'i-max' ),
        'section'  => 'nxtopbar',
        'default'  => '#',
        'priority' => 1,
    );		
	
	// Slider

	$controls[] = array(
		'type'        => 'slider',
		'settings'     => 'itrans_sliderspeed',
		'label'       => __( 'Slide Duration', 'i-max' ),
		'description' => __( 'Slide visibility in second', 'i-max' ),
		'section'     => 'slidersettings',
		'default'     => 6,
		'priority'    => 1,
		'choices'     => array(
			'min'  => 1,
			'max'  => 30,
			'step' => 1
		),
	);
	
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'itrans_sliderparallax',
		'label'       => __( 'Parallax Effect', 'i-max' ),
		'description' => __( 'Turn ON/OFF Parallax Effect', 'i-max' ),
		'section'     => 'slidersettings',
		'default'     => 1,			
		'priority'    => 4,
	);	
	
	$controls[] = array(
		//'type'        => 'radio-buttonset',
		'type'        => 'radio',
		'settings'    => 'itrans_overlay',
		'label'       => __( 'Text background', 'i-max' ),
		'section'     => 'slidersettings',
		'default'     => 'nxs-max19',
		'priority'    => 10,
		'choices'     => array(
			'nxs-pattern'   => esc_attr__( 'Patterned Overlay', 'i-max' ),
			'nxs-shadow' => esc_attr__( 'Shadowed Text', 'i-max' ),
			'nxs-vinette'  => esc_attr__( 'Vignette Overlay', 'i-max' ),
			'nxs-semitrans'  => esc_attr__( 'Semi-trans Text BG', 'i-max' ),
			'nxs-semitrans2'  => esc_attr__( 'Semi-trans Overlay', 'i-max' ),			
			'nxs-max18'  => esc_attr__( 'Max 18', 'i-max' ),
			'nxs-max19'  => esc_attr__( 'Max 19', 'i-max' ),						
		),
	);	
	
	
	$controls[] = array(
		'type'        => 'radio-buttonset',
		'settings'    => 'itrans_align',
		'label'       => __( 'Text Alignment', 'i-max' ),
		'section'     => 'slidersettings',
		'default'     => 'nxs-left',
		'priority'    => 10,
		'choices'     => array(
			'nxs-left'   => esc_attr__( 'Left', 'i-max' ),
			'nxs-center' => esc_attr__( 'Center', 'i-max' ),
			'nxs-right'  => esc_attr__( 'Right', 'i-max' ),
		),
	);		
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_height',
		'label'       => __( 'Slider Height (in %)', 'i-max' ),
		'section'     => 'slidersettings',
		'default'     => 100,
		'choices'     => array(
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_reduction',
		'label'       => __( 'Reduction In px', 'i-max' ),
		'section'     => 'slidersettings',
		'description' => __( 'Amount of pixels to be reduced from % of slider height', 'i-max' ),		
		'default'     => 260,
		'choices'     => array(
			'min'  => '0',
			'max'  => '320',
			'step' => '1',
		),
	);				
	
	// Slide 1
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide1_title',
        'label'    => __( 'Slide1 Title', 'i-max' ),
        'section'  => 'slide1',
        'default'  => esc_html__('<span class="themecolor">Drag & Drop</span> Ready Layouts', 'i-max' ),
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'textarea',
		'settings'     => 'itrans_slide1_desc',
		'label'       => __( 'Slide1 Description', 'i-max' ),
		'section'     => 'slide1',
		'default'     => __( 'Perfect For Business And WooCommerce WordPress Sites', 'i-max' ),
		'priority'    => 10,
	);
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide1_linktext',
        'label'    => __( 'Slide1 Link text', 'i-max' ),
        'section'  => 'slide1',
        'default'  => __( 'Know More', 'i-max' ),
        'priority' => 1,
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide1_linkurl',
        'label'    => __( 'Slide1 Link URL', 'i-max' ),
        'section'  => 'slide1',
        'default'  => 'https://wordpress.org/',
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'upload',
		'settings'     => 'itrans_slide1_image',
		'label'       => __( 'Slide1 Image', 'i-max' ),
        'section'  	  => 'slide1',
		'default'     => get_template_directory_uri() . '/images/slide1.jpg',
		'priority'    => 1,
	);							
	
	
	// Slide 2
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide2_title',
        'label'    => __( 'Slide2 Title', 'i-max' ),
        'section'  => 'slide2',
        'default'  => 'SiteOrigin Page Builder & Elementor',
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'textarea',
		'settings'     => 'itrans_slide2_desc',
		'label'       => __( 'Slide2 Description', 'i-max' ),
		'section'     => 'slide2',
		'default'     => __( 'Design Your Pages With Most Popular Page Builders', 'i-max' ),
		'priority'    => 10,
	);
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide2_linktext',
        'label'    => __( 'Slide2 Link text', 'i-max' ),
        'section'  => 'slide2',
        'default'  => __( 'Know More', 'i-max' ),
        'priority' => 1,
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide2_linkurl',
        'label'    => __( 'Slide2 Link URL', 'i-max' ),
        'section'  => 'slide2',
        'default'  => 'https://wordpress.org/',
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'upload',
		'settings'     => 'itrans_slide2_image',
		'label'       => __( 'Slide2 Image', 'i-max' ),
        'section'  	  => 'slide2',
		'default'     => get_template_directory_uri() . '/images/slide2.jpg',
		'priority'    => 1,
	);							
		
		
	// Slide 3
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide3_title',
        'label'    => __( 'Slide3 Title', 'i-max' ),
        'section'  => 'slide3',
        'default'  => 'Portfolio, Testimonial, Services...',
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'textarea',
		'settings'     => 'itrans_slide3_desc',
		'label'       => __( 'Slide3 Description', 'i-max' ),
		'section'     => 'slide3',
		'default'     => __( 'Create Sections Using Pagebuilder Or TemplatesNext Shortcodes ', 'i-max' ),
		'priority'    => 10,
	);
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide3_linktext',
        'label'    => __( 'Slide3 Link text', 'i-max' ),
        'section'  => 'slide3',
        'default'  => __( 'Know More', 'i-max' ),
        'priority' => 1,
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide3_linkurl',
        'label'    => __( 'Slide3 Link URL', 'i-max' ),
        'section'  => 'slide3',
        'default'  => 'https://wordpress.org/',
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'upload',
		'settings'     => 'itrans_slide3_image',
		'label'       => __( 'Slide3 Image', 'i-max' ),
        'section'  	  => 'slide3',
		'default'     => get_template_directory_uri() . '/images/slide3.jpg',
		'priority'    => 1,
	);							
	
	
	// Slide 4
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide4_title',
        'label'    => __( 'Slide4 Title', 'i-max' ),
        'section'  => 'slide4',
        'default'  => 'Exclusive WooCommerce Features',
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'textarea',
		'settings'     => 'itrans_slide4_desc',
		'label'       => __( 'Slide4 Description', 'i-max' ),
		'section'     => 'slide4',
		'default'     => __( 'Many WooCommerce Features Like Shopping Cart, Product Listings, Etc.', 'i-max' ),
		'priority'    => 10,
	);
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide4_linktext',
        'label'    => __( 'Slide4 Link text', 'i-max' ),
        'section'  => 'slide4',
        'default'  => __( 'Know More', 'i-max' ),
        'priority' => 1,
    );
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_slide4_linkurl',
        'label'    => __( 'Slide4 Link URL', 'i-max' ),
        'section'  => 'slide4',
        'default'  => 'https://wordpress.org/',
        'priority' => 1,
    );
	$controls[] = array(
		'type'        => 'upload',
		'settings'     => 'itrans_slide4_image',
		'label'       => __( 'Slide4 Image', 'i-max' ),
        'section'  	  => 'slide4',
		'default'     => get_template_directory_uri() . '/images/slide4.jpg',
		'priority'    => 1,
	);
	
	// Blog page setting
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_stat',
		'label'       => __( 'Hide i-max Slider', 'i-max' ),
		'description' => __( 'Turn Off or On to hide/show default i-max slider', 'i-max' ),
		'section'     => 'blogpage',
		'default'     => 0,
		'priority'    => 1,
	);	
	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'blogslide_scode',
        'label'    => __( 'Other Slider Shortcode', 'i-max' ),
        'section'  => 'blogpage',
        'default'  => '',
		'description' => __( 'Enter itrans slider shortcode or a 3rd party slider shortcode, ex. meta slider, smart slider 2, wow slider, etc.', 'i-max' ),
        'priority' => 2,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'banner_text',
        'label'    => __( 'Banner Text', 'i-max' ),
        'section'  => 'blogpage',
        'default'  => 'Welcome To '.get_bloginfo( 'name', 'display' ),
        'priority' => 3,
		'description' => __( 'if you are using a logo and want your site title or slogan to appear on the header banner', 'i-max' ),		
    );		

	//rmgeneral
	//rmsettings

	$controls[] = array(
		'label' => __('Enable Mobile Navigation', 'i-max'),
		'description' => __('Check if you want to activate mobile navigation.', 'i-max'),
		'settings' => 'enabled',
		'default' => 1,
		'type' => 'checkbox',
        'section'  => 'rmgeneral',	
	);
	$controls[] = array(
		'label' => __('Enable Swipe', 'i-max'),
		'description' => __('Enable swipe gesture to open/close menus, Only applicable for left/right menu.', 'i-max'),
		'settings' => 'swipe',
		'default' => 'yes',
		'choices' => array('yes' => 'Yes','no' => 'No'),
		'type' => 'radio',
        'section'  => 'rmgeneral',		
	);
	
	$controls[] = array(
		'label' => __(' Search...', 'i-max'),
		'description' => __(' Select the position of search box or simply hide the search box if you donot need it.', 'i-max'),
		'settings' => 'search_box',
		'default' => 'below_menu',
		'choices' => array('above_menu' => 'Above Menu','below_menu' => 'Below Menu', 'hide'=> 'Hide search box' ),
		'type' => 'select',
        'section'  => 'rmgeneral',		
	);
	$controls[] = array(
		'label' => __(' Search Box Text', 'i-max'),
		'description' => __('Enter the text that would be displayed on the search box placeholder.', 'i-max'),
		'settings' => 'search_box_text',
		'default' => __('Search...', 'i-max'),
		'type' => 'text',
        'section'  => 'rmgeneral',	
	);
		
	$controls[] = array(
		'label' => __('Allow zoom on mobile devices', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'zooming',
		'default' => 'yes',
		'choices' => array('yes' => 'Yes','no' => 'No'),
		'type' => 'radio',
        'section'  => 'rmgeneral',	
	);
		

	// Responsive Menu Settings
	$controls[] = array(
		'label' => __('Menu Symbol Position', 'i-max'),
		'description' => __('Select menu icon position which will be displayed on the menu bar.', 'i-max'),
		'settings' => 'menu_symbol_pos',
		'default' => 'left',
		'class' => 'mini',
		'choices' => array('left' => 'Left','right' => 'Right'),
		'type' => 'select',
        'section'  => 'rmsettings',	
	);

	$controls[] = array(
		'label' => __('Menu Text', 'i-max'),
		'description' => __('Entet the text you would like to display on the menu bar.', 'i-max'),
		'settings' => 'bar_title',
		'default' => __('MENU', 'i-max'),
		'class' => 'mini',
		'type' => 'text',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Menu Open Direction', 'i-max'),
		'description' => __('Select the direction from where menu will open.', 'i-max'),
		'settings' => 'position',
		'default' => 'top',
		'class' => 'mini',
		'choices' => array('left' => 'Left','right' => 'Right', 'top' => 'Top' ),
		'type' => 'select',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Display menu from width (in px)', 'i-max'),
		'description' => __(' Enter the width (in px) below which the responsive menu will be visible on screen', 'i-max'),
		'settings' => 'from_width',
		'default' => 1069,
		'class' => 'mini',
		'type' => 'text',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Menu Width', 'i-max'),
		'description' => __('Enter menu width in (%) only applicable for left and right menu.', 'i-max'),
		'settings' => 'how_wide',
		'default' => '80',
		'class' => 'mini',
		'type' => 'text',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu bar background color', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'bar_bgd',
		'default' => '#2e2e2e',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu bar text color', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'bar_color',
		'default' => '#F2F2F2',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu background color', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'menu_bgd',
		'default' => '#2E2E2E',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu text color', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'menu_color',
		'default' => '#CFCFCF',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu mouse over text color', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'menu_color_hover',
		'default' => '#606060',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu icon color', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'menu_icon_color',
		'default' => '#FFFFFF',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu borders(top & left) color', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'menu_border_top',
		'default' => '#0D0D0D',
		'type' => 'color',
        'section'  => 'rmsettings',		
	);
	
	$controls[] = array(
		'label' => __('Menu borders(bottom) color', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'menu_border_bottom',
		'default' => '#131212',
		'type' => 'color',
        'section'  => 'rmsettings',		
	);
	
	$controls[] = array(
		'label' => __('Enable borders for menu items', 'i-max'),
		'description' => __('', 'i-max'),
		'settings' => 'menu_border_bottom_show',
		'default' => 'yes',
		'choices' => array('yes' => 'Yes','no' => 'No'),
		'type' => 'radio',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'type'        => 'typography',
		'settings'    => 'body_font',
		'label'       => __( 'Body Font Style', 'i-max' ),
		'description' => __( 'Content font style (Variant and Subsets are not used). Default font "Roboto" Default font "Open Sans", size "14"', 'i-max' ),
		'section'     => 'fonts',
		'default'     => array(
			//'font-style'     => array( 'normal', 'bold', 'italic' ),
			'font-family'    => 'Open Sans',
			'font-size'      => '14',
			'color'          => '#575757',			
			'subsets'        => 'none',
		),
		'priority'    => 1,
		'choices' => array(
			'fonts' => array(
				'google'   => array( 'popularity', 50 ),
				'standard' => array(
					'Georgia,Times,"Times New Roman",serif',
					'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif'
				),
			),
		),	
	);
	
	$controls[] = array(
		'type'        => 'typography',
		'settings'    => 'title_font',
		'label'       => __( 'Heading Font Style', 'i-max' ),
		'description' => __( 'Title font style (Variant and Subsets are not used). Default font "Roboto"', 'i-max' ),
		'section'     => 'fonts',
		'default'     => array(
			//'font-style'     => array( 'normal', 'bold', 'italic' ),
			'font-family'    => 'Roboto',
			'subsets'        => 'none',
		),
		'priority'    => 1,
		'choices' => array(
			'fonts' => array(
				'google'   => array( 'popularity', 50 ),
				'standard' => array(
					'Georgia,Times,"Times New Roman",serif',
					'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif'
				),
			),
		),	
	);
	
	/* WooCommerce Settings */
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_login',
		'label'       => __( 'Hide/Show Topnav Login', 'i-max' ),
		'description' => __( 'Turn ON or OFF user login menu item on top nav', 'i-max' ),
		'section'     => 'woocomm',
		'default'  	  => 0,		
		'priority'    => 1,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_cart',
		'label'       => __( 'Show/Hide Topnav Cart', 'i-max' ),
		'description' => __( 'Turn ON or OFF cart from top nav', 'i-max' ),
		'section'     => 'woocomm',
		'default'     => 0,		
		'priority'    => 1,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'product_search',
		'label'       => __( 'Turn On/OFF Product Search', 'i-max' ),
		'description' => __( 'Turn ON/OFF product only search.', 'i-max' ),
		'section'     => 'woocomm',
		'default'  	  => 0,		
		'priority'    => 1,
	);	

	// promos
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'custom_demo',
		'label' => __( 'TemplatesNext Promo', 'i-max' ),
		'section'     => 'nxpromo',
		'default'	  => '<div class="promo-box">
        <div class="promo-2">
        	<div class="promo-wrap">
                <a href="http://templatesnext.org/ispirit/landing/" target="_blank">Go Premium</a>  			
            	<a href="http://templatesnext.org/i-max/" target="_blank">i-max Demo</a>
                <a href="https://www.facebook.com/templatesnext" target="_blank">Facebook</a> 
                <a href="http://templatesnext.org/ispirit/landing/forums/" target="_blank">Support</a>                                 
                <!-- <a href="http://templatesnext.org/imax/docs">Documentation</a> -->
                <a href="https://wordpress.org/support/view/theme-reviews/i-max#postform" target="_blank">Rate i-max</a>                
                <div class="donate">                
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="M2HN47K2MQHAN">
                    <table>
                    <tr><td><input type="hidden" name="on0" value="If you like my work, you can buy me">If you like my work, you can buy me</td></tr><tr><td><select name="os0">
                        <option value="a cup of coffee">1 cup of coffee $10.00 USD</option>
                        <option value="2 cup of coffee">2 cup of coffee $20.00 USD</option>
                        <option value="3 cup of coffee">3 cup of coffee $30.00 USD</option>
                    </select></td></tr>
                    </table>
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>                                                                          
            </div>
        </div>
		</div>',
		'priority' => 10,
	);	
	
    return $controls;
}
add_filter( 'kirki/controls', 'imax_custom_setting' );







