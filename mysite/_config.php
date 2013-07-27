<?php

global $project;
$project = 'mysite';
define('PROJECT_DIR', $project);

global $database;
$database = 'briantme_whvp';
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


Director::set_environment_type("dev");

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