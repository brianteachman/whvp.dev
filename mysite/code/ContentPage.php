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
/**
 * Base Page Controller
 */
class ContentPage_Controller extends Page_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();
	}

}