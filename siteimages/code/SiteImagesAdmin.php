<?php

class SiteImagesAdmin extends ModelAdmin {
    
    public static $managed_models = array(
        'SiteImage'
    );
 
    static $url_segment = 'site-images';
    static $menu_title = 'Site Images';
}