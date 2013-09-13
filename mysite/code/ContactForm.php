<?php
/**
* 
*/
class ContactForm extends Form
{
    public function __construct($controller, $name) {
        $fields = new FieldList(
            TextField::create('Name')->addExtraClass('input-lg'),
            EmailField::create('Email')->addExtraClass('input-lg'),
            TextareaField::create('Message')->setRows(6)
                                            ->setColumns(60)
                                            ->addExtraClass('input-lg')
        );
        $actions = new FieldList(FormAction::create("sendemail")->setTitle("SEND")->addExtraClass('input-lg'));
        $validator = new RequiredFields(
            'Name',
            'Email',
            'Message'
        );
        parent::__construct($controller, $name, $fields, $actions, $validator);
    }
     
    public function forTemplate() {
        return $this->renderWith(array($this->class, 'Form'));
    }
}