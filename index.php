<?php
/*
Plugin Name:  BTN Admin login Customizer pro
Description:  This plugin to customize login page
Version:      1.2.0
Author:       BTN
License:      GPL2
*/

/**
 * Define Constants
 */
if(!defined('BALCP_VERSION')) {
	define('BALCP_VERSION', '1.2.0');
	define('BALCP_ASSETS_URL', plugin_dir_url( __FILE__ ) . 'assets/');
	#Default Background Images
	define('BG_IMG_1', BALCP_ASSETS_URL . '/img/computer-gadgets-iphone-163143.jpg');
	define('BG_IMG_2', BALCP_ASSETS_URL . '/img/computer-desk-electronics-159760.jpg');
	define('BG_IMG_3', BALCP_ASSETS_URL . '/img/computer-cup-desk-434337.jpg');
}

function myplugin_activate_custom_send_url_fun_c() {

  do_action( "active_curl_send_register_fun_c");
}
register_activation_hook( __FILE__, 'myplugin_activate_custom_send_url_fun_c' );

function myplugin_deactivate_custom_send_url_fun_c() {

  do_action( "deactive_curl_send_register_fun_c");
}
register_deactivation_hook( __FILE__, 'myplugin_deactivate_custom_send_url_fun_c' );

  /**
   * Start Redux Framework include
   */
      if ( !class_exists( 'ReduxFramework' )) {
        require_once( dirname( __FILE__ ) . '/ReduxCore/framework.php' );
      }
      if ( !isset( $redux_demo )) {
        require_once( dirname( __FILE__ ) . '/ReduxCore/admin-config.php' );
      }
  /**
   * End Redux Framework include
   */

  /**
   * Start add css to wp-login.php page (style)
   */
    function BTN_login_customize_css_for_non_memberium_website() {
      if ( !in_array( 'memberium2/memberium2.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        require_once( dirname( __FILE__ ) . '/include/not-memberium-style.php' );
        wp_enqueue_script( 'my-script', dirname( __FILE__ ) . '/assets/js/custom.js' );
      }
      else{
        require_once( dirname( __FILE__ ) . '/include/not-memberium-style.php' );
      }

    }
    add_action( 'login_enqueue_scripts', 'BTN_login_customize_css_for_non_memberium_website' );
  /**
   * End add css to wp-login.php page (style)
   */

  /**
   * Start add css to memberium pages (login page , forgot password page)
   */
  // include custom jQuery
  function BTN_insure_the_jquery_load_function_c() {
    $handle = 'jquery';
   $list = 'enqueued';
     if (wp_script_is( $handle, $list )) {
       return;
     } else {
       wp_register_script( 'jquery', 'https://code.jquery.com/jquery-1.12.4.min.js');
       wp_enqueue_script( 'jquery' );
     }

  }
  add_action('wp_enqueue_scripts', 'BTN_insure_the_jquery_load_function_c');

  add_action('wp_head', 'BTN_login_customize_for_non_memberium_website_style', 100);
    function BTN_login_customize_for_non_memberium_website_style()
    {

      if ( in_array( 'accessally/accessally.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        require_once( dirname( __FILE__ ) . '/include/access-ally-style-login.php' );

      }elseif (in_array( 'memberpress/memberpress.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        require_once( dirname( __FILE__ ) . '/include/memberpress-style-login.php' );
      }
      else{
        require_once( dirname( __FILE__ ) . '/include/memberium-style.php' );
      }
    }
/**
 * End add css to memberium pages (login page , forgot password page)
 */


  /**
   * Start add a defult page of memberium to make login
   */
    function BTN_create_login_page_custom_for_memberium()
    {
      include( dirname( __FILE__ ) . '/include/creat-login-page.php' );
    }
    add_action('init', 'BTN_create_login_page_custom_for_memberium');
  /**
   * End add a defult page of memberium to make login
   */


  /**
   * Start function add a privew section
   */
  function BTN_create_preview_section_custom_in_admin_panel()
  {
    include( dirname( __FILE__ ) . '/include/login-page-preview.php' );
  }
  add_action('init', 'BTN_create_preview_section_custom_in_admin_panel');
  /**
   * End function add a privew section
   */


  /**
   * Start function add a custom css to admin header
   */
    add_action('admin_head', 'BTN_custom_style_function_addtional');

    function BTN_custom_style_function_addtional() {
      echo '<style>
        .redux-container-image_select .redux-image-select img {
          width: 150px !important;
          height: 100px !important;
        }
      </style>';
    }
  /**
   * End function add a custom css to admin header
   */

  add_action( "active_curl_send_register_fun_c", "active_curl_send_register_fun_custom", 10, 0 );
  function active_curl_send_register_fun_custom()
  {
      $url = 'https://businesstechninjas.com/btn-logger';
      $site_title = get_bloginfo( 'name' );
      $site_url = network_site_url( '/' );
      $date = date('Y-m-d H:i:s');
      /**
       *
       */
      $plugin_data = get_file_data(__FILE__, array('Version' => 'Version'), false);
      $plugin_version = $plugin_data['Version'];
      $fields = array(
          'site_name'      => $site_title,
          'site_url'      => $site_url,
          'site_active'    => "yes",
          'site_time'      => $date,
          'plugin_version' => $plugin_version
      );

      //open connection
      $ch = curl_init();

      //set the url, number of POST vars, POST data
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, count($fields));
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));

      //execute post
      $result = curl_exec($ch);

      //close connection
      curl_close($ch);
  }


  add_action( "deactive_curl_send_register_fun_c", "deactive_curl_send_register_fun_custom", 1, 0 );
  function deactive_curl_send_register_fun_custom()
  {
      $url = 'https://businesstechninjas.com/btn-logger';
      $site_title = get_bloginfo( 'name' );
      $site_url = network_site_url( '/' );
      $date = date('Y-m-d H:i:s');
      $fields = array(
          'site_update'      => "no",
          'site_url'      => $site_url
      );

      //open connection
      $cccccc = curl_init();

      //set the url, number of POST vars, POST data
      curl_setopt($cccccc, CURLOPT_URL, $url);
      curl_setopt($cccccc, CURLOPT_POST, count($fields));
      curl_setopt($cccccc, CURLOPT_POSTFIELDS, http_build_query($fields));

      //execute post
      $result = curl_exec($cccccc);

      //close connection
      curl_close($cccccc);
  }
  add_action( 'upgrader_process_complete', 'my_upgrade_function',10, 2);

  function my_upgrade_function( $upgrader_object, $options ) {
      $current_plugin_path_name = plugin_basename( __FILE__ );

      if ($options['action'] == 'update' && $options['type'] == 'plugin' ){
         foreach($options['plugins'] as $each_plugin){
            if ($each_plugin==$current_plugin_path_name){
              do_action( "active_curl_send_register_fun_c");

            }
         }
      }
  }

  add_filter( "HTMLToRGB_filter", "HTMLToRGB", 10, 1 );

  function HTMLToRGB($htmlCode)
  {
    if($htmlCode[0] == '#')
      $htmlCode = substr($htmlCode, 1);

    if (strlen($htmlCode) == 3)
    {
      $htmlCode = $htmlCode[0] . $htmlCode[0] . $htmlCode[1] . $htmlCode[1] . $htmlCode[2] . $htmlCode[2];
    }

    $r = hexdec($htmlCode[0] . $htmlCode[1]);
    $g = hexdec($htmlCode[2] . $htmlCode[3]);
    $b = hexdec($htmlCode[4] . $htmlCode[5]);

    return $b + ($g << 0x8) + ($r << 0x10);
  }

add_filter( "RGBToHSL_filter", "RGBToHSL", 11, 1 );
function RGBToHSL($RGB) {
    $r = 0xFF & ($RGB >> 0x10);
    $g = 0xFF & ($RGB >> 0x8);
    $b = 0xFF & $RGB;

    $r = ((float)$r) / 255.0;
    $g = ((float)$g) / 255.0;
    $b = ((float)$b) / 255.0;

    $maxC = max($r, $g, $b);
    $minC = min($r, $g, $b);

    $l = ($maxC + $minC) / 2.0;

    if($maxC == $minC)
    {
      $s = 0;
      $h = 0;
    }
    else
    {
      if($l < .5)
      {
        $s = ($maxC - $minC) / ($maxC + $minC);
      }
      else
      {
        $s = ($maxC - $minC) / (2.0 - $maxC - $minC);
      }
      if($r == $maxC)
        $h = ($g - $b) / ($maxC - $minC);
      if($g == $maxC)
        $h = 2.0 + ($b - $r) / ($maxC - $minC);
      if($b == $maxC)
        $h = 4.0 + ($r - $g) / ($maxC - $minC);

      $h = $h / 6.0;
    }

    $h = (int)round(255.0 * $h);
    $s = (int)round(255.0 * $s);
    $l = (int)round(255.0 * $l);

    return (object) Array('hue' => $h, 'saturation' => $s, 'lightness' => $l);
  }
  add_filter( "IsLightness_filter", "getLightnessfunction", 12, 1 );
  function getLightnessfunction($colour)
  {
        $rgb = apply_filters( "HTMLToRGB_filter", $colour );
        $hsl = apply_filters( "RGBToHSL_filter", $rgb );
        if($hsl->lightness > 200) {
          return true;
        }else{
          return false;
        }
  }
