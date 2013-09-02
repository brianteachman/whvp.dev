<?php

class SiteImagesAdmin extends ModelAdmin {
    
    public static $managed_models = array(
        'SiteImage'
    );
 
    static $url_segment = 'site-images';
    static $menu_title = 'Site Images';

    public function getExportFields() {
        return array(
            'ID' => 'ID',
            // 'ClassName' => 'ClassName',
            // 'Created' => 'Created',
            // 'LastEdited' => 'LastEdited',
            'Name' => 'Name',
            'Description' => 'Description',
            'Type' => 'Type',
            'Image.Name' => 'Image Name',
            'Image.Title' => 'Image Title',
            'Image.Filename' => 'Image Path',
        );
    }
}