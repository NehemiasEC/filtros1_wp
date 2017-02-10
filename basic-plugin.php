<?php 
	/**
	* Plugin Name: Top5Teconecta
	* Plugin URI: www.themeforest.com/nehemiasec/5top
	* Description: 5top teconecta posts
	* Author: NehemiasEC
	* Version:1.0.0
	* License URI: A link to the full text of the license (e.g. https://www.gnu.org/licenses/gpl-2.0.html).
	*/
	function example_add_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'example_dashboard_widget',         // Widget slug.
                 'Example Dashboard Widget',         // Title.
                 'example_dashboard_widget_function' // Display function.
        );	
	}
	add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

	/**
	 * Create the function to output the contents of our Dashboard Widget.
	 */
	function example_dashboard_widget_function() {

		// Display whatever it is you want to show.
		echo "Hello World, I'm a great Dashboard Widget";
	}
 ?>