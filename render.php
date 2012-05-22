<link rel="stylesheet" type="text/css" href="<?php echo plugins_url(); ?>/bookingcom-affiliate-plugin/default.css" />

<?php
$widget_language = get_option('widget_language');
switch ($widget_language) {
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

<STYLE type="text/css">
#searchboxInc {
font: 12px/1.5 Arial, Helvetica, sans-serif;
color: #<?php echo get_option('widget_txtcolor'); ?> !important;
width: <?php echo get_option('widget_width'); ?>px;
}
#searchboxInc form {
background: #<?php echo get_option('widget_bgcolor'); ?>;
}
</STYLE> 

<script type="text/javascript">
var booking = {
env : {
b_simple_weekdays: ['<?php echo $weekdays_short_1;?>','<?php echo $weekdays_short_2;?>','<?php echo $weekdays_short_3;?>','<?php echo $weekdays_short_4;?>','<?php echo $weekdays_short_5;?>','<?php echo $weekdays_short_6;?>','<?php echo $weekdays_short_7;?>'],
b_simple_weekdays_for_js: ['<?php echo $weekdays_short_1;?>','<?php echo $weekdays_short_2;?>','<?php echo $weekdays_short_3;?>','<?php echo $weekdays_short_4;?>','<?php echo $weekdays_short_5;?>','<?php echo $weekdays_short_6;?>','<?php echo $weekdays_short_7;?>'],
b_long_weekdays: ['<?php echo $weekdays_short_1;?>','<?php echo $weekdays_short_2;?>','<?php echo $weekdays_short_3;?>','<?php echo $weekdays_short_4;?>','<?php echo $weekdays_short_5;?>','<?php echo $weekdays_short_6;?>','<?php echo $weekdays_short_7;?>']
}
}
function addzero( value )
{
while( value.length<2 ) value = String("0") + value;
return value;
}
function checkDateOrder(frm, ci_day, ci_month_year, co_day, co_month_year) {
if (document.getElementById) {
var frm = document.getElementById(frm);
// create date object from checkin values
// set date to 12:00 to avoid problems with one
// date being wintertime and the other summertime
var my = frm[ci_month_year].value.split("-");
var ci = new Date (my[0], my[1]-1, frm[ci_day].value, 12, 0, 0, 0);
// create date object from checkout values
my = frm[co_month_year].value.split("-");
var co = new Date (my[0], my[1]-1, frm[co_day].value, 12, 0, 0, 0);
// if checkin date is at or after checkout date,
// add a day full of milliseconds, and set the
// selectbox values for checkout date to new value
if (ci >= co){
co.setTime(ci.getTime() + 1000 * 60 * 60 * 24);
frm[co_day].value = co.getDate();
var com = co.getMonth()+1;
frm[co_month_year].value = co.getFullYear() + "-" + com;
}
}
}
</script>
</head>
<body id="searchboxHolder"> 
<!-- start copy sourcecode from here -->
<div id="searchboxInc">
<form id="frm" name="frm" action="http://www.booking.com/searchresults.html" method="get" target="_top" autocomplete="off">
<fieldset>
<div id="destinationSearch">
<input type="hidden" name="aid" value="<?php echo get_option('affiliate_ID'); ?>" />
<input type="hidden" name="error_url" value="http://www.booking.com/?aid=<?php echo get_option('affiliate_ID'); ?>;" />
<input type="hidden" name="si" value="ai,co,ci,re,di" />
<input type="hidden" name="label" value="<?php echo get_option('affiliate_label'); ?>" />
<input type="hidden" name="lang" value="<?php echo get_option('widget_language'); ?>" />
<input type="hidden" name="ifl" value="1" />



<p><?php echo $desc_search_hotels;?></p>
<label for="destination"><?php echo $desc_destination;?></label>
<input 
class="text" type="text blur" id="destination" name="ss" value="<?php echo get_option('widget_destination'); ?>" title="<?php echo get_option('widget_destination'); ?>"  autocomplete="off" />
</div>
<div id="inout">
<div id="homein">
<h3><?php echo $desc_checkin;?></h3>
<select id="b_checkin_day" name="checkin_monthday" onChange="checkDateOrder('frm', 'b_checkin_day', 'b_checkin_month', 'b_checkout_day', 'b_checkout_month') ; tickCheckBox('b_availcheck');">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select>
<select id="b_checkin_month" name="checkin_year_month" onChange="checkDateOrder('frm', 'b_checkin_day', 'b_checkin_month', 'b_checkout_day', 'b_checkout_month') ; tickCheckBox('b_availcheck');">
<script language="Javascript"> 
var monthArray=new Array("<?php echo $month_short_1;?>","<?php echo $month_short_2;?>","<?php echo $month_short_3;?>","<?php echo $month_short_4;?>","<?php echo $month_short_5;?>","<?php echo $month_short_6;?>","<?php echo $month_short_7;?>","<?php echo $month_short_8;?>","<?php echo $month_short_9;?>","<?php echo $month_short_10;?>","<?php echo $month_short_11;?>","<?php echo $month_short_12;?>");

var today = new Date();
var month= today.getMonth();
var year = today.getFullYear()%100;
var fullYear=today.getFullYear();
year=new String(year);
year=addzero(year);
var countMonth=month;
for(var i=0;i<12;i++,countMonth++){
if(countMonth%12==0 && i>0){
countMonth=0;
year++;
year=new String(year);
year=addzero(year);
fullYear++;
}
document.writeln("<option value=\""+fullYear+"-"+(countMonth+1)+"\">"+monthArray[countMonth]+" '"+year);
}
</script>
</select>

<?php if (get_option('widget_cal_icons') == "yes") {?>
<a onClick="showCalendar(this, 'calendar', 'checkin');" class="calender inlineJsRequired" href="#calender"><img src="http://q.bstatic.com/static/img/button-calender.png" width="21" height="17" alt="calendar" title="Open the calendar to pick a date" /></a>
<?php } ?>

</div>
<div id="homeout">
<h3><?php echo $desc_checkout;?></h3>
<select id="b_checkout_day" name="checkout_monthday" onChange="tickCheckBox('b_availcheck');">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select>
<select id="b_checkout_month" name="checkout_year_month" onChange="tickCheckBox('b_availcheck');">
<script language="Javascript">
var monthArray=new Array("<?php echo $month_short_1;?>","<?php echo $month_short_2;?>","<?php echo $month_short_3;?>","<?php echo $month_short_4;?>","<?php echo $month_short_5;?>","<?php echo $month_short_6;?>","<?php echo $month_short_7;?>","<?php echo $month_short_8;?>","<?php echo $month_short_9;?>","<?php echo $month_short_10;?>","<?php echo $month_short_11;?>","<?php echo $month_short_12;?>");
var today = new Date();
var month= today.getMonth();
var year = today.getFullYear()%100;
var fullYear=today.getFullYear();
year=new String(year);
year=addzero(year);
var countMonth=month;
for(var i=0;i<12;i++,countMonth++){
if(countMonth%12==0 && i>0){
countMonth=0;
year++;
year=new String(year);
year=addzero(year);
fullYear++;
}
document.writeln("<option value=\""+fullYear+"-"+(countMonth+1)+"\">"+monthArray[countMonth]+" '"+year);
}
</script>
</select>

<?php if (get_option('widget_cal_icons') == "yes") {?>
<a onClick="showCalendar(this, 'calendar', 'checkout');" class="calender inlineJsRequired" href="#calender"><img src="http://q.bstatic.com/static/img/button-calender.png" width="21" height="17" alt="calendar" title="Open the calendar to pick a date" /></a>
<?php } ?>

</div>
<div class="avail">
<input id="availcheck" type="checkbox" name="idf" value="on" />
<label id="labfor" for="availcheck"><?php echo $desc_nodates;?></label>
</div>
</div>
<div class="but">
<button type="submit" <?php if (get_option('widget_target') == "yes") {?>formtarget="_new"<? }?>><?php echo $desc_search;?></button>
</div>
</fieldset>
</form>
<script language="Javascript">
var currentDate = new Date(); var currentYear = 1900 + currentDate.getYear();
var dailyMS = 24*60*60*1000;
var arrivalDate = new Date(currentDate.getTime());
var departureDate = new Date(currentDate.getTime() + 1*dailyMS);
var arrivalYear = 1900+arrivalDate.getYear();
var arrivalMonth = 1+arrivalDate.getMonth(); var arrivalDay = arrivalDate.getDate();
var departureYear = 1900+departureDate.getYear();
var departureMonth = 1+departureDate.getMonth(); var departureDay = departureDate.getDate();
var a=document.frm;
if ((a.checkin_monthday.selectedIndex == 0) && (a.checkout_monthday.selectedIndex == 0)){
a.checkin_monthday.options[arrivalDay-1].selected = true;
a.checkout_monthday.options[departureDay-1].selected = true;
}
var frm = document.getElementById('frm');
// create date object from checkin values
// set date to 12:00 to avoid problems with one
// date being wintertime and the other summertime
var my = frm['b_checkin_month'].value.split("-");
var ci = new Date (my[0], my[1]-1, frm['b_checkin_day'].value, 12, 0, 0, 0);
// create date object from checkout values
my = frm['b_checkout_month'].value.split("-");
var co = new Date (my[0], my[1]-1, frm['b_checkout_day'].value, 12, 0, 0, 0);
if (ci >= co){
co.setTime(ci.getTime() + 1000 * 60 * 60 * 24);
frm['b_checkout_day'].value = co.getDate();
var com = co.getMonth()+1;
frm['b_checkout_month'].value = co.getFullYear() + "-" + com;
}
</script>
</div>

<?php if (get_option('widget_cal_icons') == "yes") {?>
<div id="calendar"></div>
<script type="text/javascript">

var calendar = new Object();
var tr = new Object();
tr.nextMonth = "<?php echo $cal_next;?>";
tr.prevMonth = "<?php echo $cal_prev;?>";
tr.closeCalendar = "<?php echo $cal_close;?>";
tr.pressCtlD = "Press control-d or choose bookmarks/add or favourites/add in your browser";
tr.pressCtlP = "Press control-p or choose file/print in your browser";
tr.url = "http://www.booking.com/index.nl.html?aid=<?php echo get_option('affiliate_ID'); ?>;label<?php echo get_option('affiliate_label'); ?>;sid=805b890b3ec36eb43796e8b84188da15;dcid=1;tmpl=searchbox";
tr.title = "Booking.com";
tr.icons = "http://r.bstatic.com/static/img";
var months = ['<?php echo $month_1;?>','<?php echo $month_2;?>','<?php echo $month_3;?>','<?php echo $month_4;?>','<?php echo $month_5;?>','<?php echo $month_6;?>','<?php echo $month_7;?>','<?php echo $month_8;?>','<?php echo $month_9;?>','<?php echo $month_10;?>','<?php echo $month_11;?>','<?php echo $month_12;?>'];
var $t_hotels = 'Hotels'.toLowerCase();
var $t_hotels_around = 'Hotels nearby'.toLowerCase().replace(/ /g, '&#160;');
var b_today = "Today";
var day = "day";

Date.MILLISECONDS_PER_DAY = Date.prototype.MILLISECONDS_PER_DAY = 86400000;
var browser = navigator.appName
var version = navigator.appVersion
var startstring = parseFloat(version.indexOf("MSIE"))+1
var browserverion = parseFloat(version.substring(startstring+4,startstring+7))
var isIE5 = ((browser=="Microsoft Internet Explorer") && (browserverion < 6))? true : false;
var isIE6 = ((browser=="Microsoft Internet Explorer") && (browserverion > 5.5) && (browserverion < 6))? true : false;
// Put placeholder in destination input box if empty, and remove when focused
var destination = document.getElementById('destination');
destination.onblur = function () {
if (!this.value) {
this.value = this.getAttribute('title');
this.className += ' blur';
}
}
destination.onfocus = function () {
if (this.value == this.getAttribute('title')) {
this.value = '';
this.className = this.className.replace(/ blur/, '');
}
}
destination.onblur();
function tickCheckBox(el) {
if (document.getElementById) {
if (document.getElementById(el)) {
document.getElementById(el).checked = false;
}
}
return true;
}
Date.prototype.getTwoDigitMonth = function () {
// Returns a two-digit string from '01' to '12' representing the month property of a Date object.
var month = (this.getMonth() + 1).toFixed().toString();
if (month.length == 1) {
month = '0' + month;
}
return month;
};
function checkDateOrder(me, ci_day, ci_month_year, co_day, co_month_year) {
var
frm = document.getElementById('frm'),
my,
ci = new Date( 0 ),
co = new Date( 0 ),
com,
today = new Date();
// create date object from checkin values
// set date to 12:00 to avoid problems with one
// date being wintertime and the other summertime
if ( frm[ci_day].value !== '0' )
{
ci.setDate( frm[ci_day].value );
}
if ( frm[ci_month_year].value !== '0' )
{
my = frm[ci_month_year].value.split( "-" );
ci.setFullYear( my[0] );
ci.setMonth( my[1] - 1 );
}
ci.setHours( 12 );
ci.setMinutes( 0 );
ci.setSeconds( 0 );
// create date object from checkout values
if ( frm[co_day].value !== '0' )
{
co.setDate( frm[co_day].value );
}
if ( frm[co_month_year].value !== '0' )
{
my = frm[co_month_year].value.split( "-" );
co.setFullYear( my[0] );
co.setMonth( my[1] - 1 );
}
co.setHours( 12 );
co.setMinutes( 0 );
co.setSeconds( 0 );
// If the new checkin date's month does not match
// the current value of the dropdown, then it is
// because the month was incremented creating an
// invalid date (e.g. February 31st).
// We'll cycle back the checkin date until we're in
// the correct month.
if ( frm[ci_month_year].value !== '0' )
{
while ( ci.getMonth() != frm[ci_month_year].value.split( "-" )[1] - 1 )
{
ci.setDate( ci.getDate() - 1 );
frm[ci_day].value = ci.getDate();
}
var cim = ci.getMonth() + 1;
frm[ci_month_year].value = ci.getFullYear() + "-" + cim;
}
// if checkin date is at or after checkout date,
// add a day full of milliseconds, and set the
// selectbox values for checkout date to new value
if ( ci >= co )
{
co.setTime( ci.getTime() + Date.prototype.MILLISECONDS_PER_DAY );
com = co.getMonth() + 1;
if ( frm[ci_day].value !== '0' )
{
frm[co_day].value = co.getDate();
}
if ( frm[ci_month_year].value !== '0' )
{
frm[co_month_year].value = co.getFullYear() + "-" + com;
}
}
}
function updateDaySelect( me )
{
// 1-2 testing
if ( !booking.env.b_simple_weekdays_for_js )
{
return;
}
var frm = document.getElementById('frm');
if ( frm.getAttribute( 'id' ) !== 'frm' && frm.className !== 'availForm' )
{
return;
}
// Check if we have all fields. If not, we are in the first stage
// of the book process and should not auto-update selects since there
// is only the check-in select and the amount of nights.
if ( !frm.checkin_monthday || !frm.checkout_monthday || !frm.checkin_year_month || !frm.checkout_year_month )
{
return;
}
if ( frm.checkin_monthday.value === '0' && frm.checkout_monthday.value === '0' && frm.checkin_year_month.value === '0' && frm.checkout_year_month.value === '0' )
{
return;
}
// If the year-month fields have nonzero values, prepend the day of the week to each monthday in the check-in and check-out monthday Selects.
var
ci_d = frm.checkin_monthday,
co_d = frm.checkout_monthday,
ci_my,
co_my,
todaysDate;
// If the form field has a nonzero value, use it;
if ( frm.checkin_year_month.value !== '0' )
{
ci_my = frm.checkin_year_month.value.split( "-" );
}
else
{
// Use the current date value.
todaysDate = new Date();
ci_my = [ todaysDate.getFullYear(), todaysDate.getTwoDigitMonth() ];
}
if ( frm.checkout_year_month.value !== '0' )
{
co_my = frm.checkout_year_month.value.split( "-" );
}
else
{
todaysDate = new Date();
co_my = [ todaysDate.getFullYear(), todaysDate.getTwoDigitMonth() ];
}
var
ci_sel = Math.max( ci_d.selectedIndex, 0 ),
co_sel = Math.max( co_d.selectedIndex, 0 ),
ci_sel_value = ci_d[ ci_sel ].value,
co_sel_value = co_d[ co_sel ].value,
monthDays = [],
opt,
i;
ci_d.innerHTML = '';
co_d.innerHTML = '';
var MonthdayPromptOption = function ()
{
this.option = {
"_this" : this,
"@selected" : "selected",
"@class" : "day prompt site_experiment_encourage_date_entry_2",
"@value" : 0,
"#text" : "day"
};
};
if ( ci_sel_value === '0' )
{
buildHtmlNode( new MonthdayPromptOption(), ci_d ).selected = true;
}
if ( co_sel_value === '0' )
{
buildHtmlNode( new MonthdayPromptOption(), co_d ).selected = true;
}
function writeMonthdaysOptions( numberOfMonthdaysToShow, yearMonthSelectElement, monthDaysArray, monthDaysSelectElement, monthDaySelectValue )
{
var i, optionElementInnerHTML, optionElement;
for ( i = 0; i < numberOfMonthdaysToShow; i++ )
{
optionElement = document.createElement( 'option' );
optionElementInnerHTML = i + 1;
if ( yearMonthSelectElement.value !== '0' )
{
optionElementInnerHTML = monthDaysArray[i] + ' ' + optionElementInnerHTML;
}
optionElement.innerHTML = optionElementInnerHTML;
optionElement.value = ( i + 1 );
if ( i > 0 && monthDaySelectValue == i + 1 )
{
optionElement.defaultSelected = optionElement.selected = true;
}
monthDaysSelectElement.appendChild( optionElement );
}
}
// Check-in month
monthDays = buildDaysForMonth( ci_my[0], ci_my[1] );
var numberOfMonthdaysToShow = 31;
if ( frm.checkin_year_month.value !== '0' )
{
numberOfMonthdaysToShow = monthDays.length;
}
writeMonthdaysOptions( numberOfMonthdaysToShow, frm.checkin_year_month, monthDays, ci_d, ci_sel_value );
// Checkout month
monthDays = buildDaysForMonth( co_my[0], co_my[1] );
numberOfMonthdaysToShow = 31;
if ( frm.checkout_year_month.value !== '0' )
{
numberOfMonthdaysToShow = monthDays.length;
}
writeMonthdaysOptions( numberOfMonthdaysToShow, frm.checkout_year_month, monthDays, co_d, co_sel_value );
// IE 6 exhibits a bug whereby the value of the monthday select always jumps to zero.
if (isIE6) {
ci_d.value = ci_sel_value;
co_d.value = co_sel_value;
}
}
function buildDaysForMonth( year, month )
{
// Month index starts on 0(-11) in Date()-object
var monthDate = new Date( year, month - 1 );
var orgMonth = monthDate.getMonth();
var dayArray = [], weekDay;
while ( monthDate.getMonth() == orgMonth )
{
// Week starts on Sunday in Date()-object
weekDay = ( monthDate.getDay() == 0 ) ? 6 : ( monthDate.getDay() - 1 );
dayArray.push( booking.env.b_simple_weekdays_for_js[weekDay] );
monthDate.setDate( monthDate.getDate() + 1 );
}
return dayArray;
}
function buildHtmlNode (elementsObject, targetNode, refChild)
{
/*
Accepts an object of elements where the key specifies the tagname unless prefixed by @, in which case it specifies an attribute of the parent, or when it is #cdata, in which case it specifies a CDATA child.
http://xml.com/pub/a/2006/05/31/converting-between-xml-and-json.html
The big flaw now is the case <a><b/><c/><b/><a/>, which cannot be represented as a JS object. In that case interject an array of generic div or span elements.
*/
// If we want to validate as JSON, we must make sure what we pass in is JSON, which it presently isnot.
//elementsObject = booking.json.validate(elementsObject);
var
key,
counter,
found,
newElement,
newNode;
for (key in elementsObject)
{
if (elementsObject.hasOwnProperty(key))
{
var
prefix = key.substring(0, 1),
primaryKey = key.substring(1);
if (prefix != '_') // We窶决e on a non-DOM key, so skip.
{
if (prefix == '@') // Attribute
{
if (!targetNode.getAttribute(primaryKey))
{
// Perhaps extend this in the future to support multiple class values.
targetNode.setAttribute(primaryKey, elementsObject[key]);
}
}
else
{
if (prefix == '#') // Text or CDATA
{
if (primaryKey == 'text') // Text
{
found = false;
if (targetNode.childNodes && targetNode.childNodes.length > 0)
{
// Traverse text node children and append only if it isn窶冲 already there.
counter = 0;
while (counter < targetNode.childNodes.length && !found)
{
if (targetNode.childNodes[counter].nodeType == Node.TEXT_NODE && targetNode.childNodes[counter].nodeValue == elementsObject[key])
{
found = true;
}
counter++;
}
}
if (!found)
{
// MGP 040209: Cope with strings split by linebreaks - need to insert <br> elements
if ( elementsObject[key].indexOf("\n") == -1 )
{
newNode = document.createTextNode(elementsObject[key]);
if (refChild)
{
targetNode.insertBefore(newNode, refChild);
}
else
{
targetNode.appendChild(newNode);
}
}
else
{
// Found some linebreaks - split the string into component parts
var newNodeParts = elementsObject[key].split("\n");
// Loop through the parts, adding a linebreak after each one (except the last one)
for ( var i = 0; i < newNodeParts.length; i++ )
{
// Check for the existence of a star rating in the text node
if ( newNodeParts[i].match(/\d\*$/) )
{
// Found a star rating - extract the star
lastSpace = newNodeParts[i].lastIndexOf(" ");
newNodeString = newNodeParts[i].substring( 0, lastSpace );
starImgSrc = 'http://r.bstatic.com/static/img/icons/stars/' + newNodeParts[i].substr( lastSpace + 1, 1 ) + 'sterren-small.png';
}
else
{
newNodeString = newNodeParts[i];
starImgSrc = '';
}
newNode = document.createTextNode(newNodeString);
if (refChild)
{
targetNode.insertBefore(newNode, refChild);
if ( starImgSrc )
{
newImg = document.createElement('img');
newImg.setAttribute('src', starImgSrc);
newImg.className = "stars";
targetNode.insertBefore(newImg, refChild);
}
}
else
{
targetNode.appendChild(newNode);
if ( starImgSrc )
{
newImg = document.createElement('img');
newImg.setAttribute('src', starImgSrc);
newImg.className = "stars";
targetNode.appendChild(newImg);
}
}
if ( i < newNodeParts.length - 1)
{
// Add a <br>
newBR = document.createElement("br");
if (refChild)
{
targetNode.insertBefore(newBR, refChild);
}
else
{
targetNode.appendChild(newBR);
}
}
}
}
}
}
else
{
if (primaryKey == 'cdata') // CDATA
{
targetNode.appendChild(document.createCDATASection(elementsObject[key]));
}
}
}
else // Element
{
// If targetNode was passed into this function, append the new child to it窶ｦ
if (targetNode)
{
// If elementsObject[key] is an array, we窶冤l create an element of type key for each array member.
if (elementsObject[key].length > 0)
{
for (counter = 0; counter < elementsObject[key].length; counter++)
{
if (elementsObject[key][counter])
{
if (!elementsObject[key][counter]._node)
{
newElement = document.createElement(key);
elementsObject[key][counter]._node = newElement;
var r = counter + 1;
while (r < elementsObject[key].length && !refChild)
{
if (elementsObject[key][r])
{
refChild = elementsObject[key][r]._node;
}
r++;
}
if (refChild)
{
newNode = targetNode.insertBefore(
elementsObject[key][counter]._node,
refChild);
}
else
{
newNode = targetNode.appendChild(
elementsObject[key][counter]._node);
}
arguments.callee(
elementsObject[key][counter],
newNode);
newElement._elementTree = elementsObject[key][counter];
}
else
{
arguments.callee(
elementsObject[key][counter],
elementsObject[key][counter]._node);
}
}
}
}
else
{
if (elementsObject[key].length !== 0)
{
if (!elementsObject[key]._node)
{
newElement = document.createElement(key);
elementsObject[key]._node = newElement;
if (refChild)
{
newNode = targetNode.insertBefore(
elementsObject[key]._node,
refChild);
}
else
{
newNode = targetNode.appendChild(
elementsObject[key]._node);
}
arguments.callee(
elementsObject[key],
newNode);
newElement._elementTree = elementsObject;
}

else
{
arguments.callee(
elementsObject[key],
elementsObject[key]._node);
}
}
}
}
// else create the new element as targetNode.
else
{
if (!elementsObject[key]._node)
{
arguments.callee(elementsObject[key],
elementsObject[key]._node = targetNode = document.createElement(key));
}
else
{
arguments.callee(elementsObject[key],
elementsObject[key]._node);
}
}
}
}
}
}
}
return targetNode;
};

/*extern DOM, calendar, dn, getChildImage, getDimensions, m, months, n, tr, y, checkDateOrder, d, booking.env.b_simple_weekdays, booking.env.b_simple_weekdays_for_js, i, tickCheckBox, updateDaySelect, booking, buildDaysForMonth, monthDaysArray */
// showCalendar without requirements for unique id's
//	@me	DOMNode context node
//	@calId	String	id of calendar node
//	@dt	String	'checkin' or 'checkout' prefix
var td;
function buildCal( y, m, d )
{
var daysInMonth = [31, 0, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
// Create today's date.
td = new Date();
if ( !y )
{
y = td.getFullYear();
}
if ( !m )
{
m = td.getMonth() + 1;
}
if ( !d )
{
d = td.getDate;
}
var dt = calendar.caldt;
var mDate = new Date( y, m - 1, 1 );
var firstMonthDay = mDate.getDay();
daysInMonth[1] = ( ( ( mDate.getFullYear() % 100 != 0 ) && ( mDate.getFullYear() % 4 == 0 ) ) || ( mDate.getFullYear() % 400 == 0 ) ) ? 29 : 28;
var t = '<table class="caltable" cellspacing="0"><tr>';
t += '<td class="calheader" colspan="7" class="monthYear">';
if ( y == td.getFullYear() && m == td.getMonth() + 1 )
{
t += '<img class="calNoPrevMonth" src="' + tr.icons + '/transparent.png" width="24" height="24" alt="' + tr.prevMonth + '" />';
}
else
{
t += '<a class="calPrevMonth" href="" onclick="prevMonth( ' + y + ',' + m + ' ); return false;" title="' + tr.prevMonth + '"><img src="' + tr.icons + '/transparent.png" width="24" height="24" alt="' + tr.prevMonth + '" /></a>';
}
t += '&nbsp;<select name="ym" onchange="goYearMonth( this.options[this.selectedIndex].value );">';
var mn = td.getMonth() + 1;
var yr = td.getFullYear();
var last_month = 0;
for ( n = 0; n <= 11; n++ )
{
t += '<option value="' + yr + '-' + mn + '"';
if ( mn == m && yr == y )
{
t += ' selected="selected"';
last_month = 1;
}
else
{
last_month = 0;
}
t += '>' + months[mn - 1] + ' ' + yr +'</option>';
mn++;
if ( mn > 12 )
{
mn = 1;
yr++;
}
}
t += ' </select>&nbsp;';
if ( last_month == 1 )
{
t += '<img class="calNoNextMonth" src="' + tr.icons + '/transparent.png" width="24" height="24" alt="' + tr.nextMonth + '" />';
}
else
{
t += '<a class="calNextMonth" href="" onclick="nextMonth( ' + y + ',' + m + ' ); return false;" title="' + tr.nextMonth +'"><img src="' + tr.icons + '/transparent.png" width="24" height="24" alt="' + tr.nextMonth + '" /></a>';
}
t += '</td></tr>';
t += '<tr class="dayNames">';
var cl;
for ( dn = 0; dn < 7; dn++ )
{
cl = '';
if ( ( dn % 7 == 5 ) || ( dn % 7 == 6 ) )
{
cl += ' weekend';
}
t += '<td class="' + cl + '">' + booking.env.b_simple_weekdays[dn] + '</td>';
}
t += '</tr><tr class="days">';
for ( i = 1; i <= 42; i++ )
{
var x = i - ( firstMonthDay + 6 ) % 7;
if ( x > daysInMonth[m - 1] || x < 1 )
{
x = '&nbsp;';
}
cl = '';
var href = 0;
if ( ( i % 7 == 0 ) || ( i % 7 == 6 ) )
{
cl += ' weekend';
}
if ( x > 0 )
{
var xDay = new Date( y, m - 1, x );
if ( ( xDay.getFullYear() == y ) && ( xDay.getMonth() + 1 == m ) && ( xDay.getDate() == d ) )
{
cl += ' selected';
href = 1;
}
if ( ( xDay.getFullYear() == td.getFullYear() ) && ( xDay.getMonth() == td.getMonth() ) && ( xDay.getDate() == td.getDate() ) )
{
cl += ' today';
href = 1;
}
else
{
if ( xDay > td )
{
cl += ' future';
href = 1;
}
else
{
if ( xDay < td )
{
cl += ' past';
}
}
}
}
t += '<td class="' + cl + '">';
if ( href )
{
t += '<a href="#" onclick="pickDate( ' + y + ',' + m + ',' + x + ',\'' + dt + '\' ); return false;">' + x + '</a>';
}
else
{
t += x;
}
t += '</td>';
if ( ( ( i ) % 7 == 0 ) && ( i < 36 ) )
{
t += '</tr><tr class="days">';
}
}
t += '</tr><tr><td colspan="7"><a href="#" onclick="closeCal(); return false;">' + tr.closeCalendar + '</a></td></tr></table>';
document.getElementById( "calendar" ).innerHTML = t;
}
function showCalendar( me, calId, dt )
{
getDimensions( me );
if ( document.getElementById )
{
var c = document.getElementById( calId );
var i = getChildImage( me );
var f = document.getElementById('frm');
calendar.cal = c;
calendar.caldt = dt;
calendar.calf = f;
var my = f[dt + '_year_month'].value.split( "-" );
y = my[0];
m = my[1];
d = f[dt + '_monthday'].value;
// Ensure y is nonzero so the pop-up calendar correctly figures out the past/current/future classes for each monthday.
if ( y === '0' )
{
y = new Date().getFullYear();
}
buildCal( y, m, d );
var box = getDimensions( i );
var
left = box.x,
top = ( box.y + i.offsetHeight );
c.style.left = left + 'px';
c.style.top = top + 'px';
c.style.display = "block";
}
}
function closeCal()
{
calendar.cal.style.display = 'none';
}
function prevMonth( y, m )
{
if ( new Date( y, m - 1, 1 ) < td )
{
return;
}
if ( m > 1 )
{
m--;
}
else
{
m = 12;
y--;
}
buildCal( y, m );
}
//does this finction need to check for max month/year?
function nextMonth( y, m )
{
if ( m < 12 )
{
m++;
}
else
{
m = 1;
y++;
}
buildCal( y, m );
}
function goYearMonth( ym )
{
var ymlist = ym.split("-");
buildCal( ymlist[0], ymlist[1] );
}
function pickDate( y, m, d, dt )
{
// set form values
var f = calendar.calf;
var dt = calendar.caldt;
f[dt + '_year_month'].value = y + "-" + m;
f[dt + '_monthday'].value = d;
tickCheckBox( 'availcheck' );
if ( dt == "checkin" )
{
checkDateOrder( f, 'checkin_monthday', 'checkin_year_month', 'checkout_monthday', 'checkout_year_month' );
}
closeCal();
updateDaySelect( f );
}
function initDaySelect()
{
var forms = document.getElementsByTagName( 'form' );
for ( var i = 0; i < forms.length; i++ )
{
if ( forms[i].checkin_monthday )
{
updateDaySelect( forms[i] );
}
}
}
function updateDaySelect( me )
{
// 1-2 testing
if ( !booking.env.b_simple_weekdays_for_js )
{
return;
}
var frm = document.getElementById('frm');
if ( frm.getAttribute( 'id' ) !== 'frm' && frm.className !== 'availForm' )
{
return;
}
// Check if we have all fields. If not, we are in the first stage
// of the book process and should not auto-update selects since there
// is only the check-in select and the amount of nights.
if ( !frm.checkin_monthday || !frm.checkout_monthday || !frm.checkin_year_month || !frm.checkout_year_month )
{
return;
}
if ( frm.checkin_monthday.value === '0' && frm.checkout_monthday.value === '0' && frm.checkin_year_month.value === '0' && frm.checkout_year_month.value === '0' )
{
return;
}
// If the year-month fields have nonzero values, prepend the day of the week to each monthday in the check-in and check-out monthday Selects.
var
ci_d = frm.checkin_monthday,
co_d = frm.checkout_monthday,
ci_my,
co_my,
todaysDate;
// If the form field has a nonzero value, use it;
if ( frm.checkin_year_month.value !== '0' )
{
ci_my = frm.checkin_year_month.value.split( "-" );
}
else
{
// Use the current date value.
todaysDate = new Date();
ci_my = [ todaysDate.getFullYear(), todaysDate.getTwoDigitMonth() ];
}
if ( frm.checkout_year_month.value !== '0' )
{
co_my = frm.checkout_year_month.value.split( "-" );
}
else
{
todaysDate = new Date();
co_my = [ todaysDate.getFullYear(), todaysDate.getTwoDigitMonth() ];
}
var
ci_sel = Math.max( ci_d.selectedIndex, 0 ),
co_sel = Math.max( co_d.selectedIndex, 0 ),
ci_sel_value = ci_d[ ci_sel ].value,
co_sel_value = co_d[ co_sel ].value,
monthDays = [],
opt,
i;
ci_d.innerHTML = '';
co_d.innerHTML = '';
// Build the Day/Month prompt Options if the monthday values aren't already set or, if they are set, they are nonzero; and if the client isn't IE 5. This condition mimics the TMPL_IF in datebox.inc/div#avail (except for the inclusion here of IE5).
var MonthdayPromptOption = function ()
{
this.option = {
"_this" : this,
"@selected" : "selected",
"@class" : "day prompt site_experiment_encourage_date_entry_2",
"@value" : 0,
"#text" : day
};
};
if ( ci_sel_value === '0' )
{
buildHtmlNode( new MonthdayPromptOption(), ci_d ).selected = true;
}
if ( co_sel_value === '0' )
{
buildHtmlNode( new MonthdayPromptOption(), co_d ).selected = true;
}
function writeMonthdaysOptions( numberOfMonthdaysToShow, yearMonthSelectElement, monthDaysArray, monthDaysSelectElement, monthDaySelectValue )
{
var i, optionElementInnerHTML, optionElement;
for ( i = 0; i < numberOfMonthdaysToShow; i++ )
{
optionElement = document.createElement( 'option' );
optionElementInnerHTML = i + 1;
if ( yearMonthSelectElement.value !== '0' )
{
optionElementInnerHTML = monthDaysArray[i] + ' ' + optionElementInnerHTML;
}
optionElement.innerHTML = optionElementInnerHTML;
optionElement.value = ( i + 1 );
if ( i > 0 && monthDaySelectValue == i + 1 )
{
optionElement.defaultSelected = optionElement.selected = true;
}
monthDaysSelectElement.appendChild( optionElement );
}
}
// Check-in month
monthDays = buildDaysForMonth( ci_my[0], ci_my[1] );
var numberOfMonthdaysToShow = 31;
if ( frm.checkin_year_month.value !== '0' )
{
numberOfMonthdaysToShow = monthDays.length;
}
writeMonthdaysOptions( numberOfMonthdaysToShow, frm.checkin_year_month, monthDays, ci_d, ci_sel_value );
// Checkout month
monthDays = buildDaysForMonth( co_my[0], co_my[1] );
numberOfMonthdaysToShow = 31;
if ( frm.checkout_year_month.value !== '0' )
{
numberOfMonthdaysToShow = monthDays.length;
}
writeMonthdaysOptions( numberOfMonthdaysToShow, frm.checkout_year_month, monthDays, co_d, co_sel_value );
// IE 6 exhibits a bug whereby the value of the monthday select always jumps to zero.
if (isIE6) {
ci_d.value = ci_sel_value;
co_d.value = co_sel_value;
}
}
function buildDaysForMonth( year, month )
{
// Month index starts on 0(-11) in Date()-object
var monthDate = new Date( year, month - 1 );
var orgMonth = monthDate.getMonth();
var dayArray = [], weekDay;
while ( monthDate.getMonth() == orgMonth )
{
// Week starts on Sunday in Date()-object
weekDay = ( monthDate.getDay() == 0 ) ? 6 : ( monthDate.getDay() - 1 );
dayArray.push( booking.env.b_simple_weekdays_for_js[weekDay] );
monthDate.setDate( monthDate.getDate() + 1 );
}
return dayArray;
}
// Hides "Available rooms" and shows date input for stay.
// This currently works without unique id's under the assumption that
// the two (or more) divs containing the different "views" are in the same container.
function switchDateStack(me, page) {
var stackPage = me;
var testMe = me.parentNode;
try {
while (testMe.nodeName != 'div') {
stackPage = testMe;
testMe = testMe.parentNode;
}
} catch(e) {}
var stackCount = 0;
while ( stackPage ) {
if ( stackPage.nodeName.toLowerCase() == 'div' ) {
stackCount++;
if ( stackCount == page ) {
stackPage.style.display = 'block';
} else {
stackPage.style.display = 'none';
}
}
stackPage = stackPage.nextSibling;
}
}
// Searches children to find image
function getChildImage( contextElm )
{
contextElm = contextElm.firstChild;
while ( contextElm.nodeName.toLowerCase() != 'img' && contextElm.nextSibling )
{
contextElm = contextElm.nextSibling;
}
return contextElm;
}
// Getting element dimensions
function getDimensions( elm ) {
var box = { x:0, y:0, w:0, h:0 };
if(document.getBoxObjectFor) {
var boxRef = document.getBoxObjectFor(elm);
box.x = boxRef.x;
box.y = boxRef.y;
box.w = boxRef.width;
box.h = boxRef.height;
}
else if(elm.getBoundingClientRect) {
var boxRef = elm.getBoundingClientRect();
box.x = boxRef.left;
box.y = boxRef.top;
box.w = (boxRef.right - boxRef.left);
box.h = (boxRef.bottom - boxRef.top);
if(document.compatMode && document.compatMode != 'BackCompat') {
// IE6/compliance mode
box.x += document.documentElement.scrollLeft - 2;
box.y += document.documentElement.scrollTop - 2;
}
else if(!isIE5) {
// IE5.5
box.x += document.body.scrollLeft - 2;
box.y += document.body.scrollTop - 2;
}
}
else {
// No known box information available, walking
// manually through offsetParents to calculate x/y coordinates
box.w = elm.offsetWidth;
box.h = elm.offsetHeight;
while(elm) {
box.x += elm.offsetLeft;
box.y += elm.offsetTop;
if(elm.offsetParent) // Required for Safari 1.3 :(
elm = elm.offsetParent;
else
break;
}
}
var cc;
if(cc = document.getElementById('bodyconstraint'))
box.x -= cc.offsetLeft;
return box;
}

</script>
<?php } ?>