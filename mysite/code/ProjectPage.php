<?php
define('PROJECT_ICON_PATH', 'mysite/icons/project-file.gif');
/**
 * 
 */
class ProjectPage extends Page {

    public static $icon = PROJECT_ICON_PATH;

    public static $db = array(
        'ImageNo' => 'Text',
        // 'topic' => 'Text'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();
         
        $fields->addFieldToTab('Root.Main', new TextField('ImageNo'), 'Content');
        // $fields->addFieldToTab('Root.Main', new TextField('Author'), 'Content');
         
        return $fields;
    }
}

class ProjectPage_Controller extends Page_Controller {
}