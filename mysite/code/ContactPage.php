<?php
/**
 * ContactPage
 * 
 * Simply inherit the Mailer class methods, and go!
 * If 1st subclass of Mailer, hide the parent class, Mailer, from the CMS
 */
class ContactPage extends Emailer {

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
	protected $subject = 'Correspondence from whvp.org Contact form';
    
    /**
     * Implement subclass Emailer::Form()
     * 
     * @return Form instance
     */
    protected function Form() {
        // include specific js file
        // Requirements::javascript(PROJECT_DIR . '/javascript/ContactPage.js');
        
        $firstName = new TextField('FirstName', 'First Name' . SPAN);
        // $firstName->addExtraClass('rounded');
        
        $surname = new TextField('Surname', 'Surname' . SPAN);
        // $surname->addExtraClass('rounded');
        
        $email = new EmailField('Email', 'Email Address' . SPAN);
        // $email->addExtraClass('rounded');
        
        $phone = new TextField('Phone', 'Phone Number' . SPAN);
        // $phone->addExtraClass('rounded');
        
        $comment = new TextareaField('Comment', 'Message' . SPAN);
        // $comment->addExtraClass('rounded');
        $comment->setRows(20);
        $comment->setColumns(10);
        
        $fields = new FieldSet(
            $firstName,
            $surname,
            $email,
            $phone,
            $comment
        );
        
        $send = new FormAction('sendemail', 'Send');
        $send->addExtraClass('btn');
        
        $actions = new FieldSet(
            $send
        );
        
        $validator = new RequiredFields(
            'email',
            'comment',
            'firstName',
            'surname'
        );
        
        // Return configured Sapphire Form instance
        return new Form($this, 'Form', $fields, $actions, $validator);
    }
}

