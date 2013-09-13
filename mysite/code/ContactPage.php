<?php
/**
 * ContactPage
 * 
 * Simply inherit the Mailer class methods, and go!
 * If 1st subclass of Mailer, hide the parent class, Mailer, from the CMS
 */
class ContactPage extends Emailer {
    // 
    public static $hide_ancestor = 'Emailer';
}

/**
 * Contact_Controller
 * 
 * Create form and send to the View:
 * 1) Define email subject
 * 2) Implement the abstract Form() method from parent class, Emailer.php
 * 3) Return configured Sapphire Form instance
 */
class ContactPage_Controller extends Emailer_Controller {
    
    // Define email subject
	protected $subject = 'A message from whvp.org Contact form';
    
    /**
     * Implement abstract Emailer->ContactForm()
     * 
     * @return Form instance
     */
    protected function ContactForm() {
        // Requirements::javascript(PROJECT_DIR.'/javascript/ContactPage.js');
        
        $form = new ContactForm($this, 'ContactForm');

        // enable RecaptchaProtection
        if(class_exists('SpamProtectorManager')) {
            SpamProtectorManager::update_form($form);
        }

        return $form;
    }
}

