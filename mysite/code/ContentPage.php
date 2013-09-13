<?php
define('CONTENT_ICON_PATH', 'mysite/icons/content-file.svg');
/**
 * Extended Site Page Model
 */
class ContentPage extends Page {

	static $hide_ancestor = 'Page';

	static $icon = CONTENT_ICON_PATH;

	static $db = array(
	);

	static $has_one = array(
	);
}
class ContentPage_Controller extends Page_Controller {

	// public static $allowed_actions = array ();

	public function init() {
		parent::init();
	}

}