<?php
define('PROJECTHOLDER_ICON_PATH', 'mysite/icons/projectholder-file.gif');
/**
 * 
 */
class ProjectHolder extends Page {

	public static $db = array(
        'ProjectsUnderway' => 'HTMLText',
        'ProjectsCompleted' => 'HTMLText',
    );

    static $allowed_children = array('ProjectPage');

    public static $icon = PROJECTHOLDER_ICON_PATH;

    public function getCMSFields() {
        $fields = parent::getCMSFields();
         
        $fields->addFieldToTab('Root.Main', new HtmlEditorField('ProjectsUnderway', 'Projects Underway'), 'Content');
        $fields->addFieldToTab('Root.Main', new HtmlEditorField('ProjectsCompleted', 'Projects Completed'), 'Content');
        $fields->removeFieldFromTab("Root.Main", "Content");
        return $fields;
    }
}

class ProjectHolder_Controller extends Page_Controller {
}