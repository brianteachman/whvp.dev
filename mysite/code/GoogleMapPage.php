<?php

/**
* 
*/
class GoogleMapPage extends Page
{
}

class GoogleMapPage_Controller extends Page_Controller
{
    public function init() {
        parent::init();
        // Requirements::clear();

        /** @todo move api_key to _config.php and acces from there */
        Requirements::javascript("https://maps.googleapis.com/maps/api/js?key=AIzaSyBBE-s3YKI3jr2ditYUfBiFHKknNR9gYaU&sensor=false");
        Requirements::javascript("mysite/javascript/google_map.js");
    }
}
