<?php
define('EMAILER_ICON_PATH', 'mysite/icons/mail-file.gif');
/**
 * Base page for all contact forms.
 *
 * @package mysite
 */
class Emailer extends Page {
	
    /**
     * Define receiver and thank you message.
     */
	public static $db = array(
        'Mailto' => 'Varchar(100)',
        'SubmitText' => 'HTMLText'
    );
    
    public static $icon = EMAILER_ICON_PATH;
    
    /**
     * Make the fields available in the CMS.
     *
     * @return FieldSet The added CMS fields.
     */
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab(
            "Root.Email",
            new EmailField('Mailto', 'Recipient')
        );
        $fields->addFieldToTab(
            "Root.Email",
            new HTMLEditorField('SubmitText', 'Email sent confirmation text')
        );
        return $fields;
    }
}

/**
 * Base Controller for sending emails, to be extended by the child classes.
 *
 * @package mysite
 */
abstract class Emailer_Controller extends Page_Controller {
	
    /**
     * Functions exposed via their URL.
     */
	public static $allowed_actions = array(
        'sent',
    );
    
    protected $subject = 'Request by form submission';
    
    public function init() {
        parent::init();
        Requirements::javascript(PROJECT_DIR . '/thirdparty/validate/jquery.validate.pack.js');
        define('SPAN', '<span class="required">*</span');
    }
    
    /**
     * The form itself, to be implemented by the child classes.
     */
    abstract protected function Form();
    
    /**
     * The form handler.
     */
    public function sendemail($data, $form) {
        if (!empty($this->Mailto)) {
            $to = $this->Mailto;
        } else {
            $to = EMAIL;
        }
        $from = $data['Email'];
        $subject = $this->subject;

        $email = new Email($from, $to, $subject);
        $email->setTemplate('ContactEmail');
        $email->populateTemplate($data);
        $email->send();
        
        Director::redirect($this->Link('sent'));
    }
    
    /**
     * Provide a page for displaying a message after sending an email.
     */
    public function sent() {
        return array();
    }
    
    /**
     * Thank you message.
     *
     * @return boolean Tell the template if this URL parameter is set or not.
     */
    protected function IsSuccess() {
        // $url = Director::URLParams();
        $url = $this->request->params();
        return (isset($url['Action']) && ($url['Action'] == 'sent'));
    }
}
