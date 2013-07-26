<?php
define('IMAGE_ICON_PATH', 'mysite/icons/image-file.png');
/**
 * 
 */
class ImageInfoPage extends Page {

    public static $icon = IMAGE_ICON_PATH;

    public static $db = array(
        'ImageLabel' => 'Text',
        'ImgGrpID' => 'Text',
        // 'Image' => 'FileField'
    );

    public static $has_one = array(
        // 'Image' => 'Image'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        
        $fields->addFieldToTab('Root.Main', new TextField('ImageLabel', 'Image Label'), 'Content');
        $fields->addFieldToTab('Root.Main', new TextField('ImgGrpID', 'Image Group Id'), 'Content');

        $UploadField = new UploadField('Image', 'Please upload an image');
        $UploadField->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx')); 
        $UploadField->setConfig('allowedMaxFileNumber', 5);
        $fields->addFieldToTab("Root.Main", $UploadField);
        
        // $fields->removeFieldFromTab("Root.Content.Main","Content");

        return $fields;
    }
}

class ImageInfoPage_Controller extends Page_Controller {
}