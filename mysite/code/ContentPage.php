<?php
define('PAGE_ICON_PATH', 'mysite/icons/content-file.gif');
/**
 * Extended Site Page Model
 */
class ContentPage extends Page {

	public static $hide_ancestor = 'Page';

	public static $icon = PAGE_ICON_PATH;

	public static $db = array(
	);

	public static $has_one = array(
	);
}
class ContentPage_Controller extends Page_Controller {

	// public static $allowed_actions = array ();

	public function init() {
		parent::init();
	}

}