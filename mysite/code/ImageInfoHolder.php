<?php
define('IMAGEHOLDER_ICON_PATH', 'mysite/icons/imageholder-file.gif');
/**
 * 
 */
class ImageInfoHolder extends Page {

    public static $allowed_children = array('ImageInfoPage');

    public static $icon = IMAGEHOLDER_ICON_PATH;
}

class ImageInfoHolder_Controller extends Page_Controller {
}