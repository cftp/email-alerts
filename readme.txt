=== Email Alerts ===
Contributors: simonwheatley
Donate link: http://www.simonwheatley.co.uk/wordpress/
Tags: notifications, notify, email alerts, alert, publish, hold, approve
Requires at least: 2.6
Tested up to: 3.5 beta
Stable tag: 1.2

Allows users to configure whether they wish to be alerted when a comment is added, comment held, post posted.

== Description ==

**This plugin is designed for administrators to share the task of moderating comments and publishing posts marked as "Pending Review". It is NOT designed to notify non-admin subscribers of new comments or posts.**

The plugin adds checkboxes to the WordPress profile page, allowing you to setup notifications for these events:

* a comment is added
* a comment is held pending approval
* a post is pending review, 
* a post is published

If you have permission to edit other users, you can also setup notifications for them... so when you go on holiday, you can set a colleague to receive the comment notifications while you're away.

Users can only receive notifications for comments if they have the authority to moderate comments, and can only receive post notifications if they have the authority to publish posts.

Plugin initially produced on behalf of [Twenty Six](http://twentysixlondon.com/).

Is this plugin lacking a feature you want? I'm happy to discuss ideas, or to accept offers of feature sponsorship: [contact me](http://www.simonwheatley.co.uk/contact-me/) and we can have a chat.

Any issues: [contact me](http://www.simonwheatley.co.uk/contact-me/).

== Frequently Asked Questions ==

= Can blog readers receive notifications when a comment is published =

This plugin is designed for administrators to share the task of moderating comments and publishing posts marked as "Pending Review". It is NOT designed to notify non-admin subscribers of new comments or posts.

= Where do I decide what notifications I want to receive? =

Go to your WordPress profile in the admin area, and the checkboxes are near the bottom of your profile.

== Installation ==

The plugin is simple to install:

1. Download the plugin, it will arrive as a zip file
1. Unzip it
1. Upload `email-alerts.zip` directory to your WordPress Plugin directory
1. Go to the plugin management page and enable the plugin
1. Give yourself a pat on the back

== Change Log ==

= v1.2 2012/11/15 =

* Swapped out update_usermeta for update_user_meta
* Bumped the "Tested up to" to WP 3.4.2

= v1.1 2011/08/26 =

* ENHANCEMENT: Notifications can now be sent for posts pending review
* Bumped the "Tested up to" to WP 3.2.1
* Added two FAQs

= v1.05 2010/10/05 =

* BUGFIX: Introduced a bug in the last version, this release should fix it.

= v1.04 2010/10/04 =

* LOCALISATION: Added POT file! Woo hoo!
* FIX: Fixed a weird conditional issue around comments held for approval not being notified
* (More code formatting changes to match WP's function style, with no effect on functionality.)

= v1.03 2010/02/24 =

* FIX: Don't expect $post to be passed by reference
* (Code formatting also changed to match WP's function style, with no effect on functionality.)

= v1.02 2009/04/09 =

* FIX: Further tweaks to ensure that spam comments don't trigger emails. Thanks again to [Henry Work]{http://www.techcrunch.com/author/henry/}.

= v1.01 2009/04/09 =

* FIX: If someone submits a comment that is marked as spam by akismet, alert email is no longer sent. Thanks to [Henry Work]{http://www.techcrunch.com/author/henry/} for the bug report and fix.

= v0.92b 2009-01-09 =

* Seems stable, incremented to v1.0

= v0.92b 2009/01/06 =

* First public beta release

== Screenshots ==

1. Showing the controls on the profile screen
