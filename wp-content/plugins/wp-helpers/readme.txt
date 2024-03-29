=== WordPress Helpers ===
Contributors: piklist, p51labs, sbruner
Tags: piklist, settings, admin bar, dashboard widgets, widgets, visual editor, html editor, excerpts, excerpt length, autosave, howdy, private, protected, close comments, auto linking, AIM, Yahoo IM, Jabber, Google Talk, rss feeds, feeds, maintenance, maintenance mode, under construction
Tested up to: 3.9
Requires at least: 3.4
Stable tag: 1.5.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The missing settings page for WordPress.

== Description ==

WordPress Helpers opens up the missing settings you wish were in WordPress.

**This plugin requires <a href="http://wordpress.org/extend/plugins/piklist/">Piklist</a>.**

[Watch the WordPress Helpers Demo](http://www.youtube.com/watch?v=ZYSUDvodWxI&hd=1):

http://www.youtube.com/watch?v=ZYSUDvodWxI&hd=1

= With WordPress Helpers you can easily: =
* Take control of the WordPress Admin Bar... including "Howdy".
* Show ID's on edit screens for Posts, Pages, Categories, Tags, Users, Media, Custom Post Types and Custom Taxonomies.
* Expose the hidden WordPress settings page.
* Disable the theme switcher.
* Remove the "Screen Options" tab.
* Disable Upgrade Notifications for WordPress, Themes and Plugins (individually).
* Hide Dashboard widgets.
* Set Dashboard columns.
* View Screen Information in the Help Tab.
* Bring back Blogrolls.

= Writing =
* Set the default Post editor (Visual or HTML).
* Set Post Editor columns.
* Totally disable the Visual Editor.
* Increase the height of the Excerpt box when writing a Post.
* Disable Autosave.
* Set the Post Per Page on the edit screen.

= Reading =
* Set Excerpt length by characters or words.
* Remove the "Private" and "Protected" title prefixes.
* Disable RSS Feeds.
* Delay publishing of RSS feeds.
* Add Featured Images to your RSS Feed.
* Include/Exclude Post Types in Search.
* Disable XML-RPC (WordPress 3.5 or later)

= Discussion =
* Do not allow comments on Pages.
* Remove auto linking in comments.
* Disable Self Pinging.

= Appearance =
* Enhanced Body/Post Classes: Browser detect, Taxonomies (including hierarchy levels), post date, has post thumbnail, author information, logged in users, multisite, odd/even (post archives only), post excerpt.
* Remove any/all WordPress default widgets.
* Run any shortcode in a widget.
* Remove WordPress version, Feed Links, RSD Link, wlwmanifest and relational links for the posts adjacent to the current post, from your theme header.

= User Profiles =
* Remove the Admin color scheme option from the User Profiles.
* Remove AIM, Yahoo IM, Jabber/Google Talk.

= User Communication =
* Change WordPress "from" email address.

= Site Visitors =
* Put your site into Maintenance Mode.
* Create a Private website.
* Redirect vistors to the home page after login.
* Display an notice to your users in the admin or on the front of your site.


= Read The Reviews =
* <a href="http://wpmu.org/wordpress-helpers-the-missing-settings-page-for-wordpress/">WPMU.org</a>
* <a href="https://managewp.com/wordpress-settings-wordpress-helpers/"/>ManageWP.com</a>



== Frequently Asked Questions ==

= What does this plugin do? =
WordPress Helpers provides access to all those settings you wish came with WordPress, providing you with an easy way to take control of WordPress.

= Some of the settings don't seem to work =
Though WordPress Helpers attempts to take control over your theme and plugins, sometimes it just can't.  If a setting in WordPress Helpers is not working, another plugin or your theme is overriding the setting.

= I have an idea for another helper! =
Awesome! We're always looking for new ideas. Please submit them on our <a href="http://piklist.com/support/forum/wordpress-helpers/">support forum</a>.

== Installation ==

**This plugin requires <a href="http://piklist.com/">Piklist</a>.**

* Install and activate the <a href="http://wordpress.org/extend/plugins/piklist/">Piklist plugin</a>.
* Install and activate WordPress Helpers like any other plugin.

== Changelog ==

= 1.5.7 =
* FIXED: Widgets and Dashboard Widgets works properly. You may need to resave them.
* Removed deprecated "dashboard_secondary".

= 1.5.6 =
* FIXED: Checkboxes work as expected.
* FIXED: Tabs in correct order.

= 1.5.5 =
* Better compatiblity with Piklist 0.9.4

= 1.5.4 =
* ENHANCED: updated to Piklist Checker 0.5.0

= 1.5.3 =
* Now requires WordPress 3.4.
* Fixed notices.

= 1.5.2 =
* ENHANCED: Better Frontend notice.
* ENHANCED: Visitor messages can be written in Textareas.
* ENHANCED: Allow other plugins to also add to the Terms columns.
* FIX: Maintenance Mode uses your custom message for the 503 response.
* Bug fixes.

= 1.5.1 =
* FIX: Hide Frontend Admin Bar.

= 1.5.0 =
* FIX: Maintenance Mode.

= 1.4.9 =
* NEW: System Information
* NEW: Change WordPress "from" email address.
* NEW: Screen Information in Help Tab.
* ENHANCED: Site ID in Multisite.
* ENHANCED: User message can now be filtered by browser.
* ENHANCED: Remove Dashboard widget: Browser Upgrade Warning

= 1.4.8 =
* ENHANCED: Updated to latest version of Piklist Checker.

= 1.4.7 =
* NEW: Delay publishing of RSS feed.
* FIX: Upgrade issue with Piklist Checker.

= 1.4.6 =
* NEW: Expose the hidden WordPress settings page.
* ENHANCED: Nice new update message.
* FIX: "Change Howdy" markup is now correct.
* FIX: 503 response for Maintenance mode.

= 1.4.5 =
* NEW: Private Site: Force site to login page.
* NEW: Redirect to Home Page after user logs in.
* ENHANCED: Moved settings sections around for better access.
* FIX: Excerpt CSS only triggers on post pages.
* FIX: Link to disable Maintenance Mode is correct.

= 1.4.4 =
* NEW: Enable Link Manager (WordPress 3.5+ only)
* FIX: Show ID's logic is now confined to is_admin.
* FIX: Show ID's does not interfere with other table modifications.

= 1.4.3 =
* NEW: Users and Links are now sortable.
* FIX: "Include in Search" option should not affect admin search.

= 1.4.2 =
* Temporarily removed System Info tab

= 1.4.1 =
* Better conditional fields.
* Fixed notices.

= 1.4.0 =
* New Feature: User notices.
* New Feature: Disable XML-RPC in WordPress 3.5
* Added Maintenance Mode Message to login screen.

= 1.3.0 =
* New Feature: Include/Exclude Post Types in Search.
* Reduce width of ID columns.
* Very basic BuddyPress support for enhanced classes (more BuddyPress support coming!).
* Bugfix: PHP errors on some enhanced classes.
* Piklist Checker v0.4.0.

= 1.2.1 =
* Bugfix: Piklist checker deactivates plugin on Piklist upgrade.

= 1.2.0 =
* New Feature: Disable upgrade notifications for WordPress Core, Plugins and Themes.
* New Feature: Maintenance Mode.
* New Feature: Enhanced class: JS detect in Body tag.

= 1.1.0 =
* Reduced the number of tabs.
* New Feature: Enhanced Body/Post classes.
* New Feature: Do not allow comments on Pages.
* New Feature: Disable Self Pinging.
* Removed Feature: "Close comments for old Posts", since it's already an option in WordPress.
* Bugfix: screen_layout_columns_dashboard should only trigger when default not selected.
* Added some descriptions to settings.
* Replaced remove_menu with remove_node.

= 1.0.1 =
* Removed some left over code.
* Added a space for Howdy!

= 1.0.0 =
* Initial release!


== Upgrade Notice ==

= 1.2.0 =
NEW FEATURES: Disable upgrade notifications, Maintenance Mode and and JS detect in Body tag.