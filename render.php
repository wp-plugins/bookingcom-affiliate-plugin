<?php
echo $args['before_widget'];
if (get_option('widget_h3_title') == "yes") {echo $args['before_title'] . get_option('widget_title') . $args['after_title'];}
?>
<iframe name="wp_booking_plugin" src="http://www.booking.com/?aid=<?php echo get_option('affiliate_ID'); ?>;&tmpl=searchbox&city=&ifl=1&short_month=1&bgcolor=<?php echo get_option('widget_bgcolor'); ?>&textcolor=<?php echo get_option('widget_txtcolor'); ?>&ss=<?php echo get_option('widget_destination'); ?>&label=<?php echo get_option('affiliate_label'); ?>&lang=<?php echo get_option('widget_language'); ?>&width=<?php echo get_option('widget_width'); ?>&target=_top<?php if (get_option('widget_cal_icons') == "yes") echo'&calendar=1' ?>" frameborder="0" scrolling="no" width="<?php echo get_option('widget_width'); ?>px" height="<?php echo get_option('widget_height'); ?>"></iframe>
<?php
echo $args['after_widget'];
?>