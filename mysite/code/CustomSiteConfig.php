<?php
 
class CustomSiteConfig extends DataExtension {
     
    static $db = array(
        'Email' => 'Varchar(64)',
        // 'FooterContent' => 'HTMLText'
    );
 
    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab('Root.Main', new TextField('Email'));
        // $fields->addFieldToTab("Root.Main", new HTMLEditorField("FooterContent", "Footer Content"));
    }
}