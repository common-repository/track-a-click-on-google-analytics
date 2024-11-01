=== Track a click on Google Analytics  ===
Contributors: gounder, sidmetal98, inkmyweb
Donate link: https://www.instamojo.com/inkmyweb/
Tags: Event Tracking, Google Analytics, Link Click, Click Tracking, Link Tracking, Goal Conversion
Requires at least: 2.5.0
Tested up to: 4.6
Stable tag: 4.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple shortcode to insert Google Analytics event tracking code on your links

== Description ==

**Are you using UTM Source to track link clicks within your website?**

That's a really bad idea! Not only will it create a new session with the links utm_source and inflate your visitor stats, it will also increase the bounce rate on the page you're tracking.

**So what's the solution?**

Use [event tracking] (https://developers.google.com/analytics/devguides/collection/analyticsjs/events) on Google Analytics which capture events like a link click into your Google Analytics Dashboard. 

For e.g.
`<a onClick="ga('send', 'event', 'Downloads', 'Click', 'Ebook downloaded', '0');" href="http://example.com/wp-content/uploads/2015/06/free-ebook.pdf">Download Free Ebook</a>`

But then the WordPress Visual Editor will keep cleaning out the onClick part, so we made a quick shortcode that would save you from the trouble of redoing the onClick part everytime it got cleaned out.

**How does it work?**

In place of an A href tag like `<a onClick="ga('send', 'event', 'Downloads', 'Click', 'Ebook downloaded', '0');" href="http://example.com/wp-content/uploads/2015/06/free-ebook.pdf">Download Free Ebook</a>` use our shortcode `[tac_ga url="http://example.com/wp-content/uploads/2015/06/free-ebook.pdf" category="Downloads" action="Click" label="Ebook Downloaded"]Download Free Ebook[/tac_ga]`

By default this shortcode uses the following information:
Category: link
Action: click
Label: The URL Entered

**How do I check if this works**

Google Analytics' Real time tab will show you that these tags would or not. 

*Some cases in which this shortcode won't work:*
* You use Google Tag Manager to insert Google Analytics
* You use Monster Insights Plugin (Formerly Yoast's Google Analytics Plugin) to install Google Analytics
