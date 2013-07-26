<?php
define('IMAGEHOLDER_ICON_PATH', 'mysite/icons/imageholder-file.gif');
/**
 * 
 */
class ImageHolder extends Page {

    public static $allowed_children = array('ImagePage');

    public static $icon = IMAGEHOLDER_ICON_PATH;
}

class ImageHolder_Controller extends Page_Controller {
}