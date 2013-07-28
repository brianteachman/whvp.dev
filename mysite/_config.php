<?php

global $project;
$project = 'mysite';
define('PROJECT_DIR', $project);

global $database;
$database = 'whvp';
require_once('conf/ConfigureFromEnv.php');

i18n::set_locale('en_US');

MySQLDatabase::set_connection_charset('utf8');

// This means MySQL tables are MyISAM
FulltextSearchable::enable();

SSViewer::set_theme('whvp');


// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();


// See: mysite/code/CustomSiteConfig.php
Object::add_extension('SiteConfig', 'CustomSiteConfig');


if (Director::isLive()) {

	// Configure Admin email
    define('EMAIL', 'tim@whvp.org');

    // force www.whvp.org (as opposed to http://whvp.org)
	Director::forceWWW();
} else {
    define('EMAIL', 'me@briant.me');
    Email::send_all_emails_to(EMAIL);
}
Email::setAdminEmail(EMAIL);


// Removing unused options in the CMS editor.
// HtmlEditorConfig::get('cms')->removeButtons('tablecontrols');
// HtmlEditorConfig::get('cms')->removeButtons('ssflash');

// Higher image quality than default.
GD::set_default_quality(85);

// CMS Theme overrides
LeftAndMain::setApplicationName('Admin Console: Whatcom Historic Views and Places');
LeftAndMain::set_application_link('http://whvp.briant.me/');
LeftAndMain::require_css(PROJECT_DIR.'/css/bt_cms_overrides.css');
// LeftAndMain::require_javascript(PROJECT_DIR.'/js/bt_cms_overrides.js');

CMSMenu::remove_menu_item('ReportAdmin');

// CMSMenu::add_menu_item(string $code, string $menuTitle, string $url, 
// 						  string $controllerClass=null, mixed $priority=-1);

Object::add_extension('Image', 'SiteImage');

SpamProtectorManager::set_spam_protector('RecaptchaProtector');
RecaptchaField::$public_api_key = '6LfJVeUSAAAAAHpUka_PlERGrfwWYehZzj71Z9pR';
RecaptchaField::$private_api_key = '6LfJVeUSAAAAADmR0c6w5A7qO2FvpTLNH5gEA3Qv';