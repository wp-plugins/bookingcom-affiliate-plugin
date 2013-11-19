<?php
function booking_pluginbox_form() {

  global $post;
  
  $bp_AID = get_post_meta($post->ID, 'booking_plugin_AID', true);
  $bp_TRACKING = get_post_meta($post->ID, 'booking_plugin_TRACKING', true); 
  $bp_DESTINATION = get_post_meta($post->ID, 'booking_plugin_DESTINATION', true);
  $bp_DESTINATION_RESTRICTION = get_post_meta($post->ID, 'booking_plugin_DESTINATION_RESTRICTION', true);
  $bp_DESTINATION_UI = get_post_meta($post->ID, 'booking_plugin_DESTINATION_UI', true);
  $bp_bbgc = get_post_meta($post->ID, 'booking_plugin_bbg_color', true);
  $bp_btc = get_post_meta($post->ID, 'booking_plugin_bt_color', true);
  $bp_calic = get_post_meta($post->ID, 'booking_plugin_calic', true);
  $bp_cal_display = get_post_meta($post->ID, 'booking_plugin_cal_display', true);
  $bp_LANGUAGE = get_post_meta($post->ID, 'booking_plugin_box_language', true);
  $bp_TARGET = get_post_meta($post->ID, 'booking_plugin_TARGET', true);
  $bp_FORMAT = get_post_meta($post->ID, 'booking_plugin_FORMAT', true);
  $bp_FLEX = get_post_meta($post->ID, 'booking_plugin_FLEX', true);
  
?>

<script type="text/javascript" src="<?php echo plugins_url( 'jscolor/jscolor.js' , __FILE__ ); ?>"></script>

 <!-- Program related setting --> 
<h4 style="padding-left:10px;"><span class="icon16 icon-settings"></span>Your affiliation program</h4>
<br />
<table class="tables">
<tr>
	<td width="250" valign="top" class="td_left">Your Booking.com Affiliate ID ("AID")</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><input name="booking_plugin_AID" type="text" id="booking_plugin_AID" value="<?php echo $bp_AID; ?>" /><p class="description">(ex. "345164" - <a href="http://www.booking.com/general.en-gb.html?dcid=1&lang=en-gb&tmpl=docs%2Faffiliates">don't have an affiliate ID yet ?</a>)</p></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">Label name for your booking.com tracking</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><input name="booking_plugin_TRACKING" type="text" id="booking_plugin_TRACKING" value="<?php echo $bp_TRACKING; ?>" /><p class="description">(ex. "Homepage")</p></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">Want to specify a default destination ?</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><input name="booking_plugin_DESTINATION" type="text" id="booking_plugin_DESTINATION" value="<?php echo $bp_DESTINATION; ?>" /><p class="description">(ex. "Paris, France")</p></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">For better results, please categorize the destination type</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><select name="booking_plugin_DESTINATION_RESTRICTION" id="booking_plugin_DESTINATION_RESTRICTION">
             	<option value="<?php echo $bp_DESTINATION_RESTRICTION; ?>" selected="selected"><?php echo $bp_DESTINATION_RESTRICTION; ?></option>
             	<option value="">No categorization</option>
                <option value="city">Search for a city</option>
             	<option value="hotel">Search for a hotel</option>
				<option value="chain">Search for hotel chains</option>
                <option value="airport">Search for hotels near an airport</option>
                <option value="landmark">Search for hotels near a landmark</option>
                <option value="region">Search for hotels in a region</option>         
    </select><p class="description">Please refer to the <a href="https://admin.bookings.org/affiliate/impl_sbox.html" target="_blank">booking.com documentation</a> to learn more about the categories.</p></td>
</tr>
</table>
  
 <br /><br />
   <!-- Actual box look and feel -->   
 <h4 style="padding-left:10px;"><span class="icon16 icon-appearance"></span>Customize your booking widget</h4>
 <br />
  <table class="tables">
<tr>
	<td width="250" valign="top" class="td_left">Should the destination be editable by the visitors ?</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right">
             <select name="booking_plugin_DESTINATION_UI" id="booking_plugin_DESTINATION_UI">
             	<option value="<?php echo $bp_DESTINATION_UI; ?>" selected="selected"><?php echo $bp_DESTINATION_UI; ?></option>
             	<option value="Display-Editable">Display the destination search field AND keep it editable</option>
             	<option value="Display-NOT-Editable">Display the destination search field BUT do not make it editable</option>
				<option value="Hide">Do not display the destination field</option>
             </select></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">Box background color</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><input type="text" class="color {required:true,hash:false}" value="<?php if ($bp_bbgc=="") { echo "FEBA02"; } else echo $bp_bbgc; ?>" id="booking_plugin_bbg_color" name="booking_plugin_bbg_color"><p class="description">(default is "FEBA02" - no '#')</p></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">Box text color</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><input type="text" class="color {required:true,hash:false}" value="<?php
    if ($bp_btc == "") {
		echo "003580";
	} else {
		echo $bp_btc;
	}
?>" id="booking_plugin_bt_color" name="booking_plugin_bt_color"><p class="description">(default is "003580" - no '#')</p></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">Search box Language</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><select name="booking_plugin_box_language" id="booking_plugin_box_language">
  			<option value="<?php echo $bp_LANGUAGE; ?>" selected="selected"><?php echo $bp_LANGUAGE; ?></option>
			<option value="en">English</option>
			<option value="de">German</option>
			<option value="fr">French</option>
			<option value="es">Spanish</option>
			<option value="nl">Dutch</option>
			<option value="it">Italian</option>
			<option value="tr">Turkish</option>
            <option value="pt">Portuguese</option>  
            <option value="el">Greek</option>
            <option value="da">Danish</option>
			  <!--  
			  <option value="no">Norwegian</option>
			  <option value="fi">Finish</option>
			  <option value="sv">Swedish</option>
			  <option value="cs">Czech</option>
			  <option value="hu">Hungarian</option>
			  <option value="ro">Romanian</option>
			  <option value="ja">Japanese</option>
			  <option value="zh">Chinese (Traditional)</option>
			  <option value="pl">Polish</option>
			  <option value="ru">Russian</option>
			  <option value="bg">Bulgarian</option>
			  <option value="ar">Arabic</option>
			  <option value="ko">Korean</option>
			  <option value="he">Hebrew</option>
			  <option value="lv">Latvian</option>
			-->
		</select><p class="description">This applies to the results page too</p></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">Show results in a new browser window ?</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><select name="booking_plugin_TARGET" id="booking_plugin_TARGET">
		 	<option value="<?php echo $bp_TARGET; ?>" selected="selected"><?php echo $bp_TARGET; ?></option>
			<option value="yes">Yes, display results in a new window</option>
			<option value="no">No, open booking.com in the same window</option>
		</select><p class="description">It's quite common to make results open in a NEW window.</p></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">Width for your search box</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><input type="text" value="<?php echo $bp_FORMAT; ?>" id="booking_plugin_FORMAT" name="booking_plugin_FORMAT" />pixels<p class="description">In most cases this should remain blank (blank = adaptive) unless you know exactly what you need. Do not go under 198px as it starts looking weird.</p></td>
</tr>
<tr>
	<td width="250" valign="top" class="td_left">Allow flexible dates ?</td>
    <td class="td_divider">&nbsp;</td>
	<td valign="top" class="td_right"><select name="booking_plugin_FLEX" id="booking_plugin_FLEX">
		 	<option value="<?php echo $bp_FLEX; ?>" selected="selected"><?php echo $bp_FLEX; ?></option>
			<option value="yes">Yes</option>
			<option value="no">No</option>
		</select></td>
</tr>
</table>

 <br /><br />
<?php
}
?>