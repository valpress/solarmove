<?php
/**
 * Redux Framework Options for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "integral";

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => 'integral-theme-options',
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Valpress Options', 'integral' ),
        'page_title'           => __( 'Valpress Options', 'integral' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyB8VWXhSdIAAF6ZznBtNblYfzl1zMYugXE',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-admin-generic',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 100,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        'customizer_only' => false,
        // This variable determines whether or not to hide the options panel (leaving options accessible only through the customizer). For developing themes           specifically for wordpress.org, this argument will need to be set to 'true'.
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                  // Disable the save warning when a user changes a field
        'disable_tracking' => true,
        // Disable tracking
        
        // OPTIONAL -> Give you extra features
        'page_priority'        => 62,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        //'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        //'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://support.themely.com/knowledgebase',
        'title' => __( 'Documentation', 'integral' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'http://support.themely.com/',
        'title' => __( 'Support', 'integral' ),
    );

    //$args['admin_bar_links'][] = array(
    //    'id'    => 'redux-extensions',
    //    'href'  => 'reduxframework.com/extensions',
    //    'title' => __( 'Extensions', 'integral' ),
    //);

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://www.themely.com',
        'title' => __( 'Visit our website', 'integral' ),
        'icon'  => 'el el-globe'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/themelycom',
        'title' => __( 'Follow us on Twitter', 'integral' ),
        'icon'  => 'el el-twitter'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( 'Customize your theme with our easy to use options panel.', 'integral' ), $v );
    } else {
        $args['intro_text'] = __( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'integral' );
    }

    // Add content after the form.
    //$args['footer_text'] = __( '<p></p>', 'integral' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'integral' ),
            'content' => __( 'This is the tab content, HTML is allowed.', 'integral' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'integral' ),
            'content' => __( 'This is the tab content, HTML is allowed.', 'integral' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( 'This is the sidebar content, HTML is allowed.', 'integral' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General Settings', 'integral' ),
        'id'               => 'general',
        'desc'             => __( 'General theme settings', 'integral' ),
        'icon'             => 'el el-cogs'
    ) );

     // -> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Typography', 'integral' ),
        'id'     => 'general-typography',
        'desc'   => __( 'Change the font properties for the body, titles and top menu', 'integral' ),
        'icon'   => 'el el-font',
        'subsection'=> true,
        'fields' => array(
            array(
                'id'       => 'gen-typography-body',
                'type'     => 'typography',
                'title'    => __( 'Body Font', 'integral' ),
                'subtitle' => __( 'Change the body font properties.', 'integral' ),
                'subsets'       => false,
                'font-weight'    => false,
                'font-style'    => false,
                'text-align'=> false,
                'color'       => false,
                'output' => array('body'),
            ),

            array(
                'id'       => 'gen-typography-bigtitle',
                'type'     => 'typography',
                'title'    => __( 'Home Page H2 Big Titles', 'integral' ),
                'subtitle' => __( 'Change the main section titles (Work, About, Services & Contact)', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'    => false,
                'color'       => false,
                'text-transform'   => true,
                'output'	=> array('h2.bigtitle, h2.bigtitle_dark'),
            ),

            array(
                'id'       => 'gen-typography-smalltitle',
                'type'     => 'typography',
                'title'    => __( 'Home Page H2 Small Titles', 'integral' ),
                'subtitle' => __( 'Change the sub-section title font styles (Project Single, Project Grid, Our Clients, Skills & Pricing Table)', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'=> false,
                'color'       => false,
                'text-transform'   => true,
                'output'	=> array('h2.smalltitle, h2.smalltitle_dark'),
            ),
            array(
                'id'       => 'gen-typography-topmenu',
                'type'     => 'typography',
                'title'    => __( 'Top Menu Font', 'integral' ),
                'subtitle' => __( 'Change the top menu font styles. If you upload a logo larger then 30px in height, the top bar height will adjust accordingly. However this will result in the vertical alignment of the menu to be off. You can fix this by playing with the line height properties.', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'=> false,
                'line-height' => true,
                'color'       => true,
                'text-transform'   => true,
                'font-weight'   => true,
                'output'	=> array('.navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > .active > a'),
            ),

          

        )
    ) );

// -> START Colors
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Colors', 'integral' ),
        'id'     => 'general-colors',
        'icon'   => 'el el-adjust-alt',
        'subsection'=> true,
        'fields' => array(

                    array(
                        'id'       => 'button-color',
                        'type'     => 'color',
                        'title'    => __( 'Main Button Color', 'integral' ),
                        'output'    => array('background-color' => '.btn-primary, .btn-inverse:hover, #mc-embedded-subscribe-form input[type="submit"], .ctct-embed-signup .ctct-button', 'border-color' => '.btn-primary, .btn-inverse, #mc-embedded-subscribe-form input[type="submit"], .ctct-embed-signup .ctct-button', 'color' => '.btn-inverse',),
                        'subtitle' => __( 'Pick a color for the main buttons (default is #00aded).', 'integral' ),
                        'default'     => '#00aded',
                    ),

                     array(
                        'id'       => 'theme-color',
                        'type'     => 'color',
                        'title'    => __( 'Main theme color', 'integral' ),
                        'output'    => array('border-color' => '.navbar-default li a:hover, .navbar-default .navbar-nav > li.active a, .navbar-default .navbar-nav > li > a:hover', 'color' => 'a, a:hover, a:focus, .heading .fa, .pagemeta a:link,.pagemeta a:visited,.team .t-type', 'background' => '.lite h2.smalltitle span, .sidebar h2:after, .content .entry-title:after, .stats, .calltoaction2, .tweets', 'background-color' => '.dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover'),
                        'subtitle' => __( 'Change the color used for links and highlights (default is #00aded).', 'integral' ),
                        'default'     => '#00aded',
                    ),

                    array(
                        'id'       => 'header-background',
                        'type'     => 'color',
                        'title'    => __( 'Header Background Color', 'integral' ),
                        'output'    => array('background-color' => '.navbar-default'),
                        'subtitle' => __( 'Change the background color of the header where the logo and top navigation is located. Default is #ffffff.', 'integral' ),
                        'default'     => '#ffffff',
                    ),

                    array(
                        'id'       => 'footer-background',
                        'type'     => 'color',
                        'title'    => __( 'Footer Background Color', 'integral' ),
                        'output'    => array('background-color' => '.copyright'),
                        'subtitle' => __( 'Change the background color of the footer (where copyright information is located). Default is #111111.', 'integral' ),
                        'default'     => '#111111',
                    ),
            
                    array(
    	                'id'       => 'litesection-start',
    	                'type'     => 'section',
    	                'title'    => __( 'Lite Section Colors', 'integral' ),
    	                'indent'   => true, 
	           	 	),

                    array(
                        'id'       => 'lite-background',
                        'type'     => 'color',
                        'title'    => __( 'Background Color', 'integral' ),
                        'output'    => array('background-color' => '.lite, h2.bigtitle span'),
                        'subtitle' => __( 'Change the background color of the lite sections (Features, Work, Projects, Clients, About, Skills & Team). Default is #ffffff.', 'integral' ),
                    ),

                    array(
                        'id'       => 'lite-body-bigtitle-color',
                        'type'     => 'color',
                        'title'    => __( 'H2 Big Title Font Color', 'integral' ),
                        'output'    => array('color' => '.lite .bigtitle, .lite .heading .fa'),
                        'subtitle' => __( 'Change the font color of the big titles in the lite sections (Work & About). Default is #13151a.', 'integral' ),
                    ),

                    array(
                        'id'       => 'lite-body-smalltitle-color',
                        'type'     => 'color',
                        'title'    => __( 'H2 Small Title Font Color', 'integral' ),
                        'output'    => array('color' => '.lite h2.smalltitle'),
                        'subtitle' => __( 'Change the font color of the small titles in the lite sections (Projects Single, Projects Grid, Our Clients, Skills & Our Team). Default is #13151a.', 'integral' ),
                    ),

                    array(
                        'id'       => 'lite-body-subtitle-color',
                        'type'     => 'color',
                        'title'    => __( 'H3 Subtitle Font Color', 'integral' ),
                        'output'    => array('color' => '.lite h3'),
                        'subtitle' => __( 'Change the font color of the subtitles in the lite sections (feature titles, project titles, service titles & team member names). Default is #13151a.', 'integral' ),
                    ),

                    array(
                        'id'       => 'lite-body-font',
                        'type'     => 'color',
                        'title'    => __( 'Body Font Color', 'integral' ),
                        'output'    => array('color' => 'body .lite'),
                        'subtitle' => __( 'Change the body font color of the lite sections (Features, Work, Projects, Clients, About, Skills & Team). Default is #333333.', 'integral' ),
                    ),

                    array(
    	                'id'     => 'litesection-end',
    	                'type'   => 'section',
    	                'indent' => false, // Indent all options below until the next 'section' option is set.
	          	    ),

                    array(
    	                'id'       => 'darksection-start',
    	                'type'     => 'section',
    	                'title'    => __( 'Dark Section Colors', 'integral' ),
    	                'indent'   => true, 
	           	 	),
                    
                    array(
                            'id'       => 'dark-background',
                            'type'     => 'color',
                            'title'    => __( 'Background Color', 'integral' ),
                            'output'    => array('background-color' => '.dark, h2.bigtitle_dark span'),
                            'subtitle' => __( 'Change the background color of the dark sections (Services, Pricing Tables & Contact). Default is #1c1c1c.', 'integral' ),
                        ),
                    array(
                            'id'       => 'dark-body-bigtitle-color',
                            'type'     => 'color',
                            'title'    => __( 'H2 Big Title Font Color', 'integral' ),
                            'output'    => array('color' => '.dark h2.bigtitle_dark, .dark .heading .fa'),
                            'subtitle' => __( 'Change the font color of the H2 big titles in the dark sections (Services & Contact). Default is #ffffff.', 'integral' ),
                        ),
                    array(
                            'id'       => 'dark-body-smalltitle-color',
                            'type'     => 'color',
                            'title'    => __( 'H2 Small Title Font Color', 'integral' ),
                            'output'    => array('color' => '.dark h2.smalltitle_dark'),
                            'subtitle' => __( 'Change the font color of the H2 small titles in the dark sections (Pricing Tables). Default is #ffffff.', 'integral' ),
                        ),
                    array(
                            'id'       => 'dark-body-subtitle-color',
                            'type'     => 'color',
                            'title'    => __( 'H3 Subtitle Font Color', 'integral' ),
                            'output'    => array('color' => '.dark h3, .dark .pt_title'),
                            'subtitle' => __( 'Change the font color of the subtitles in the dark sections (service names, pricing table titles & contact info title). Default is #ffffff.', 'integral' ),
                        ),
                    array(
                            'id'       => 'dark-body-font',
                            'type'     => 'color',
                            'title'    => __( 'Body Font Color', 'integral' ),
                            'output'    => array('color' => '.dark'),
                            'subtitle' => __( 'Change the body font color of the dark sections (Services, Pricing Tables & Contact). Default is #888888. Default is #ffffff.', 'integral' ),
                        ),
                    array(
	                'id'     => 'darksection-end',
	                'type'   => 'section',
	                'indent' => false, // Indent all options below until the next 'section' option is set.
	          	    ),
                    

          

        )
    ) );


    // -> START Favicons
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Favicons', 'integral' ),
        'id'     => 'general-favicons',
        'icon'   => 'el el-heart-alt',
        'subsection'=> true,
        'fields' => array(
            array(
                'id'       => 'gen-favicon',
                'type'     => 'media',
                'title'    => __( 'Favicon Image', 'integral' ),
                'subtitle' => __( 'Upload favicon .ico file', 'integral' ),
                'desc'      => __( 'Preferred image size - 16x16 pixels - .ico extension', 'integral' ),
                'compiler' => 'true',
                'default'  => array( 'url' => get_template_directory_uri().'/images/favicon.ico' ),

            ),

            array(
                'id'       => 'gen-appleicon-default',
                'type'     => 'media',
                'title'    => __( 'Apple icon default image', 'integral' ),
                'subtitle' => __( 'Upload your default icon image for Apple iOS', 'integral' ),
                'desc'      => __( 'Preferred image size - 64x64 pixels - .png extension', 'integral' ),
                'compiler' => 'true',
                'default'  => array( 'url' => get_template_directory_uri().'/images/apple-touch-icon.png' ),

            ),

        )
    ) );

    // -> START Homepage Layout
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Homepage Layout', 'integral' ),
        'id'     => 'general-homepage',
        'icon'   => 'el el-th',
        'desc' => __( 'Organize how you want the layout to appear on the homepage. Drag and drop in the desired order or drag to the right column to disable a section.', 'integral' ),
        'subsection'=> true,
        'fields' => array(

        array(
                'id'       => 'gen-home-layout',
                'type'     => 'sorter',
                'title'    => __( 'Homepage Layout Manager', 'integral' ),
                'subtitle' => __( 'Organize how you want the layout to appear on the homepage. Drag and drop to the right column in order to disable a particular section.', 'integral' ),
                'desc'     => '',
                'compiler' => 'true',
                'options'  => array(
                    'Enabled'  => array(
                        'hero' => 'Hero',
                        'page-1-0'   => 'Page 1.0',
                        'page-1-1'   => 'Page 1.1',
                        'page-1-2'   => 'Page 1.2',
                        'page-1-3'   => 'Page 1.3',
                        'page-2-0'   => 'Page 2.0',
                        'page-2-1'   => 'Page 2.1',
                        'page-2-2'   => 'Page 2.2',
                        'page-2-3'   => 'Page 2.3',
                        'page-3-0'   => 'Page 3.0',
                        'page-3-1'   => 'Page 3.1',
                        'page-3-2'   => 'Page 3.2',
                        'page-3-3'   => 'Page 3.3',
                        'page-3-4'   => 'Page 3.4',
                        'page-3-5'   => 'Page 3.5',
                        'brands'   => 'Brands',
                        'features'   => 'Features',
                        'work'   => 'Work',
                        'project-single'   => 'Project Single',
                        'project-grid'   => 'Project Grid',
                        'clients'   => 'Clients',
                        'stats'   => 'Stats',
                        'testimonials'   => 'Testimonials',
                        'services'   => 'Services',
                        'pricing-tables'   => 'Pricing Tables',
                        'call-to-action2'   => 'Call to Action 2',
                        'call-to-action'   => 'Call to Action 1',
                        'about'   => 'About',
                        'skills'   => 'Skills',
                        'team'   => 'Team',
                        'blog'   => 'Blog',
                        'tweets'   => 'Tweets',
                        'newsletter'   => 'Newsletter',
                        'contact'   => 'Contact',
                    ),
                    'Disabled' => array(
                    ),
                ),
            ),


        )
    ) );

    // -> ANIMATIONS Settings
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Animations', 'integral' ),
        'id'     => 'general-animations',
        'icon'   => 'el el-play-circle',
        'subsection'=> true,
        'fields' => array(
            array(
                'id'       => 'animations-scrollreveal',
                'type'     => 'switch',
                'default'  => false,
                'title'    => __( 'Scroll Reveal', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the scroll reveal animations.', 'integral' ),
            ),

        )
    ) );

    // -> START Blog/Posts Layout
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Blog/Post Settings', 'integral' ),
        'id'     => 'general-blog',
        'icon'   => 'el el-wordpress',
        'desc'      => __( 'Configure the post meta on all blog and post pages (index, categories and archives)', 'integral' ),
        'subsection'=> true,
        'fields' => array(

            array(
                'id'       => 'blog-meta-date',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Display date on posts', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the date which appears under the title of each blog post.', 'integral' ),
            ),
            
            array(
                'id'       => 'blog-meta-category',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Display category on posts', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the categories which appear under the title of each blog post.', 'integral' ),
            ),
            
            array(
                'id'       => 'blog-meta-comments',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Display comments on posts', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the number of comments which appear under the title of each blog post.', 'integral' ),
            ),
            
            array(
                'id'       => 'blog-meta-author',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Display author on posts', 'integral' ),
                'subtitle' => __( 'Toggle off to hide the author name which appears under the title of each blog post.', 'integral' ),
            ),
            
            array(
                'id'       => 'blog-meta-excerpt',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Display post excerpts', 'integral' ),
                'subtitle' => __( 'Toggle off to hide the post excerpt which appears under the title of each blog post.', 'integral' ),
            ),
            
            array(
                'id'       => 'switch_sharebox',
                'type'     => 'switch', 
                'title'    => __('Sharebox in blog posts', 'integral'),
                'subtitle' => __('Enable/disable the Sharebox on blog posts.', 'integral'),
                'default'  => true,
            ),

            array(
                'id'        => 'check_sharebox',
                'type'      => 'checkbox',
                'title'     => __('Sharebox Social Icons', 'integral'),
                'subtitle'  => __('Check the social icons you want to show.', 'integral'),
                'options'   => array(
                    'facebook' => 'Facebook', 
                    'twitter' => 'Twitter', 
                    'linkedin' => 'LinkedIn',
                    'reddit' => 'Reddit',
                    'pinterest' => 'Pinterest',
                    'googleplus' => 'Google Plus',
                    'email' => 'E-Mail',
                ),
                'default'   => array(
                    'facebook' => '1', 
                    'twitter' => '1', 
                    'linkedin' => '1',
                    'reddit' => '1',
                    'pinterest' => '1',
                    'googleplus' => '1',
                    'email' => '1',
                ),
                'required' => array('switch_sharebox', "=", '1'),
            ),
            
            array(
                'id'       => 'switch_authorinfo',
                'type'     => 'switch', 
                'title'    => __('Display Author Info in blog posts', 'integral'),
                'subtitle' => __('Enable/Disable Author Info on blog posts. You can add author text in your User Settings.', 'integral'),
                'default'  => true,
            ),


        )
    ) );


    // -> START Top Menu
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Header', 'integral' ),
        'id'     => 'header',
        'icon'   => 'el el-lines',
        'fields' => array(
            
            array(
                    'id'       => 'topmenu-sticky',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Toggle Sticky Menu', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the menu sticking to the top of the screen when scrolling down.', 'integral' ),
                    'compiler' => 'true',
            ),
            
            array(
                'id'       => 'topmenu-padding',
                'type'     => 'spacing',
                'title'    => __( 'Top Menu Padding', 'integral' ),
                'subtitle' => __( 'Set the padding of the top of the menu. This is generally used when you upload a large logo which increases the height of the header area. This will allow you to vertically center the top menu.', 'integral' ),
                'output'   => array('.navbar-default .navbar-nav'),
                'compiler'    => 'true',
                'mode'    => 'padding',
                'units'     => array('%', 'px'),
                'units_extended'   => 'true',
                'display_units'   => 'true',
                'left'   => 'false',
                'right'   => 'false',
                'bottom'   => 'false',
                'default'            => array(
                        'padding-top'     => '23px', 
                        'units'          => 'px', 
                    )
            ),
            
            array(
                'id'       => 'gen-logo-image',
                'type'     => 'raw',
                'title'    => __( 'Logo', 'integral' ),
                'content' => __( 'To upload a logo to replace the default site name and description in the header, go to APPEARANCE > Customize and select the [Site Identity] tab. Or <a href="customize.php">click here</a> and then select the [Site Identity] tab.', 'integral' ),
            ),
            
            array(
                'id'       => 'gen-typography-sitetitle',
                'type'     => 'typography',
                'title'    => __( 'Site Name', 'integral' ),
                'subtitle' => __( 'Change the site name font styles. Only displayed if you have not uploaded a logo.', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'=> false,
                'line-height' => true,
                'color'       => true,
                'text-transform'   => true,
                'font-weight'   => true,
                'output'	=> array('.site-title .navbar-brand'),

            ),
            
            array(
                'id'       => 'header-section-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Disable Header', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the header section.', 'integral' ),
            ),

    ) ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Page Solarmove', 'integral' ),
        'id'               => 'page-1',
        'desc'             => __( 'Page Solarmove', 'integral' ),
        'icon'             => 'el',
    ) );

    // -> START Page 1.0
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 1.0', 'integral' ),
        'id'     => 'page-1-0',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

            array(
                'id'       => 'page-1-0-bg',
                'type'     => 'background',
                'title'    => __( 'Background', 'integral' ),
                'subtitle' => __( 'Change the background image or select a color. This will fill up the background of the welcome section.', 'integral' ),
                'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                'output'   => array('.sm_hero_layout_page-1-0'),
                'compiler'    => 'true',
                'default'  => array(
                            'background-image' => get_template_directory_uri().'/images/bg-welcome.jpg',
                            'background-size' => 'cover',
                        )
            ),
            
            array(
                'id'       => 'page-1-0-padding',
                'type'     => 'spacing',
                'title'    => __( 'Section Padding', 'integral' ),
                'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of the welcome section.', 'integral' ),
                'output'   => array('.sm_hero_layout_page-1-0'),
                'compiler'    => 'true',
                'mode'    => 'padding',
                'units'     => array('%', 'px'),
                'units_extended'   => 'true',
                'display_units'   => 'true',
                'left'   => 'false',
                'right'   => 'false',
                'default'            => array(
                        'padding-top'     => '190', 
                        'padding-bottom'  => '150', 
                        'units'          => 'px', 
                    )
            ),
            
            array(
                'id'       => 'page-1-0-overlay-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Background Overlay', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the dark overlay and pattern which appears over the background image.', 'integral' ),
            ),
            
            array(
                'id'    => 'page-1-0-overlay-info',
                'type'  => 'info',
                'style' => 'info',
                'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),
              
            ),
            
            array(
                'id'       => 'page-1-0-parallax-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Parallax Effect', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
            ),

            array(
                'id'       => 'page-1-0-title',
                'type'     => 'text',
                'title'    => __( 'Title Line 1', 'integral' ),
                'subtitle' => __( '1st line of the title', 'integral' ),
                'desc'      => __( '', 'integral' ),
                'default'  => 'Integral',
            ),
            
            array(
                'id'       => 'gen-typography-page-1-0-title',
                'type'     => 'typography',
                'title'    => __( 'Title Line 1 Typography', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'    => true,
                'color'         => true,
                'letter-spacing'=> true,
                'line-height'   => true,
                'text-transform'   => true,
                'output'        => array('.sm_hero_layout_page-1-0 h1'),
                'default'      => array(
                    'font-size'   => '120px',
                    'font-family' => 'Cabin',
                    'google'      => true,
                    'font-weight' => '400',
                    'color'         => '#fff',
                    'letter-spacing' => '1.25px',
                    'text-transform'   => 'none',
                     
                ),
            ),

            array(
                'id'       => 'page-1-0-subtitle',
                'type'     => 'text',
                'title'    => __( 'Title Line 2', 'integral' ),
                'subtitle' => __( '2nd line of the title', 'integral' ),
                'desc'      => __( '', 'integral' ),
                'default'  => 'One Page Theme',
            ),
            
            array(
                'id'       => 'gen-typography-page-1-0-subtitle',
                'type'     => 'typography',
                'title'    => __( 'Title Line 2 Typography', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'    => true,
                'color'         => true,
                'letter-spacing'=> true,
                'line-height'   => true,
                'text-transform'   => true,
                'output'        => array('.sm_hero_layout_page-1-0 h2'),
                'default'      => array(
                    'font-size'   => '90px',
                    'font-family' => 'Cabin',
                    'google'      => true,
                    'line-height' => '',
                    'font-weight' => '400',
                    'color'         => '#fff',
                    'letter-spacing' => '1.25px',
                    'text-transform'   => 'none',
                     
                ),
            ),

             array(
                'id'       => 'page-1-0-tagline',
                'type'     => 'editor',
                'title'    => __( 'Tagline', 'integral' ),
                'subtitle' => __( 'Tagline for the hero section', 'integral' ),
                'desc'    => __( 'Custom HTML allowed', 'integral' ),
                'default'  => 'A simple & elegant theme for freelancers, agencies and businesses. Perfect to promote your work or business.',
            ),

             array(
                'id'       => 'page-1-0-btn1-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Toggle Button 1', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the button', 'integral' ),
            ),

            array(
                'id'       => 'page-1-0-btn1-text',
                'type'     => 'text',
                'title'    => __( 'Button 1 Text', 'integral' ),
                'subtitle' => __( '', 'integral' ),
                'default'  => 'View Features',
                'required' => array( 'page-1-0-btn1-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-1-0-btn1-url',
                'type'     => 'text',
                'title'    => __( 'Button 1 URL', 'integral' ),
                'subtitle' => __( '', 'integral' ),
                'default'  => '#features',
                'required' => array( 'page-1-0-btn1-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-1-0-btn2-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Toggle Button 2', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the button', 'integral' ),
            ),

             array(
                'id'       => 'page-1-0-btn2-text',
                'type'     => 'text',
                'title'    => __( 'Button 2 Text', 'integral' ),
                'default'  => 'Download Now',
                'required' => array( 'page-1-0-btn2-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-1-0-btn2-url',
                'type'     => 'text',
                'title'    => __( 'Button 2 URL', 'integral' ),
                'default'  => '#pts',
                'required' => array( 'page-1-0-btn2-toggle', '=', true ),
            )
        )
    ) );

    // -> START Page 1.1
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 1.1', 'integral' ),
        'id'     => 'page-1-1',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

                    array(
                        'id'       => 'page-1-1-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Call-to-Action section.', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-1-1'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-cta.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
            
                    array(
                        'id'       => 'page-1-1-padding',
                        'type'     => 'spacing',
                        'title'    => __( 'Section Padding', 'integral' ),
                        'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of call-to-action section.', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-1-1'),
                        'compiler'    => 'true',
                        'mode'    => 'padding',
                        'units'     => array('%', 'px'),
                        'units_extended'   => 'true',
                        'display_units'   => 'true',
                        'left'   => 'false',
                        'right'   => 'false',
                        'default'            => array(
                                'padding-top'     => '100px', 
                                'padding-bottom'  => '110px', 
                                'units'          => 'px', 
                            )
                    ),
            
                    array(
                        'id'       => 'page-1-1-overlay-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Background Overlay', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the dark color and pattern overlay which appears over the background image.', 'integral' ),
                    ),
            
                    array(
                        'id'    => 'page-1-1-overlay-info',
                        'type'  => 'info',
                        'style' => 'info',
                        'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),

                    ),

                    array(
                        'id'       => 'page-1-1-parallax-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Parallax Effect', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
                    ),

                    array(
                    'id'       => 'page-1-1-title',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'integral' ),
                    'default'  => 'Choose Integral',
                    ),

                    array(
                    'id'       => 'page-1-1-text',
                    'type'     => 'editor',
                    'title'    => __( 'Content', 'integral' ),
                    'desc'    => __( 'Custom HTML allowed', 'integral' ),
                    'default'   => 'Don’t settle for any theme for your Website, Integral is the best choice & you can buy it today at an affordable price!',
                    ),

                    array(
                        'id'       => 'page-1-1-btn1-toggle',
                        'type'     => 'switch',
                        'default'  => false,
                        'title'    => __( 'Toggle Button 1', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                    array(
                        'id'       => 'page-1-1-btn1-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-1-1-btn1-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-1-1-btn2-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Toggle Button 2', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                     array(
                        'id'       => 'page-1-1-btn2-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-1-1-btn2-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-1-1-btn2-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-1-1-btn2-toggle', '=', true ),
                    ),
            
                    array(
                    'id'          => 'page-1-1-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                    'id'       => 'page-1-1-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the call-to-action section.', 'integral' ),
                    ),

        )
    ) );

    // -> START Page 1.2
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 1.2', 'integral' ),
        'id'     => 'page-1-2',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

                    array(
                        'id'       => 'page-1-2-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Call-to-Action section.', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-1-2'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-cta.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
            
                    array(
                        'id'       => 'page-1-2-padding',
                        'type'     => 'spacing',
                        'title'    => __( 'Section Padding', 'integral' ),
                        'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of call-to-action section.', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-1-2'),
                        'compiler'    => 'true',
                        'mode'    => 'padding',
                        'units'     => array('%', 'px'),
                        'units_extended'   => 'true',
                        'display_units'   => 'true',
                        'left'   => 'false',
                        'right'   => 'false',
                        'default'            => array(
                                'padding-top'     => '100px', 
                                'padding-bottom'  => '110px', 
                                'units'          => 'px', 
                            )
                    ),
            
                    array(
                        'id'       => 'page-1-2-overlay-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Background Overlay', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the dark color and pattern overlay which appears over the background image.', 'integral' ),
                    ),
            
                    array(
                        'id'    => 'page-1-2-overlay-info',
                        'type'  => 'info',
                        'style' => 'info',
                        'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),

                    ),

                    array(
                        'id'       => 'page-1-2-parallax-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Parallax Effect', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
                    ),

                    array(
                    'id'       => 'page-1-2-title',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'integral' ),
                    'default'  => 'Choose Integral',
                    ),

                    array(
                    'id'       => 'page-1-2-text',
                    'type'     => 'editor',
                    'title'    => __( 'Content', 'integral' ),
                    'desc'    => __( 'Custom HTML allowed', 'integral' ),
                    'default'   => 'Don’t settle for any theme for your Website, Integral is the best choice & you can buy it today at an affordable price!',
                    ),

                    array(
                        'id'       => 'page-1-2-btn1-toggle',
                        'type'     => 'switch',
                        'default'  => false,
                        'title'    => __( 'Toggle Button 1', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                    array(
                        'id'       => 'page-1-2-btn1-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-1-2-btn1-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-1-2-btn2-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Toggle Button 2', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                     array(
                        'id'       => 'page-1-2-btn2-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-1-2-btn2-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-1-2-btn2-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-1-2-btn2-toggle', '=', true ),
                    ),
            
                    array(
                    'id'          => 'page-1-2-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                    'id'       => 'page-1-2-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the call-to-action section.', 'integral' ),
                    ),

        )
    ) );

    // -> START Page 1.3
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 1.3', 'integral' ),
        'id'     => 'page-1-3',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

                    array(
                        'id'       => 'page-1-3-title',
                        'type'     => 'text',
                        'title'    => __( 'Title', 'integral' ),
                        'default'  => 'Contact',
                    ),
                    array(
                        'id'       => 'page-1-3-title-icon',
                        'type'     => 'text',
                        'title'    => __( 'Title Icon', 'integral' ),
                        'desc'       => __( 'Copy and paste the required icon class from the <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Fontawesome Icons List</a> and choose from 600+ icons.', 'integral' ),
                        'default'  => 'fa-envelope',
                    ),
                    array(
                        'id'       => 'page-1-3-subtitle',
                        'type'     => 'editor',
                        'title'    => __( 'Subtitle', 'integral' ),
                        'default'  => 'Bla bla bla',
                    ),
                    array(
                        'id'          => 'page-1-3-form-code',
                        'type'        => 'text',
                        'title' => __( 'Contact Form 7 Shortcode', 'integral' ),
                        'subtitle'   => __( 'Make sure you have installed the Contact Form 7 plugin and created a form. To create a form go to CONTACT > Add New. Then paste the shortcode in the field on the right.', 'integral' ),
                        'description' => __( 'Paste the shortcode in the field above.', 'integral' ),
                        'default'  => '[contact-form-7 id="1" title="Contact form 1"]'
                    ),
                    array(
                        'id'          => 'page-1-3-custom-class',
                        'type'        => 'text',
                        'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                        'title' => __( 'Custom Class', 'integral' ),
                        'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                        'id'       => 'page-1-3-section-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Disable Section', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the page-1-3 section.', 'integral' ),
                    )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Page Installation solaire', 'integral' ),
        'id'               => 'page-2',
        'desc'             => __( 'Page Installation solaire', 'integral' ),
        'icon'             => 'el',
    ) );

    // -> START Page 2.0
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 2.0', 'integral' ),
        'id'     => 'page-2-0',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

            array(
                'id'       => 'page-2-0-bg',
                'type'     => 'background',
                'title'    => __( 'Background', 'integral' ),
                'subtitle' => __( 'Change the background image or select a color. This will fill up the background of the welcome section.', 'integral' ),
                'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                'output'   => array('.sm_hero_layout_page-2-0'),
                'compiler'    => 'true',
                'default'  => array(
                            'background-image' => get_template_directory_uri().'/images/bg-welcome.jpg',
                            'background-size' => 'cover',
                        )
            ),
            
            array(
                'id'       => 'page-2-0-padding',
                'type'     => 'spacing',
                'title'    => __( 'Section Padding', 'integral' ),
                'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of the welcome section.', 'integral' ),
                'output'   => array('.sm_hero_layout_page-2-0'),
                'compiler'    => 'true',
                'mode'    => 'padding',
                'units'     => array('%', 'px'),
                'units_extended'   => 'true',
                'display_units'   => 'true',
                'left'   => 'false',
                'right'   => 'false',
                'default'            => array(
                        'padding-top'     => '190', 
                        'padding-bottom'  => '150', 
                        'units'          => 'px', 
                    )
            ),
            
            array(
                'id'       => 'page-2-0-overlay-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Background Overlay', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the dark overlay and pattern which appears over the background image.', 'integral' ),
            ),
            
            array(
                'id'    => 'page-2-0-overlay-info',
                'type'  => 'info',
                'style' => 'info',
                'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),
              
            ),
            
            array(
                'id'       => 'page-2-0-parallax-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Parallax Effect', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
            ),

            array(
                'id'       => 'page-2-0-title',
                'type'     => 'text',
                'title'    => __( 'Title Line 1', 'integral' ),
                'subtitle' => __( '1st line of the title', 'integral' ),
                'desc'      => __( '', 'integral' ),
                'default'  => 'Integral',
            ),
            
            array(
                'id'       => 'gen-typography-page-2-0-title',
                'type'     => 'typography',
                'title'    => __( 'Title Line 1 Typography', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'    => true,
                'color'         => true,
                'letter-spacing'=> true,
                'line-height'   => true,
                'text-transform'   => true,
                'output'        => array('.sm_hero_layout_page-2-0 h1'),
                'default'      => array(
                    'font-size'   => '120px',
                    'font-family' => 'Cabin',
                    'google'      => true,
                    'font-weight' => '400',
                    'color'         => '#fff',
                    'letter-spacing' => '1.25px',
                    'text-transform'   => 'none',
                     
                ),
            ),

            array(
                'id'       => 'page-2-0-subtitle',
                'type'     => 'text',
                'title'    => __( 'Title Line 2', 'integral' ),
                'subtitle' => __( '2nd line of the title', 'integral' ),
                'desc'      => __( '', 'integral' ),
                'default'  => 'One Page Theme',
            ),
            
            array(
                'id'       => 'gen-typography-page-2-0-subtitle',
                'type'     => 'typography',
                'title'    => __( 'Title Line 2 Typography', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'    => true,
                'color'         => true,
                'letter-spacing'=> true,
                'line-height'   => true,
                'text-transform'   => true,
                'output'        => array('.sm_hero_layout_page-2-0 h2'),
                'default'      => array(
                    'font-size'   => '90px',
                    'font-family' => 'Cabin',
                    'google'      => true,
                    'line-height' => '',
                    'font-weight' => '400',
                    'color'         => '#fff',
                    'letter-spacing' => '1.25px',
                    'text-transform'   => 'none',
                     
                ),
            ),

             array(
                'id'       => 'page-2-0-tagline',
                'type'     => 'editor',
                'title'    => __( 'Tagline', 'integral' ),
                'subtitle' => __( 'Tagline for the hero section', 'integral' ),
                'desc'    => __( 'Custom HTML allowed', 'integral' ),
                'default'  => 'A simple & elegant theme for freelancers, agencies and businesses. Perfect to promote your work or business.',
            ),

             array(
                'id'       => 'page-2-0-btn1-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Toggle Button 1', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the button', 'integral' ),
            ),

            array(
                'id'       => 'page-2-0-btn1-text',
                'type'     => 'text',
                'title'    => __( 'Button 1 Text', 'integral' ),
                'subtitle' => __( '', 'integral' ),
                'default'  => 'View Features',
                'required' => array( 'page-2-0-btn1-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-2-0-btn1-url',
                'type'     => 'text',
                'title'    => __( 'Button 1 URL', 'integral' ),
                'subtitle' => __( '', 'integral' ),
                'default'  => '#features',
                'required' => array( 'page-2-0-btn1-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-2-0-btn2-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Toggle Button 2', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the button', 'integral' ),
            ),

             array(
                'id'       => 'page-2-0-btn2-text',
                'type'     => 'text',
                'title'    => __( 'Button 2 Text', 'integral' ),
                'default'  => 'Download Now',
                'required' => array( 'page-2-0-btn2-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-2-0-btn2-url',
                'type'     => 'text',
                'title'    => __( 'Button 2 URL', 'integral' ),
                'default'  => '#pts',
                'required' => array( 'page-2-0-btn2-toggle', '=', true ),
            )
        )
    ) );

    // -> START Page 2.1
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 2.1', 'integral' ),
        'id'     => 'page-2-1',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(
             array(
                'id'       => 'page-2-1-title',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Title',
            ),
            
            array(
                'id'       => 'page-2-1-title-icon',
                'type'     => 'text',
                'title'    => __( 'Title Icon', 'integral' ),
                'desc'       => __( 'Copy and paste the required icon class from the <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Fontawesome Icons List</a> and choose from 600+ icons.', 'integral' ),
                'default'  => 'fa-space-shuttle',
            ),
            
            array(
                'id'       => 'page-2-1-subtitle',
                'type'     => 'editor',
                'title'    => __( 'Subtitle', 'integral' ),
                'default'  => 'Bla bla bla',
            ),

            array(
                    'id'       => 'page-2-1-create',
                    'type'     => 'raw',
                    'title'    => __( 'Add page 2.1 entry', 'integral' ),
                    'content' => __( 'Columns are created using Widgets. Go to APPEARANCE > Widgets and locate [2.1 Columns Section]. Add widgets entitled [Solarmove - Column Widget] to this area to add columns. Add as many as you like.', 'integral' ),

            ),
            
            array(
                'id'          => 'page-2-1-layout',
                'type'        => 'select',
                'title' => __( 'Page 2.1 Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of services to appear in a row. Additional services will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '4'
            ),
            
            
            array(
                'id'       => 'sfeature_icon_properties',
                'type'     => 'typography',
                'title'    => __( 'Page 2.1 Icon Styles', 'integral' ),
                'subtitle' => __( 'Specify the height and color of the icons. You can override styling for specific icons in the <a href="admin.php?page=Integral&tab=24">Custom Code</a> section. For color ideas visit <a target="_blank" href="http://www.colourlovers.com/colors/">ColourLovers</a>.', 'integral' ),
                'output'    => array('.services .feature span'),
                'preview' => false,
                'subsets'       => false,
                'font-weight'    => false,
                'font-style'    => false,
                'font-family' => false,
                'text-align'=> false,
                'line-height' => false,
                 'default'  => array(
                    'color'       => '#fff',
                    'font-size'   => '80px',
                  )

                ),
            array(
                    'id'          => 'page-2-1-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    'default' => 'no-padding-bottom',
            ),
            
            array(
                    'id'       => 'page-2-1-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the services section.', 'integral' ),
            )
        )
    ) );

    // -> START Page 2.2
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 2.2', 'integral' ),
        'id'     => 'page-2-2',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(
             array(
                'id'       => 'page-2-2-title',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Title',
            ),
            
            array(
                'id'       => 'page-2-2-title-icon',
                'type'     => 'text',
                'title'    => __( 'Title Icon', 'integral' ),
                'desc'       => __( 'Copy and paste the required icon class from the <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Fontawesome Icons List</a> and choose from 600+ icons.', 'integral' ),
                'default'  => 'fa-space-shuttle',
            ),
            
            array(
                'id'       => 'page-2-2-subtitle',
                'type'     => 'editor',
                'title'    => __( 'Subtitle', 'integral' ),
                'default'  => 'Bla bla bla',
            ),

            array(
                    'id'       => 'page-2-2-create',
                    'type'     => 'raw',
                    'title'    => __( 'Add page 2.2 entry', 'integral' ),
                    'content' => __( 'Columns are created using Widgets. Go to APPEARANCE > Widgets and locate [2.2 Columns Section]. Add widgets entitled [Solarmove - Column Widget] to this area to add columns. Add as many as you like.', 'integral' ),

            ),
            
            array(
                'id'          => 'page-2-2-layout',
                'type'        => 'select',
                'title' => __( 'Page 2.2 Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of services to appear in a row. Additional services will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '4'
            ),
            
            
            array(
                'id'       => 'sfeature_icon_properties',
                'type'     => 'typography',
                'title'    => __( 'Page 2.2 Icon Styles', 'integral' ),
                'subtitle' => __( 'Specify the height and color of the icons. You can override styling for specific icons in the <a href="admin.php?page=Integral&tab=24">Custom Code</a> section. For color ideas visit <a target="_blank" href="http://www.colourlovers.com/colors/">ColourLovers</a>.', 'integral' ),
                'output'    => array('.services .feature span'),
                'preview' => false,
                'subsets'       => false,
                'font-weight'    => false,
                'font-style'    => false,
                'font-family' => false,
                'text-align'=> false,
                'line-height' => false,
                 'default'  => array(
                    'color'       => '#fff',
                    'font-size'   => '80px',
                  )

                ),
            array(
                    'id'          => 'page-2-2-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    'default' => 'no-padding-bottom',
            ),
            
            array(
                    'id'       => 'page-2-2-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the services section.', 'integral' ),
            )
        )
    ) );


    // -> START Page 2.3
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 2.3', 'integral' ),
        'id'     => 'page-2-3',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

                    array(
                        'id'       => 'page-2-3-slide-1-src',
                        'type'     => 'background',
                        'title'    => __( 'Slide 1 background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the carousel item', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_carousel_layout-slide-1'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-testimonials.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
                    array(
                        'id'       => 'page-2-3-slide-1-title',
                        'type'     => 'text',
                        'title'    => __( 'Title slide 1', 'integral' ),
                        'default'  => 'Title slide 1',
                    ), 
                    array(
                        'id'       => 'page-2-3-slide-1-subtitle',
                        'type'     => 'editor',
                        'title'    => __( 'Subtitle slide 1', 'integral' ),
                        'default'  => 'Subtitle slide 1.',
                    ),
                    array(
                        'id'       => 'page-2-3-slide-2-src',
                        'type'     => 'background',
                        'title'    => __( 'Slide 2 background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the carousel item', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_carousel_layout-slide-2'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-testimonials.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
                    array(
                        'id'       => 'page-2-3-slide-2-title',
                        'type'     => 'text',
                        'title'    => __( 'Title slide 2', 'integral' ),
                        'default'  => 'Title slide 2',
                    ), 
                    array(
                        'id'       => 'page-2-3-slide-2-subtitle',
                        'type'     => 'editor',
                        'title'    => __( 'Subtitle slide 2', 'integral' ),
                        'default'  => 'Subtitle slide 2.',
                    ),
                    array(
                        'id'       => 'page-2-3-slide-3-src',
                        'type'     => 'background',
                        'title'    => __( 'Slide 3 background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the carousel item', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_carousel_layout-slide-3'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-testimonials.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
                    array(
                        'id'       => 'page-2-3-slide-3-title',
                        'type'     => 'text',
                        'title'    => __( 'Title slide 3', 'integral' ),
                        'default'  => 'Title slide 3',
                    ), 
                    array(
                        'id'       => 'page-2-3-slide-3-subtitle',
                        'type'     => 'editor',
                        'title'    => __( 'Subtitle slide 3', 'integral' ),
                        'default'  => 'Subtitle slide 3.',
                    ),
                    array(
                        'id'       => 'page-2-3-slide-4-src',
                        'type'     => 'background',
                        'title'    => __( 'Slide 4 background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the carousel item', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_carousel_layout-slide-4'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-testimonials.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
                    array(
                        'id'       => 'page-2-3-slide-4-title',
                        'type'     => 'text',
                        'title'    => __( 'Title slide 4', 'integral' ),
                        'default'  => 'Title slide 4',
                    ), 
                    array(
                        'id'       => 'page-2-3-slide-4-subtitle',
                        'type'     => 'editor',
                        'title'    => __( 'Subtitle slide 4', 'integral' ),
                        'default'  => 'Subtitle slide 4.',
                    ),
                    array(
                        'id'       => 'page-2-3-slide-5-src',
                        'type'     => 'background',
                        'title'    => __( 'Slide 5 background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the carousel item', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_carousel_layout-slide-5'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-testimonials.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
                    array(
                        'id'       => 'page-2-3-slide-5-title',
                        'type'     => 'text',
                        'title'    => __( 'Title slide 5', 'integral' ),
                        'default'  => 'Title slide 5',
                    ), 
                    array(
                        'id'       => 'page-2-3-slide-5-subtitle',
                        'type'     => 'editor',
                        'title'    => __( 'Subtitle slide 5', 'integral' ),
                        'default'  => 'Subtitle slide 5.',
                    ),  
                    array(
                        'id'       => 'page-2-3-section-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Disable Section', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the page-2-3 section.', 'integral' ),
                    )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Page Economies d\'énergie', 'integral' ),
        'id'               => 'page-3',
        'desc'             => __( 'Page Economies d\'énergie', 'integral' ),
        'icon'             => 'el',
    ) );

    // -> START Page 3.0
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 3.0', 'integral' ),
        'id'     => 'page-3-0',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

            array(
                'id'       => 'page-3-0-bg',
                'type'     => 'background',
                'title'    => __( 'Background', 'integral' ),
                'subtitle' => __( 'Change the background image or select a color. This will fill up the background of the welcome section.', 'integral' ),
                'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                'output'   => array('.sm_hero_layout_page-3-0'),
                'compiler'    => 'true',
                'default'  => array(
                            'background-image' => get_template_directory_uri().'/images/bg-welcome.jpg',
                            'background-size' => 'cover',
                        )
            ),
            
            array(
                'id'       => 'page-3-0-padding',
                'type'     => 'spacing',
                'title'    => __( 'Section Padding', 'integral' ),
                'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of the welcome section.', 'integral' ),
                'output'   => array('.sm_hero_layout_page-3-0'),
                'compiler'    => 'true',
                'mode'    => 'padding',
                'units'     => array('%', 'px'),
                'units_extended'   => 'true',
                'display_units'   => 'true',
                'left'   => 'false',
                'right'   => 'false',
                'default'            => array(
                        'padding-top'     => '190', 
                        'padding-bottom'  => '150', 
                        'units'          => 'px', 
                    )
            ),
            
            array(
                'id'       => 'page-3-0-overlay-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Background Overlay', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the dark overlay and pattern which appears over the background image.', 'integral' ),
            ),
            
            array(
                'id'    => 'page-3-0-overlay-info',
                'type'  => 'info',
                'style' => 'info',
                'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),
              
            ),
            
            array(
                'id'       => 'page-3-0-parallax-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Parallax Effect', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
            ),

            array(
                'id'       => 'page-3-0-title',
                'type'     => 'text',
                'title'    => __( 'Title Line 1', 'integral' ),
                'subtitle' => __( '1st line of the title', 'integral' ),
                'desc'      => __( '', 'integral' ),
                'default'  => 'Integral',
            ),
            
            array(
                'id'       => 'gen-typography-page-3-0-title',
                'type'     => 'typography',
                'title'    => __( 'Title Line 1 Typography', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'    => true,
                'color'         => true,
                'letter-spacing'=> true,
                'line-height'   => true,
                'text-transform'   => true,
                'output'        => array('.sm_hero_layout_page-3-0 h1'),
                'default'      => array(
                    'font-size'   => '120px',
                    'font-family' => 'Cabin',
                    'google'      => true,
                    'font-weight' => '400',
                    'color'         => '#fff',
                    'letter-spacing' => '1.25px',
                    'text-transform'   => 'none',
                     
                ),
            ),

            array(
                'id'       => 'page-3-0-subtitle',
                'type'     => 'text',
                'title'    => __( 'Title Line 2', 'integral' ),
                'subtitle' => __( '2nd line of the title', 'integral' ),
                'desc'      => __( '', 'integral' ),
                'default'  => 'One Page Theme',
            ),
            
            array(
                'id'       => 'gen-typography-page-3-0-subtitle',
                'type'     => 'typography',
                'title'    => __( 'Title Line 2 Typography', 'integral' ),
                'subsets'       => false,
                'font-style'    => false,
                'text-align'    => true,
                'color'         => true,
                'letter-spacing'=> true,
                'line-height'   => true,
                'text-transform'   => true,
                'output'        => array('.sm_hero_layout_page-3-0 h2'),
                'default'      => array(
                    'font-size'   => '90px',
                    'font-family' => 'Cabin',
                    'google'      => true,
                    'line-height' => '',
                    'font-weight' => '400',
                    'color'         => '#fff',
                    'letter-spacing' => '1.25px',
                    'text-transform'   => 'none',
                     
                ),
            ),

             array(
                'id'       => 'page-3-0-tagline',
                'type'     => 'editor',
                'title'    => __( 'Tagline', 'integral' ),
                'subtitle' => __( 'Tagline for the hero section', 'integral' ),
                'desc'    => __( 'Custom HTML allowed', 'integral' ),
                'default'  => 'A simple & elegant theme for freelancers, agencies and businesses. Perfect to promote your work or business.',
            ),

             array(
                'id'       => 'page-3-0-btn1-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Toggle Button 1', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the button', 'integral' ),
            ),

            array(
                'id'       => 'page-3-0-btn1-text',
                'type'     => 'text',
                'title'    => __( 'Button 1 Text', 'integral' ),
                'subtitle' => __( '', 'integral' ),
                'default'  => 'View Features',
                'required' => array( 'page-3-0-btn1-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-3-0-btn1-url',
                'type'     => 'text',
                'title'    => __( 'Button 1 URL', 'integral' ),
                'subtitle' => __( '', 'integral' ),
                'default'  => '#features',
                'required' => array( 'page-3-0-btn1-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-3-0-btn2-toggle',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Toggle Button 2', 'integral' ),
                'subtitle' => __( 'Toggle off to disable the button', 'integral' ),
            ),

             array(
                'id'       => 'page-3-0-btn2-text',
                'type'     => 'text',
                'title'    => __( 'Button 2 Text', 'integral' ),
                'default'  => 'Download Now',
                'required' => array( 'page-3-0-btn2-toggle', '=', true ),
            ),

            array(
                'id'       => 'page-3-0-btn2-url',
                'type'     => 'text',
                'title'    => __( 'Button 2 URL', 'integral' ),
                'default'  => '#pts',
                'required' => array( 'page-3-0-btn2-toggle', '=', true ),
            )
        )
    ) );

    // -> START Page 3.1
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 3.1', 'integral' ),
        'id'     => 'page-3-1',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

                    array(
                        'id'       => 'page-3-1-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Call-to-Action section.', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-3-1'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-cta.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
            
                    array(
                        'id'       => 'page-3-1-padding',
                        'type'     => 'spacing',
                        'title'    => __( 'Section Padding', 'integral' ),
                        'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of call-to-action section.', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-3-1'),
                        'compiler'    => 'true',
                        'mode'    => 'padding',
                        'units'     => array('%', 'px'),
                        'units_extended'   => 'true',
                        'display_units'   => 'true',
                        'left'   => 'false',
                        'right'   => 'false',
                        'default'            => array(
                                'padding-top'     => '100px', 
                                'padding-bottom'  => '110px', 
                                'units'          => 'px', 
                            )
                    ),
            
                    array(
                        'id'       => 'page-3-1-overlay-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Background Overlay', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the dark color and pattern overlay which appears over the background image.', 'integral' ),
                    ),
            
                    array(
                        'id'    => 'page-3-1-overlay-info',
                        'type'  => 'info',
                        'style' => 'info',
                        'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),

                    ),

                    array(
                        'id'       => 'page-3-1-parallax-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Parallax Effect', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
                    ),

                    array(
                    'id'       => 'page-3-1-title',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'integral' ),
                    'default'  => 'Choose Integral',
                    ),

                    array(
                    'id'       => 'page-3-1-text',
                    'type'     => 'editor',
                    'title'    => __( 'Content', 'integral' ),
                    'desc'    => __( 'Custom HTML allowed', 'integral' ),
                    'default'   => 'Don’t settle for any theme for your Website, Integral is the best choice & you can buy it today at an affordable price!',
                    ),

                    array(
                        'id'       => 'page-3-1-btn1-toggle',
                        'type'     => 'switch',
                        'default'  => false,
                        'title'    => __( 'Toggle Button 1', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                    array(
                        'id'       => 'page-3-1-btn1-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-1-btn1-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-1-btn2-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Toggle Button 2', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                     array(
                        'id'       => 'page-3-1-btn2-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-3-1-btn2-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-1-btn2-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-3-1-btn2-toggle', '=', true ),
                    ),
            
                    array(
                    'id'          => 'page-3-1-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                    'id'       => 'page-3-1-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the call-to-action section.', 'integral' ),
                    ),

        )
    ) );

    // -> START Page 3.2
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 3.2', 'integral' ),
        'id'     => 'page-3-2',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(
             array(
                'id'       => 'page-3-2-title',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Title',
            ),
            
            array(
                'id'       => 'page-3-2-title-icon',
                'type'     => 'text',
                'title'    => __( 'Title Icon', 'integral' ),
                'desc'       => __( 'Copy and paste the required icon class from the <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Fontawesome Icons List</a> and choose from 600+ icons.', 'integral' ),
                'default'  => 'fa-space-shuttle',
            ),
            
            array(
                'id'       => 'page-3-2-subtitle',
                'type'     => 'editor',
                'title'    => __( 'Subtitle', 'integral' ),
                'default'  => 'Bla bla bla',
            ),

            array(
                    'id'       => 'page-3-2-create',
                    'type'     => 'raw',
                    'title'    => __( 'Add page 3.2 entry', 'integral' ),
                    'content' => __( 'Columns are created using Widgets. Go to APPEARANCE > Widgets and locate [3.2 Columns Section]. Add widgets entitled [Solarmove - Column Widget] to this area to add columns. Add as many as you like.', 'integral' ),

            ),
            
            array(
                'id'          => 'page-3-2-layout',
                'type'        => 'select',
                'title' => __( 'Page 3.2 Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of services to appear in a row. Additional services will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '4'
            ),
            
            
            array(
                'id'       => 'sfeature_icon_properties',
                'type'     => 'typography',
                'title'    => __( 'Page 3.2 Icon Styles', 'integral' ),
                'subtitle' => __( 'Specify the height and color of the icons. You can override styling for specific icons in the <a href="admin.php?page=Integral&tab=24">Custom Code</a> section. For color ideas visit <a target="_blank" href="http://www.colourlovers.com/colors/">ColourLovers</a>.', 'integral' ),
                'output'    => array('.services .feature span'),
                'preview' => false,
                'subsets'       => false,
                'font-weight'    => false,
                'font-style'    => false,
                'font-family' => false,
                'text-align'=> false,
                'line-height' => false,
                 'default'  => array(
                    'color'       => '#fff',
                    'font-size'   => '80px',
                  )

                ),
            array(
                    'id'          => 'page-3-2-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    'default' => 'no-padding-bottom',
            ),
            
            array(
                    'id'       => 'page-3-2-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the services section.', 'integral' ),
            )
        )
    ) );

    // -> START Page 3.3
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 3.3', 'integral' ),
        'id'     => 'page-3-3',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(
             array(
                'id'       => 'page-3-3-title',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Title',
            ),
            
            array(
                'id'       => 'page-3-3-title-icon',
                'type'     => 'text',
                'title'    => __( 'Title Icon', 'integral' ),
                'desc'       => __( 'Copy and paste the required icon class from the <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Fontawesome Icons List</a> and choose from 600+ icons.', 'integral' ),
                'default'  => 'fa-space-shuttle',
            ),
            
            array(
                'id'       => 'page-3-3-subtitle',
                'type'     => 'editor',
                'title'    => __( 'Subtitle', 'integral' ),
                'default'  => 'Bla bla bla',
            ),

            array(
                    'id'       => 'page-3-3-create',
                    'type'     => 'raw',
                    'title'    => __( 'Add page 3.3 entry', 'integral' ),
                    'content' => __( 'Columns are created using Widgets. Go to APPEARANCE > Widgets and locate [3.3 Columns Section]. Add widgets entitled [Solarmove - Column Widget] to this area to add columns. Add as many as you like.', 'integral' ),

            ),
            
            array(
                'id'          => 'page-3-3-layout',
                'type'        => 'select',
                'title' => __( 'Page 3.3 Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of services to appear in a row. Additional services will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '4'
            ),
            
            
            array(
                'id'       => 'sfeature_icon_properties',
                'type'     => 'typography',
                'title'    => __( 'Page 3.3 Icon Styles', 'integral' ),
                'subtitle' => __( 'Specify the height and color of the icons. You can override styling for specific icons in the <a href="admin.php?page=Integral&tab=24">Custom Code</a> section. For color ideas visit <a target="_blank" href="http://www.colourlovers.com/colors/">ColourLovers</a>.', 'integral' ),
                'output'    => array('.services .feature span'),
                'preview' => false,
                'subsets'       => false,
                'font-weight'    => false,
                'font-style'    => false,
                'font-family' => false,
                'text-align'=> false,
                'line-height' => false,
                 'default'  => array(
                    'color'       => '#fff',
                    'font-size'   => '80px',
                  )

                ),
            array(
                    'id'          => 'page-3-3-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    'default' => 'no-padding-bottom',
            ),
            
            array(
                    'id'       => 'page-3-3-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the services section.', 'integral' ),
            )
        )
    ) );

    // -> START Page 3.4
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 3.4', 'integral' ),
        'id'     => 'page-3-4',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

                    array(
                        'id'       => 'page-3-4-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Call-to-Action section.', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-3-4'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-cta.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
            
                    array(
                        'id'       => 'page-3-4-padding',
                        'type'     => 'spacing',
                        'title'    => __( 'Section Padding', 'integral' ),
                        'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of call-to-action section.', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-3-4'),
                        'compiler'    => 'true',
                        'mode'    => 'padding',
                        'units'     => array('%', 'px'),
                        'units_extended'   => 'true',
                        'display_units'   => 'true',
                        'left'   => 'false',
                        'right'   => 'false',
                        'default'            => array(
                                'padding-top'     => '100px', 
                                'padding-bottom'  => '110px', 
                                'units'          => 'px', 
                            )
                    ),
            
                    array(
                        'id'       => 'page-3-4-overlay-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Background Overlay', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the dark color and pattern overlay which appears over the background image.', 'integral' ),
                    ),
            
                    array(
                        'id'    => 'page-3-4-overlay-info',
                        'type'  => 'info',
                        'style' => 'info',
                        'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),

                    ),

                    array(
                        'id'       => 'page-3-4-parallax-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Parallax Effect', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
                    ),

                    array(
                    'id'       => 'page-3-4-title',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'integral' ),
                    'default'  => 'Choose Integral',
                    ),

                    array(
                    'id'       => 'page-3-4-text',
                    'type'     => 'editor',
                    'title'    => __( 'Content', 'integral' ),
                    'desc'    => __( 'Custom HTML allowed', 'integral' ),
                    'default'   => 'Don’t settle for any theme for your Website, Integral is the best choice & you can buy it today at an affordable price!',
                    ),

                    array(
                        'id'       => 'page-3-4-btn1-toggle',
                        'type'     => 'switch',
                        'default'  => false,
                        'title'    => __( 'Toggle Button 1', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                    array(
                        'id'       => 'page-3-4-btn1-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-4-btn1-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-4-btn2-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Toggle Button 2', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                     array(
                        'id'       => 'page-3-4-btn2-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-3-4-btn2-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-4-btn2-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-3-4-btn2-toggle', '=', true ),
                    ),
            
                    array(
                    'id'          => 'page-3-4-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                    'id'       => 'page-3-4-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the call-to-action section.', 'integral' ),
                    ),

        )
    ) );

    // -> START Page 3.5
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Page 3.5', 'integral' ),
        'id'     => 'page-3-5',
        'icon'   => 'el el-chevron-right',
        'subsection' => true,
        'fields' => array(

                    array(
                        'id'       => 'page-3-5-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Call-to-Action section.', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-3-5'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-cta.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
            
                    array(
                        'id'       => 'page-3-5-padding',
                        'type'     => 'spacing',
                        'title'    => __( 'Section Padding', 'integral' ),
                        'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of call-to-action section.', 'integral' ),
                        'output'   => array('.sm_simple_text_layout_page-3-5'),
                        'compiler'    => 'true',
                        'mode'    => 'padding',
                        'units'     => array('%', 'px'),
                        'units_extended'   => 'true',
                        'display_units'   => 'true',
                        'left'   => 'false',
                        'right'   => 'false',
                        'default'            => array(
                                'padding-top'     => '100px', 
                                'padding-bottom'  => '110px', 
                                'units'          => 'px', 
                            )
                    ),
            
                    array(
                        'id'       => 'page-3-5-overlay-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Background Overlay', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the dark color and pattern overlay which appears over the background image.', 'integral' ),
                    ),
            
                    array(
                        'id'    => 'page-3-5-overlay-info',
                        'type'  => 'info',
                        'style' => 'info',
                        'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),

                    ),

                    array(
                        'id'       => 'page-3-5-parallax-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Parallax Effect', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
                    ),

                    array(
                    'id'       => 'page-3-5-title',
                    'type'     => 'text',
                    'title'    => __( 'Title', 'integral' ),
                    'default'  => 'Choose Integral',
                    ),

                    array(
                    'id'       => 'page-3-5-text',
                    'type'     => 'editor',
                    'title'    => __( 'Content', 'integral' ),
                    'desc'    => __( 'Custom HTML allowed', 'integral' ),
                    'default'   => 'Don’t settle for any theme for your Website, Integral is the best choice & you can buy it today at an affordable price!',
                    ),

                    array(
                        'id'       => 'page-3-5-btn1-toggle',
                        'type'     => 'switch',
                        'default'  => false,
                        'title'    => __( 'Toggle Button 1', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                    array(
                        'id'       => 'page-3-5-btn1-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-5-btn1-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 1 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-1-1-btn1-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-5-btn2-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Toggle Button 2', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                    ),

                     array(
                        'id'       => 'page-3-5-btn2-text',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 Text', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => 'Download',
                        'required' => array( 'page-3-5-btn2-toggle', '=', true ),
                    ),

                    array(
                        'id'       => 'page-3-5-btn2-url',
                        'type'     => 'text',
                        'title'    => __( 'Button 2 URL', 'integral' ),
                        'subtitle' => __( '', 'integral' ),
                        'default'  => '#',
                        'required' => array( 'page-3-5-btn2-toggle', '=', true ),
                    ),
            
                    array(
                    'id'          => 'page-3-5-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                    'id'       => 'page-3-5-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the call-to-action section.', 'integral' ),
                    )
        )
    ) );

    // -> START Brands
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Brands', 'integral' ),
        'id'     => 'brands',
        'icon'   => 'el el-star-empty',
        'desc'  => __( 'Upload images/logos of brands', 'integral' ),
        'fields' => array(

		array(
                'id'       => 'brands-create',
                'type'     => 'raw',
                'title'    => __( 'Add Brands', 'integral' ),
                'content' => __( 'Brands are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Brands Section]. Add widgets entitled [Integral - Brand Widget] to this area to add Brands. Add as many as you like.', 'integral' ),

                ),
            
            array(
                'id'          => 'brands-layout',
                'type'        => 'select',
                'title' => __( 'Brands Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of Brands to appear in a row. Additional Brands will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '2'
            ),
            
            array(
                    'id'          => 'brands-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
            ),
            
            array(
                    'id'       => 'brands-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the Brands section.', 'integral' ),
            ),

        )
    ) );

    // -> START Features
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Features', 'integral' ),
        'id'     => 'features',
        'icon'   => 'el el-ok-sign',
        'fields' => array(

                array(
                'id'       => 'feature-create',
                'type'     => 'raw',
                'title'    => __( 'Add Features', 'integral' ),
                'content' => __( 'Features are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Features Section]. Add widgets entitled [Integral - Feature Widget] to this area to add features. Add as many as you like.', 'integral' ),

                ),
            
                array(
                    'id'          => 'features-layout',
                    'type'        => 'select',
                    'title' => __( 'Features Layout', 'integral' ),
                    'subtitle' => __( 'Configure the number of features to appear in a row. Additional features will automatically default to the next row.', 'integral' ),
                    'options'     => array(
                    	'2'             => __( '6 per row (6 columns)', 'integral' ),
                        '3'             => __( '4 per row (4 columns)', 'integral' ),
                        '4'             => __( '3 per row (3 columns)', 'integral' ),
                        '6'             => __( '2 per row (2 columns)', 'integral' ),
                        '12'             => __( '1 per row (1 column)', 'integral' ),
                    ),
                    'default' => '4'
                ),

                array(
                'id'       => 'feature-icons',
                'type'     => 'typography',
                'title'    => __( 'Features Icon Styles', 'integral' ),
                'subtitle' => __( 'Specify the height and color of the icons. You can override styling for specific icons in the styles.css file located in <a href="theme-editor.php">APPEARANCE > EDITOR</a>. For color ideas visit <a target="_blank" href="http://www.colourlovers.com/colors/">ColourLovers</a>.', 'integral' ),
                'output'    => array('.features .feature i'),
                'preview' => false,
                'subsets'       => false,
                'font-weight'    => false,
                'font-style'    => false,
                'font-family' => false,
                'text-align'=> false,
                'line-height' => false,
                'default'  => array(
                    'color'       => '#f64744',
                    'font-size'   => '28px',
                  )

                ),

          array(
                'id'       => 'feature-header',
                'type'     => 'typography',
                'title'    => __( 'Feature Titles', 'integral' ),
                'subtitle' => __( 'Specify the feature title properties.', 'integral' ),
                'output'    => array('.features .feature h4'),
                'preview' => true,
                'subsets'       => false,
                'font-weight'    => true,
                'font-style'    => true,
                'text-align'=> true,
                'line-height' => true,
                'letter-spacing' => true,
                'default'  => array(
                    'font-weight'       => '600',
                    'font-size'   => '18px',
                    'letter-spacing' => '1px',
                  )

                ),
                array(
                    'id'          => 'feature-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    'default' => 'no-padding-bottom',
                ),
            
                array(
                    'id'       => 'features-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the features section.', 'integral' ),
                ),


        )
    ) );


 // -> START Work
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Work', 'integral' ),
        'id'     => 'work',
        'icon'   => 'el el-laptop',
        'fields' => array(
             array(
                'id'       => 'work-title',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Work',
            ),
            
            array(
                'id'       => 'work-title-icon',
                'type'     => 'text',
                'title'    => __( 'Title Icon', 'integral' ),
                'desc'       => __( 'Copy and paste the required icon class from the <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Fontawesome Icons List</a> and choose from 600+ icons.', 'integral' ),
                'default'  => 'fa-leaf',
            ),
            
            array(
                'id'       => 'work-subtitle',
                'type'     => 'editor',
                'title'    => __( 'Subtitle', 'integral' ),
                'default'  => 'Bla bla bla',
            ),
            
            array(
                    'id'          => 'work-text',
                    'type'        => 'select',
                    'title' => __( 'Content', 'integral' ),
                    'desc'    => __( 'Select the page you want to pull content from to populate this section', 'integral' ),
                    'data'     => 'pages',
                    
                ),
            
            array(
                    'id'          => 'work-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    'default' => 'no-padding-bottom',
            ),
            
            array(
                    'id'       => 'work-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the work section.', 'integral' ),
            ),

        )
    ) );


// -> START Project SINGLE TEST
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Projects Single', 'integral' ),
        'id'     => 'project-single',
        'icon'   => 'el el-file-edit',
        'fields' => array(

			array(
                'id'       => 'project-single-title',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Projects Single',
            ),


   			array(
                'id'       => 'project-create',
                'type'     => 'raw',
                'title'    => __( 'Add Projects', 'integral' ),
                'content' => __( 'Projects are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Projects Section]. Add widgets entitled [Integral - Single Project Widget] to this area to add projects. Add as many as you like.', 'integral' ),

            ),
            
            array(
                'id'    => 'project-single-info',
                'type'  => 'info',
                'style' => 'info',
                'title' => __( 'If you upload more than one image for a project, the slider will be automatically enabled. Configure the slider settings below.', 'integral' ),
              
            ),
            
            array(
                'id'       => 'project-single-autoplay',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Autoplay Slider', 'integral' ),
                'subtitle' => __( 'Toggle the autoplay function for the slider', 'integral' ),
            ),


            array(
                'id'            => 'project-single-slider',
                'type'          => 'slider',
                'title'         => __( 'Slide Delay', 'integral' ),
                'subtitle'      => __( 'This is the amount of delay in seconds between each slide', 'integral' ),
                'default'       => 7,
                'min'           => 1,
                'step'          => 1,
                'max'           => 20,
                'display_value' => 'label'
            ),
            
            array(
                    'id'          => 'project-single-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    'default' => 'no-padding-bottom',
            ),
            
            array(
                    'id'       => 'project-single-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the single projects section.', 'integral' ),
            ),

        )
    ) );

// -> START Project Grid
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Projects Grid', 'integral' ),
        'id'     => 'project-grid',
        'icon'   => 'el el-th-large',
        'fields' => array(

			array(
                'id'       => 'project-grid-maintitle',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Projects Grid',
            ),


   			array(
                'id'       => 'project-grid-create',
                'type'     => 'raw',
                'title'    => __( 'Add Projects', 'integral' ),
                'content' => __( 'Projects are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Projects Grid Section]. Add widgets entitled [Integral - Grid Project Widget] to this area to add projects. Add as many as you like.', 'integral' ),

                ),
            
            array(
                'id'          => 'projects-grid-layout',
                'type'        => 'select',
                'title' => __( 'Projects Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of projects to appear in a row. Additional projects will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '4'
            ),
            array(
                    'id'          => 'project-grid-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    'default' => 'no-padding-bottom',
            ),
            
            array(
                    'id'       => 'projects-grid-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the projects grid section.', 'integral' ),
            ),

        )
    ) );


// -> START Clients
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Clients', 'integral' ),
        'id'     => 'clients',
        'icon'   => 'el el-user',
        'fields' => array(


			array(
                'id'       => 'clients-maintitle',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Our Clients',
            ),

   			array(
                'id'       => 'clients-create',
                'type'     => 'raw',
                'title'    => __( 'Add Clients', 'integral' ),
                'content' => __( 'Clients are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Clients Section]. Add widgets entitled [Integral - Client Widget] to this area to add clients. Add as many as you like.', 'integral' ),

                ),
            
            array(
                'id'          => 'clients-layout',
                'type'        => 'select',
                'title' => __( 'Clients Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of clients to appear in a row. Additional clients will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '2'
            ),
            
            array(
                    'id'          => 'clients-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
            ),
            
            array(
                    'id'       => 'clients-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the clients section.', 'integral' ),
            ),

        )
    ) );

// -> START Stats
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Stats', 'integral' ),
        'id'     => 'stats',
        'icon'   => 'el el-graph',
        'desc'  => __( 'Create stats with animated counters', 'integral' ),
        'fields' => array(

            array(
                'id'       => 'stats-create',
                'type'     => 'raw',
                'title'    => __( 'Add Stats', 'integral' ),
                'content' => __( 'Stats are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Stats Section]. Add widgets entitled [Integral - Stat Widget] to this area to add Stats. Add as many as you like.', 'integral' ),

                ),
            
            array(
                'id'       => 'stats-bg',
                'type'     => 'background',
                'title'    => __( 'Background', 'integral' ),
                'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Stats section.', 'integral' ),
                'output'   => array('.stats'),
                'compiler'    => 'true',
                'default'  => array(
                                    'background-color' => '',
                                )

            ),
            
            array(
                'id'       => 'stats-typrography',
                'type'     => 'typography',
                'title'    => __( 'Text Styles', 'integral' ),
                'subtitle' => __( 'Change the size, color and style of the text and icons', 'integral' ),
                'subsets'       => false,
                'font-style'    => true,
                'font-size'    => true,
                'text-align'    => false,
                'line-height'    => false,
                'color'       => true,
                'text-transform'   => true,
                'output'	=> array('.stats .fa, .stats p'),
                'default'  => array(
                    'color'       => '#fff',
                  )
            ),

            array(
                'id'          => 'stats-layout',
                'type'        => 'select',
                'title' => __( 'Stats Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of Stats to appear in a row. Additional Stats will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '3'
            ),
            
            array(
                    'id'          => 'stats-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
            ),
            
            array(
                    'id'       => 'stats-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the Stats section.', 'integral' ),
            ),

        )
    ) );


// -> START Testimonials
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Testimonials', 'integral' ),
        'id'     => 'testimonials',
        'icon'   => 'el el-quotes',
        'fields' => array(

		           array(
                    'id'       => 'testi-create',
                    'type'     => 'raw',
                    'title'    => __( 'Add Testimonials', 'integral' ),
                    'content' => __( 'Testimonials are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Testimonials Section]. Add widgets entitled [Integral - Testimonial Widget] to this area to add testimonials. Add as many as you like.', 'integral' ),

                    ),
            
                    array(
		                'id'       => 'testi-title',
		                'type'     => 'text',
		                'title'    => __( 'Title', 'integral' ),
                        'subtitle' => __( 'If you do not want to display a title simply delete the text in the field.', 'integral' ),
		                'default'  => 'Testimonials',
		            ),

				    array(
                        'id'       => 'testi-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Testimonials section', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.testimonials'),
                        'compiler'    => 'true',
                        'default'  => array(
	                                        'background-image' => get_template_directory_uri().'/images/bg-testimonials.jpg',
	                                        'background-size' => 'cover',
	                                    )
                    ),
            
                    array(
                        'id'       => 'testi-padding',
                        'type'     => 'spacing',
                        'title'    => __( 'Section Padding', 'integral' ),
                        'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of testimonials section.', 'integral' ),
                        'output'   => array('.testimonials'),
                        'compiler'    => 'true',
                        'mode'    => 'padding',
                        'units'     => array('%', 'px'),
                        'units_extended'   => 'true',
                        'display_units'   => 'true',
                        'left'   => 'false',
                        'right'   => 'false',
                        'default'            => array(
                                'padding-top'     => '100px', 
                                'padding-bottom'  => '110px', 
                                'units'          => 'px', 
                            )
                    ),
            
                    array(
                        'id'       => 'testi-overlay-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Background Overlay', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the dark overlay and pattern which appears over the background image.', 'integral' ),
                    ),
            
                    array(
                        'id'    => 'testi-overlay-info',
                        'type'  => 'info',
                        'style' => 'info',
                        'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),

                    ),

                    array(
                                    'id'       => 'testi-parallax-toggle',
                                    'type'     => 'switch',
                                    'default'  => true,
                                    'title'    => __( 'Parallax Effect', 'integral' ),
                                    'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
                                ),

              array(
                    'id'    => 'testi-info',
                    'type'  => 'info',
                    'style' => 'info',
                    'title' => __( 'If there is more than one testimonial, the slider will be automatically enabled. Configure the slider settings below.', 'integral' ),

                ),

            array(
                'id'       => 'testi-autoplay',
                'type'     => 'switch',
                'default'  => true,
                'title'    => __( 'Autoplay Slider', 'integral' ),
                'subtitle' => __( 'Toggle the autoplay function for the testimonials slider', 'integral' ),
            ),


            array(
                'id'            => 'testi-slider',
                'type'          => 'slider',
                'title'         => __( 'Slide Delay', 'integral' ),
                'subtitle'      => __( 'This is the amount of delay in seconds between each testimonial', 'integral' ),
                'default'       => 7,
                'min'           => 1,
                'step'          => 1,
                'max'           => 20,
                'display_value' => 'label'
            ),
            
            array(
                    'id'          => 'testi-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
            ),
            
            array(
                    'id'       => 'testi-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the testimonials section.', 'integral' ),
            ),

        )
    ) );




// -> START Pricing Tables
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Pricing Tables', 'integral' ),
        'id'     => 'ptables',
        'icon'   => 'el el-usd',
        'desc'  => __( 'Create unlimited pricing tables for products and services.', 'integral' ),
        'fields' => array(


			array(
                'id'       => 'ptables-maintitle',
                'type'     => 'text',
                'title'    => __( 'Title', 'integral' ),
                'default'  => 'Pricing Tables',
            ),

   			array(
                'id'       => 'ptables-create',
                'type'     => 'raw',
                'title'    => __( 'Add Pricing Tables', 'integral' ),
                'content' => __( 'Pricing tables are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Pricing Tables Section]. Add widgets entitled [Integral - Pricing Table Widget] to this area to add pricing tables. Add as many as you like.', 'integral' ),

                ),
            
            array(
                'id'          => 'ptables-layout',
                'type'        => 'select',
                'title' => __( 'Pricing Tables Layout', 'integral' ),
                'subtitle' => __( 'Configure the number of pricing tables to appear in a row. Additional pricing tables will automatically default to the next row.', 'integral' ),
                'options'     => array(
                    '2'             => __( '6 per row (6 columns)', 'integral' ),
                    '3'             => __( '4 per row (4 columns)', 'integral' ),
                    '4'             => __( '3 per row (3 columns)', 'integral' ),
                    '6'             => __( '2 per row (2 columns)', 'integral' ),
                    '12'             => __( '1 per row (1 column)', 'integral' ),
                ),
                'default' => '4'
            ),

            array(
                    'id'          => 'ptables-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
            ),
            
            array(
                    'id'       => 'ptables-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the services section.', 'integral' ),
            ),
        )
    ) );

// -> START Call to Action
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Call to Action 1', 'integral' ),
        'id'     => 'calltoaction',
        'icon'   => 'el el-hand-up',
        'fields' => array(

                    array(
                        'id'       => 'calltoaction-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Call-to-Action section.', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.calltoaction'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-image' => get_template_directory_uri().'/images/bg-cta.jpg',
                                            'background-size' => 'cover',
                                        )
                    ),
            
                    array(
                        'id'       => 'calltoaction-padding',
                        'type'     => 'spacing',
                        'title'    => __( 'Section Padding', 'integral' ),
                        'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of call-to-action section.', 'integral' ),
                        'output'   => array('.calltoaction'),
                        'compiler'    => 'true',
                        'mode'    => 'padding',
                        'units'     => array('%', 'px'),
                        'units_extended'   => 'true',
                        'display_units'   => 'true',
                        'left'   => 'false',
                        'right'   => 'false',
                        'default'            => array(
                                'padding-top'     => '100px', 
                                'padding-bottom'  => '110px', 
                                'units'          => 'px', 
                            )
                    ),
            
                    array(
                        'id'       => 'calltoaction-overlay-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Background Overlay', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the dark color and pattern overlay which appears over the background image.', 'integral' ),
                    ),
            
                    array(
                        'id'    => 'calltoaction-overlay-info',
                        'type'  => 'info',
                        'style' => 'info',
                        'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),

                    ),

                    array(
                        'id'       => 'calltoaction-parallax-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Parallax Effect', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
                    ),

					array(
	                'id'       => 'calltoaction-title',
	                'type'     => 'text',
	                'title'    => __( 'Title', 'integral' ),
	                'default'  => 'Choose Integral',
		            ),

		            array(
	                'id'       => 'calltoaction-text',
	                'type'     => 'editor',
	                'title'    => __( 'Content', 'integral' ),
                    'desc'    => __( 'Custom HTML allowed', 'integral' ),
                    'default'   => 'Don’t settle for any theme for your Website, Integral is the best choice & you can buy it today at an affordable price!',
		            ),

		            array(
		                'id'       => 'calltoaction-btn1-toggle',
		                'type'     => 'switch',
		                'default'  => false,
		                'title'    => __( 'Toggle Button 1', 'integral' ),
		                'subtitle' => __( '', 'integral' ),
		            ),

		            array(
		                'id'       => 'calltoaction-btn1-text',
		                'type'     => 'text',
		                'title'    => __( 'Button 1 Text', 'integral' ),
		                'subtitle' => __( '', 'integral' ),
		                'default'  => 'Download',
		                'required' => array( 'calltoaction-btn1-toggle', '=', true ),
		            ),

		            array(
		                'id'       => 'calltoaction-btn1-url',
		                'type'     => 'text',
		                'title'    => __( 'Button 1 URL', 'integral' ),
		                'subtitle' => __( '', 'integral' ),
		                'default'  => '#',
		                'required' => array( 'calltoaction-btn1-toggle', '=', true ),
		            ),

		            array(
		                'id'       => 'calltoaction-btn2-toggle',
		                'type'     => 'switch',
		                'default'  => true,
		                'title'    => __( 'Toggle Button 2', 'integral' ),
		                'subtitle' => __( '', 'integral' ),
		            ),

		             array(
		                'id'       => 'calltoaction-btn2-text',
		                'type'     => 'text',
		                'title'    => __( 'Button 2 Text', 'integral' ),
		                'subtitle' => __( '', 'integral' ),
		                'default'  => 'Download',
		                'required' => array( 'calltoaction-btn2-toggle', '=', true ),
		            ),

		            array(
		                'id'       => 'calltoaction-btn2-url',
		                'type'     => 'text',
		                'title'    => __( 'Button 2 URL', 'integral' ),
		                'subtitle' => __( '', 'integral' ),
		                'default'  => '#',
		                'required' => array( 'calltoaction-btn2-toggle', '=', true ),
		            ),
            
                    array(
                    'id'          => 'calltoaction-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                    'id'       => 'calltoaction-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the call-to-action section.', 'integral' ),
                    ),

        )
    ) );

// -> START Call to Action 2
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Call to Action 2', 'integral' ),
        'id'     => 'calltoaction2',
        'icon'   => 'el el-share-alt',
        'desc'  => __( 'Create a call-to-action in horizontal layout.', 'integral' ),
        'fields' => array(

                    array(
                        'id'       => 'calltoaction2-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Call to Action section.', 'integral' ),
                        'output'   => array('.calltoaction2'),
                        'compiler'    => 'true',
                        'default'  => array(
                                            'background-color' => '',
                                        )

                    ),

                    array(
                        'id'       => 'calltoaction2-title',
                        'type'     => 'text',
                        'title'    => __( 'Title', 'integral' ),
                        'default'  => 'Build Your Website with Integral',
		            ),

                    array(
                        'id'       => 'calltoaction2-text',
                        'type'     => 'editor',
                        'title'    => __( 'Content', 'integral' ),
                        'desc'    => __( 'Custom HTML allowed', 'integral' ),
                        'default'   => 'Lorem ipsum veniam adipisicing cupidatat dolor do adipisicing commodo.',
		            ),

		            array(
		                'id'       => 'calltoaction2-btn-text',
		                'type'     => 'text',
		                'title'    => __( 'Button Text', 'integral' ),
		                'subtitle' => __( '', 'integral' ),
		                'default'  => 'Download',
		            ),

		            array(
		                'id'       => 'calltoaction2-btn-url',
		                'type'     => 'text',
		                'title'    => __( 'Button URL', 'integral' ),
		                'subtitle' => __( '', 'integral' ),
		                'default'  => '#',
		            ),

		            
                    array(
                        'id'          => 'calltoaction2-custom-class',
                        'type'        => 'text',
                        'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                        'title' => __( 'Custom Class', 'integral' ),
                        'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                        'id'       => 'calltoaction2-section-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Disable Section', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the call-to-action section.', 'integral' ),
                    ),

        )
    ) );

// -> START About
    Redux::setSection( $opt_name, array(
        'title'  => __( 'About', 'integral' ),
        'id'     => 'about',
        'icon'   => 'el el-question-sign',
        'fields' => array(


					array(
                        'id'       => 'about-title',
                        'type'     => 'text',
                        'title'    => __( 'Title', 'integral' ),
                        'default'  => 'About',
		            ),
            
                    array(
                        'id'       => 'about-title-icon',
                        'type'     => 'text',
                        'title'    => __( 'Title Icon', 'integral' ),
                        'desc'       => __( 'Copy and paste the required icon class from the <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Fontawesome Icons List</a> and choose from 600+ icons.', 'integral' ),
                        'default'  => 'fa-user',
                    ),

                    array(
                        'id'       => 'about-subtitle',
                        'type'     => 'editor',
                        'title'    => __( 'Subtitle', 'integral' ),
                        'default'  => 'Bla bla bla',
                    ),

                    array(
                        'id'          => 'about-text',
                        'type'        => 'select',
                        'title' => __( 'Content', 'integral' ),
                        'desc'    => __( 'Select the page you want to pull content from to populate this section', 'integral' ),
                        'data'     => 'pages',
                        
                    ),
            
                    array(
                        'id'          => 'about-custom-class',
                        'type'        => 'text',
                        'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                        'title' => __( 'Custom Class', 'integral' ),
                        'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                        'default' => 'no-padding-bottom',
                    ),
            
                    array(
                        'id'       => 'about-section-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Disable Section', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the about section.', 'integral' ),
                    ),

        )
    ) );

    // -> START Skills
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Skills', 'integral' ),
        'id'     => 'skills',
        'icon'   => 'el el-tasks',
        'fields' => array(


					array(
                        'id'       => 'skills-title',
                        'type'     => 'text',
                        'title'    => __( 'Title', 'integral' ),
                        'default'  => 'Skills',
		            ),

		            array(
                        'id'          => 'skills-text',
                        'type'        => 'select',
                        'title' => __( 'Content', 'integral' ),
                        'desc'    => __( 'Select the page you want to pull content from to populate this section', 'integral' ),
                        'data'     => 'pages',
                        
                    ),

                    //Skill 1
		   			array(
                        'id'       => 'skillsection1-start',
                        'type'     => 'section',
                        'title'    => __( 'Skill 1', 'integral' ),
                        'indent'   => true, 
	           	 	),
            
                    array(
                        'id'          => 'skill1-name',
                        'type'        => 'text',
                        'title' => __( 'Skill Name', 'integral' ),
                        'default'     => 'Skill 1',
                    ),

                   array(
                        'id'       => 'skill1-color',
                        'type'     => 'color',
                        'title'    => __( 'Skill Color', 'integral' ),
                        'subtitle' => __( 'Pick a color for the skill', 'integral' ),
                        'default'     => '#5cb85c',
                    ),

                   array(
                        'id'            => 'skill1-percent',
                        'type'          => 'slider',
                        'title'         => __( 'Skill Level', 'integral' ),
                        'default'       => 40,
                        'min'           => 1,
                        'step'          => 1,
                        'max'           => 100,
                        'display_value' => 'label'
                    ),
                    
                    array(
                        'id'       => 'skillsection1-end',
                        'type'     => 'section',
                        'indent'   => false, 
	           	 	),
            
                    //Skill 2
                    array(
                        'id'       => 'skillsection2-start',
                        'type'     => 'section',
                        'title'    => __( 'Skill 2', 'integral' ),
                        'indent'   => true, 
	           	 	),
            
                    array(
                        'id'          => 'skill2-name',
                        'type'        => 'text',
                        'title' => __( 'Skill Name', 'integral' ),
                        'default'     => 'Skill 2',
                    ),

                   array(
                        'id'       => 'skill2-color',
                        'type'     => 'color',
                        'title'    => __( 'Skill Color', 'integral' ),
                        'subtitle' => __( 'Pick a color for the skill', 'integral' ),
                        'default'     => '#5bc0de',
                    ),

                   array(
                        'id'            => 'skill2-percent',
                        'type'          => 'slider',
                        'title'         => __( 'Skill Level', 'integral' ),
                        'default'       => 60,
                        'min'           => 1,
                        'step'          => 1,
                        'max'           => 100,
                        'display_value' => 'label'
                    ),
                    
                    array(
                        'id'       => 'skillsection2-end',
                        'type'     => 'section',
                        'indent'   => false, 
	           	 	),
            
                    //Skill 3
                    array(
                        'id'       => 'skillsection3-start',
                        'type'     => 'section',
                        'title'    => __( 'Skill 3', 'integral' ),
                        'indent'   => true, 
	           	 	),
            
                    array(
                        'id'          => 'skill3-name',
                        'type'        => 'text',
                        'title' => __( 'Skill Name', 'integral' ),
                        'default'     => 'Skill 3',
                    ),

                   array(
                        'id'       => 'skill3-color',
                        'type'     => 'color',
                        'title'    => __( 'Skill Color', 'integral' ),
                        'subtitle' => __( 'Pick a color for the skill', 'integral' ),
                        'default'     => '#f0ad4e',
                    ),

                   array(
                        'id'            => 'skill3-percent',
                        'type'          => 'slider',
                        'title'         => __( 'Skill Level', 'integral' ),
                        'default'       => 80,
                        'min'           => 1,
                        'step'          => 1,
                        'max'           => 100,
                        'display_value' => 'label'
                    ),
                    
                    array(
                        'id'       => 'skillsection3-end',
                        'type'     => 'section',
                        'indent'   => false, 
	           	 	),

		            
                    //Skill 4
                    array(
                        'id'       => 'skillsection4-start',
                        'type'     => 'section',
                        'title'    => __( 'Skill 4', 'integral' ),
                        'indent'   => true, 
	           	 	),
            
                    array(
                        'id'          => 'skill4-name',
                        'type'        => 'text',
                        'title' => __( 'Skill Name', 'integral' ),
                        'default'     => 'Skill 4',
                    ),

                   array(
                        'id'       => 'skill4-color',
                        'type'     => 'color',
                        'title'    => __( 'Skill Color', 'integral' ),
                        'subtitle' => __( 'Pick a color for the skill', 'integral' ),
                        'default'     => '#d9534f',
                    ),

                   array(
                        'id'            => 'skill4-percent',
                        'type'          => 'slider',
                        'title'         => __( 'Skill Level', 'integral' ),
                        'default'       => 100,
                        'min'           => 1,
                        'step'          => 1,
                        'max'           => 100,
                        'display_value' => 'label'
                    ),
                    
                    array(
                        'id'       => 'skillsection4-end',
                        'type'     => 'section',
                        'indent'   => false, 
	           	 	),
            
                    //Skill 5
                    array(
                        'id'       => 'skillsection5-start',
                        'type'     => 'section',
                        'title'    => __( 'Skill 5', 'integral' ),
                        'indent'   => true, 
	           	 	),
            
                    array(
                        'id'          => 'skill5-name',
                        'type'        => 'text',
                        'title' => __( 'Skill Name', 'integral' ),
                    ),

                   array(
                        'id'       => 'skill5-color',
                        'type'     => 'color',
                        'title'    => __( 'Skill Color', 'integral' ),
                        'subtitle' => __( 'Pick a color for the skill', 'integral' ),
                        'default'     => '#333333',
                    ),

                   array(
                        'id'            => 'skill5-percent',
                        'type'          => 'slider',
                        'title'         => __( 'Skill Level', 'integral' ),
                        'min'           => 1,
                        'step'          => 1,
                        'max'           => 100,
                        'display_value' => 'label'
                    ),
                    
                    array(
                        'id'       => 'skillsection5-end',
                        'type'     => 'section',
                        'indent'   => false, 
	           	 	),
            
                    //Skill 6
                    array(
                        'id'       => 'skillsection6-start',
                        'type'     => 'section',
                        'title'    => __( 'Skill 6', 'integral' ),
                        'indent'   => true, 
	           	 	),
            
                    array(
                        'id'          => 'skill6-name',
                        'type'        => 'text',
                        'title' => __( 'Skill Name', 'integral' ),
                    ),

                   array(
                        'id'       => 'skill6-color',
                        'type'     => 'color',
                        'title'    => __( 'Skill Color', 'integral' ),
                        'subtitle' => __( 'Pick a color for the skill', 'integral' ),
                        'default'     => '#333333',
                    ),

                   array(
                        'id'            => 'skill6-percent',
                        'type'          => 'slider',
                        'title'         => __( 'Skill Level', 'integral' ),
                        'min'           => 1,
                        'step'          => 1,
                        'max'           => 100,
                        'display_value' => 'label'
                    ),
                    
                    array(
                        'id'       => 'skillsection6-end',
                        'type'     => 'section',
                        'indent'   => false, 
	           	 	),
            
                    array(
                        'id'          => 'skills-custom-class',
                        'type'        => 'text',
                        'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                        'title' => __( 'Custom Class', 'integral' ),
                        'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                        'default' => 'no-padding-bottom',
                    ),
            
                    array(
                    'id'       => 'skills-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the skills section.', 'integral' ),
                    ),

        )
    ) );


 // -> START Team
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Team', 'integral' ),
        'id'     => 'team',
        'icon'   => 'el el-group',
        'fields' => array(


					array(
	                'id'       => 'team-title',
	                'type'     => 'text',
	                'title'    => __( 'Title', 'integral' ),
	                'default'  => 'Our Team',
		            ),

		   			array(
                    'id'       => 'team-create',
                    'type'     => 'raw',
                    'title'    => __( 'Add Team Members', 'integral' ),
                    'content' => __( 'Team members are created using Widgets. Go to APPEARANCE > Widgets and locate [Homepage Team Section]. Add widgets entitled [Integral - Team Member Widget] to this area to add team members. Add as many as you like.', 'integral' ),

                    ),
            
                    array(
                    'id'          => 'team-layout',
                    'type'        => 'select',
                    'title' => __( 'Team Members Layout', 'integral' ),
                    'subtitle' => __( 'Configure the number of team members to appear in a row. Additional team members will automatically default to the next row.', 'integral' ),
                    'options'     => array(
                        '2'             => __( '6 per row (6 columns)', 'integral' ),
                        '3'             => __( '4 per row (4 columns)', 'integral' ),
                        '4'             => __( '3 per row (3 columns)', 'integral' ),
                        '6'             => __( '2 per row (2 columns)', 'integral' ),
                        '12'             => __( '1 per row (1 column)', 'integral' ),
                    ),
                    'default' => '4'
                    ),
            
                    array(
                            'id'          => 'team-custom-class',
                            'type'        => 'text',
                            'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                            'title' => __( 'Custom Class', 'integral' ),
                            'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                            'default' => 'no-padding-bottom',
                    ),

                    array(
                            'id'       => 'team-section-toggle',
                            'type'     => 'switch',
                            'default'  => true,
                            'title'    => __( 'Disable Section', 'integral' ),
                            'subtitle' => __( 'Toggle off to disable the team members section.', 'integral' ),
                    ),

        )
    ) );

    // -> START Blog
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Blog', 'integral' ),
        'id'     => 'blog',
        'icon'   => 'el el-wordpress',
        'fields' => array(


					array(
	                'id'       => 'blog-title',
	                'type'     => 'text',
	                'title'    => __( 'Title', 'integral' ),
	                'default'  => 'From Our Blog',
		            ),
            
                    array(
                    'id'          => 'blog-posts',
                    'type'        => 'select',
                    'title' => __( 'Blog Posts', 'integral' ),
                    'subtitle' => __( 'Set the number of latest posts to display.', 'integral' ),
                    'options'     => array(
                        '1'             => __( '1 post', 'integral' ),
                        '2'             => __( '2 posts', 'integral' ),
                        '3'             => __( '3 posts', 'integral' ),
                        '4'             => __( '4 posts', 'integral' ),
                        '5'             => __( '5 posts', 'integral' ),
                        '6'             => __( '6 posts', 'integral' ),
                        '7'             => __( '7 posts', 'integral' ),
                        '8'             => __( '8 posts', 'integral' ),
                        '9'             => __( '9 posts', 'integral' ),
                        '10'             => __( '10 posts', 'integral' ),
                        '11'             => __( '11 posts', 'integral' ),
                        '12'             => __( '12 posts', 'integral' ),
                    ),
                    'default' => '3'
                    ),
            
                    array(
                    'id'          => 'blog-layout',
                    'type'        => 'select',
                    'title' => __( 'Blog Posts Layout', 'integral' ),
                    'subtitle' => __( 'Configure the posts layout.', 'integral' ),
                    'options'     => array(
                        '3'             => __( '4 per row (4 columns)', 'integral' ),
                        '4'             => __( '3 per row (3 columns)', 'integral' ),
                        '6'             => __( '2 per row (2 columns)', 'integral' ),
                        '12'             => __( '1 per row (1 column)', 'integral' ),
                    ),
                    'default' => '4'
                    ),
            
                    array(
                            'id'          => 'blog-below-text',
                            'type'        => 'editor',
                            'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                            'title' => __( 'Content Area Below Posts', 'integral' ),
                            'subtitle'       => __( 'Use this field to display content or links to your blog.', 'integral' ),
                            'default' => '<p class="text-center"><a href="blog" class="btn btn-md btn-inverse">Read the blog &#8594;</a></p>'
                    ),
            
                    array(
                            'id'          => 'blog-custom-class',
                            'type'        => 'text',
                            'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                            'title' => __( 'Custom Class', 'integral' ),
                            'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),

                    array(
                            'id'       => 'blog-section-toggle',
                            'type'     => 'switch',
                            'default'  => true,
                            'title'    => __( 'Disable Section', 'integral' ),
                            'subtitle' => __( 'Toggle off to disable the Blog members section.', 'integral' ),
                    ),

        )
    ) );


// -> START tweets
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Tweets', 'integral' ),
        'id'     => 'tweets',
        'icon'   => 'el el-twitter',
        'desc'   => __( 'Display your latest tweets. In order for this feature to function you must have the TweetScroll Widget plugin installed which came pre-packaged with Integral.', 'integral' ),
        'fields' => array(
            
            array(
                'id'       => 'tweets-create',
                'type'     => 'raw',
                'title'    => __( 'Add Sweets Scroll', 'integral' ),
                'content' => __( 'Your latest tweets can be displayed by using the TweetScroll Widget plugin. Go to APPEARANCE > Widgets and locate [Homepage Tweets Section]. Add the widget entitled [TweetScroll] to this area and don\'t forget to configure it.', 'integral' ),

                ),
            
            array(
                    'id'       => 'tweets-bg',
                    'type'     => 'background',
                    'title'    => __( 'Background', 'integral' ),
                    'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Tweets section.', 'integral' ),
                    'output'   => array('.tweets'),
                    'compiler'    => 'true',
                    'default'  => array(
                                        'background-color' => '',
                                    )

            ),
            
            array(
                'id'       => 'tweets-typrography',
                'type'     => 'typography',
                'title'    => __( 'Text Styles', 'integral' ),
                'subtitle' => __( 'Change the size, color and style of the font.', 'integral' ),
                'subsets'       => false,
                'font-style'    => true,
                'font-size'    => true,
                'text-align'    => false,
                'line-height'    => false,
                'color'       => true,
                'text-transform'   => true,
                'output'	=> array('.tweets, .tweets li a'),
                'default'  => array(
                    'color'       => '#fff',
                  )
            ),
            
            array(
                    'id'          => 'tweets-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
            ),
            
            array(
                    'id'       => 'tweets-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the tweets section.', 'integral' ),
            ),

        )
    ) );


// -> START Newsletter
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Newsletter', 'integral' ),
        'id'     => 'newsletter',
        'icon'   => 'el el-bullhorn',
        'fields' => array(

                    array(
                        'id'       => 'newsletter-bg',
                        'type'     => 'background',
                        'title'    => __( 'Background', 'integral' ),
                        'subtitle' => __( 'Select a color or upload an image. This will fill up the background of the Newsletter section.', 'integral' ),
                        'desc'  => __( 'Preferred image size of minimum 1600px wide', 'integral' ),
                        'output'   => array('.newsletter'),
                        'compiler'    => 'true',
                        'default'  => array(
                                    'background-image' => get_template_directory_uri().'/images/bg-newsletter.jpg',
                                    'background-size' => 'cover',
                                )
                    ),
            
                    array(
                        'id'       => 'newsletter-padding',
                        'type'     => 'spacing',
                        'title'    => __( 'Section Padding', 'integral' ),
                        'subtitle' => __( 'Set the padding of the top and bottom of this section. You can also use this to increase or decrease the height of newsletter section.', 'integral' ),
                        'output'   => array('.newsletter'),
                        'compiler'    => 'true',
                        'mode'    => 'padding',
                        'units'     => array('%', 'px'),
                        'units_extended'   => 'true',
                        'display_units'   => 'true',
                        'left'   => 'false',
                        'right'   => 'false',
                        'default'            => array(
                                'padding-top'     => '100px', 
                                'padding-bottom'  => '110px', 
                                'units'          => 'px', 
                            )
                    ),
            
                    array(
                        'id'       => 'newsletter-overlay-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Background Overlay', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the dark overlay and pattern which appears over the background image.', 'integral' ),
                    ),
            
                    array(
                        'id'    => 'newsletter-overlay-info',
                        'type'  => 'info',
                        'style' => 'info',
                        'title' => __( 'To change the color and opacity of the dark overlay which covers the background image, edit class <code>.blacklayer</code> on line 329 of the style.css file.', 'integral' ),

                    ),

                    array(
                                    'id'       => 'newsletter-parallax-toggle',
                                    'type'     => 'switch',
                                    'default'  => true,
                                    'title'    => __( 'Parallax Effect', 'integral' ),
                                    'subtitle' => __( 'Toggle off to disable the parallax effect', 'integral' ),
                                ),

	                array(
	                'id'       => 'newsletter-title',
	                'type'     => 'text',
	                'title'    => __( 'Title', 'integral' ),
	                'default'  => 'Newsletter Form',
		            ),

		            array(
	                'id'       => 'newsletter-text',
	                'type'     => 'editor',
	                'title'    => __( 'Content', 'integral' ),
                    'desc'    => __( 'Custom HTML allowed', 'integral' ),
                    'default'   => 'Display a small newsletter subscription form. Integrates with services such as MailChimp and ConstantContact.',
		            ),
            
                    array(
	                'id'       => 'mailchimp-code',
	                'type'     => 'textarea',
	                'title'    => __( 'Newsletter Form Code', 'integral' ),
                    'subtitle' => __( 'Paste form code here. Styling is supported for Mailchimp and ConstantContact. You can override form styling in the themes default stylesheet (styles.css) located under APPEARANCE > Editor.', 'integral' ),
                    'desc'    => __( 'Custom HTML allowed', 'integral' ),
	                'default'  => '<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup"><form id="mc-embedded-subscribe-form" class="validate" action="//themely.us12.list-manage.com/subscribe/post?u=96d68578362e503cedd707b57&amp;id=7629c7ed4b" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
<div id="mc_embed_signup_scroll">
<div class="mc-field-group"><input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" placeholder="Email Address" /></div>
<div id="mce-responses" class="clear"></div>
<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
<div style="position: absolute; left: -5000px;"><input tabindex="-1" name="b_96d68578362e503cedd707b57_7629c7ed4b" type="text" value="" /></div>
<div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /></div>
</div>
</form></div>
<!--End mc_embed_signup-->',
		            ),
            
                    array(
                    'id'          => 'newsletter-custom-class',
                    'type'        => 'text',
                    'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                    'title' => __( 'Custom Class', 'integral' ),
                    'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                    'id'       => 'newsletter-section-toggle',
                    'type'     => 'switch',
                    'default'  => true,
                    'title'    => __( 'Disable Section', 'integral' ),
                    'subtitle' => __( 'Toggle off to disable the newsletter section.', 'integral' ),
                    ),
		            

        )
    ) );

// -> START Contact
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Contact', 'integral' ),
        'id'     => 'contact',
        'icon'   => 'el el-envelope',
        'fields' => array(

	                array(
                        'id'       => 'contact-title',
                        'type'     => 'text',
                        'title'    => __( 'Title', 'integral' ),
                        'default'  => 'Contact',
		            ),
                    array(
                        'id'       => 'contact-title-icon',
                        'type'     => 'text',
                        'title'    => __( 'Title Icon', 'integral' ),
                        'desc'       => __( 'Copy and paste the required icon class from the <a href="https://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">Fontawesome Icons List</a> and choose from 600+ icons.', 'integral' ),
                        'default'  => 'fa-envelope',
                    ),
                    array(
                        'id'       => 'contact-subtitle',
                        'type'     => 'editor',
                        'title'    => __( 'Subtitle', 'integral' ),
                        'default'  => 'Bla bla bla',
                    ),
		            array(
                        'id'          => 'contact-text',
                        'type'        => 'select',
                        'title' => __( 'Content', 'integral' ),
                        'subtitle'    => __( 'Select the page you want to pull content from to populate this section', 'integral' ),
                        'data'     => 'pages',
                        
                    ),
		            array(
                        'id'       => 'contactinfo-start',
                        'type'     => 'section',
                        'title'    => __( 'Contact Info', 'integral' ),
                        'indent'   => true, 
	           	 	),
                    array(
                        'id'       => 'contactinfo-title',
                        'type'     => 'text',
                        'title'    => __( 'Title', 'integral' ),
                        'default'  => 'Contact Info',
		            ),
		            array(
                        'id'       => 'contact-phone',
                        'type'     => 'text',
                        'title'    => __( 'Phone Number', 'integral' ),
                        'default'  => '+1 323 456 7891',
                        ),
		            array(
                        'id'       => 'contact-email',
                        'type'     => 'text',
                        'title'    => __( 'Email Address', 'integral' ),
                        'default'  => 'hello@yourwebsite.com',
		            ),
		            array(
                        'id'       => 'contact-address',
                        'type'     => 'textarea',
                        'title'    => __( 'Location Address', 'integral' ),
                        'default'  => '1 Pacific Ave, Suite 100
                        Santa Monica, CA 90210
                        United States',
		            ),

		            array(
	                    'id'          => 'contact-facebook',
	                    'type'        => 'text',
	                    'title' => __( 'Facebook URL', 'integral' ),
                        'default'  => '#',
	                ),

	                array(
	                    'id'          => 'contact-twitter',
	                    'type'        => 'text',
	                    'title' => __( 'Twitter URL', 'integral' ),
                        'default'  => '#',
	                ),

	                array(
	                    'id'          => 'contact-googleplus',
	                    'type'        => 'text',
	                    'title' => __( 'Google+ URL', 'integral' ),
                        'default'  => '#',
	                ),

	                array(
	                    'id'          => 'contact-github',
	                    'type'        => 'text',
	                    'title' => __( 'Github URL', 'integral' ),
                        'default'  => '#',
	                ),

	                array(
	                    'id'          => 'contact-behance',
	                    'type'        => 'text',
	                    'title' => __( 'Behance URL', 'integral' ),
                        'default'  => '#',
	                ),
            
                    array(
	                    'id'          => 'contact-linkedin',
	                    'type'        => 'text',
	                    'title' => __( 'Linkedin URL', 'integral' ),
                        'default'  => '#',
	                ),
            
                    array(
	                    'id'          => 'contact-instagram',
	                    'type'        => 'text',
	                    'title' => __( 'Instagram URL', 'integral' ),
                        'default'  => '#',
	                ),
            
                    array(
	                    'id'          => 'contact-youtube',
	                    'type'        => 'text',
	                    'title' => __( 'Youtube URL', 'integral' ),
                        'default'  => '#',
	                ),
            
		            array(
                        'id'     => 'contactinfo-end',
                        'type'   => 'section',
                        'indent' => false,
	          		 ),

                     array(
                        'id'          => 'contact-form-code',
                        'type'        => 'text',
                        'title' => __( 'Contact Form 7 Shortcode', 'integral' ),
                        'subtitle'   => __( 'Make sure you have installed the Contact Form 7 plugin and created a form. To create a form go to CONTACT > Add New. Then paste the shortcode in the field on the right.', 'integral' ),
                        'description' => __( 'Paste the shortcode in the field above.', 'integral' ),
                        'default'  => '[contact-form-7 id="1" title="Contact form 1"]'
                    ),
            
                    array(
                        'id'          => 'contact-custom-class',
                        'type'        => 'text',
                        'placeholder' => __( 'Example: no-padding-bottom', 'integral' ),
                        'title' => __( 'Custom Class', 'integral' ),
                        'subtitle'       => __( 'Append a custom CSS class to this section.', 'integral' ),
                    ),
            
                    array(
                        'id'       => 'contact-section-toggle',
                        'type'     => 'switch',
                        'default'  => true,
                        'title'    => __( 'Disable Section', 'integral' ),
                        'subtitle' => __( 'Toggle off to disable the contact section.', 'integral' ),
                    ),


        )
    ) );


// -> START Footer
Redux::setSection( $opt_name, array(
    'title'  => __( 'Footer', 'integral' ),
    'id'     => 'copyright',
    'icon'   => 'el el-lock',
    'fields' => array(

        array(
            'id'       => 'copyright-text',
            'type'     => 'editor',
            'title'    => __( 'Copyright Text', 'integral' ),
                'desc'    => __( 'Custom HTML allowed', 'integral' ),
            'default'  => '&copy; 2016 All Rights Reserved | Powered by <a href="http://wordpress.org" target="_blank">Wordpress</a> | Made with &#10084; by <a href="https://www.themely.com" target="_blank">Themely</a>',
        ),

        array(
            'id'       => 'footer-section-toggle',
            'type'     => 'switch',
            'default'  => true,
            'title'    => __( 'Disable Section', 'integral' ),
            'subtitle' => __( 'Toggle off to disable the footer section.', 'integral' ),
        ),

) ) );

// -> START Custom Code
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Custom Code', 'integral' ),
        'id'     => 'customcode',
        'icon'   => 'el el-wordpress',
        'desc'  => __( 'Enter custom Javascript or CSS code in your theme header and footer.', 'integral' ),
        'fields' => array(

	                array(
		                'id'         => 'customcode-header',
		                'type'       => 'ace_editor',
		                'full_width' => true,
		                'title'      => __( 'Header Code', 'integral' ),
		                'subtitle'   => __( 'This code will be included in the theme header', 'integral' ),
		                'mode'       => 'php',
		                'theme'      => 'chrome'
		            ),
					array(
		                'id'         => 'customcode-footer',
		                'type'       => 'ace_editor',
		                'full_width' => true,
		                'title'      => __( 'Footer Code', 'integral' ),
		                'subtitle'   => __( 'This code will be included in the theme footer', 'integral' ),
		                'mode'       => 'php',
		                'theme'      => 'chrome'
		            ),
		            array(
		                'id'         => 'customcode-css',
		                'type'       => 'ace_editor',
		                'full_width' => true,
		                'title'      => __( 'Custom CSS', 'integral' ),
		                'subtitle'   => __( 'Enter custom CSS to override default styles', 'integral' ),
		                'mode'       => 'css',
		                'theme'      => 'monokai'
		            ),
		           
        )
    ) );

    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'integral' ),
                'desc'   => __( 'This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'integral' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

