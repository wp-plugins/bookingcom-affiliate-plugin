<?php
/* ------------------------------------ */
/* Shortcode Generator                  */
/* ------------------------------------ */

// Action target that adds the "Insert Product(s)" button to the post/page edit screen.
function js_add_booking_pluginbox_button($context){
    $image_btn = plugins_url('images/booking_plugin-icon.png', dirname(__FILE__));
    $out = '<a href="#TB_inline?width=400&height=300&inlineId=insert_booking_plugin" class="thickbox" title="Insert Booking.com Search Box"><img src="'.$image_btn.'" alt="Insert Booking.com Search Box" /></a>';
    return $context . $out;
}

add_action('admin_footer','js_add_booking_pluginbox_popup');
add_action('media_buttons_context','js_add_booking_pluginbox_button');

//Action target that displays the popup to insert a form to a post/page
function js_add_booking_pluginbox_popup(){
  $booking_searchboxes = get_posts(array('post_type' => 'booking-pluginbox'));
  foreach ($booking_searchboxes as $booking_searchbox) {
    $booking_searchbox_data[$booking_searchbox->ID] = (strlen($booking_searchbox->post_title) > 40) ? substr($booking_searchbox->post_title, 0, 37) . '...' : $booking_searchbox->post_title;
  }
  ?>

<div id="insert_booking_plugin" class="folded" style="display:none;">
  <div class="wrap">
    <div>
      <div style="padding:15px 15px 0 15px;">
        <h3 class="media-title">Booking.com search box Shortcode Generator</h3>
        <span>Which Booking.com Search Box do you want to insert ?</span> </div>
      <div style="padding:15px 15px 0 15px;">
        <select id="js_booking_pluginbox_shortcode_select">
          <option value="">Select here</option>
          <?php foreach ($booking_searchbox_data as $key => $val) : ?>
          <option value="<?php echo $key; ?>"><?php echo $val; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div style="padding:15px;">
        <input type="button" class="button-primary" value="Insert into Post" onclick="InsertBookingPluginSearchBox();"/>
        &nbsp;&nbsp;&nbsp; <a class="button" style="color:#bbb;" href="#" onclick="tb_remove(); return false;">Cancel</a> </div>
    </div>
    <div style="padding:15px 15px 0 15px;">
    <h3 class="media-title">Prefer the manual way ?</h3>
        <span>Simply paste the following shortcode where it pleases you:<pre>[booking_pluginbox id="XYZ"]</pre>Obviously, "XYZ" is the ID of your searchbox. <a href="<?php echo bloginfo('url');?>/wp-admin/edit.php?post_type=booking-pluginbox">Find all IDs here</a>.</span> </div>
  </div></div>
</div>
<script type="text/javascript">

    function InsertBookingPluginSearchBox(){
      var booking_searchbox  = jQuery("#js_booking_pluginbox_shortcode_select").val();
      var win    = window.dialogArguments || opener || parent || top;

      if (booking_searchbox){
        select = jQuery("#js_booking_pluginbox_shortcode_select");
        select.val(jQuery('options:first', select).val());
        win.send_to_editor('[booking_pluginbox id="' + booking_searchbox + '"]');
      } else {
        alert("Please select or enter a valid option(s) to display a booking_searchbox");
        return;
      }
    }
	

  </script>
<?php
}
// Shortcode [booking_pluginbox id="XXX"]
function booking_pluginbox_func($atts) {
  extract(shortcode_atts(array('id' => null, 'num' => null, 'random' => null, 'cat' => null), $atts));
  if ($id == null && $num == null & $random == null) {
    return false;
  } else if ($id){
    $args = array(
      'p'         => $id,
      'post_type' => 'booking-pluginbox'
    );
  } 
/////////////////////////////////////////////////////////////////
// Generate html
/////////////////////////////////////////////////////////////////	
	
  ob_start();
  
  $query = new WP_Query($args);

    $query->the_post();
	$post_bp_AID = get_post_meta(get_the_ID(), 'booking_plugin_AID', true);
	$post_bp_TRACKING = get_post_meta(get_the_ID(), 'booking_plugin_TRACKING', true); 
	$post_bp_DESTINATION = get_post_meta(get_the_ID(), 'booking_plugin_DESTINATION', true);
	$post_bp_DESTINATION_RESTRICTION = get_post_meta(get_the_ID(), 'booking_plugin_DESTINATION_RESTRICTION', true);
	$post_bp_DESTINATION_UI = get_post_meta(get_the_ID(), 'booking_plugin_DESTINATION_UI', true);
	$post_bp_bbgc = get_post_meta(get_the_ID(), 'booking_plugin_bbg_color', true);
	$post_bp_btc = get_post_meta(get_the_ID(), 'booking_plugin_bt_color', true);
	$post_bp_LANGUAGE = get_post_meta(get_the_ID(), 'booking_plugin_box_language', true);
	$post_bp_TARGET = get_post_meta(get_the_ID(), 'booking_plugin_TARGET', true);
	$post_bp_FORMAT = get_post_meta(get_the_ID(), 'booking_plugin_FORMAT', true);
	$post_bp_FLEX = get_post_meta(get_the_ID(), 'booking_plugin_FLEX', true);
  	
	if (!empty($id) ) {
///////////////////////////
// Building up the locales
///////////////////////////
switch ($post_bp_LANGUAGE) {
    case "fr":
		$weekdays_short_1 = "Lu";
		$weekdays_short_2 = "Ma";
		$weekdays_short_3 = "Me";
		$weekdays_short_4 = "Je";
		$weekdays_short_5 = "Ve";
		$weekdays_short_6 = "Sa";
		$weekdays_short_7 = "Di";
		$month_1 ="Janvier";
		$month_short_1 ="Jan";
		$month_2 ="F&eacute;vrier";
		$month_short_2 ="Fev";
		$month_3 ="Mars";
		$month_short_3 ="Mar";
		$month_4 ="Avril";
		$month_short_4 ="Avr";
		$month_5 ="Mai";
		$month_short_5 ="Mai";
		$month_6 ="Juin";
		$month_short_6 ="Jun";
		$month_7 ="Juillet";
		$month_short_7 ="Jui";
		$month_8 ="Aout";
		$month_short_8 ="Aou";
		$month_9 ="Septembre";
		$month_short_9 ="Sep";
		$month_10 ="Octobre";
		$month_short_10 ="Oct";
		$month_11 ="Novembre";
		$month_short_11 ="Nov";
		$month_12 ="Decembre";
		$month_short_12 ="Dec";
		$desc_search_hotels ="Recherche d'h&ocirc;tels";
		$desc_destination ="Destination";
		$desc_vanity ="Villes, R&eacute;gion, Pays, ...";
		$desc_checkin = "Date d'arriv&eacute;e";
		$desc_checkout ="Date de d&eacute;part";
		$desc_nodates = "Je n'ai pas de dates de s&eacute;jour pr&eacute;cises";
		$desc_search="Rechercher";
		$cal_next="Mois suivant";
		$cal_prev="Mois pr&eacute;cedent";
		$cal_close="Fermer le calendrier";
	break;
	case "de":
		$weekdays_short_1 = "Mo";
		$weekdays_short_2 = "Di";
		$weekdays_short_3 = "Mi";
		$weekdays_short_4 = "Do";
		$weekdays_short_5 = "Fr";
		$weekdays_short_6 = "Sa";
		$weekdays_short_7 = "So";
		$month_1 ="Januar";
		$month_short_1 ="Jan";
		$month_2 ="Februar";
		$month_short_2 ="Feb";
		$month_3 ="M&auml;rz";
		$month_short_3 ="Mar";
		$month_4 ="April";
		$month_short_4 ="Apr";
		$month_5 ="Mai";
		$month_short_5 ="Mai";
		$month_6 ="Juni";
		$month_short_6 ="Jun";
		$month_7 ="Juli";
		$month_short_7 ="Jul";
		$month_8 ="August";
		$month_short_8 ="Aug";
		$month_9 ="September";
		$month_short_9 ="Sep";
		$month_10 ="Oktober";
		$month_short_10 ="Okt";
		$month_11 ="November";
		$month_short_11 ="Nov";
		$month_12 ="Dezember";
		$month_short_12 ="Dez";
		$desc_search_hotels ="Hotels suchen";
		$desc_destination ="Reiseziel";
		$desc_vanity ="Stadt, Region, Land...";
		$desc_checkin = "Anreisedatum";
		$desc_checkout ="Abreisedatum";
		$desc_nodates = "Reisedatum noch unbekannt";
		$desc_search="Suche";
		$cal_next="N&auml;chster Monat";
		$cal_prev="Voriger Monat";
		$cal_close="Kalender schlie&szlig;en";
	break;
    case "es":
		$weekdays_short_1 = "Lu";
		$weekdays_short_2 = "Ma";
		$weekdays_short_3 = "Mi";
		$weekdays_short_4 = "Ju";
		$weekdays_short_5 = "Vi";
		$weekdays_short_6 = "Sa";
		$weekdays_short_7 = "Do";
		$month_1 ="Enero";
		$month_short_1 ="Ene";
		$month_2 ="Febrero";
		$month_short_2 ="Feb";
		$month_3 ="Mazo";
		$month_short_3 ="Mar";
		$month_4 ="Abril";
		$month_short_4 ="Abr";
		$month_5 ="Mayo";
		$month_short_5 ="May";
		$month_6 ="Junio";
		$month_short_6 ="Jun";
		$month_7 ="Julio";
		$month_short_7 ="Jul";
		$month_8 ="Agosto";
		$month_short_8 ="Ago";
		$month_9 ="Septiembre";
		$month_short_9 ="Sep";
		$month_10 ="Octubre";
		$month_short_10 ="Oct";
		$month_11 ="Noviembre";
		$month_short_11 ="Nov";
		$month_12 ="Deciembre";
		$month_short_12 ="Dec";
		$desc_search_hotels ="Buscar hoteles";
		$desc_destination ="Destino";
		$desc_vanity ="Ciudad, Regi&oacute;n, Pa&iacute;s...";
		$desc_checkin = "Fecha de entrada";
		$desc_checkout ="Fecha de salida";
		$desc_nodates = "Todavía no he decidido las fechas";
		$desc_search="Buscar";
		$cal_next="Mes siguiente";
		$cal_prev="Mes anterior";
		$cal_close="Cerrar calendario";
	break;
    case "nl":
		$weekdays_short_1 = "Ma";
		$weekdays_short_2 = "Di";
		$weekdays_short_3 = "Wo";
		$weekdays_short_4 = "Do";
		$weekdays_short_5 = "Vr";
		$weekdays_short_6 = "Za";
		$weekdays_short_7 = "Zo";
		$month_1 ="Januari";
		$month_short_1 ="Jan";
		$month_2 ="Februari";
		$month_short_2 ="Feb";
		$month_3 ="Maart";
		$month_short_3 ="Mar";
		$month_4 ="April";
		$month_short_4 ="Apr";
		$month_5 ="Mei";
		$month_short_5 ="Mei";
		$month_6 ="Juni";
		$month_short_6 ="Jun";
		$month_7 ="Juli";
		$month_short_7 ="Jul";
		$month_8 ="Augustus";
		$month_short_8 ="Aug";
		$month_9 ="September";
		$month_short_9 ="Sep";
		$month_10 ="Oktober";
		$month_short_10 ="Okt";
		$month_11 ="November";
		$month_short_11 ="Nov";
		$month_12 ="December";
		$month_short_12 ="Dec";
		$desc_search_hotels ="Zoek hotels";
		$desc_destination ="Bestemming";
		$desc_vanity ="Ciudad, Regi&oacute;n, Pa&iacute;s...";
		$desc_checkin = "Aankomstdatum";
		$desc_checkout ="Vertrekdatum";
		$desc_nodates = "Ik heb nog geen specifieke datum";
		$desc_search="Zoek";
		$cal_next="Volgende maand";
		$cal_prev="Vorige maand";
		$cal_close="Kalender sluiten";
	break;
    case "it":
		$weekdays_short_1 = "Lu";
		$weekdays_short_2 = "Ma";
		$weekdays_short_3 = "Me";
		$weekdays_short_4 = "Gi";
		$weekdays_short_5 = "Ve";
		$weekdays_short_6 = "Sa";
		$weekdays_short_7 = "Do";
		$month_1 ="Gennaio";
		$month_short_1 ="Gen";
		$month_2 ="Febbraio";
		$month_short_2 ="Feb";
		$month_3 ="Marzo";
		$month_short_3 ="Mar";
		$month_4 ="Aprile";
		$month_short_4 ="Apr";
		$month_5 ="Maggio";
		$month_short_5 ="Mag";
		$month_6 ="Giugno";
		$month_short_6 ="Giu";
		$month_7 ="Luglio";
		$month_short_7 ="Lug";
		$month_8 ="Agosto";
		$month_short_8 ="Ago";
		$month_9 ="Settembre";
		$month_short_9 ="Set";
		$month_10 ="Ottobre";
		$month_short_10 ="Ott";
		$month_11 ="Novembre";
		$month_short_11 ="Nov";
		$month_12 ="Dicembre";
		$month_short_12 ="Dic";
		$desc_search_hotels ="Cerca hotel";
		$desc_destination ="Destinazione";
		$desc_vanity ="Ciudad, Regi&oacute;n, Pa&iacute;s...";
		$desc_checkin = "Data di arrivo";
		$desc_checkout ="Data di partenza";
		$desc_nodates = "Decidi le date più tardi";
		$desc_search="Cerca";
		$cal_next="Mese successivo";
		$cal_prev="Mese precedente";
		$cal_close="Chiudi calendario";
	break;
	case "tr":
        $weekdays_short_1 = "Pa";
        $weekdays_short_2 = "Sa";
        $weekdays_short_3 = "Ça";
        $weekdays_short_4 = "Pe";
        $weekdays_short_5 = "Cu";
        $weekdays_short_6 = "Cm";
        $weekdays_short_7 = "Pa";
        $month_1 ="Ocak";
        $month_short_1 ="Oca";
        $month_2 ="Şubat";
        $month_short_2 ="Şub";
        $month_3 ="Mart";
        $month_short_3 ="Mar";
        $month_4 ="Nisan";
        $month_short_4 ="Nis";
        $month_5 ="Mayıs";
        $month_short_5 ="May";
        $month_6 ="Haziran";
        $month_short_6 ="Haz";
        $month_7 ="Temmuz";
        $month_short_7 ="Tem";
        $month_8 ="Ağustos";
        $month_short_8 ="Ağu";
        $month_9 ="Eylül";
        $month_short_9 ="Eyl";
        $month_10 ="Ekim";
        $month_short_10 ="Eki";
        $month_11 ="Kasım";
        $month_short_11 ="Kas";
        $month_12 ="Aralık";
        $month_short_12 ="Ara";
        $desc_search_hotels ="Otel Ara";
        $desc_destination ="Destinasyon";
        $desc_vanity ="Şehir, Bölge, Ülke, ...";
        $desc_checkin = "Check-in tarihi";
        $desc_checkout ="Check-out tarihi";
        $desc_nodates = "Tarihlerim daha kesinleşmedi";
        $desc_search="Ara";
        $cal_next="Sonraki ay";
        $cal_prev="Önceki ay";
        $cal_close="Takvimi kapat";
	break;
	case "pt":
		$weekdays_short_1 = "Seg";
		$weekdays_short_2 = "Ter";
		$weekdays_short_3 = "Qua";
		$weekdays_short_4 = "Qui";
		$weekdays_short_5 = "Sex";
		$weekdays_short_6 = "Sab";
		$weekdays_short_7 = "Dom";
		$month_1 ="Janeiro";
		$month_short_1 ="Jan";
		$month_2 ="Fevereiro";
		$month_short_2 ="Fev";
		$month_3 ="Marco";
		$month_short_3 ="Mar";
		$month_4 ="Abril";
		$month_short_4 ="Abr";
		$month_5 ="Maio";
		$month_short_5 ="Ma";
		$month_6 ="Junho";
		$month_short_6 ="Jun";
		$month_7 ="Julho";
		$month_short_7 ="Jul";
		$month_8 ="Agosto";
		$month_short_8 ="Ago";
		$month_9 ="Setembro";
		$month_short_9 ="Set";
		$month_10 ="Outubro";
		$month_short_10 ="Out";
		$month_11 ="Novembro";
		$month_short_11 ="Nov";
		$month_12 ="Dezembro";
		$month_short_12 ="Dez";
		$desc_search_hotels ="Buscar hotel";
		$desc_destination ="Destino";
		$desc_vanity ="Cidade, Região, Pa&iacute;s...";
		$desc_checkin = "Data de entrada";
		$desc_checkout ="Data de saida";
		$desc_nodates = "No momento ainda sem data efetiva";
		$desc_search="Buscar";
		$cal_next="Mes seguinte";
		$cal_prev="Mes anterior";
		$cal_close="Fechar calendario";
	break;
	case "el":
        $weekdays_short_1 = "Δευ";
        $weekdays_short_2 = "Τρι";
        $weekdays_short_3 = "Τετ";
        $weekdays_short_4 = "Πεμ";
        $weekdays_short_5 = "Παρ";
        $weekdays_short_6 = "Σαβ";
        $weekdays_short_7 = "Κυρ";
        $month_1 ="Ιανουάριος";
        $month_short_1 ="Ιαν";
        $month_2 ="Φεβρουάριος";
        $month_short_2 ="Φεβ";
        $month_3 ="Μάρτιος";
        $month_short_3 ="Μαρ";
        $month_4 ="Απρίλιος";
        $month_short_4 ="Απρ";
        $month_5 ="ΜάΪος";
        $month_short_5 ="ΜαΪ";
        $month_6 ="Ιούνιος";
        $month_short_6 ="Ιούν";
        $month_7 ="Ιούλιος";
        $month_short_7 ="Ιούλ";
        $month_8 ="Αύγουστος";
        $month_short_8 ="Αυγ";
        $month_9 ="Σεπτέμβριος";
        $month_short_9 ="Σεπ";
        $month_10 ="Οκτώβριος";
        $month_short_10 ="Οκτ";
        $month_11 ="Νοέμβριος";
        $month_short_11 ="Νοε";
        $month_12 ="Δεκέμβριος";
        $month_short_12 ="Δεκ";
        $desc_search_hotels ="Αναζήτηση Ξενοδοχείων";
        $desc_destination ="Προορισμός";
        $desc_vanity ="Πόλη, Περιοχή, Χώρα ...";
        $desc_checkin = "ΗΜΕΡΟΜΗΝΙΑ ΑΦΙΞΗΣ";
        $desc_checkout ="ΗΜΕΡΟΜΗΝΙΑ ΑΝΑΧΩΡΗΣΗΣ";
        $desc_nodates = "Δεν ξέρω ακόμα τις ημερομηνίες διαμονής";
        $desc_search="αναζητηση";
        $cal_next="Επόμενος μήνας";
        $cal_prev="Προηγούμενος μήνας";
        $cal_close="Κλείσιμο ημερολόγιου";
	break;
	case "da":
		$weekdays_short_1 = "Man";
		$weekdays_short_2 = "Tir";
		$weekdays_short_3 = "Ons";
		$weekdays_short_4 = "Tor";
		$weekdays_short_5 = "Fre";
		$weekdays_short_6 = "Lør";
		$weekdays_short_7 = "Søn";
		$month_1 ="Januar";
		$month_short_1 ="Jan";
		$month_2 ="Februar";
		$month_short_2 ="Feb";
		$month_3 ="Marts";
		$month_short_3 ="Mar";
		$month_4 ="April";
		$month_short_4 ="Apr";
		$month_5 ="Maj";
		$month_short_5 ="Maj";
		$month_6 ="Juni";
		$month_short_6 ="Jun";
		$month_7 ="Juli";
		$month_short_7 ="Jul";
		$month_8 ="August";
		$month_short_8 ="Aug";
		$month_9 ="September";
		$month_short_9 ="Sep";
		$month_10 ="Oktober";
		$month_short_10 ="Okt";
		$month_11 ="November";
		$month_short_11 ="Nov";
		$month_12 ="December";
		$month_short_12 ="Dec";
		$desc_search_hotels ="Søg Hoteller";
		$desc_destination ="Destination";
		$desc_vanity ="By, Region, Land, ...";
		$desc_checkin = "Check-ind dato";
		$desc_checkout ="Check-ud dato";
		$desc_nodates = "Jeg har ikke en fast dato";
		$desc_search="Søg";
		$cal_next="Næste måned";
		$cal_prev="Forgående måned";
		$cal_close="Luk Kalender";
  break;
  default:
		$weekdays_short_1 = "Mo";
		$weekdays_short_2 = "Tu";
		$weekdays_short_3 = "We";
		$weekdays_short_4 = "Th";
		$weekdays_short_5 = "Fr";
		$weekdays_short_6 = "Sa";
		$weekdays_short_7 = "Su";
		$month_1 ="January";
		$month_short_1 ="Jan";
		$month_2 ="February";
		$month_short_2 ="Feb";
		$month_3 ="March";
		$month_short_3 ="Mar";
		$month_4 ="Avpil";
		$month_short_4 ="Apr";
		$month_5 ="May";
		$month_short_5 ="May";
		$month_6 ="June";
		$month_short_6 ="Jun";
		$month_7 ="July";
		$month_short_7 ="Jul";
		$month_8 ="August";
		$month_short_8 ="Aug";
		$month_9 ="September";
		$month_short_9 ="Sep";
		$month_10 ="October";
		$month_short_10 ="Oct";
		$month_11 ="November";
		$month_short_11 ="Nov";
		$month_12 ="December";
		$month_short_12 ="Dec";
		$desc_search_hotels ="Search Hotels";
		$desc_destination ="Destination";
		$desc_vanity ="City, Region, Country, ...";
		$desc_checkin = "Check-in date";
		$desc_checkout ="Check-out date";
		$desc_nodates = "I don't have specific dates yet";
		$desc_search="Search";
		$cal_next="Next month";
		$cal_prev="Previous month";
		$cal_close="Close calendar";	
}
?>



<?php
///////////////////////////
// Dynamic styling & HTML
///////////////////////////
?>

<style>
.ui-datepicker-trigger {
	position: relative;
	left: -25px;
	top: 3px;
}
#ui-datepicker-div {
	z-index: 9999999;
}
#searchboxInc {
	font: 12px/1.5 Arial, Helvetica, sans-serif;
	color: #<?php echo $post_bp_btc;?> !important;
	<?php if ($post_bp_FORMAT) {?> width: <?php echo $post_bp_FORMAT;?>px;<?php } ?>
}
#searchboxInc form {
	background: #<?php echo $post_bp_bbgc;?>;
}
#searchboxInc fieldset, #searchboxInc img {
	border: 0;
}
#searchboxInc fieldset {
	padding: 8px;
}
#searchboxInc #inout h3 {
	background-color: transparent;
	font-size: 1.1em;
}
#searchboxInc h3 {
	margin-bottom: 0.2em;
	position: static;
	font-size: 118%;
	font-weight: bold;
	margin: 0;
}
#searchboxInc p {
	font-size: 2em;
	margin: 0;
}
#homein, #homeout {
	float: left;
	padding: 0.5em 1em 0 0;
}
.avail {
	padding-top: 1em;
	clear: left;
}
#searchboxInc a.calender {
	vertical-align: -4px;
}
#searchboxInc a.calender img {
	background: #0896ff;
}
.blur {
	color: #999;
}
button {
	float: right;
	-moz-border-radius: 8px;
	background-color: #0896ff;
	border: 2px solid #fff;
	color: #fff;
	letter-spacing: 1px;
	padding: 0.15em 0.75em;
	text-transform: uppercase;
	font: bold 1.333em/1 Arial, Helvetica, sans-serif;
}
</style>


<div id="searchboxHolder">
<div id="searchboxInc">
<form id="frm" name="frm" action="http://www.booking.com/searchresults.html" method="get" target="_blank" autocomplete="off" class="date-picker">
<fieldset>
<div id="destinationSearch">
<input type="hidden" name="aid" value="<?php echo $post_bp_AID; ?>" />
<input type="hidden" name="error_url" value="http://www.booking.com/?aid=<?php echo $post_bp_AID; ?>;" />
<input type="hidden" name="si" value="ai,co,ci,re,di" />
<input type="hidden" name="label" value="<?php echo $post_bp_TRACKING; ?>" />
<input type="hidden" name="lang" value="<?php echo $post_bp_LANGUAGE; ?>" />
<input type="hidden" name="nflt" value="" />
<input type="hidden" name="ifl" value="1" />
<?php if ($post_bp_DESTINATION_UI != "Hide") {?>
          <p><?php echo $desc_search_hotels;?></p>
          <label for="destination"><?php echo $desc_destination;?></label>
          <input class="text" type="text blur" id="destination" name="ss" value="<?php echo $post_bp_DESTINATION_RESTRICTION.' '.$post_bp_DESTINATION; ?>" title="<?php echo $post_bp_DESTINATION_RESTRICTION.' '.$post_bp_DESTINATION; ?>"  autocomplete="off" <?php if ($post_bp_DESTINATION_UI == "Display-NOT-Editable") { echo "readonly"; } ?>  />
          <?php } else { ?>
          <input type="hidden" id="destination" name="ss" value="<?php echo $bp_DESTINATION_RESTRICTION.' '.$post_bp_DESTINATION; ?>" />
          <?php } ?></div>
<div id="inout">
<div id="homein">
<h3><?php echo $desc_checkin;?></h3>
<input type="text" class="full_checkin_date" value=""  title="Check in date"/>
<div hidden="">
<?php $checkin = mktime(0, 0, 0, date("m"), date("d")+1, date("y")); ?>
<p>
<input type="text" name="checkin_year_month" class="checkin_year_month" value="<?php echo date("y-m", $checkin);?>"/>
</p>
<p id="checkin_monthday">
<input name="checkin_monthday" type="text" value="<?php echo date("d", $checkin);?>"/>
</p>
</div>
</div>
<div id="homeout">
<h3><?php echo $desc_checkout;?></h3>
<input type="text" class="full_checkout_date" value=""  title="Check out date"/>
<div hidden="">
<?php $checkout = mktime(0, 0, 0, date("m"), date("d")+3, date("y")); ?>
<p>
<input type="text" name="checkout_year_month" class="checkout_year_month" value="<?php echo date("y-m", $checkout);?>"/>
</p>
<p id="checkout_monthday">
<input name="checkout_monthday" type="text" value="<?php echo date("d", $checkout);?>"/>
</p>
</div>
</div>
          <div class="avail">
            <?php if ($post_bp_FLEX == "yes") {?>
            <input id="availcheck" type="checkbox" name="idf" value="on" />
            <label id="labfor" for="availcheck"><?php echo $desc_nodates;?></label>
            <?php }?>
          </div>
</div>
<div class="but">
<button type="submit"><?php echo $desc_search;?></button>
</div>
</fieldset>
</form>
</div>
</div>

<?php
///////////////////////////
// Calendar parameters
///////////////////////////
?>


<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('.full_checkin_date').datepicker({
        firstDay: 1,
		showOn: 'button',
		numberOfMonths: 2,
		dayNamesMin: ['<?php echo $weekdays_short_7;?>', '<?php echo $weekdays_short_1;?>', '<?php echo $weekdays_short_2;?>', '<?php echo $weekdays_short_3;?>', '<?php echo $weekdays_short_4;?>', '<?php echo $weekdays_short_5;?>', '<?php echo $weekdays_short_6;?>'],
		monthNamesShort: [ "<?php echo $month_short_1;?>", "<?php echo $month_short_2;?>", "<?php echo $month_short_3;?>", "<?php echo $month_short_4;?>", "<?php echo $month_short_5;?>", "<?php echo $month_short_6;?>", "<?php echo $month_short_7;?>", "<?php echo $month_short_8;?>", "<?php echo $month_short_9;?>", "<?php echo $month_short_10;?>", "<?php echo $month_short_11;?>", "<?php echo $month_short_12;?>" ],
		monthNames: [ "<?php echo $month_1;?>", "<?php echo $month_2;?>", "<?php echo $month_3;?>", "<?php echo $month_4;?>", "<?php echo $month_5;?>", "<?php echo $month_6;?>", "<?php echo $month_7;?>", "<?php echo $month_8;?>", "<?php echo $month_9;?>", "<?php echo $month_10;?>", "<?php echo $month_11;?>", "<?php echo $month_12;?>" ],
		showOn: "both",
		buttonImageOnly: true,
		buttonImage: "<?php echo plugins_url(); ?>/bookingcom-affiliate-plugin/images/picto_clear_66.png",
		minDate : "0",
		dateFormat: 'D, dd M. yy',
		altFormat: "yy-mm",
		altField: ".checkin_year_month",
		onClose: function (dateText, picker) {
			// getDate returns a js Date object
			var dateObject = jQuery(this).datepicker("getDate");
			console.dir(dateObject);
			jQuery( ".full_checkout_date" ).datepicker( "option", "minDate", dateObject );
			// Call Date object methods
			jQuery("#checkin_monthday input").val(dateObject.getDate());
			},
    });
	jQuery('.full_checkout_date').datepicker({
		firstDay: 1,
		showOn: 'button',
		numberOfMonths: 2,
		dayNamesMin: ['<?php echo $weekdays_short_7;?>', '<?php echo $weekdays_short_1;?>', '<?php echo $weekdays_short_2;?>', '<?php echo $weekdays_short_3;?>', '<?php echo $weekdays_short_4;?>', '<?php echo $weekdays_short_5;?>', '<?php echo $weekdays_short_6;?>'],
		monthNamesShort: [ "<?php echo $month_short_1;?>", "<?php echo $month_short_2;?>", "<?php echo $month_short_3;?>", "<?php echo $month_short_4;?>", "<?php echo $month_short_5;?>", "<?php echo $month_short_6;?>", "<?php echo $month_short_7;?>", "<?php echo $month_short_8;?>", "<?php echo $month_short_9;?>", "<?php echo $month_short_10;?>", "<?php echo $month_short_11;?>", "<?php echo $month_short_12;?>" ],
		monthNames: [ "<?php echo $month_1;?>", "<?php echo $month_2;?>", "<?php echo $month_3;?>", "<?php echo $month_4;?>", "<?php echo $month_5;?>", "<?php echo $month_6;?>", "<?php echo $month_7;?>", "<?php echo $month_8;?>", "<?php echo $month_9;?>", "<?php echo $month_10;?>", "<?php echo $month_11;?>", "<?php echo $month_12;?>" ],
		showOn: "both",
		buttonImageOnly: true,
		buttonImage: "<?php echo plugins_url(); ?>/bookingcom-affiliate-plugin/images/picto_clear_66.png",
		minDate : "0",
		dateFormat: 'D, dd M. yy',
		altFormat: "yy-mm",
		altField: ".checkout_year_month",
		onClose: function (dateText, picker) {
			// getDate returns a js Date object
			var dateObject = jQuery(this).datepicker("getDate");
			console.dir(dateObject);
			jQuery( ".full_checkin_date" ).datepicker( "option", "maxDate", dateObject );
			// Call Date object methods
			jQuery("#checkout_monthday input").val(dateObject.getDate());
			},
	});
});
</script>

<?php
}

  wp_reset_postdata();
  $content = ob_get_clean();
  return $content;
}
add_filter('widget_text', 'do_shortcode');
add_shortcode('booking_pluginbox', 'booking_pluginbox_func');
?>