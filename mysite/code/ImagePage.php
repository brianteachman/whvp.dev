<?php
define('IMAGE_ICON_PATH', 'mysite/icons/image-file.png');
/**
 * 
 */
class ImagePage extends Page {

    public static $icon = IMAGE_ICON_PATH;

    public static $db = array(
        'SiteLabel'  => 'Text',
        'ImageID'    => 'Text',
        'ImageGrpID' => 'Text',
        // 'Image'      => 'FileField'
    );

    public static $has_one = array(
        // 'Image' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldToTab('Root.Main', new TextField('SiteLabel', 'Site Label'), 'Content');
        $fields->addFieldToTab('Root.Main', new TextField('ImageID', 'Image Id'), 'Content');
        $fields->addFieldToTab('Root.Main', new TextField('ImageGrpID', 'Image Group Id'), 'Content');

        // $UploadField = new UploadField('Image', 'Please upload an image');
        // $UploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx')); 
        // $UploadField->setConfig('allowedMaxFileNumber', 1);
        // $fields->addFieldToTab("Root.Main", $UploadField);
        
        // $fields->removeFieldFromTab("Root.Content.Main","Content");

        return $fields;
    }
}

class ImagePage_Controller extends Page_Controller {
}