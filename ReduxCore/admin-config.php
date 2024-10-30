<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";
    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */
    $theme = wp_get_theme(); // For use with some settings. Not necessary.
    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => ' ',
        // Name that appears at the top of your panel
        'display_version'      => 'V 1.0.20',
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'BTN Login Customizer', 'redux-framework-demo' ),
        'page_title'           => __( 'BTN Login Customizer', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => 'dashicons-forms',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'custom_options',
        // Page slug used to denote the panel
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
        'footer_credit'     => 'Created By Business Tech Ninjas',                   // Disable the footer credit of Redux. Please leave if you can help it.
        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
        //'compiler'             => true,
        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
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
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );
    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );
    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    // $args['share_icons'][] = array(
    //     'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
    //     'title' => 'Visit us on GitHub',
    //     'icon'  => 'el el-github'
    //     //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    //     'title' => 'Like us on Facebook',
    //     'icon'  => 'el el-facebook'
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'http://twitter.com/reduxframework',
    //     'title' => 'Follow us on Twitter',
    //     'icon'  => 'el el-twitter'
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'http://www.linkedin.com/company/redux-framework',
    //     'title' => 'Find us on LinkedIn',
    //     'icon'  => 'el el-linkedin'
    // );
    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        //$args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        //$args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }
    // Add content after the form.
    $args['footer_text'] = __( '<p>Business Tech Ninjas Login Customizer</p>', 'redux-framework-demo' );
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
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );
    /**
     *
     */
    // pages drop down
    $pagesFullArray = array();
    $pages = get_pages();
    foreach ($pages as $key => $value) {
        $pagesFullArray[$value->ID] = $value->post_title;
    }
	 // login page default slug
    $login_page_slug = 'login';

	 #Forgot page default slug
    $forgot_page_slug = 'forgot-password';
    #login page default content
    $login_page_content = '
        [memb_is_logged_in]
        Already logged in!
        [memb_logout_link]
        [else_memb_is_logged_in]
        [memb_loginform username_label="" button_label="LOG IN" password_label=""]<a class="lost-password-lnk btm_pad_no" href="/'.$forgot_page_slug.'/">Lost your password?</a>
        <a class="go_to_mutu lost-password-lnk" href="'.esc_url( home_url( '/' ) ).'">← Back to '.get_bloginfo( 'name' ).'</a>[/memb_is_logged_in]
    ';
    // login page defult
    $forgot_page_content = '
        [memb_is_logged_in]
        [memb_logout_link]
        [else_memb_is_logged_in]
        [memb_send_password successurl="'.esc_url( home_url( '/' ) ).'"]
        [/memb_is_logged_in]
    ';

                /**
                 *
                 */
    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
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
    // -> final option Start
        /**
         * Brand Section
         */
            Redux::setSection( $opt_name, array(
                'title'      => __( 'Brand', 'redux-framework-demo' ),
                'desc'       => __( 'This option to control of general option on all over the ', 'redux-framework-demo' ) ,
                'id'         => 'opt-brand-option',
                'icon'       => 'el el-home',
                'fields'     => array(

                )
            ) );
                Redux::setSection( $opt_name, array(
                    'title'            => __( 'Logo', 'redux-framework-demo' ),
                    'id'               => 'logo-basic',
                    'subsection'       => true,
                    'desc'             => __( 'Logo Section', 'redux-framework-demo' ),
                    'fields'           => array(
                        array(
                            'id'       => 'opt-logo-1',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __('Logo', 'redux-framework-demo'),
                            'default'  => array(
                                'url'=>'https://res.cloudinary.com/dbw0ag11w/image/upload/v1520785009/wp-logo.png'
                            ),
                        ),
                        array(
                            'id'       => 'opt-text-margin-top-bottom',
                            'type'     => 'text',
                            'title'    => __('Space in a top / bottom of logo', 'redux-framework-demo'),
                            'validate' => 'numeric',
                            'msg'      => 'not number',
                            'default'  => 20
                        )
                    )
                ) );

                Redux::setSection( $opt_name, array(
                    'title'            => __( 'Background', 'redux-framework-demo' ),
                    'id'               => 'background-basic',
                    'subsection'       => true,
                    'desc'             => __( 'Background options', 'redux-framework-demo' ),
                    'fields'           => array(
                        array(
                            'id'       => 'opt-switch-background',
                            'type'     => 'switch',
                            'on'       => 'Image',
                            'off'      => 'Color',
                            'title'    => __('Use Background Image', 'redux-framework-demo'),
                            'default'  => true,
                        ),
                        array(
                            'id'       => 'opt-switch',
                            'type'     => 'switch',
                            'required' => array('opt-switch-background','equals','1'),
                            'on'       => 'Choose from default',
                            'off'      => 'Custom',
                            'title'    => __('Background image type', 'redux-framework-demo'),
                            'default'  => true,
                        ),
                        array(
                            'id'       => 'opt-select-image-1',
                            'type'     => 'image_select',
                            'title'    => __('Choose Image', 'redux-framework-demo'),
                            'required' => array( array('opt-switch-background','equals','1'), array('opt-switch','equals','1') ),
                            'options'  => array(
                                '1'      => array(
                                    'alt'   => 'pic 1',
                                    'img'   => BG_IMG_1
                                ),
                                '2'      => array(
                                    'alt'   => 'pic 2',
                                    'img'   => BG_IMG_2
                                ),
                                '3'      => array(
                                    'alt'   => 'pic 3',
                                    'img'  => BG_IMG_3
                                )
                            ),
                            'default' => '1'
                        ),
                        array(
                            'id'       => 'opt-background',
                            'type'     => 'media',
                            'url'      => true,
                            'title'    => __('Background Image', 'redux-framework-demo'),
                            'desc'     => __('The optimal image dimensions to use is 1920 x 1080 ', 'redux-framework-demo'),
                            'required' => array( array('opt-switch-background','equals','1'), array('opt-switch','equals','0') ),
                            'default'  => array(
										 'url'=> BG_IMG_1,
                            ),
                        ),array(
                            'id'       => 'opt-color-background',
                            'type'     => 'color',
                            'title'    => __('Body Background Color', 'redux-framework-demo'),
                            'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
                            'required' => array('opt-switch-background','equals','0'),
                            'transparent'   => false,
                            'default'  => '#FFFFFF',
                            'validate' => 'color',
                        ),
                    )
                ) );
        /**
         * Brand Section
         */


         /**
         * Colors & Design Section
         */
        Redux::setSection( $opt_name, array(
            'title'      => __( 'Colors & Design', 'redux-framework-demo' ),
            'desc'       => __( 'This option to control of general color on all over the ', 'redux-framework-demo' ) ,
            'id'         => 'opt-color-design-option',
            'icon'       => 'el el-magic',
            'fields'     => array(

            )
        ) );
            Redux::setSection( $opt_name, array(
                'title'            => __( 'Color', 'redux-framework-demo' ),
                'id'               => 'color-basic',
                'subsection'       => true,
                'fields'           => array(
                array(
                    'id'        => 'opt-primary-color-rgba',
                    'type'      => 'color_rgba',
                    'title'     => 'Primary Color',
                    'desc'      => 'Pick a color to be primary in your form like (header color , button color , ... etc)',
                    // See Notes below about these lines.
                    //'output'    => array('background-color' => '.site-header'),
                    //'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
                    'default'   => array(
                        'color'     => '#9c9e9b',
                        'alpha'     => 0.91
                    ),

                    // These options display a fully functional color palette.  Omit this argument
                    // for the minimal color picker, and change as desired.
                        'options'       => array(
                        'show_input'                => true,
                        'show_initial'              => true,
                        'show_alpha'                => true,
                        'show_palette'              => true,
                        'show_palette_only'         => false,
                        'show_selection_palette'    => true,
                        'max_palette_size'          => 10,
                        'allow_empty'               => true,
                        'clickout_fires_change'     => false,
                        'choose_text'               => 'Choose',
                        'cancel_text'               => 'Cancel',
                        'show_buttons'              => true,
                        'use_extended_classes'      => true,
                        'palette'                   => null,  // show default
                        'input_text'                => 'Select Color'
                        ),
                    ),

                array(
                    'id'        => 'opt-secundry-color-rgba',
                    'type'      => 'color_rgba',
                    'title'     => 'Secondary Color',
                    'desc'      => 'Pick a color to be secoundry in your form like (form background color , ... etc)',
                    // See Notes below about these lines.
                    //'output'    => array('background-color' => '.site-header'),
                    //'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
                    'default'   => array(
                        'color'     => '#fff',
                        'alpha'     => 0.84
                    ),

                    // These options display a fully functional color palette.  Omit this argument
                    // for the minimal color picker, and change as desired.
                        'options'       => array(
                        'show_input'                => true,
                        'show_initial'              => true,
                        'show_alpha'                => true,
                        'show_palette'              => true,
                        'show_palette_only'         => false,
                        'show_selection_palette'    => true,
                        'max_palette_size'          => 10,
                        'allow_empty'               => true,
                        'clickout_fires_change'     => false,
                        'choose_text'               => 'Choose',
                        'cancel_text'               => 'Cancel',
                        'show_buttons'              => true,
                        'use_extended_classes'      => true,
                        'palette'                   => null,  // show default
                        'input_text'                => 'Select Color'
                        ),
                    ),
                    ////
                array(
                    'id'        => 'opt-button-color-rgba-k',
                    'type'      => 'color_rgba',
                    'title'     => 'Button Color',
                    'desc'      => 'Pick a color to be Button color',
                    // See Notes below about these lines.
                    //'output'    => array('background-color' => '.site-header'),
                    //'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
                    'default'   => array(
                        'color'     => '#9c9e9b',
                        'alpha'     => 0.84
                    ),

                    // These options display a fully functional color palette.  Omit this argument
                    // for the minimal color picker, and change as desired.
                        'options'       => array(
                        'show_input'                => true,
                        'show_initial'              => true,
                        'show_alpha'                => true,
                        'show_palette'              => true,
                        'show_palette_only'         => false,
                        'show_selection_palette'    => true,
                        'max_palette_size'          => 10,
                        'allow_empty'               => true,
                        'clickout_fires_change'     => false,
                        'choose_text'               => 'Choose',
                        'cancel_text'               => 'Cancel',
                        'show_buttons'              => true,
                        'use_extended_classes'      => true,
                        'palette'                   => null,  // show default
                        'input_text'                => 'Select Color'
                        ),
                    ),
                    array(
                        'id'       => 'text-background-color',
                        'type'     => 'color',
                        'title'    => __('Text field background color', 'redux-framework-demo'),
                        'desc'      => 'Pick a color to be textfiled background color',
                        'transparent'   => false,
                        'default'  => '#9c9e9b',
                        'validate' => 'color',
                    ),
                    array(
                        'id'       => 'opt-link-color',
                        'type'     => 'link_color',
                        'title'    => __('Links Color Option', 'redux-framework-demo'),
                        'desc'     => __('Set option of anchor in each case', 'redux-framework-demo'),
                        'default'  => array(
                            'regular'  => '#000', // blue
                            'hover'    => '#dd3333', // red
                            'active'   => '#8224e3',  // purple
                            'visited'  => '#8224e3',  // purple
                        )
                    ),
                ),
            ) );
            Redux::setSection( $opt_name, array(
                'title'            => __( 'Design', 'redux-framework-demo' ),
                'id'               => 'design-basic',
                'subsection'       => true,
                'desc'             => __( 'Design option', 'redux-framework-demo' ),
                'fields'           => array(
                    array(
                        'id'       => 'form-position-set-single',
                        'type'     => 'button_set',
                        'title'    => __('Form position', 'redux-framework-demo'),
                        'subtitle' => __('set where you want to put form', 'redux-framework-demo'),
                        //Must provide key => value pairs for options
                        'options' => array(
                            '1' => 'Left',
                            '2' => 'Centered',
                            '3' => 'Right'
                         ),
                        'default' => '2'
                    ),
                    array(
                        'id'       => 'opt_add_remove_back_to_website',
                        'type'     => 'checkbox',
                        'title'    => __('Remove "Back to My website" link', 'redux-framework-demo'),
                        'default'  => '0'// 1 = on | 0 = off
                    )
                )
            ) );
    /**
     * Brand Section
     */


        /**
         * Colors & Design Section
         */
            Redux::setSection( $opt_name, array(
                'title'            => __( 'Font & Typography', 'redux-framework-demo' ),
                'id'               => 'font-basic',
                'icon'             => 'el el-fontsize',
                'desc'             => __( 'This option to control of Font & Typography ', 'redux-framework-demo' ),
                'fields'           => array(
                    array(
                        'id'          => 'opt-typography',
                        'type'        => 'typography',
                        'title'       => __('Typography', 'redux-framework-demo'),
                        'google'      => true,
                        'font-backup' => true,
                        'font-style'  => false,
                        'subsets'     => false,
                        'font-size'   => false,
                        'line-height' => false,
                        'text-align'  => false,
                        'units'       =>'px',
                        'subtitle'    => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
                        'default'     => array(
                            'color'       => '#333',
                            'font-style'  => '700',
                            'font-family' => 'Arial',
                            'google'      => true,
                            'font-size'   => '13px',
                        ),
                    ),
                ),
            ) );

    /**
     * Brand Section
     */

     /**
     * Brand Section
     */


        /**
         * Colors & Design Section
         */
        Redux::setSection( $opt_name, array(
            'title'            => __( 'Custom css', 'redux-framework-demo' ),
            'id'               => 'CSS-basic',
            'icon'             => 'el el-css',
            'desc'             => __( 'This option to control of Custom css ', 'redux-framework-demo' ),
            'fields'           => array(
                array(
                    'id'       => 'css_editor-c',
                    'type'     => 'ace_editor',
                    'title'    => __('CSS Code', 'redux-framework-demo'),
                    'subtitle' => __('Paste your CSS code here.', 'redux-framework-demo'),
                    'mode'     => 'css',
                    'theme'    => 'monokai',
                    'default'  => ""
                )
            ),
        ) );


         /**
         * Colors & Design Section
         */
        Redux::setSection( $opt_name, array(
            'title'            => __( 'Login Page', 'redux-framework-demo' ),
            'id'               => 'build-basic',
            'icon'             => 'el el-file',
            'desc'             => __( 'This option to control of login page ', 'redux-framework-demo' ),
            'fields'           => array(
                array(
                    'id'       => 'opt-switch-create-new-page',
                    'type'     => 'switch',
                    'on'       => 'Control login pages',
                    'off'      => 'Dont control',
                    'title'    => __('Page controler', 'redux-framework-demo'),
                    'default'  => false,
                ),
                array(
                    'id'    => 'info_warning',
                    'type'  => 'info',
                    'title' => __('Important note', 'redux-framework-demo'),
                    'style' => 'warning',
                    'required' => array( array('opt-switch-create-new-page','equals','1') ),
                    'desc'  => __('Important note: this will update the choosen pages', 'redux-framework-demo')
                ),
                array(
                    'id'       => 'opt-select-login',
                    'type'     => 'select',
                    'title'    => __('Select Login Page', 'redux-framework-demo'),
                    'required' => array( array('opt-switch-create-new-page','equals','1') ,array('opt-select-forgot','!=','0')),
                    'options'  => $pagesFullArray
                ),
                array(
                    'id'       => 'opt-text-slug-page',
                    'type'     => 'text',
                    'title'    => __('Login page slug', 'redux-framework-demo'),
                    'required' => array( array('opt-switch-create-new-page','equals','1') ,array('opt-select-login','!=','0')),
                    'default'  => $login_page_slug
                ),
                array(
                    'id'               => 'login-text-content',
                    'type'             => 'editor',
                    'title'            => __('Forgot page Content', 'redux-framework-demo'),
                    'required'         => array( array('opt-switch-create-new-page','equals','1') ,array('opt-select-login','!=','0')),
                    'default'          => $login_page_content,
                    'args'   => array(
                        'teeny'            => true,
                        'textarea_rows'    => 10
                    )
                ),
                array(
                    'id'       => 'opt-select-forgot',
                    'type'     => 'select',
                    'title'    => __('Select Forgot Page', 'redux-framework-demo'),
                    'required' => array( array('opt-switch-create-new-page','equals','1') ,array('opt-select-forgot','!=','0')),
                    'options'  => $pagesFullArray
                ),
                array(
                    'id'       => 'opt-text-forgot-slug-page',
                    'type'     => 'text',
                    'title'    => __('Forgot password page slug', 'redux-framework-demo'),
                    'required' => array( array('opt-switch-create-new-page','equals','1') ,array('opt-select-forgot','!=','0')),
                    'default'  => $forgot_page_slug
                ),
                array(
                    'id'               => 'forgot-text-content',
                    'type'             => 'editor',
                    'title'            => __('Forgot page Content', 'redux-framework-demo'),
                    'required' => array( array('opt-switch-create-new-page','equals','1') ,array('opt-select-forgot','!=','0')),
                    'default'          => $forgot_page_content,
                    'args'   => array(
                        'teeny'            => true,
                        'textarea_rows'    => 10
                    )
                )
            ),
        ) );

    /**
     * Brand Section
     */
    // -> final option End
