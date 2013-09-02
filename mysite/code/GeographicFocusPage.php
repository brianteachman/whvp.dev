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
        Requirements::javascript("themes/whvp/js/geographic-focus.js");

        // override/replace js map
        Requirements::clear("mysite/javascript/google-map.js");
        Requirements::javascript("mysite/javascript/overlayed_google_map.js");
    }
}