<?php 
/*
Plugin Name: Booking.com Affiliate plugin final
Plugin URI: http://www.wordpress-booking-plugin.com/
Description: This plugin allows you to add a typical booking.com booking module on any wordpress blog. The search results page will remain branded with your site look and feel and carry your booking.com affiliate ID. Click here to edit the <a href="options-general.php?page=booking-com-affiliate">plugin settings</a> and find all the support information.
Version: 0.1.1
Author: Gregory Raby
Author URI: http://www.wordpress-booking-plugin.com/
License: GPL
*/

defined('ABSPATH') or die("Cannot access pages directly.");

/**
 * Initializing 
 * 
 * The directory separator is different between linux and microsoft servers.
 * Thankfully php sets the DIRECTORY_SEPARATOR constant so that we know what
 * to use.
 */
defined("DS") or define("DS", DIRECTORY_SEPARATOR);

/**
 * Actions and Filters
 * 
 * Register any and all actions here. Nothing should actually be called 
 * directly, the entire system will be based on these actions and hooks.
 */
add_action( 'widgets_init', create_function( '', 'register_widget("Widget_bookingplugin");' ) );


/**
 * 
 * @author byrd
 * Document Widget
 */
class Widget_bookingplugin extends WP_Widget
{
	/**
	 * Constructor
	 * 
	 * Registers the widget details with the parent class
	 */
	function Widget_bookingplugin()
	{
		// widget actual processes
		parent::__construct( false, 'Booking.com Affiliate Widget' );
	}

	function form($instance)
	{
		// outputs the options form on admin
		?>
<p>There are so many settings you can play with, I grouped them all under the <a href="options-general.php?page=booking-com-affiliate">Booking.com Affiliates plugin admin page</a> for you !</p>		
		<?php 
	}

	function widget()
	{
		// outputs the content of the widget
echo $args['before_widget'];
if (get_option('widget_h3_title') == "yes") {echo $args['before_title'] . get_option('widget_title') . $args['after_title'];}
?>
<iframe name="wp_booking_plugin" src="http://www.booking.com/?aid=<?php echo get_option('affiliate_ID'); ?>;&tmpl=searchbox&city=&ifl=1&short_month=1&bgcolor=<?php echo get_option('widget_bgcolor'); ?>&textcolor=<?php echo get_option('widget_txtcolor'); ?>&ss=<?php echo get_option('widget_destination'); ?>&label=<?php echo get_option('affiliate_label'); ?>&lang=<?php echo get_option('widget_language'); ?>&width=<?php echo get_option('widget_width'); ?>&target=_top<?php if (get_option('widget_cal_icons') == "yes") echo'&calendar=1' ?>" frameborder="0" scrolling="no" width="<?php echo get_option('widget_width'); ?>px" height="<?php echo get_option('widget_height'); ?>"></iframe>
<?php
echo $args['after_widget'];
	}
}
if ( is_admin() ){

add_action('admin_menu', 'Affiliation_booking_admin_menu');
function Affiliation_booking_admin_menu() {
add_options_page('Booking.com Affiliate plugin', 'Booking.com Affiliate plugin', 'administrator', 'booking-com-affiliate', 'Affiliates_booking_admin_html_page');
}
}

function Affiliates_booking_admin_html_page() {
?>
<div>
<h2>Booking.com Affiliate plugin</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
    
<STYLE type="text/css">
  .tables {width: 600px}
  .td_left {width: 280px; text-align: right}
  .td_divider {width: 30px}
  .td_right {width: 290px}
  .divider {width:600px; border-color: #DFDFDF; border-style: solid; border-width: 1px 0 0 0; line-height: 1.6em; margin: 20px 8px; overflow:auto; padding:5px 10px; position: relative}
</STYLE> 
 
<table class="tables">
<tr>
<td>
<p>Dear Booking.com Affiliates,</p>
<p>This plugin allows you to add a customizable widget to any wordpress theme so your visitors can search the booking.com index with your Affiliate ID on.</p>
<p>Visit my site for <a href="http://www.wordpress-booking-plugin.com/get-started" target="_blank">detailed setup info and tips</a>, <a href="http://www.wordpress-booking-plugin.com/suggest-new-features" target="_blank">suggest new features</a> or <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3Z8NM7TRLNXSC" target="_blank">Donate via PayPal</a></p></td>
</tr>
</table>

<div class="divider"></div>


<h3><span class="icon16 icon-settings"></span> Your affiliation program</h3>
<table class="tables">
<tr>
	<td class="td_left">Your Booking.com Affiliate ID ("AID")</td>
    <td class="td_divider">&nbsp;</td>
	<td class="td_right"><input name="affiliate_ID" type="text" id="affiliate_ID" value="<?php echo get_option('affiliate_ID'); ?>" /> (ex. "345164")</td>
</tr>
<tr>
	<td class="td_left">Label name for your booking.com tracking</td>
    <td class="td_divider">&nbsp;</td>
	<td class="td_right"><input name="affiliate_label" type="text" id="affiliate_label" value="<?php echo get_option('affiliate_label'); ?>" /> (ex. "Homepage")</td>
</tr>
</table>
<br /><br />

<h3><span class="icon16 icon-appearance"></span> Customize your booking widget</h3>
<table class="tables">
<tr>
  <td class="td_left">Want to specify a destination ?</td>
  <td class="td_divider">&nbsp;</td>
  <td><input name="widget_destination" type="text" id="widget_destination" value="<?php echo get_option('widget_destination'); ?>" /> (ex. "Paris")</td>
</tr>
<tr>
  <td class="td_left">Widget background color</td>
  <td class="td_divider">&nbsp;</td>
  <td><input name="widget_bgcolor" type="text" id="widget_bgcolor" value="<?php echo get_option('widget_bgcolor'); ?>" /> (ex. "FEBA02" - no '#')</td>
</tr>
<tr>
  <td class="td_left">Widget text color</td>
  <td class="td_divider">&nbsp;</td>
  <td><input name="widget_txtcolor" type="text" id="widget_txtcolor" value="<?php echo get_option('widget_txtcolor'); ?>" /> (ex. "003580" - no '#')</td>
</tr>
<tr>
  <td class="td_left">Display the calendar icons ?</td>
  <td class="td_divider">&nbsp;</td>
  <td>
  <select name="widget_cal_icons" id="widget_cal_icons">
  <option value="<?php echo get_option('widget_cal_icons'); ?>" selected="selected"><?php echo get_option('widget_cal_icons'); ?></option>
  <option value="yes">Display the calendar icons</option>
  <option value="no">Do not display the calendar icons</option>
  </select>  
  </td>
</tr>
<tr>
  <td class="td_left">Widget Language (applies to results page too)</td>
  <td class="td_divider">&nbsp;</td>
  <td><select name="widget_language" id="widget_language">
  <option value="<?php echo get_option('widget_language'); ?>" selected="selected"><?php echo get_option('widget_language'); ?></option>
  <option value="en">English</option>
  <option value="de">German</option>
  <option value="nl">Dutch</option>
  <option value="fr">French</option>
  <option value="es">Spanish</option>
  <option value="it">Italian</option>
  <option value="pt">Portuguese</option>
  <option value="no">Norwegian</option>
  <option value="fi">Finish</option>
  <option value="sv">Swedish</option>
  <option value="da">Danish</option>
  <option value="cs">Czech</option>
  <option value="hu">Hungarian</option>
  <option value="ro">Romanian</option>
  <option value="ja">Japanese</option>
  <option value="zh">Chinese (Traditional)</option>
  <option value="pl">Polish</option>
  <option value="el">Greek</option>
  <option value="ru">Russian</option>
  <option value="tr">Turkish</option>
  <option value="bg">Bulgarian</option>
  <option value="ar">Arabic</option>
  <option value="ko">Korean</option>
  <option value="he">Hebrew</option>
  <option value="lv">Latvian</option>
  </select>
  </td>
</tr>
</table>
<br /><br />

<h3><span class="icon16 icon-appearance"></span> Integrate in your widget-ready pages</h3>
<table class="tables">
<tr>
  <td class="td_left">Keep the default title bar ?</td>
  <td class="td_divider">&nbsp;</td>
  <td>
  <select name="widget_h3_title" id="widget_h3_title">
  <option value="<?php echo get_option('widget_h3_title'); ?>" selected="selected"><?php echo get_option('widget_h3_title'); ?></option>
  <option value="yes">Display the default theme widget title</option>
  <option value="no">Do not display the theme default widget title</option>
  </select>  
  </td>
</tr>
<tr>
  <td class="td_left">Widget title</td>
  <td class="td_divider">&nbsp;</td>
  <td><input name="widget_title" type="text" id="widget_title" value="<?php echo get_option('widget_title'); ?>" /></td>
</tr>
<tr>
  <td class="td_left">Widget Width (pixels)</td>
  <td class="td_divider">&nbsp;</td>
  <td><input name="widget_width" type="text" id="widget_width" value="<?php echo get_option('widget_width'); ?>" /> (ex. "200")</td>
</tr>
<tr>
  <td class="td_left">Widget Height (pixels)</td>
  <td class="td_divider">&nbsp;</td>
  <td><input name="widget_height" type="text" id="widget_height" value="<?php echo get_option('widget_height'); ?>" /> (ex. "300")</td>
</tr>
</table>
<br /><br />

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="affiliate_ID, affiliate_label, widget_destination, widget_bgcolor, widget_txtcolor, widget_cal_icons, widget_language, widget_h3_title, widget_title, widget_width, widget_height" />

<p>
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

<div class="divider"></div>

<h4><span class="icon16 icon-page"></span> Additional notes</h4>
<table class="tables">
<tr>
	<td>
	<p>The results will be displayed in a new browser window. Of course, your Booking.com Affiliate ID ("AID") will be carried so the traffic and revenue generated will show up in your Booking.com Admin page.</p>
	<p>If you are already pulling some traffic to your site, chances are you will want to have the ability to display the booking.com results on your own sites. This feature will absolutely become available in the coming months. If you need it sooner, <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3Z8NM7TRLNXSC">consider donating</a> to help me focus on the development of this plugin. It takes time to do things right.</p>
	</td>
</tr>
</table>

<?php
}
?>