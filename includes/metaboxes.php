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
  $bp_sbbbgc = get_post_meta($post->ID, 'booking_plugin_sbbbg_color', true);
  $bp_sbbtc = get_post_meta($post->ID, 'booking_plugin_sbbt_color', true);  
  $bp_LANGUAGE = get_post_meta($post->ID, 'booking_plugin_box_language', true);
  $bp_CURRENCY = get_post_meta($post->ID, 'booking_plugin_box_currency', true);
  $bp_TARGET = get_post_meta($post->ID, 'booking_plugin_TARGET', true);
  $bp_FORMAT = get_post_meta($post->ID, 'booking_plugin_FORMAT', true);
  $bp_FLEX = get_post_meta($post->ID, 'booking_plugin_FLEX', true);
  $bp_CSS_override = get_post_meta($post->ID, 'booking_plugin_CSS_override', true);
  $bp_jqtheme = get_post_meta($post->ID, 'booking_plugin_jqtheme', true);
  
?>

<script type="text/javascript" src="<?php echo plugins_url( 'jscolor/jscolor.js' , __FILE__ ); ?>"></script>

 <!-- Program related setting --> 
<h2 style="padding-left:10px;"><span class="icon16 icon-settings"></span>Your affiliation program</h2>
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
 <h2 style="padding-left:10px;"><span class="icon16 icon-appearance"></span>Customize your booking widget</h2>
 <br />
  <table class="tables">
<tr>
  <td colspan="3" valign="top" class="td_left"><h3>What do you want to display ?</h3></td>
</tr>
<tr>
  <td width="250" valign="top" class="td_left">Should the destination be editable by the visitors ?</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><p>
    <select name="booking_plugin_DESTINATION_UI" id="booking_plugin_DESTINATION_UI">
      <option value="<?php echo $bp_DESTINATION_UI; ?>" selected="selected"><?php echo $bp_DESTINATION_UI; ?></option>
      <option value="Display-Editable">Display the destination search field AND keep it editable</option>
      <option value="Display-NOT-Editable">Display the destination search field BUT do not make it editable</option>
      <option value="Hide">Do not display the destination field</option>
    </select>
  </p>
    <p class="description">If your site targets a specific location, this might be useful.</p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Search box Language</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><select name="booking_plugin_box_language" id="booking_plugin_box_language">
    <option value="<?php echo $bp_LANGUAGE; ?>" selected="selected"><?php echo $bp_LANGUAGE; ?></option>
    <option value="bg">Bulgarian</option>
    <option value="da">Danish</option>
    <option value="nl">Dutch</option>
    <option value="en">English</option>
    <option value="fr">French</option>
    <option value="de">German</option>
    <option value="el">Greek</option>
    <option value="it">Italian</option>
    <option value="pt">Portuguese</option>
    <option value="es">Spanish</option>
    <option value="tr">Turkish</option>
    <option value="ru">Russian</option>
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
    <option value="ar">Arabic</option>
    <option value="ko">Korean</option>
    <option value="he">Hebrew</option>
    <option value="lv">Latvian</option>
	-->
  </select>
    <p class="description">This applies to the results page too</p></td>
</tr>
<tr>
<td valign="top" class="td_left">Currency determination</td>
<td class="td_divider">&nbsp;</td>
<td valign="top" class="td_right">
<select name="booking_plugin_box_currency" id="booking_plugin_box_currency">
<option value="<?php echo $bp_CURRENCY; ?>" selected="selected"><?php echo $bp_CURRENCY; ?></option>
<option value="">Let booking.com decide</option>
<option value="">----------------------</option>
<option value="AED">United Arab Emirates dirham (AED)</option>
<option value="AUD">Australian dollar (AUD)</option>
<option value="BRL">Brazilian real (BRL)</option>
<option value="CAD">Canadian dollar (CAD)</option>
<option value="CHF">Swiss franc (CHF)</option>
<option value="CLP">Chilean peso (CLP)</option>
<option value="CZK">Czech koruna (CZK)</option>
<option value="DKK">Danish krone (DKK)</option>
<option value="EUR">Euro (EUR)</option>
<option value="HUF">Hungarian forint (HUF)</option>
<option value="GBP">Pound sterling (GBP)</option>
<option value="INR">Indian rupee (INR)</option>
<option value="ILS">Israeli new sheqel (ILS)</option>
<option value="JPY">Japanese yen (JPY)</option>
<option value="MXN">Mexican peso (MXN)</option>
<option value="NOK">Norwegian krone (NOK)</option>
<option value="PLN">Polish zloty (PLN)</option>
<option value="SEK">Swedish krona (SEK)</option>
<option value="SGD">Singapore dollar (SGD)</option>
<option value="USD">U.S. dollar (USD)</option>
</select>
<p class="description">When a booker is making a reservation, both currencies - the default currency and any currency chosen by the booker- will be displayed. This is because the guest will need to pay for the accommodation in the local currency. In most cases, leave this field blank.</p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Show results in a new browser window ?</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><select name="booking_plugin_TARGET" id="booking_plugin_TARGET">
    <option value="<?php echo $bp_TARGET; ?>" selected="selected"><?php echo $bp_TARGET; ?></option>
    <option value="yes">Yes, display results in a new window</option>
    <option value="no">No, open booking.com in the same window</option>
  </select>
    <p class="description">It's quite common to make results open in a NEW window.</p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Width for your search box</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><input type="text" value="<?php echo $bp_FORMAT; ?>" id="booking_plugin_FORMAT" name="booking_plugin_FORMAT" />
    pixels
    <p class="description">In most cases this should remain blank (blank = adaptive) unless you know exactly what you need. Do not go under 198px as it starts looking weird.</p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Allow flexible dates ?</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><select name="booking_plugin_FLEX" id="booking_plugin_FLEX">
    <option value="<?php echo $bp_FLEX; ?>" selected="selected"><?php echo $bp_FLEX; ?></option>
    <option value="yes">Yes</option>
    <option value="no">No</option>
    </select>
    <p class="description">This would display the text &quot;I don't have specific dates yet&quot;.</p></td>
</tr>
<tr>
  <td colspan="3" valign="top" class="td_left"><p>&nbsp;</p>
    <p><h3>How should it all look ?</h3></p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Box background color</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><input type="text" class="color {required:true,hash:false}" value="<?php if ($bp_bbgc=="") { echo "FEBA02"; } else echo $bp_bbgc; ?>" id="booking_plugin_bbg_color" name="booking_plugin_bbg_color" />
    <p class="description">(default is &quot;FEBA02&quot; - no '#')</p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Box text color</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><input type="text" class="color {required:true,hash:false}" value="<?php
    if ($bp_btc == "") { echo "003580"; } else { echo $bp_btc; } ?>" id="booking_plugin_bt_color" name="booking_plugin_bt_color" />
    <p class="description">(default is &quot;003580&quot; - no '#')</p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Search button background color</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><input type="text" class="color {required:true,hash:false}" value="<?php if ($bp_sbbbgc=="") { echo "0896ff"; } else { echo $bp_sbbbgc; } ?>" id="booking_plugin_sbbbg_color" name="booking_plugin_sbbbg_color" />
    <p class="description">(default is &quot;0896ff&quot; - no '#')</p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Search button text color</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><input type="text" class="color {required:true,hash:false}" value="<?php
    if ($bp_sbbtc == "") { echo "ffffff"; } else { echo $bp_sbbtc; } ?>" id="booking_plugin_sbbt_color" name="booking_plugin_sbbt_color" />
    <p class="description">(default is &quot;ffffff&quot; - no '#')</p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Calendar Skin</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><p>
    <select name="booking_plugin_jqtheme" id="booking_plugin_jqtheme">
      <option value="<?php echo $bp_jqtheme; ?>" selected="selected"><?php echo $bp_jqtheme; ?></option>
      <option value="ui-lightness">UI Lightness</option>
      <option value="ui-darkness">UI Darkness</option>
      <option value="smoothness">Smoothness</option>
      <option value="start">Start</option>
      <option value="redmond">Redmond <= This is the default</option>
      <option value="sunny">Sunny</option>
      <option value="overcast">Overcast</option>
      <option value="le-frog">Le Frog</option>
      <option value="flick">Flick</option>
      <option value="pepper-grinder">Pepper Grinder</option>
      <option value="eggplant">Eggplant</option>
      <option value="dark-hive">Dark Hive</option>
      <option value="cupertino">Cupertino</option>
      <option value="south-street">South Street</option>
      <option value="blitzer">Blitzer</option>
      <option value="humanity">Humanity</option>
      <option value="hot-sneaks">Hot Sneaks</option>
      <option value="excite-bike">Excite Bike</option>
      <option value="vader">Vader</option>
      <option value="dot-luv">Dot Luv</option>
      <option value="mint-choc">Mint Choc</option>
      <option value="black-tie">Black Tie</option>
      <option value="trontastic">Trontastic</option>
      <option value="swanky-purse">Swanky Purse</option>
    </select>
  </p>
    <p><span class="description">Have a look at the official <a href="http://jqueryui.com/themeroller/#themeGallery" target="_blank">jQueryUI theme Gallery</a> to pick your favorite datepicker skin.</span></p></td>
</tr>
<tr>
  <td valign="top" class="td_left">Disable calendar skin (CSS)</td>
  <td class="td_divider">&nbsp;</td>
  <td valign="top" class="td_right"><select name="booking_plugin_CSS_override" id="booking_plugin_CSS_override">
    <option value="<?php echo $bp_CSS_override; ?>" selected="selected"><?php echo $bp_CSS_override; ?></option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
    <p class="description">If you already run jQuery UI tabs on your site, you should probably choose &quot;Yes&quot; here to avoid CSS conflicts with multiple stylesheets.</p></td>
</tr>
</table>

 <br /><br />
<?php
}
?>