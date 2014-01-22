<?php
add_action('widgets_init', 'booking_pluginbox_single_register_widget');

function booking_pluginbox_single_register_widget() {
  register_widget('booking_pluginbox_Single_Widget');
}

class booking_pluginbox_Single_Widget extends WP_Widget {

  function __construct() {
    $widget_ops = array(
      'classname'   => 'widget_booking_plugin_single',
      'description' => __('The widget returns !')
    );
    parent::__construct('booking-pluginbox-single', __('Booking.com Affiliate plugin'), $widget_ops);
    $this->alt_option_name = 'widget_booking_plugin_single';

    add_action( 'save_post', array(&$this, 'flush_widget_cache') );
    add_action( 'deleted_post', array(&$this, 'flush_widget_cache') );
    add_action( 'switch_theme', array(&$this, 'flush_widget_cache') );
  }

  function widget($args, $instance) {
    if (empty($instance['quote'])) {
      return;
    }

    // Retrieve cached data
    $cache = wp_cache_get('widget_booking_pluginbox_single', 'widget');

    // Load style.css
    //wp_enqueue_style('booking_pluginbox', plugins_url('includes/css/jquery-ui-1.10.3.custom.min.css', __FILE__));


    if (!is_array($cache)) {
      $cache = array();
    }

    if (isset($cache[$args['widget_id']])) {
      echo $cache[$args['widget_id']];
      return;
    }

    // We don't have cached data : we create it!
    ob_start();
    extract($args);
    $title = apply_filters('widget_title', $instance['title'], $instance, $this->id_base);

    $query = array(
      'p'         => $instance['quote'],
      'post_type' => 'booking-pluginbox'
    );

    $r = new WP_Query($query);

    if ($r->have_posts()) {
      echo $before_widget;
      if ($title) {
        echo $before_title . $title . $after_title;
      }
      echo '<ul class="booking-pluginbox">';
      while ($r->have_posts()) {
        $r->the_post();
		$this_searchbox_widget = "[booking_pluginbox id=";
		$this_searchbox_widget .= get_the_ID();
		$this_searchbox_widget .= "]";
		echo do_shortcode($this_searchbox_widget);
		}
      echo '</ul>';
      echo $after_widget;

      // Reset the global $the_post as this query will have stomped on it
      wp_reset_postdata();
    }

    // Echo the result get it for caching
    $cache[$args['widget_id']] = ob_get_flush();
    wp_cache_set('widget_booking_pluginbox_single', $cache, 'widget');
  }

  function update($new_instance, $old_instance) {
    $instance           = $old_instance;
    $instance['title']  = strip_tags($new_instance['title']);
    $instance['quote']  = $new_instance['quote'];
    // Keep the data fresh
    $this->flush_widget_cache();

    $alloptions = wp_cache_get('alloptions', 'options');
    if (isset($alloptions['widget_booking_plugin_single'])) {
      delete_option('widget_booking_plugin_single');
    }

    return $instance;
  }

  function flush_widget_cache() {
    wp_cache_delete('widget_booking_pluginbox_single', 'widget');
  }

  function form($instance) {
    $title = isset($instance['title']) ? esc_attr($instance['title']) : 'Booking.com Plugin';
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __('Title: (optional)'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('quote'); ?>"><?php echo __('Select your searchbox:'); ?></label>
      <?php
      $quotes = get_posts(array('post_type' => 'booking-pluginbox'));
      foreach ($quotes as $quote) {
        $quote_data[$quote->ID] = (strlen($quote->post_title) > 40) ? substr($quote->post_title, 0, 37) . '...' : $quote->post_title;
      }
      ?>
      <select class="widefat" id="<?php echo $this->get_field_id('quote'); ?>" name="<?php echo $this->get_field_name('quote'); ?>">
        <option value="">Select a searchbox...</option>
        <?php foreach ($quote_data as $key => $val) : ?>
          <?php $selected = ($key == $instance['quote']) ? ' selected' : ' nope'; ?>
          <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $val; ?></option>
        <?php endforeach; ?>
      </select>
    </p>
    <?php
  }
}
?>