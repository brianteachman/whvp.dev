<?php
define('PROJECTHOLDER_ICON_PATH', 'mysite/icons/data-file.png');
/**
 * 
 */
class ProjectHolder extends SplitContentPage {
    // static $hide_ancestor = 'SplitContentPage';
    
    static $allowed_children = array('ProjectPage');
    
    static $icon = PROJECTHOLDER_ICON_PATH;
}

class ProjectHolder_Controller extends SplitContentPage_Controller {
}