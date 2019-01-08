# Wordpress Boilerplate

## About
* Wordpress v5.0.2

## Themes
* Astra - https://wordpress.org/themes/astra/
* Bstone - https://wordpress.org/themes/bstone/
* Generate Press - https://wordpress.org/themes/generatepress/
* Hestia - https://wordpress.org/themes/search/hestia/
* Neve - https://wordpress.org/themes/neve/
* Ocean WP - https://wordpress.org/themes/oceanwp/
* Page Builder Framework - https://wordpress.org/themes/page-builder-framework/
* Phlox - https://wordpress.org/themes/phlox/
* Sydney - https://wordpress.org/themes/sydney/

## Plugins
* Akismet - https://wordpress.org/plugins/akismet/
* Astra Sites - https://wordpress.org/plugins/astra-sites/
* Duplicate Page - https://wordpress.org/plugins/duplicate-page/
* Elementor - https://wordpress.org/plugins/elementor/
* Elementor Elements - https://wordpress.org/plugins/envato-elements/
* Media Cleaner - https://wordpress.org/plugins/media-cleaner/
* Migrate WP - https://wordpress.org/plugins/all-in-one-wp-migration/
* WP-Smush - https://wordpress.org/plugins/wp-smushit/
* Yoast SEO - https://wordpress.org/plugins/wordpress-seo/

## Elementor Templates
* Homepage Business - https://library.elementor.com/homepage-business/
* Homepage App - https://library.elementor.com/homepage-app/
* Insurance - https://elementor-den.com/demo/free/insurance-elementor-template/

## Development Tips
* View on iPad - http://www.designshifts.com/view-local-wordpress-website-on-your-iphone-or-ipad-with-mamp/

## Moving to live server

### Backend
* Copy database - https://support.hostgator.com/articles/how-to-rename-a-database-in-phpmyadmin
* Upload database and change wp_options line one url to new URL

### Files
* Copy entire WP folder to new server
* Update wp-config.php settings to new server details
* Update .htaccess file line 4 and line 8 - https://wordpress.stackexchange.com/questions/135415/new-install-of-wordpress-my-url-goes-to-index-of
* Update wp-config.php by adding `define( 'WP_HOME', 'https://website.com' );` and `define( 'WP_SITEURL', 'https://website.com' );`
* Update wp-content > themes > chosen theme > functions.php by adding `update_option( 'siteurl', 'https://website.com' );` and `update_option( 'home', 'https://website.com' );`

### Wordpress settings
* Change permalinks (retoggle) from existing, to new, to existing
* Change elementor settings to new URL