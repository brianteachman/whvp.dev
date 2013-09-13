<?php
/**
 * 
 */
class SiteImage extends DataObject
{
    public static $db = array(
        'Name' => 'Varchar(100)',
        'Description' => 'HTMLText',
        // 'Slug'  => 'Varchar(100)',
        'Created' => 'Date',
    );

    public static $has_one = array(
        'Image' => 'Image',
    );

    static $summary_fields = array(
        'Name', 
        'Description', 
        'Image.Name',
        'Image.Title',
        'Image.Filename',
        'Created',
    );

    public function getCMSFields() 
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Upload', new DateField('Created'));

        $site_images = new TreeDropdownField(
            'ImageID', 
            'Select Image', 
            'Image'
        );
        $site_images->setTreeBaseID(3);
        $fields->addFieldToTab('Root.Main', $site_images, 'Image');

        // $slug = $this->slug($fields->fieldByName('Image.Name'));
        // $fields->addFieldToTab('Root.Main', new LiteralField('', 
        //     '<p>' . $slug . '</p>'
        // ));
        
        return $fields;
    }

    public function slug($string) {
        $slug = strstr($string, '.', true);
        return str_replace(' ', '-', $slug);
    }

    /**
     * Renders themes/whvp/templates/Includes/SiteInfo.ss
     *
     * $Name ($Image.Name)
     */
    function getInfo() {
        return $this->renderWith('SiteInfo');
    }

    /**
     * Creates the thumnail for the summary fields to use
     */
    public function getThumbnail() { 
        return $this->Image()->CMSThumbnail();
    }

}