=== Booking.com Affiliate plugin ===
Author: gregory.raby
Contributors: Greg Raby
Donate link: http://www.booking-plugin.com/
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html
Tags: affiliates, booking, travel, reservation, hotel, booking.com, affiliation, hotels, booking calendar, online booking, accomodation, destinations, holidays, affiliation programme, affiliation program 
Requires at least: 3.3
Tested up to: 4.2.2
Stable tag: 1.8.1

Booking.com Affiliates : add a customized booking.com searchbox to your wordpress site in 2 clicks.

== Description ==

Booking.com Affiliates, this plugin allows you to add a typical booking.com booking module on any wordpress site. Simply configure what you want the searchbox to look like and generate traffic to your booking.com  affiliate pages.

= Create your search box =

All you need is a Booking.com affiliate ID and a wordpress site. Configure your ideal search box and the plugin will take care of the rest. The code is 100% compliant with the official settings & parameters as per the booking.com documentation and example. No need to learn and digest, it's all done for you and only a couple of clicks away.

= Display your box where you need it =

With the new plugin architecture, you can now leverage the flexibility of the shortcodes to display your search box in your posts, in your pages or on your widgetized areas (sidebar, footer). It also features a "careful" mode in case your theme already uses a jQueryUi item, like tabs. The plugin can use your existing CSS code to blend into your wordpress theme OR apply a specific CSS to the date picker only to make it stand out.

= A calendar that gets it =

Most booking sites ask travelers to use dropdowns and dates. This plugin allows your customers to use a cross-browser compatible calendar. Travelers can see the date in context of the upcoming weeks and navigate from one month to another. For instance, travelers won't simply pick "20/01/2015", they will actually select "Tue, 20 Jan. 2015"... in their own language (autodetected or forced, you decide). Also, to make it foolproof, the calendar adjusts itself so the departure date can't be earlier than the arrival date. 

= Manage your search boxes centrally =

Shortcode are not all about it, to keep your site manageable and scalable, all your search boxes can be found in one location and can be updated centrally. If your site evolves or if you just want to get things updated, just go to your plugin page, no need to put your hands again into all of the many placements where you could have your boxes locates. Each box is independant from the other, so you can change all your settings, even your Affiliate ID, per box and placement.


Check out the [official site](http://www.booking-plugin.com) to suggest new functionalities, report bugs and showcase your site.



== Installation ==

* Download the  plugin, add it to your blog in the plugin folder and activate it.
* Go to the settings page and fill out the details.
* Add to any post, page or widget that you want via the Insert button directly from the editor or type in the shortcode.

A couple of hours later, check your traffic & bookings via the [Booking.com admin panel](https://admin.bookings.org/partner) !


== Screenshots ==

1. The plugin page lists all your searchboxes.
2. Create a new searchbox.
3. The default look and feel - completelly customizable.
4. Insert a searchbox in 2 clicks.
5. Insert a widget.


== Changelog ==

= 1.8.1 =

* Additional language (Czech thanks to Martin Dvorak)
* Bug fix :  streamlined the process to create a searchbox pointing to a single hotel (using hotelid).

= 1.8 =

* Bug fix :  Plugin was creating extra-entries into the "wp_postmeta" table.

= 1.7 =

* Updated jQuery CDN version
* Added a "careful" calendar theme mode
* Default searchbox title (admin side)
* Bug fix :  jQuery CDN link syntax
* Bug fix :  Insert menu (dropdown) now lists the last 25 searchboxes
* Bug fix :  Edited out some CSS.
* Bug fix :  Readjusted the code to align the calendar icons.

= 1.6.2 =

* Additional language (Norwegian thanks to kjetil)

= 1.6.1 =

* Removed the H3 reference from the searchbox to facilitate themes integration
* Additional language (Icelandic thanks to bikingviking)

= 1.6 =

* New feature : customize the look of the search button + fresher button shape
* New feature : currency determination
* bug fix : open result in the same / new window

= 1.5.4 =

* IE10 conflicts
* Additional language (Russian thanks to Massimiliano)

= 1.5.3 =

* Bug fixes (CSS conflicts)
* translation fixes
* Code cleanup

= 1.5.2 =

* Ability to select the jQuery UI style applied to the calendar.
* Bug fixes (CSS conflicts)
* Code cleanup
* Admin panel cleanup

= 1.5.1 =

* Bug fixes (CSS conflicts)
* Code cleanup
* Additional language (Bulgarian thanks to Georgi)

= 1.5 =
Another big jump in version number to make sure users pay attention before making the update ! This release marks the code emancipation from the severly outdate booking.com affiliation searchbox code.
* Calendars using native Wordpress jQuery Datepicker : SEO improvements, code maintenance improvements, UI / UX improvements
* Fixed a big nasty compatibility issue with some installation. Anyone using WAMP will appreciate.
* Additional languages (Danish thanks to Chris J; Greek thanks to Yiannis).
* Cleaner CSS.

= 1.0.1 =
Minor update, recommended for all users.
* I added back the widget, by "popular" demand (well, frequent, at least :)).
* Added a "no categorization" option in the edit panel.

= 1.0 =
I now dare call this plugin STABLE. This doesn't mean there are no more bugs or that it is final, it does mean that I think it won't break sites anymore.
* Shortcodes : by public demand, the plugin now handles shortcodes, including a fancy menu in the post editor (TinyMCE) to easily add the correct search box.
* Multiple instances : the plugin now is architectured to handle multiple & independant searchboxes. You can have one by page, post, footer, sidebar... Warning : for this release, there are still known bugs when using multiple boxes with the calendar option on the same page. Don't blame ME, booking.com designed it that way...
* Cleaner html output : Editable width that really works. Reworked div structure that shouldn't break any templates anymore.
* Added Portuguese : thanks to Paulo for submitting (paulosantos.org)

= 0.2.6 =
* While preparing the UI for the next major release, I found out the code provided by booking.com is actually missing 1 div closing bracket ! I added it back in. This should hopefully address a number of template issues reported by users. Please note on narrow sites displayed on wide monitors, the calendars might show a bit higher on the page than they should. This is the "correct" behaviour of the script provided by Booking.com.

= 0.2.5 =
* Added Turkish, per (anonymous) user request via the [suggestion form](http://www.booking-plugin.com/suggest-new-features).
* Please note the next few updates coming up are relatively large. The first big update should come early june 2013. Make sure you do not do the update on the road or without a few spare mins in front of you... Just so you can get used to the new shiny stuff and reconfigure it all as needed.

= 0.2.3 =
* Another bug fix with the CSS inclusion.

= 0.2.2 =
* New feature : allow you to display the results in a new browser window OR in the same window.
* New language : Italian

= 0.2.1 =
* Added missing CSS file.

= 0.2 =
* Rebuilt from the ground up from the original booking.com code. No more iframe = better browser handling, better user interface integration and better analytics tracking... but above anything else : Calendars will now show up correctly !
* No more "height" required
* English, French, German, Dutch and Spanish supported (more languages to come soon)
* Compliance fixes

= 0.1.3 =
* Cleaner code

= 0.1.2 =
* Bug Fix: The widget class was conflicting with some other widgets. Fixed.
* Bug Fix: The plugin could not be activated when using BuddyPress. Fixed.


= 0.1.1 =
* Bug Fix: Forgot to update the Widget name... Ooops !
* Bug Fix: The link from the widget was pointing to the wrong admin page. Fixed.

	=> Thanks to MD @ menorcadiferente.com for pointing these out !

= 0.1 =
* First release of this Plugin. Offers all the out-of-the-box capabilities documented by the Booking.com Affiliates team.



== Upgrade Notice ==

= 1.8.1 =

* Additional language (Czech thanks to Martin Dvorak)
* Bug fix :  streamlined the process to create a searchbox pointing to a single hotel (using hotelid).
