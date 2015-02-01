<?php
/**
 * Booking.com Affiliate search box custom post type
 */
function booking_pluginbox_init() {
  $labels = array(
    'name'               => __('Booking.com Affiliate Plugin', 'post type general name'),
    'singular_name'      => __('Search Box', 'post type singular name'),
    'add_new'            => __('Add new', 'member'),
    'add_new_item'       => __('Create a new Search box'),
    'edit_item'          => __('Edit a Search box'),
    'new_item'           => __('Create a new Search box'),
    'view_item'          => null,
    'search_items'       => __('Search'),
    'not_found'          =>  __('No result found!'),
    'not_found_in_trash' => __('No Search Boxes in the trash!'),
    'parent_item_colon'  => ''
  );

  $args = array(
    'labels'               => $labels,
//    'public'               => true,
    'publicly_queryable'   => true,
    'show_ui'              => true,
    'query_var'            => true,
    'rewrite'              => array('slug' => 'booking-pluginbox'),
    'capability_type'      => 'post',
    'hierarchical'         => false,
    'has_archive'          => true,
    'menu_position'        => 100,
    'menu_icon'            => plugins_url('/includes/images/booking_plugin-icon.png', dirname(__FILE__)),
    'supports'             => array('title'),
    'register_meta_box_cb' => 'booking_pluginbox_meta_boxes'
  );

	register_post_type('booking-pluginbox',$args);
	add_action( 'save_post', 'booking_pluginbox_save_postdata' );
}
add_action('init', 'booking_pluginbox_init');

?>