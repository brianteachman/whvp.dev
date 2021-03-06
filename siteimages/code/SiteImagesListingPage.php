<?php
define('SITEIMAGE_ICON_PATH', 'mysite/icons/image-file.png');
/**
 * 
 */
class SiteImagesListingPage extends Page 
{
	static $icon = SITEIMAGE_ICON_PATH;

    static $has_many = array(
        'SiteImage' => 'SiteImage'
    );

    // public function getCMSFields() {
    //     $fields = parent::getCMSFields();
        
    //     // Create config allowing record editing
    //     $config = GridFieldConfig_RelationEditor::create();
    //     // Set the names and data for our gridfield columns
    //     $config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
    //         'Name' => 'Name',
    //     )); 
    //     $siteimages = new GridField(
    //         'SiteImages',       // Field name
    //         'SiteImage',        // Field title
    //         $this->SiteImage(), // List of all related resources
    //         $config
    //     );      
    //     // Create a tab named "Resources" and add our field to it
    //     $fields->addFieldToTab('Root.Images', $siteimages);

    //     return $fields;
    // }
}
 
class SiteImagesListingPage_Controller extends Page_Controller 
{
    static $allowed_actions = array('view');

    public static $url_handlers = array(
        'view/$ID!' => 'view'
    );

    public function init() {
        parent::init();
        Requirements::css('siteimages/css/siteimages.css');
        Requirements::javascript('siteimages/js/siteimages.js');
    }

    public function getSiteImages() {
        return SiteImage::get();
    }
}