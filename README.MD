# Wordpress Boilerplate

## About
* Wordpress v5.0.2

## Themes / Plugins

### Themes

* Astra - https://wordpress.org/themes/astra/
* Bstone - https://wordpress.org/themes/bstone/
* Generate Press - https://wordpress.org/themes/generatepress/
* Hestia - https://wordpress.org/themes/search/hestia/
* Neve - https://wordpress.org/themes/neve/
* Ocean WP - https://wordpress.org/themes/oceanwp/
* Page Builder Framework - https://wordpress.org/themes/page-builder-framework/
* Phlox 5/5 - https://wordpress.org/themes/phlox/
* Sydney - https://wordpress.org/themes/sydney/

### Plugins
* Akismet - https://wordpress.org/plugins/akismet/
* Astra Sites - https://wordpress.org/plugins/astra-sites/
* Contact Form 7 - https://wordpress.org/plugins/contact-form-7/
* Duplicate Page - https://wordpress.org/plugins/duplicate-page/
* Elementor - https://wordpress.org/plugins/elementor/
* Elementor Elements - https://wordpress.org/plugins/envato-elements/
* Media Cleaner - https://wordpress.org/plugins/media-cleaner/
* WP-Smush - https://wordpress.org/plugins/wp-smushit/
* Yoast SEO - https://wordpress.org/plugins/wordpress-seo/

## Templates
* See `wp-content/templates` for files
* Default to Phlox for builds. Header, Footer, Social, Performance

### Elementor Templates
* Homepage Business - https://library.elementor.com/homepage-business/
* Homepage App - https://library.elementor.com/homepage-app/
* Insurance - https://elementor-den.com/demo/free/insurance-elementor-template/

### Katka
* Blocks - https://elementortemplatepack.com/elementorblocks/
* Pages - https://elementortemplatepack.com/katka-elementor-page-templates/

### Elementor Den
* Elementor Den - https://elementor-den.com/product-category/free-elementor-templates/?ssl=1

### Astra Sites
* Free Elementor Pages - https://websitedemos.net/?page-builder=elementor&category=free

### Phlox
* Live demos - https://phlox.pro/#live-demos
* Lots of configuration

## Development Tips
* View on iPad - http://www.designshifts.com/view-local-wordpress-website-on-your-iphone-or-ipad-with-mamp/

## UAT Project Kick Off
* Create subdomain in cpanel using `/subdomain` as document root
* Set up database using uat user with all privileges
* Download latest wordpress
* Using FTP add latest wordpress to subdomain
* Install using client name as username and generate random password
* Install themes / plugins from above

## Moving to live server

### Backend
* Copy database - https://support.hostgator.com/articles/how-to-rename-a-database-in-phpmyadmin
* Upload database and change wp_options line one url to new URL

### Files
* Copy entire WP folder to new server
* Update wp-config.php settings to new server details
* Update .htaccess file line 4 and line 8 - https://wordpress.stackexchange.com/questions/135415/new-install-of-wordpress-my-url-goes-to-index-of
* Update wp-config.php URL settings - https://codex.wordpress.org/Changing_The_Site_URL 
```php
define( 'WP_HOME', 'https://website.com' );
define( 'WP_SITEURL', 'https://website.com' );
```
* (Optional - If you have access to the site via FTP, then this method will help you quickly get a site back up and running, if you changed those values incorrectly.) Update wp-content > themes > chosen theme > functions.php - Add these two lines to the file, immediately after the initial "<?php" line 
```php
update_option( 'siteurl', 'https://website.com' );
update_option( 'home', 'https://website.com' );
```
* Go to new url with /wp-admin/upgrade.php in incognito browser

### Wordpress settings
* Change permalinks (retoggle) from existing, to new, to existing
* Change elementor settings to new URL - Elementor > Tools > Replace URL
* Turn off ‘discourage search engines to index this site’ Settings > Reading