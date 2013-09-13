<?php
/**
* 
*/
class GeographicFocusPage extends GoogleMapPage
{
    public static $hide_ancestor = 'GoogleMapPage';
}

class GeographicFocusPage_Controller extends GoogleMapPage_Controller
{
    public function init() {
        parent::init();
        // Requirements::clear();

        Requirements::themedCSS('geographic-focus');
        Requirements::javascript($this->ThemeDir()."/js/geographic-focus.js");
    }
}