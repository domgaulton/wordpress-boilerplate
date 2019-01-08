# Wordpress Boilerplate

## About
* Wordpress v5.0.2

## Plugins
* Elementor - https://wordpress.org/plugins/elementor/
* Elementor Elements - https://wordpress.org/plugins/envato-elements/
* Duplicate Page - https://wordpress.org/plugins/duplicate-page/
* WP-Smush - https://wordpress.org/plugins/wp-smushit/
* Astra Sites - https://wordpress.org/plugins/astra-sites/
* Akismet - https://wordpress.org/plugins/akismet/
* Yoast SEO - https://wordpress.org/plugins/wordpress-seo/
* Media Cleaner - https://wordpress.org/plugins/media-cleaner/
* Migrate WP - https://wordpress.org/plugins/all-in-one-wp-migration/

## Themes
* Sydney - https://wordpress.org/themes/sydney/
* Astra - https://wordpress.org/themes/astra/
* Twenty Nineteen - https://wordpress.org/themes/twentynineteen/
* Generate Press - https://wordpress.org/themes/generatepress/
* Ocean WP - https://wordpress.org/themes/oceanwp/
* Phlox - https://wordpress.org/themes/phlox/
* Tesseract - https://tesseracttheme.com/
* Hestia - https://wordpress.org/themes/search/hestia/
* Page Builder Framework - https://wordpress.org/themes/page-builder-framework/
* Rife Free - https://wordpress.org/themes/rife-free/
* Twenty Sixteen - https://wordpress.org/themes/twentysixteen/
* Bstone - https://wordpress.org/themes/bstone/
* Neve - https://wordpress.org/themes/neve/

## Elementor Templates
* Homepage Business - https://library.elementor.com/homepage-business/
* Homepage App - https://library.elementor.com/homepage-app/
* Insurance - https://elementor-den.com/demo/free/insurance-elementor-template/

## Elementor Templates

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
* Update wp-config.php by adding `define( 'WP_HOME', 'https://website.com' );` and `define( 'WP_SITEURL', 'https://website' );`
* Update wp-content > themes > chosen theme > functions.php by adding `update_option( 'siteurl', 'https://website.com' );` and `update_option( 'home', 'https://website' );`

### Wordpress settings
* Change permalinks (retoggle) from existing, to new, to existing
* Change elementor settings to new URL