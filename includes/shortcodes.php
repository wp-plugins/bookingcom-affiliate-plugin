<?php
/* ------------------------------------ */
/* Shortcode Generator                  */
/* ------------------------------------ */

// Action target that adds the "Insert" button to the post/page edit screen.
function js_add_booking_pluginbox_button($context) {
    $image_btn = plugins_url('/includes/images/booking_plugin-icon.png', dirname(__FILE__));
    $out = '<a href="#TB_inline?width=600&height=350&inlineId=insert_booking_plugin" class="thickbox" title="Insert Booking.com Search Box"><img src="'.$image_btn.'" alt="Insert Booking.com Search Box" /></a>';
    return $context . $out;
}

add_action('media_buttons_context','js_add_booking_pluginbox_button');

//Action target that displays the popup to insert a form to a post/page
function js_add_booking_pluginbox_popup() {
  $booking_searchboxes = get_posts(array('post_type' => 'booking-pluginbox', 'posts_per_page' => 25));
  foreach ($booking_searchboxes as $booking_searchbox) {
    $booking_searchbox_data[$booking_searchbox->ID] = (strlen($booking_searchbox->post_title) > 40) ? substr($booking_searchbox->post_title, 0, 37) . '...' : $booking_searchbox->post_title;
  }
  ?>

<div id="insert_booking_plugin" class="folded" style="display:none;">
  <div class="wrap">
    <div>
      <div style="padding:15px 15px 0 15px;">
        <h3 class="media-title">Booking.com search box Shortcode Generator</h3>
        <span>Which Booking.com Search Box do you want to insert ?</span></div>
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
      <span>Simply paste the following shortcode where it pleases you:
      <pre>[booking_pluginbox id="XYZ"]</pre>
      Obviously, "XYZ" is the ID of your searchbox. <a href="<?php echo bloginfo('url');?>/wp-admin/edit.php?post_type=booking-pluginbox">Find all IDs here</a>.</span> </div>
  </div>
</div>
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
add_action('admin_footer','js_add_booking_pluginbox_popup');

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

// get variables

    $query->the_post();
	$post_bp_AID = get_post_meta(get_the_ID(), 'booking_plugin_AID', true);
	$post_bp_TRACKING = get_post_meta(get_the_ID(), 'booking_plugin_TRACKING', true); 
	$post_bp_DESTINATION = get_post_meta(get_the_ID(), 'booking_plugin_DESTINATION', true);
	$post_bp_DESTINATION_RESTRICTION = get_post_meta(get_the_ID(), 'booking_plugin_DESTINATION_RESTRICTION', true);
	$post_bp_DESTINATION_UI = get_post_meta(get_the_ID(), 'booking_plugin_DESTINATION_UI', true);
	$post_bp_bbgc = get_post_meta(get_the_ID(), 'booking_plugin_bbg_color', true);
	$post_bp_btc = get_post_meta(get_the_ID(), 'booking_plugin_bt_color', true);
	$post_bp_sbbbgc = get_post_meta(get_the_ID(), 'booking_plugin_sbbbg_color', true);
	$post_bp_sbbtc = get_post_meta(get_the_ID(), 'booking_plugin_sbbt_color', true);
	$post_bp_LANGUAGE = get_post_meta(get_the_ID(), 'booking_plugin_box_language', true);
	$post_bp_CURRENCY = get_post_meta(get_the_ID(), 'booking_plugin_box_currency', true);
	$post_bp_TARGET = get_post_meta(get_the_ID(), 'booking_plugin_TARGET', true);
	$post_bp_FORMAT = get_post_meta(get_the_ID(), 'booking_plugin_FORMAT', true);
	$post_bp_FLEX = get_post_meta(get_the_ID(), 'booking_plugin_FLEX', true);
	$post_bp_CSS_override = get_post_meta(get_the_ID(), 'booking_plugin_CSS_override', true);
	$post_bp_jqtheme = get_post_meta(get_the_ID(), 'booking_plugin_jqtheme', true);
	
	if ($post_bp_LANGUAGE == null) {
		$post_bp_LANGUAGE = "en";
		}
	if ($post_bp_TRACKING == null) {
		$post_bp_TRACKING = "plugin";
		}
  	
	if (!empty($id) ) {
///////////////////////////
// Building up the locales
///////////////////////////
switch ($post_bp_LANGUAGE) {
    case "fr":
		$dayNamesShort = "['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa']";
		$dayNamesMin = "['D', 'L', 'M', 'M', 'J', 'V', 'S']";
		$monthNamesShort = "['Janv.','Févr.','Mars','Avril','Mai','Juin','Juil.','Août','Sept.','Oct.','Nov.','Déc.']";
		$monthNames = "['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre']";
		$desc_search_hotels ="Recherche d'hôtels";
		$desc_destination ="Destination";
		$desc_vanity ="Villes, Région, Pays, ...";
		$desc_checkin = "Date d'arrivée";
		$desc_checkout ="Date de départ";
		$desc_nodates = "Je n'ai pas de dates de séjour précises";
		$desc_search="Rechercher";
		$cal_next="Mois suivant";
		$cal_prev="Mois précedent";
		$cal_close="Fermer le calendrier";
	break;
	case "de":
		$dayNamesShort = "['So','Mo','Di','Mi','Do','Fr','Sa']";
		$dayNamesMin = "['So','Mo','Di','Mi','Do','Fr','Sa']";
		$monthNamesShort = "['Jan','Feb','Mär','Apr','Mai','Jun','Jul','Aug','Sep','Okt','Nov','Dez']";
		$monthNames = "['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember']";
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
		$dayNamesShort = "['Dom','Lun','Mar','Mié','Juv','Vie','Sáb']";
		$dayNamesMin = "['Do','Lu','Ma','Mi','Ju','Vi','Sá']";
		$monthNamesShort ="['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']";
		$monthNames ="['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']";
		$desc_search_hotels = "Buscar hoteles";
		$desc_destination="Destino";
		$desc_vanity ="Ciudad, Región, País...";
		$desc_checkin = "Fecha de entrada";
		$desc_checkout ="Fecha de salida";
		$desc_nodates = "Todavía no he decidido las fechas";
		$desc_search="Buscar";
		$cal_next="Mes siguiente";
		$cal_prev="Mes anterior";
		$cal_close="Cerrar calendario";
	break;
    case "nl":
		$dayNamesShort = "['Zon', 'Maa', 'Din', 'Woe', 'Don', 'Vri', 'Zat']";
		$dayNamesMin = "['Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za']";
		$monthNamesShort = "['Jan', 'Feb', 'Mrt', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec']";
		$monthNames = "['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni','Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']";
		$desc_search_hotels ="Zoek hotels";
		$desc_destination ="Bestemming";
		$desc_vanity ="";
		$desc_checkin = "Aankomstdatum";
		$desc_checkout ="Vertrekdatum";
		$desc_nodates = "Ik heb nog geen specifieke datum";
		$desc_search="Zoek";
		$cal_next="Volgende maand";
		$cal_prev="Vorige maand";
		$cal_close="Kalender sluiten";
	break;
    case "it":
		$dayNamesShort = "['Dom','Lun','Mar','Mer','Gio','Ven','Sab']";
		$dayNamesMin = "['Do','Lu','Ma','Me','Gi','Ve','Sa']";
		$monthNamesShort = "['Gen','Feb','Mar','Apr','Mag','Giu','Lug','Ago','Set','Ott','Nov','Dic']";
		$monthNames = "['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre']";
		$desc_search_hotels ="Cerca hotel";
		$desc_destination ="Destinazione";
		$desc_vanity ="";
		$desc_checkin = "Data di arrivo";
		$desc_checkout ="Data di partenza";
		$desc_nodates = "Decidi le date più tardi";
		$desc_search="Cerca";
		$cal_next="Mese successivo";
		$cal_prev="Mese precedente";
		$cal_close="Chiudi calendario";
	break;
	case "tr":
		$dayNamesShort = "['Pa','Pa','Sa','Ça','Pe','Cu','Cm']";
		$dayNamesMin = "['Pa','Pa','Sa','Ça','Pe','Cu','Cm']";
		$monthNamesShort = "['Oca','Şub','Mar','Nis','May','Haz','Tem','Ağu','Eyl','Eki','Kas','Ara']";
		$monthNames = "['Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık']";
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
		$dayNamesShort = "['Dom','Seg','Ter','Qua','Qui','Sex','S&aacute;b']";
		$dayNamesMin = "['Dom','Seg','Ter','Qua','Qui','Sex','S&aacute;b']";
		$monthNamesShort = "['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']";
		$monthNames = "['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro']";
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
		$dayNamesShort = "['Κυρ','Δευ','Τρι','Τετ','Πεμ','Παρ','Σαβ']";
		$dayNamesMin = "['Κυρ','Δευ','Τρι','Τετ','Πεμ','Παρ','Σαβ']";
		$monthNamesShort = "['Ιαν','Φεβ','Μαρ','Απρ','ΜαΪ','Ιούν','Ιούλ','Αύγ','Σεπ','Οκτ','Νοε','Δεκ']";
		$monthNames = "['Ιανουάριος','Φεβρουάριος','Μάρτιος','Απρίλιος','ΜάΪος','Ιούνιος','Ιούλιος','Αύγουστος','Σεπτέμβριος','Οκτώβριος','Νοέμβριος','Δεκέμβριος']";
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
		$dayNamesShort = "['Søn','Man','Tir','Ons','Tor','Fre','Lør']";
		$dayNamesMin = "['Søn','Ma','Ti','On','To','Fr','Lør']";
		$monthNamesShort = "['Jan','Feb','Mar','Apr','Maj','Jun','Jul','Aug','Sep','Okt','Nov','Dec']";
		$monthNames = "['Januar','Februar','Marts','April','Maj','Juni','Juli','August','September','Oktober','November','December']";
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
	case "bg":
		$dayNamesShort = "['Нед', 'Пон', 'Вт', 'Ср', 'Четв', 'Пет', 'Съб']";
		$dayNamesMin = "['Нд','По','Вт','Ср','Чет','Пет','Съб']";
		$monthNamesShort = "['ян', 'фев', 'мар', 'апр', 'май', 'юн','юл', 'авг', 'сеп', 'окт', 'ноем', 'дек']";
		$monthNames = "['Януари','Февруари','Март','Април','Май','Юни','Юли','Август','Септември','Октомври','Ноември','Декември']";
		$desc_search_hotels ="Търсене на хотели";
		$desc_destination ="Дестинация";
		$desc_vanity ="град, регион, държава, ...";
		$desc_checkin = "Дата на настаняване";
		$desc_checkout ="Дата на напускане";
		$desc_nodates = "Все още нямам точни дати";
		$desc_search = "Търси";
		$cal_next = "Следващ месец";
		$cal_prev = "Предишен месец";
		$cal_close = "Затвори календара";
  break;
  case "ru":
		$dayNamesShort = "['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']";
		$dayNamesMin = "['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб']";
		$monthNamesShort = "['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь','Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек']";
		$monthNames = "['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь']";
		$desc_search_hotels ="Поиск отелей";
		$desc_destination ="Направление";
		$desc_vanity ="Город, Регион, Страна, ...";
		$desc_checkin = "Дата заезда";
		$desc_checkout ="Дата отъезда";
		$desc_nodates = "Точные даты поездки пока неизвестны";
		$desc_search="Поиск";
		$cal_next="Следующий месяц";
		$cal_prev="Предыдущий месяц";
		$cal_close="Закрыть календарь";
  break;
  case "is":
		$dayNamesShort = "['Sun', 'Mán', 'Þri', 'Mið', 'Fim', 'Fös', 'Lau']";
		$dayNamesMin = "['Su', 'Má', 'Þr', 'Mi', 'Fi', 'Fö', 'La']";
		$monthNamesShort = "['Jan', 'Feb', 'Mar', 'Apr', 'Maí', 'Jún','Júl', 'Ágú', 'Sep', 'Okt', 'Nóv', 'Des']";
		$monthNames = "['Janúar','Febrúar','Mars','Apríl','Maí','Júní','Júlí','Ágúst','September','Október','Nóvember','Desember']
		";
		$desc_search_hotels ="Finna hótel";
		$desc_destination ="Áfángastaður";
		$desc_vanity ="Borg, Svæði, Land, ...";
		$desc_checkin = "Komudagur";
		$desc_checkout ="Brottfarardagur";
		$desc_nodates = "Ég er ekki búin að ákveða dagsetningu";
		$desc_search="Finna";
		$cal_next="Næsti mánuður";
		$cal_prev="Fyrri mánuður";
		$cal_close="Loka dagatali";
  break;
  case "no":
        $dayNamesShort = "['Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør']";
        $dayNamesMin = "['Sø','Ma','Ti','On','To','Fr','Lø']";
        $monthNamesShort = "['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun','Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des']";
        $monthNames = "['Januar','Februar','Mars','April','Mai','Juni','Juli','August','September','Oktober','November','Desember']";
        $desc_search_hotels ="Søk etter hotell";
        $desc_destination ="Destinasjon";
        $desc_vanity ="By, Region, Land, ...";
        $desc_checkin = "Innsjekking - dato";
        $desc_checkout ="Utsjekking - dato";
        $desc_nodates = "Jeg har ikke bestemt noen dato ennå";
        $desc_search="Søk";
        $cal_next="Neste måned";
        $cal_prev="Forrige måned";
        $cal_close="Lukk kalender";
  break;
  case "cs":
        $dayNamesShort = "['Ne', 'Po', 'Ut', 'St', 'Ct', 'Pa', 'So']";
        $dayNamesMin = "['Ne', 'Po', 'Ut', 'St', 'Ct', 'Pa', 'So']";
        $monthNamesShort = "['Led', 'Uno', 'Bre', 'Dub', 'Kve', 'Cer','Cvc', 'Srp', 'Zar', 'Rij', 'Lis', 'Pro']";
        $monthNames = "['Leden','Unor','Brezen','Duben','Kveten','Cerven','Cervenec','Srpen','Zari','Rijen','Listopad','Prosinec']";
        $desc_search_hotels ="Hledej hotely";
        $desc_destination ="Misto";
        $desc_vanity ="Mesto, Region, Zeme, ...";
        $desc_checkin = "Datum nastupu";
        $desc_checkout ="Datum odjezdu";
        $desc_nodates = "Zatim nemam vybrane datum";
        $desc_search="Hledej";
        $cal_next="Dalsi mesic";
        $cal_prev="Predchozi mesic";
        $cal_close="Zavri kalendar";
  break;
  default:
		$dayNamesShort = "['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']";
		$dayNamesMin = "['Su','Mo','Tu','We','Th','Fr','Sa']";
		$monthNamesShort = "['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']";
		$monthNames = "['January','February','March','April','May','June','July','August','September','October','November','December']
		";
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


if ( ($post_bp_CSS_override != "Yes") AND ($post_bp_jqtheme != "careful") ) {
	$enqueue_url_booking = 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/'.$post_bp_jqtheme.'/jquery-ui.min.css';
}
if ( ($post_bp_CSS_override != "Yes") AND ($post_bp_jqtheme != "careful") AND ($enqueue_url_booking == 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes//jquery-ui.min.css') ) {
	$enqueue_url_booking = 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/ui-lightness/jquery-ui.min.css';
}
if ($post_bp_jqtheme == "careful") {
	$enqueue_url_booking = plugins_url().'/bookingcom-affiliate-plugin/includes/debug-jquery-ui.min.css';
}
if ($post_bp_CSS_override != "Yes") {
	wp_enqueue_style('jquery-ui-datepicker_style', $enqueue_url_booking);
}


?>
<!--Version = 1.8.1 -->
<style>
.ui-datepicker-trigger {
	position: relative;
	left: -25px;
	top: 2px;
    width:17px;
    height:16px;
}
.ui-widget {
	font-size: 1em !important;
	}
#ui-datepicker-div {
	z-index: 9999999 !important;
}
#searchboxInc_<?php echo $id;?> {
	font: 12px/1.5 Arial, Helvetica, sans-serif;
	color: #<?php echo $post_bp_btc;?> !important;
	<?php if ($post_bp_FORMAT) {?> width: <?php echo $post_bp_FORMAT;?>px;<?php } ?>
}
#searchboxInc_<?php echo $id;?> form {
	background: #<?php echo $post_bp_bbgc;?>;
}
#searchboxInc_<?php echo $id;?> fieldset, #searchboxInc img {
	border: 0;
}
#searchboxInc_<?php echo $id;?> fieldset {
	padding: 8px;
}
#searchboxInc_<?php echo $id;?> #inout .booking-title {
	background-color: transparent;
	font-size: 1em;
}
#searchboxInc_<?php echo $id;?> .booking-title {
	margin-bottom: 0.2em;
	position: static;
	font-size: 118%;
	font-weight: bold;
	line-height: 2.6em;
	display:block;
	margin: 0;
}
#searchboxInc_<?php echo $id;?> p {
	font-size: 1.5em;
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
#searchboxInc_<?php echo $id;?> a.calender {
	vertical-align: -4px;
}
#searchboxInc_<?php echo $id;?> a.calender img {
	background: #0896ff;
}
.blur {
	color: #999;
}
button {
	float: right;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	background-color: #<?php if ($post_bp_sbbbgc == "") { echo "0896ff"; } else { echo $post_bp_sbbbgc; }?>;
	border: 2px solid #<?php if ($post_bp_sbbtc == "") { echo "ffffff"; } else { echo $post_bp_sbbtc; } ?>;
	color: #<?php if ($post_bp_sbbtc == "") { echo "ffffff"; } else { echo $post_bp_sbbtc; } ?>;
	letter-spacing: 1px;
	padding: 0.3em 0.9em;
	text-transform: uppercase;
	font: bold 1.333em/1 Arial, Helvetica, sans-serif;
}
</style>
<div id="Booking_com_plugin" class="Booking_com_plugin"> 
  <div id="searchboxHolder_<?php echo $id;?>">
    <div id="searchboxInc_<?php echo $id;?>">
      <form id="frm_<?php echo $id;?>" name="frm_<?php echo $id;?>" action="http://www.booking.com/searchresults.html" method="get" <?php if ($post_bp_TARGET == "yes") { echo "target='_blank'"; } ?> autocomplete="off" class="date-picker">
        <fieldset>
          <div id="destinationSearch">
            <input type="hidden" name="aid" value="<?php echo $post_bp_AID; ?>" />
            <input type="hidden" name="error_url" value="http://www.booking.com/?aid=<?php echo $post_bp_AID; ?>;" />
    <?php switch ($post_bp_DESTINATION_RESTRICTION) {
    case "city:":
    	echo "<input type='hidden' name='si' value='ci' />";
	break;
	case "hotel:":
    	echo "<input type='hidden' name='si' value='ci' />";		
	break;
	case "chain:":
    	echo "<input type='hidden' name='si' value='ci' />";		
	break;
	case "airport:":
    	echo "<input type='hidden' name='si' value='ci' />";		
	break;
	case "landmark:":
    	echo "<input type='hidden' name='si' value='ci' />";		
	break;
	case "region:":
    	echo "<input type='hidden' name='si' value='ci' />";		
	break;
  	default:
		echo "<input type='hidden' name='si' value='ai,co,ci,re,di' />";
	}
	?>    
            <input type="hidden" name="label" value="<?php echo $post_bp_TRACKING; ?>" />
            <input type="hidden" name="lang" value="<?php echo $post_bp_LANGUAGE; ?>" />
            <?php if ($post_bp_CURRENCY != "") {?><input type="hidden" name="selected_currency" value="<?php echo $post_bp_CURRENCY; ?>" /><?php ; } ?>
            <input type="hidden" name="nflt" value="" />
            <input type="hidden" name="ifl" value="1" />
            <?php if ($post_bp_DESTINATION_UI != "Hide") {?>
            <p><?php echo $desc_search_hotels;?></p>
            <span class="booking-title"><?php echo $desc_destination;?></span>
            <input type="text" id="destination" name="ss" value="<?php echo $post_bp_DESTINATION_RESTRICTION.' '.$post_bp_DESTINATION; ?>" title="<?php echo $post_bp_DESTINATION_RESTRICTION.' '.$post_bp_DESTINATION; ?>"  autocomplete="off" <?php if ($post_bp_DESTINATION_UI == "Display-NOT-Editable") { echo "readonly"; } ?>  />
            <?php } else { ?>
            <input type="hidden" id="destination" name="ss" value="<?php echo $bp_DESTINATION_RESTRICTION.' '.$post_bp_DESTINATION; ?>" />
            <?php } ?>
          </div>
          <div id="inout">
            <div id="homein">
              <span class="booking-title"><?php echo $desc_checkin;?></span>
              <input type="text" class="full_checkin_date_<?php echo $id;?>" value=""  title="Check in date"/>
              <div hidden="" style="display:none;">
                <?php $checkin = mktime(0, 0, 0, date("m"), date("d")+1, date("y")); ?>
                <p>
                  <input type="text" name="checkin_year_month" class="checkin_year_month_<?php echo $id;?>" value="<?php echo date("y-m", $checkin);?>"/>
                </p>
                <p id="checkin_monthday">
                  <input name="checkin_monthday" type="text" value="<?php echo date("d", $checkin);?>"/>
                </p>
              </div>
            </div>
            <div id="homeout">
              <span class="booking-title"><?php echo $desc_checkout;?></span>
              <input type="text" class="full_checkout_date_<?php echo $id;?>" value=""  title="Check out date"/>
              <div hidden="" style="display:none;">
                <?php $checkout = mktime(0, 0, 0, date("m"), date("d")+3, date("y")); ?>
                <p>
                  <input type="text" name="checkout_year_month" class="checkout_year_month_<?php echo $id;?>" value="<?php echo date("y-m", $checkout);?>"/>
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
          <div class="button">
            <button type="submit"><?php echo $desc_search;?></button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<?php
///////////////////////////
// Calendar parameters
///////////////////////////
?>
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('.full_checkin_date_<?php echo $id;?>').datepicker({
        firstDay: 1,
		numberOfMonths: 2,
		dayNamesShort: <?php echo $dayNamesShort;?>,
		dayNamesMin: <?php echo $dayNamesMin;?>,
		monthNamesShort: <?php echo $monthNamesShort;?>,
		monthNames: <?php echo $monthNames;?>,
		showOn: 'both',
		buttonImageOnly: true,
		buttonImage: "<?php echo plugins_url(); ?>/bookingcom-affiliate-plugin/includes/images/picto_clear_66.png",
		minDate : '0',
		dateFormat: 'D, dd M. yy',
		altFormat: 'yy-mm',
		altField: ".checkin_year_month_<?php echo $id;?>",
		onClose: function (dateText, picker) {
			// getDate returns a js Date object
			var dateObject = jQuery(this).datepicker("getDate");
			console.dir(dateObject);
			jQuery( ".full_checkout_date_<?php echo $id;?>" ).datepicker( "option", "minDate", dateObject );
			// Call Date object methods
			jQuery("#checkin_monthday input").val(dateObject.getDate());
			},
		beforeShow: function(input, inst) { 
			var newclass = 'calendar-base'; 
			if (!inst.dpDiv.parent().hasClass('calendar-base')){ 
			inst.dpDiv.wrap('<div class="'+newclass+'"></div>')};
		},
    });
	jQuery('.full_checkout_date_<?php echo $id;?>').datepicker({
		firstDay: 1,
		numberOfMonths: 2,
		dayNamesShort: <?php echo $dayNamesShort;?>,
		dayNamesMin: <?php echo $dayNamesMin;?>,
		monthNamesShort: <?php echo $monthNamesShort;?>,
		monthNames: <?php echo $monthNames;?>,
		showOn: 'both',
		buttonImageOnly: true,
		buttonImage: "<?php echo plugins_url(); ?>/bookingcom-affiliate-plugin/includes/images/picto_clear_66.png",
		minDate : '1',
		dateFormat: 'D, dd M. yy',
		altFormat: 'yy-mm',
		altField: ".checkout_year_month_<?php echo $id;?>",
		onClose: function (dateText, picker) {
			// getDate returns a js Date object
			var dateObject = jQuery(this).datepicker("getDate");
			console.dir(dateObject);
			jQuery( ".full_checkin_date_<?php echo $id;?>" ).datepicker( "option", "maxDate", dateObject );
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
