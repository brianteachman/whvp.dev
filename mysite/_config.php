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