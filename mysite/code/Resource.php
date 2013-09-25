<?php
/**
 * Resource
 */
class Resource extends DataObject
{
    static $db = array(
        'Name' => 'Varchar', 
        'Description' => 'Text',
        'Type' => 'Enum("Map, Article, Presentation")',
    );

    static $has_one = array(
        'Project' => 'ProjectPage', // ProjectID
        'File'    => 'File'         // FileID
    );

    static $summary_fields = array(
        'Name', 
        'File.Name',
        'Type',
        'Project.Title'
    );

    static $searchable_fields = array(
        'Name', 'Description', 'Project.Title', 'File.Name'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', new TextField('Name'), 'File');
        $fields->addFieldToTab('Root.Main', new TextField('Description'), 'File');

        $resources = new TreeDropdownField(
            'FileID',           // Field name
            'Choose an File',   // Field title
            'File'              // object-type to list in the tree
        );
        // $resources->setTreeBaseID(37);
        $fields->addFieldToTab('Root.Main', $resources, 'File');

        $type = new DropdownField(
            'Type',
            'Type',
            array(
                'Article' => 'Article',
                'Map' => 'Map',
                'Presentation'=> 'Pesentation'
            )
        );
        $fields->addFieldToTab('Root.Main', $type, 'File');

        $projects = new TreeDropdownField(
            'ProjectID',           // Field name
            'Associated Project',  // Field title
            'ProjectPage'          // object-type to list in the tree
        );
        // $projects->setTreeBaseID(9);
        $fields->addFieldToTab('Root.Main', $projects);

        return $fields;
    }
}