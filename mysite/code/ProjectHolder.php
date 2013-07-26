<?php
define('PROJECTHOLDER_ICON_PATH', 'mysite/icons/projectholder-file.gif');
/**
 * 
 */
class ProjectHolder extends Page {
    static $allowed_children = array('ProjectPage');

    public static $icon = PROJECTHOLDER_ICON_PATH;
}

class ProjectHolder_Controller extends Page_Controller {
}