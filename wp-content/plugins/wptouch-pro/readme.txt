=== Plugin Name ===
Requires at least: 4.0
Stable tag: 4.0.15

= Version 4.0.15 (January 5, 2015) =

* Fixed: Styling of RTL admin updates available page
* Fixed: Menu icon selection when using relative-protocol media URLs
* Fixed: License entry form
* Fixed: Custom landing page redirect to custom latest posts page redirect loop

= Version 4.0.14 (December 29, 2015) =

* Added: On upgrade, migrate sites using the old "WordPress Pages" menu option to a custom WordPress menu
* Fixed: Custom Latest Posts Page handling
* Changed: Reduced cases when customizer cookie is set
* Changed: Fixed a case when the Featured Slider div was output even if disabled

= Version 4.0.13 (December 22, 2015) =

* Fixed: Minor RTL display issues in admin panel
* Fixed: Improper upgrade listing after upgrading to 4.x
* Fixed: Some websites' configuration caused incorrect links to uploaded images
* Fixed: Improved multisite compatibility for theme & extension updates
* Fixed: Occasionally improper filtering of posts outside the mobile theme

= Version 4.0.12 (December 3, 2015) =

* Changed: Now filtering sticky posts from the featured slider when a vategory or tag is chosen as the source
* Fixed: Desktop/mobile switch occasionally did not continue to apply when navigating

= Version 4.0.11 (November 24, 2015) =

* Changed: If plugin is network-activated, no longer show the license page in subsite admin menus.
* Fixed: More robust menu initialization
* Fixed: Better support for old themes
* Fixed: Compatibility with plugins adding custom metaboxes to admin

= Version 4.0.10 (November 13th, 2015) =

* Fixed: Security nonce used by AJAX requests
* Changed: Improvements to the setup wizard

= Version 4.0.9 (November 12th, 2015) =

* Changed: Improved upgrade experience for users of older themes
* Fixed: Default menu icons restored if upgrading from version 3
* Fixed: Social sharing link color if using social network colors

= Version 4.0.8 (November 11th, 2015) =

* Changed: Improved support for Windows/IIS installations
* Fixed: Persistent 'repair' message for certain free-to-pro migration conditions

= Version 4.0.7 (November 10th, 2015) =

* Changed: Make sure all WPtouch Pro scripts and css files are refreshed when the plugin is updated
* Changed: Make sure scripts and css files are loaded in the correct order
* Changed: Allow download for themes and extensions if auto-install fails
* Fixed: An issue which could prevent moving forward during wizard setup

= Version 4.0.6 (November 6th, 2015) =

* Changed: Prevent WordPress theme validation from being run when customizing the mobile theme
* Fixed: Some server configurations were saving incorrect stylesheet paths
* Fixed: An issue which could set WPtouch Pro's Display Mode setting to off after upgrade

= Version 4.0.4 (November 3rd, 2015) =

* Fixed: Customizer support for certain setting types

= Version 4.0.3 (November 2nd, 2015) =

* Changed: Now preserve settings when switching themes after upgrading from 3.x
* Fixed: WPtouch stylesheet was loading on the desktop theme
* Fixed: An issue which could cause shortcode not to be displayed properly
* Fixed: Preventing desktop themes from affecting WPtouch admin styling

= Version 4.0.1 (October 31st, 2015) =

* Changed: Updates to the wizard

= Version 4.0 (October 29th, 2015) =

* Added: Setup wizard for fast and easy configuration of key settings
* Added: Live editing of your chosen mobile theme via the WordPress Customizer
* Added: Full menu management within the WordPress Menu editor
* Added: Streamlined admin interface with clearer settings and options
* Added: Auto-install themes and extensions when you click activate
* Added: License & Support page with ability to de-license the current site and erase, delete, and deactivate functions
* Added: New icon set, Open Iconic
* Added: Custom licensing - buy just the themes and extensions and as many site activations as you want

* Changed: Basic Ads, Related Posts, and Web-App Mode are now optional extensions
* Changed: Moved settings backup/restore to account page
* Changed: Sharing links offer pinterest instead of google+
* Changed: Removed admin notifications code and pointers code
* Changed: Removed theme auto-update
* Changed: Fastclick script was updated
* Changed: Removed references to Twitter and WordTwit

* Fixed: Custom Post Types could not all be deselected
* Fixed: Featured Slider uses custom thumbnail field if one has been selected in blog settings
* Fixed: Private Posts were not being included in the featured slider if a user was logged in and able to view the post
* Fixed: Search in MobileStore using non-ASCII characters could cause JavaScript errors
* Fixed: Untranslated strings in MobileStore
* Fixed: JavaScript conflict introduced in 3.8.7