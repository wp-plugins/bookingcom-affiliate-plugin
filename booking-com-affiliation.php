<?php
/*
Plugin Name: Booking.com Affiliate plugin
Version: 1.8.1
Plugin URI: http://www.booking-plugin.com/#utm_source=wpadmin&utm_medium=plugin&utm_campaign=bookingplugin
Description: Booking.com Affiliates, this plugin allows you to add a typical booking.com booking module on any wordpress site. Simply configure what you want the searchbox to look like and generate traffic to your booking.com  affiliate pages. Be sure to visit the plugin site to find live integration examples, booking.com affiliation tips and showcase your site.
Author: gregory.raby
Contributors: Gregory Raby
Author URI: http://www.booking-plugin.com/
License: GPL v3
WordPress Booking.com Affiliate Plugin

Copyright (C) 2012-2015, Gregory Raby - http://www.booking-plugin.com/send-me-a-note

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
define( 'booking_pluginbox_meta_boxes', 'manage_options' );
define( 'booking_pluginbox_columns', 'manage_options' );
define( 'booking_pluginbox_form', 'manage_options' );
define( 'booking_pluginbox_init', 'manage_options' );
define( 'booking_pluginbox_func', 'manage_options' );
define( 'booking_pluginbox_edit_columns', 'manage_options' );

require 'includes/post-type.php';
require 'includes/shortcodes.php';
require 'includes/metaboxes.php';
require 'includes/widget-single.php';

// javascrip date picker declaration

add_action("wp_enqueue_scripts","javascript_datepicker_booking");

function javascript_datepicker_booking() {
	wp_enqueue_script('jquery-ui-datepicker');
}

// Custom Columns
add_action("manage_posts_custom_column",  "booking_pluginbox_columns");
add_filter("manage_edit-booking-pluginbox_columns", "booking_pluginbox_edit_columns");

function booking_pluginbox_edit_columns($columns){
  $columns = array(
    'cb'                   => "<input type=\"checkbox\" />",
    'title'                => 'Title',
    'booking_plugin_DESTINATION' => 'Destination',
    'shortcode'            => 'Shortcode',
    'date'                 => 'Date'
  );
  return $columns;
}

function booking_pluginbox_columns($column){
  global $post;

  switch ($column) {
    case 'booking_plugin_DESTINATION':
      echo get_post_meta($post->ID, 'booking_plugin_DESTINATION', true);
      break;
    case 'shortcode':
      echo '[booking_pluginbox id="' . $post->ID . '"]';
      break;
  }
}

// Change the default title text

function booking_pluginbox_post_title( $post_title, $post ) {
  if( 'booking-pluginbox' == $post->post_type ) {
		return "Searchbox ID " .$post->ID;
    }
	
    return $post_title;
}
add_filter( 'default_title', 'booking_pluginbox_post_title', 20, 2 );

// Add filter
add_filter( 'post_updated_messages', 'booking_plugin_updated_messages' );
function booking_plugin_updated_messages( $messages ) {
  global $post, $post_ID;

  $messages['booking-pluginbox'] = array(
    0  => '', // Unused. Messages start at index 1.
    1  => sprintf( __('Booking.com searchbox updated.')),
    2  => __('Custom field updated.'),
    3  => __('Custom field deleted.'),
    4  => __('Booking.com searchbox updated.'),
    5  => isset($_GET['revision']) ? sprintf( __('Booking.com searchbox restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6  => sprintf( __('Booking.com searchbox published. Now go add it on your pages (insert from editor or use shortcode)')),
    7  => __('Booking.com searchbox saved.'),
    8  => sprintf( __('Booking.com searchbox submitted. ') ),
    9  => sprintf( __('Booking.com searchbox scheduled for: <strong>%1$s</strong>.'),
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )),
    10 => sprintf( __('Booking.com searchbox draft updated.') ),
  );

  return $messages;
}

function booking_pluginbox_meta_boxes() {
  global $post;
  $pagename = 'booking-pluginbox';
  add_meta_box( 'booking_pluginbox_form', 'Booking.com Affiliate Plugin', 'booking_pluginbox_form', $pagename, 'normal', 'high' );
}

function booking_pluginbox_save_postdata($post_id) {
      if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
      } 

    // check post type

    if ($_POST['post_type'] != 'booking-pluginbox') {
        return $post_id;    
    }   


//   Check user permissions -- it was just checking if the post type was a page.
    if ($_POST['post_type'] == 'booking-pluginbox') {
        if (!current_user_can('edit_page', $post_id)) return $post_id;
    } else {
        if (!current_user_can('edit_post', $post_id)) return $post_id;
    }


//   OK, we're authenticated: we need to find and save the data
  $current_bp_AID = get_post_meta($post_id, 'booking_plugin_AID', false);
  $new_bp_AID = (isset($_POST['booking_plugin_AID'])) ? $_POST['booking_plugin_AID'] : '';
  $current_bp_TRACKING = get_post_meta($post_id, 'booking_plugin_TRACKING', false);
  $new_bp_TRACKING = (isset($_POST['booking_plugin_TRACKING'])) ? $_POST['booking_plugin_TRACKING'] : '';
  $current_bp_DESTINATION = get_post_meta($post_id, 'booking_plugin_DESTINATION', false);
  $new_bp_DESTINATION = (isset($_POST['booking_plugin_DESTINATION'])) ? $_POST['booking_plugin_DESTINATION'] : ''; 
  $current_bp_DESTINATION_RESTRICTION = get_post_meta($post_id, 'booking_plugin_DESTINATION_RESTRICTION', false);
  $new_bp_DESTINATION_RESTRICTION = (isset($_POST['booking_plugin_DESTINATION_RESTRICTION'])) ? $_POST['booking_plugin_DESTINATION_RESTRICTION'] : '';
  $current_bp_DESTINATION_UI = get_post_meta($post_id, 'booking_plugin_DESTINATION_UI', false);
  $new_bp_DESTINATION_UI = (isset($_POST['booking_plugin_DESTINATION_UI'])) ? $_POST['booking_plugin_DESTINATION_UI'] : '';
  $current_bp_bbgc = get_post_meta($post_id, 'booking_plugin_bbg_color', false);
  $new_bp_bbgc = (isset($_POST['booking_plugin_bbg_color'])) ? $_POST['booking_plugin_bbg_color'] : '';
  $current_bp_btc = get_post_meta($post_id, 'booking_plugin_bt_color', false);
  $new_bp_btc = (isset($_POST['booking_plugin_bt_color'])) ? $_POST['booking_plugin_bt_color'] : '';
  $current_bp_sbbbgc = get_post_meta($post_id, 'booking_plugin_sbbbg_color', false);
  $new_bp_sbbbgc = (isset($_POST['booking_plugin_sbbbg_color'])) ? $_POST['booking_plugin_sbbbg_color'] : '';
  $current_bp_sbbtc = get_post_meta($post_id, 'booking_plugin_sbbt_color', false);
  $new_bp_sbbtc = (isset($_POST['booking_plugin_sbbt_color'])) ? $_POST['booking_plugin_sbbt_color'] : '';
  $current_bp_LANGUAGE = get_post_meta($post_id, 'booking_plugin_box_language', false);
  $new_bp_LANGUAGE = (isset($_POST['booking_plugin_box_language'])) ? $_POST['booking_plugin_box_language'] : '';
  $current_bp_CURRENCY = get_post_meta($post_id, 'booking_plugin_box_currency', false);
  $new_bp_CURRENCY = (isset($_POST['booking_plugin_box_currency'])) ? $_POST['booking_plugin_box_currency'] : '';
  $current_bp_TARGET = get_post_meta($post_id, 'booking_plugin_TARGET', false);
  $new_bp_TARGET = (isset($_POST['booking_plugin_TARGET'])) ? $_POST['booking_plugin_TARGET'] : '';
  $current_bp_FORMAT = get_post_meta($post_id, 'booking_plugin_FORMAT', false);
  $new_bp_FORMAT = (isset($_POST['booking_plugin_FORMAT'])) ? $_POST['booking_plugin_FORMAT'] : '';
  $current_bp_FLEX = get_post_meta($post_id, 'booking_plugin_FLEX', false);
  $new_bp_FLEX = (isset($_POST['booking_plugin_FLEX'])) ? $_POST['booking_plugin_FLEX'] : '';
  $current_bp_wt = get_post_meta($post_id, 'booking_plugin_widget_title', false);
  $new_bp_wt = (isset($_POST['booking_plugin_widget_title'])) ? $_POST['booking_plugin_widget_title'] : '';
  $current_bp_wpx = get_post_meta($post_id, 'booking_plugin_widget_px', false);
  $new_bp_wpx = (isset($_POST['booking_plugin_widget_px'])) ? $_POST['booking_plugin_widget_px'] : '';
  $current_bp_CSS_override = get_post_meta($post_id, 'booking_plugin_CSS_override', false);
  $new_bp_CSS_override = (isset($_POST['booking_plugin_CSS_override'])) ? $_POST['booking_plugin_CSS_override'] : '';
  $current_bp_jqtheme = get_post_meta($post_id, 'booking_plugin_jqtheme', false);
  $new_bp_jqtheme = (isset($_POST['booking_plugin_jqtheme'])) ? $_POST['booking_plugin_jqtheme'] : '';
  
  booking_pluginbox_clean($new_bp_AID);
  booking_pluginbox_clean($new_bp_TRACKING);
  booking_pluginbox_clean($new_bp_DESTINATION);
  booking_pluginbox_clean($new_bp_DESTINATION_RESTRICTION);
  booking_pluginbox_clean($new_bp_DESTINATION_UI);
  booking_pluginbox_clean($new_bp_bbgc);
  booking_pluginbox_clean($new_bp_btc);
  booking_pluginbox_clean($new_bp_sbbbgc);
  booking_pluginbox_clean($new_bp_sbbtc);  
  booking_pluginbox_clean($new_bp_LANGUAGE);
  booking_pluginbox_clean($new_bp_CURRENCY);
  booking_pluginbox_clean($new_bp_TARGET);
  booking_pluginbox_clean($new_bp_FORMAT);
  booking_pluginbox_clean($new_bp_FLEX);
  booking_pluginbox_clean($new_bp_wt);
  booking_pluginbox_clean($new_bp_wpx);
  booking_pluginbox_clean($new_bp_CSS_override);
  booking_pluginbox_clean($new_bp_jqtheme);  
  

  if (!empty($current_bp_AID)) {
    if (is_null($new_bp_AID)) {
      delete_post_meta($post_id,'booking_plugin_AID');
    } else {
      update_post_meta($post_id,'booking_plugin_AID',$new_bp_AID);
    }
  } elseif (!is_null($new_bp_AID)) {
      add_post_meta($post_id,'booking_plugin_AID',$new_bp_AID,true);
  }
  
  if (!empty($current_bp_TRACKING)) {
    if (is_null($new_bp_TRACKING)) {
      delete_post_meta($post_id,'booking_plugin_TRACKING');
    } else {
      update_post_meta($post_id,'booking_plugin_TRACKING',$new_bp_TRACKING);
    }
  } elseif (!is_null($new_bp_TRACKING)) {
      add_post_meta($post_id,'booking_plugin_TRACKING',$new_bp_TRACKING,true);
  }

  if (!empty($current_bp_DESTINATION)) {
    if (is_null($new_bp_DESTINATION)) {
      delete_post_meta($post_id,'booking_plugin_DESTINATION');
    } else {
      update_post_meta($post_id,'booking_plugin_DESTINATION',$new_bp_DESTINATION);
    }
  } elseif (!is_null($new_bp_DESTINATION)) {
      add_post_meta($post_id,'booking_plugin_DESTINATION',$new_bp_DESTINATION,true);
  }
  
    if (!empty($current_bp_DESTINATION_RESTRICTION)) {
    if (is_null($new_bp_DESTINATION_RESTRICTION)) {
      delete_post_meta($post_id,'booking_plugin_DESTINATION_RESTRICTION');
    } else {
      update_post_meta($post_id,'booking_plugin_DESTINATION_RESTRICTION',$new_bp_DESTINATION_RESTRICTION);
    }
  } elseif (!is_null($new_bp_DESTINATION_RESTRICTION)) {
      add_post_meta($post_id,'booking_plugin_DESTINATION_RESTRICTION',$new_bp_DESTINATION_RESTRICTION,true);
  }
  
    if (!empty($current_bp_DESTINATION_UI)) {
    if (is_null($new_bp_DESTINATION_UI)) {
      delete_post_meta($post_id,'booking_plugin_DESTINATION_UI');
    } else {
      update_post_meta($post_id,'booking_plugin_DESTINATION_UI',$new_bp_DESTINATION_UI);
    }
  } elseif (!is_null($new_bp_DESTINATION_UI)) {
      add_post_meta($post_id,'booking_plugin_DESTINATION_UI',$new_bp_DESTINATION_UI,true);
  }
  
if (!empty($current_bp_bbgc)) {
    if (is_null($new_bp_bbgc)) {
      delete_post_meta($post_id,'booking_plugin_bbg_color');
    } else {
      update_post_meta($post_id,'booking_plugin_bbg_color',$new_bp_bbgc);
    }
  } elseif (!is_null($new_bp_bbgc)) {
      add_post_meta($post_id,'booking_plugin_bbg_color',$new_bp_bbgc,true);
  }
  
if (!empty($current_bp_btc)) {
    if (is_null($new_bp_btc)) {
      delete_post_meta($post_id,'booking_plugin_bt_color');
    } else {
      update_post_meta($post_id,'booking_plugin_bt_color',$new_bp_btc);
    }
  } elseif (!is_null($new_bp_btc)) {
      add_post_meta($post_id,'booking_plugin_bt_color',$new_bp_btc,true);
  }   
  
  if (!empty($current_bp_sbbbgc)) {
    if (is_null($new_bp_sbbbgc)) {
      delete_post_meta($post_id,'booking_plugin_sbbbg_color');
    } else {
      update_post_meta($post_id,'booking_plugin_sbbbg_color',$new_bp_sbbbgc);
    }
  } elseif (!is_null($new_bp_sbbbgc)) {
      add_post_meta($post_id,'booking_plugin_sbbbg_color',$new_bp_sbbbgc,true);
  }
  
if (!empty($current_bp_sbbtc)) {
    if (is_null($new_bp_sbbtc)) {
      delete_post_meta($post_id,'booking_plugin_sbbt_color');
    } else {
      update_post_meta($post_id,'booking_plugin_sbbt_color',$new_bp_sbbtc);
    }
  } elseif (!is_null($new_bp_sbbtc)) {
      add_post_meta($post_id,'booking_plugin_sbbt_color',$new_bp_sbbtc,true);
  }   
  
  if (!empty($current_bp_LANGUAGE)) {
    if (is_null($new_bp_LANGUAGE)) {
      delete_post_meta($post_id,'booking_plugin_box_language');
    } else {
      update_post_meta($post_id,'booking_plugin_box_language',$new_bp_LANGUAGE);
    }
  } elseif (!is_null($new_bp_LANGUAGE)) {
      add_post_meta($post_id,'booking_plugin_box_language',$new_bp_LANGUAGE,true);
  }  
  
  if (!empty($current_bp_CURRENCY)) {
    if (is_null($new_bp_CURRENCY)) {
      delete_post_meta($post_id,'booking_plugin_box_currency');
    } else {
      update_post_meta($post_id,'booking_plugin_box_currency',$new_bp_CURRENCY);
    }
  } elseif (!is_null($new_bp_CURRENCY)) {
      add_post_meta($post_id,'booking_plugin_box_currency',$new_bp_CURRENCY,true);
  } 
  
    if (!empty($current_bp_TARGET)) {
    if (is_null($new_bp_TARGET)) {
      delete_post_meta($post_id,'booking_plugin_TARGET');
    } else {
      update_post_meta($post_id,'booking_plugin_TARGET',$new_bp_TARGET);
    }
  } elseif (!is_null($new_bp_TARGET)) {
      add_post_meta($post_id,'booking_plugin_TARGET',$new_bp_TARGET,true);
  }  
  
   if (!empty($current_bp_FORMAT)) {
    if (is_null($new_bp_FORMAT)) {
      delete_post_meta($post_id,'booking_plugin_FORMAT');
    } else {
      update_post_meta($post_id,'booking_plugin_FORMAT',$new_bp_FORMAT);
    }
  } elseif (!is_null($new_bp_FORMAT)) {
      add_post_meta($post_id,'booking_plugin_FORMAT',$new_bp_FORMAT,true);
  }
  
  if (!empty($current_bp_FLEX)) {
    if (is_null($new_bp_FLEX)) {
      delete_post_meta($post_id,'booking_plugin_FLEX');
    } else {
      update_post_meta($post_id,'booking_plugin_FLEX',$new_bp_FLEX);
    }
  } elseif (!is_null($new_bp_FLEX)) {
      add_post_meta($post_id,'booking_plugin_FLEX',$new_bp_FLEX,true);
  }
  
  if (!empty($current_bp_CSS_override)) {
    if (is_null($new_bp_CSS_override)) {
      delete_post_meta($post_id,'booking_plugin_CSS_override');
    } else {
      update_post_meta($post_id,'booking_plugin_CSS_override',$new_bp_CSS_override);
    }
  } elseif (!is_null($new_bp_CSS_override)) {
      add_post_meta($post_id,'booking_plugin_CSS_override',$new_bp_CSS_override,true);
  }
  
  if (!empty($current_bp_jqtheme)) {
    if (is_null($new_bp_jqtheme)) {
      delete_post_meta($post_id,'booking_plugin_jqtheme');
    } else {
      update_post_meta($post_id,'booking_plugin_jqtheme',$new_bp_jqtheme);
    }
  } elseif (!is_null($new_bp_jqtheme)) {
      add_post_meta($post_id,'booking_plugin_jqtheme',$new_bp_jqtheme,true);
  }  

  return $post_id;
}

function booking_pluginbox_clean(&$arr) {
  if (is_array($arr)) {
    foreach ($arr as $i => $v) {
      if (is_array($arr[$i])) {
        my_meta_clean($arr[$i]);
        if (!count($arr[$i])) {
          unset($arr[$i]);
        }
      } else {
        if (trim($arr[$i]) == '') {
          unset($arr[$i]);
        }
      }
    }
    if (!count($arr)) {
      $arr = NULL;
    }
  }
}
?>