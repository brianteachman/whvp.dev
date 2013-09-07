<?php
// define('LISTING_PAGE_ICON_PATH', 'mysite/icons/list-file.gif');

/**
 * Extended Site Page Model
 */
class SplitContentPage extends ContentPage {

    // public static $icon = LISTING_PAGE_ICON_PATH;

	public static $db = array(
		'SubHeader1' => 'Varchar(120)',
		'SubHeader2' => 'Varchar(120)',
		'Content2' => 'HTMLText',
	);

	// public static $has_one = array();

	public function getCMSFields() {
        $fields = parent::getCMSFields();

        // $fields->removeFieldFromTab('Root', 'Dependent');
        
        $fields->addFieldToTab('Root.Main', new TextField('SubHeader1', 'Top Header'), 'Content');
        $fields->addFieldToTab('Root.Main', new TextField('SubHeader2', 'Bottom Header'), 'Metadata');
        $fields->removeByName('Content'); 
        $fields->addFieldToTab("Root.Main", new HTMLEditorField("Content", 'Top Content'), 'SubHeader2');
        $fields->addFieldToTab('Root.Main', new HtmlEditorField('Content2', 'Bottom Content'), 'Metadata');

        return $fields;
    }
}
/**
 * Base Page Controller
 */
class SplitContentPage_Controller extends ContentPage_Controller {

	// public static $allowed_actions = array ();

	// public function init() { parent::init(); }

}