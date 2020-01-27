## IndieWeb Twenty Fifteen Theme ##
This is an [IndieWeb friendly](https://indieweb.org/friendly) forked version of the annual WordPress [Twenty Fifteen theme](https://wordpress.org/themes/twentyfifteen/) that has improved support for [microformats version 2](https://indieweb.org/microformats). It is a relatively clean, simple, and responsive design which is well suited for use as a personal website.

### Child Theme ###
It is recommended that one use this theme in conjunction with a child theme so you can make your own changes and customizations if necessary. 

### Features ###
#### Microformats 2 ####
Rough outline of the changes from the original:
* Modified the header.php file to remove the erroneous hfeed microformat that was being put on all pages.
* Changed the archive.php page to add h-feed and hfeed to create the appropriate feed pages (I need to doublecheck this in an actual reader, but it looks good on the page and seems to parse properly.)
* In the functions.php file, I’ve wrapped the_content in e-content, wrapped the_excerpt in p-summary
* In the functions.php file, I’ve added a filter that will add h-entry to the correct place.
* The meta data section of posts created by inc/template-tags.php has been modified to provide an h-card on posts. While not shown visually on the page, if users have a gravatar associated with their user account, it should be found by parsers and is able to be displayed when leaving responses on others' sites.

#### Brid.gy ####
Thanks to improved microformats support, this theme should be more compatible than most for use with Brid.gy and particular [Brid.gy publish functionality](https://brid.gy/about#publishing). The [Syndication Links plugin](https://wordpress.org/plugins/syndication-links/) is a simple way to enable Bridgy publish functionality, if desired.

#### Webmentions ####
The function.php file has a [snippet for automatically approving Webmentions](https://indieweb.org/Wordpress_Webmention_Plugin#Automatically_approving). This can be commented out for those who may have spam issues in the future.

#### Footer ####
The footer includes badges to show support for IndieWeb and Microformats. If one adds the [Webmention plugin](https://wordpress.org/plugins/webmention/), a line at the bottom of the footer.php file can be uncommented to reveal the Webmention badge as well.

#### Customizer ####
This theme is still compatible with the WordPress customizer and has a few [built-in options for changing](https://wordpress.com/theme/twentyfifteen) the theme's colors as well as adding header and background images to personalize it to one's taste.

### To do list ###
* For better Syndication Links plugin compatibility, move the syndication links meta into /inc/template-tags.php
* For better Simple Location compatibility, move the Simple Location meta output into /inc/template-tags.php
* If/then statement in footer.php to check for Webmention support to automatically show that badge which is currently commented out.
* Code for declaring microformats support to other plugins?