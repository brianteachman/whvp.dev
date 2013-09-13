<?php
define('MAP_ICON_PATH', 'mysite/icons/map-file.svg');
/**
* 
*/
class GoogleMapPage extends Page
{
    public static $icon = MAP_ICON_PATH;
}

class GoogleMapPage_Controller extends Page_Controller
{
    public function init() {
        parent::init();
        // Requirements::clear();

        /** @todo move api_key to _config.php and acces from there */
        Requirements::javascript("https://maps.googleapis.com/maps/api/js?key=AIzaSyBBE-s3YKI3jr2ditYUfBiFHKknNR9gYaU&sensor=false");
        // Requirements::javascript("mysite/javascript/google_map.js");
        Requirements::javascript("mysite/javascript/overlayed_google_map.js");
    }
}
