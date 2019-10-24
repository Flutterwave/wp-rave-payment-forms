<?php
  /*
  Plugin Name: Rave Payment Forms
  Plugin URI: http://flutterwave.com/
  Description: Rave payment gateway forms, accept local and international payments securely.
  Version: 1.0.2
  Author: Flutterwave, Bosun Olanrewaju, Chigbo Ezejiugo
  Author URI: https://twitter.com/theflutterwave
  Copyright: © 2016 Flutterwave Technology Solutions
  License: MIT License
  */

  if ( ! defined( 'ABSPATH' ) ) {
    exit;
  }

  if ( ! defined( 'FLW_PAY_PLUGIN_FILE' ) ) {
    define( 'FLW_PAY_PLUGIN_FILE', __FILE__ );
  }

  // Plugin folder path
  if ( ! defined( 'FLW_DIR_PATH' ) ) {
    define( 'FLW_DIR_PATH', plugin_dir_path( __FILE__ ) );
  }

  //Plugin folder path
  if ( ! defined( 'FLW_DIR_URL' ) ) {
    define( 'FLW_DIR_URL', plugin_dir_url( __FILE__ ) );
  }

  require_once( FLW_DIR_PATH . 'includes/rave-base-class.php' );

  global $flw_pay_class;

  $flw_pay_class = FLW_Rave_Pay::get_instance();

?>
//nothing more
