<?php

global $project;
$project = 'mysite';
define('PROJECT_DIR', $project);

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => '',
	"password" => '',
	"database" => '',
	"path" => '',
);

// Set the site locale
i18n::set_locale('en_US');

MySQLDatabase::set_connection_charset('utf8');

SSViewer::set_theme('whvp');

FulltextSearchable::enable();


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


/**
 * Removing unused options in the CMS editor.
 */
// HtmlEditorConfig::get('cms')->removeButtons('tablecontrols');
// HtmlEditorConfig::get('cms')->removeButtons('ssflash');

/**
 * Set the image quality higher than the default.
 */
GD::set_default_quality(85);
