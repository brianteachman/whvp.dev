<?php
/**
 * Base Page Model
 */
class Page extends SiteTree {

	public static $db = array(
	);

	public static $has_one = array(
	);

}
/**
 * Base Page Controller
 */
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();

		// Note: you should use SS template require tags inside your templates 
		// instead of putting Requirements calls here.  However these are 
		// included so that our older themes still work
		Requirements::themedCSS('bootstrap');
        // Requirements::css("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css");
		Requirements::themedCSS('typography');
		Requirements::themedCSS('whvp');

        Requirements::javascript("http://code.jquery.com/jquery-1.9.1.js");
        Requirements::javascript("themes/whvp/js/bootstrap.min.js");
        // Requirements::javascript("http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js");
        
        Requirements::javascript('themes/whvp/js/script.js');

//         Requirements::customScript(<<<JS
//             $(document).ready(function () { 
//                 var icon = $("button i");
//                 if (icon.hasClass('yep')) {
//                     icon.removeClass('yep');
//                     icon.addClass('nope');
//                 }
//             });
// JS
//         );

	}

	/**
     * Search form action
     * 
     * @param $data array The user input.
     * @param $form SearchForm The form itself for referencing it.
     * @param $request Request generated for this action.
     * @return ViewableData For empty results redirect back, otherwise return the results in an array and use the SearchResults page.
     */
    public function results($data, $form, $request) {
        if(!empty($data['Search'])) {
            
            $templateData = array(
                'Results' => $form->getResults(8, $data),
                'SearchQueryTitle' => $form->getSearchQuery($data),
            );
            
            return $this->customise($templateData)->renderWith(array(
                'Page_results',
                'Page',
            ));
        } else {
            Director::redirectBack();
            return;
        }
    }
}