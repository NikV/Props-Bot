<?php
/*
Plugin Name: Props Bot
Plugin URI: Props Bot
Description: The official Props bot plugin
Version: 1.0
Author: Nikhil Vimal
Author URI: nik.techvoltz.com

License: GPL V.2

  Copyright 2014 Nikhil Vimal

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

// Function that outputs the contents of the dashboard widget
function props_bot_dashboard_widget_function( $post, $callback_args ) {
	echo '<img width="90%" src="' . plugins_url( 'B0G5J-hCQAEUxcB.png', __FILE__ ) . '" > ';
}

// Function used in the action hook
function props_bot_add_dashboard_widgets() {
	wp_add_dashboard_widget('props_bot_dashboard_widget', 'Ryan Duff: Props Bot', 'props_bot_dashboard_widget_function');
}

// Register the new dashboard widget with the 'wp_dashboard_setup' action
add_action('wp_dashboard_setup', 'props_bot_add_dashboard_widgets' );
