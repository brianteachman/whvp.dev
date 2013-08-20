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
}