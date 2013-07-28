<?php

class SiteImage extends DataExtension {

    static $create_table_options = array(
        'MySQLDatabase' => 'ENGINE=MyISAM'
    );
    
    static $db = array(
        'Description' => 'Text'
    );
     
    // public static $belongs_many_many = array(
    //     'GalleryPage' => 'GalleryPage'
    // );
    
    function getCustomFields() {
        $fields = new FieldList();
        $fields->push(new TextField('Title', 'Title'));
        $fields->push(new TextareaField('Description', 'Description'));
        return $fields;
    }
}