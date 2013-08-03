<?php

global $project;
$project = 'mysite';
define('PROJECT_DIR', $project);

global $database;
$database = 'briantme_whvp2';
require_once('conf/ConfigureFromEnv.php');

i18n::set_locale('en_US');

MySQLDatabase::set_connection_charset('utf8');

// This means MySQL tables are MyISAM
FulltextSearchable::enable();

SSViewer::set_theme('whvp');

// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();


/**
 * CMS Class overrides ------------------------------------------ */

// See: mysite/code/CustomSiteConfig.php
// Object::add_extension('SiteConfig', 'CustomSiteConfig');

// See: mysite/code/SiteImage.php
// Object::add_extension('Image', 'SiteImage');


/**
 * Environment Configuration ------------------------------------ */

// Site administrator contact
define('ADMIN_EMAIL', 'me@briant.me');

if (Director::isLive()) {
	// 
    // force www.whvp.org (as opposed to http://whvp.org)
	// Director::forceWWW();
	// 
} else {
    Email::send_all_emails_to(ADMIN_EMAIL);
}
Email::setAdminEmail(ADMIN_EMAIL);


/**
 * CMS Configuration ------------------------------------------- */

// CMS Theme overrides
LeftAndMain::setApplicationName('Admin Console: Whatcom Historic Views and Places');
LeftAndMain::set_application_link('http://whvp.briant.me/');
LeftAndMain::require_css(PROJECT_DIR.'/css/bt_cms_overrides.css');
// LeftAndMain::require_javascript(PROJECT_DIR.'/js/bt_cms_overrides.js');

// Customize CMS Menu
CMSMenu::remove_menu_item('ReportAdmin');
/**
 * @param string $code 			  Unique identifier for this menu item
 * @param string $menuTitle 	  Localized title showing in the menu bar
 * @param string $url 			  A relative URL that will be linked in the menu bar.
 * @param string $controllerClass The controller class for this menu, defaults to null
 * @param mixed  $priority     	  Defaults to -1
 */
// CMSMenu::add_menu_item($code, $menuTitle, $url, $controllerClass, mixed $priority);

// Removing unused options in the CMS editor.
// HtmlEditorConfig::get('cms')->removeButtons('tablecontrols');
// HtmlEditorConfig::get('cms')->removeButtons('ssflash');

/** ----------------------------------------------------- */


// Higher image quality than default.
GD::set_default_quality(85);

// Dev server credentials, update to clients server for Live server
// RecaptchaField::$public_api_key = '6LfJVeUSAAAAAHpUka_PlERGrfwWYehZzj71Z9pR';
// RecaptchaField::$private_api_key = '6LfJVeUSAAAAADmR0c6w5A7qO2FvpTLNH5gEA3Qv';
// SpamProtectorManager::set_spam_protector('RecaptchaProtector');
// RecaptchaField::$private_api_key = '6LfJVeUSAAAAADmR0c6w5A7qO2FvpTLNH5gEA3Qv';