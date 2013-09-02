<?php
define('HOME_ICON_PATH', 'mysite/icons/intro-file.gif');
/**
* 
*/
class HomePage extends Page
{
	public static $icon = HOME_ICON_PATH;
}

class HomePage_Controller extends Page_Controller
{
    public function init() {
        parent::init();
        Requirements::javascript('themes/whvp/js/home-page.js');
    }

    // public function getHomepageThumbs() {
    //     return SiteImage::getThumbnails();
    // }
}