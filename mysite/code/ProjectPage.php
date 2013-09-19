<?php
define('PROJECT_ICON_PATH', 'mysite/icons/project-file.png');
/**
 * 
 */
class ProjectPage extends ContentPage {

    public static $icon = PROJECT_ICON_PATH;

    static $db = array(
        'Shortcode' => 'Varchar(10)',
    );

    static $has_many = array(
        'Resource' => 'Resource'
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        // This tab is added for some reason?
        $fields->removeFieldFromTab('Root', 'Dependent');
        
        $fields->addFieldToTab('Root.Main', new TextField('Shortcode', 'Project Shortcode <small></small>'), 'Content');

        // Create config allowing record editing
        $config = GridFieldConfig_RelationEditor::create();
        // Set the names and data for our gridfield columns
        $config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
            'Name' => 'Name',
            'Type' => 'Type',
            'Project.Title'=> 'Project' // Retrieve from a has-one relationship
        ));
        $resources = new GridField(
            'Resources',       // Field name
            'Resource',        // Field title
            $this->Resource(), // List of all related resources
            $config
        );
        // Create a tab named "Resources" and add our field to it
        $fields->addFieldToTab('Root.Resources', $resources); 

//         $label = <<<LABEL
//     <div class="label">

//         <div class="qr-code">
//             <img src="https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl={$url}" alt="">
//         </div>

//         <div class="label-text">
//             No. http://www.whvp.com/projects/<span class="image-link" title="Link to Subject Info">002-WF</span><br>
//             Photo by <span class="image-creator" title="Image Creator">Leslie Corbett</span>, <span class="image-date" title="Date Created">1923</span>, Courtesy <span class="image-owner" title="Image Rights Owner">Whatcom Museum</span>. <br>
//             Spotting by Tim Wahl, printing by Quicksilver Photolab
//         </div>
//     </div>
// LABEL;
//         $fields->addFieldToTab(
//             'Root.Main', 
//             new LiteralField('Label', $label),
//             'Metadata'
//         );

        return $fields;
    }

    public function getResources() {
        return Resource::get();
    }
}

class ProjectPage_Controller extends ContentPage_Controller {
    public function init() {
        parent::init();
        Requirements::themedCSS('projects');
    }
}