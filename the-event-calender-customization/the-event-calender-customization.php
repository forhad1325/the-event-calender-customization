<?php
/**
 * Plugin Name: The Event Calender Customization
 * Description: This is plugin for Event Calender Customization.
 * Version:     1.0.0
 * Author:      MD Forhad Hasan
 * Author URI:  https://trustycoder.com/
 * Text Domain: tc-evcl
 *
 * Requires Plugins: The Event Calender
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


class Tc_Evcl {
	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}

	public function init() {
		add_action( 'tribe_template_before_include:events/v2/components/top-bar/actions', array( $this, 'add_content_before_top_bar_actions' ), 99, 3 );
	}
	
	public function add_content_before_top_bar_actions( $file, $name, $template ) {
	  echo '<div class="top-10-days-btn btn"><a href="/blog-page/">The top 10 days of the year</a></div>';
	}
}
new Tc_Evcl();