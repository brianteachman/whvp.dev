<?php

class ResourcesAdmin extends ModelAdmin 
{
    static $managed_models = array(
        // Can manage multiple models
        'Resource',
        // 'Project'
    );
    // Linked as /admin/projects/
    static $url_segment = 'resources'; 
    static $menu_title = 'Resources';

    public function getExportFields() {
        return array(
            'ID' => 'ID',
            // 'ClassName' => 'ClassName',
            // 'Created' => 'Created',
            // 'LastEdited' => 'LastEdited',
            'Name' => 'Name',
            'Description' => 'Description',
            'Type' => 'Type',
            'File.Name' => 'File Name',
            'File.Filename' => 'File Path',
            'Project.Title' => 'Project',
        );
    }
}