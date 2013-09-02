<?php

/**
* 
*/
class QRCodeAdmin extends LeftAndMain
{
    static $allowed_actions = array('make');

    // static $menu_icon = 'mysite/images/qrcode-icon.png';
 
    static $url_segment = 'qr-code';

    static $menu_title = 'QR Code Tool';

    // static $url_rule = '/admin/qr-code/$ID';

    static $menu_priority = 0;

    public function init() {
        parent::init();

    }

    /**
     * Form that will be shown when we open one of the items
     */ 
    public function getEditForm($id = null, $fields=null) {

        $fields = new FieldList(
            new LiteralField('', 
                '<div id="CustomPageFrame"><div id="CustomPageFrameInner">'
                .'<h3>QR Code Generator</h3>'
                .'<p>Enter the data you want encoded to a QR Code Image.</p>'
                .'</div></div>'
            ),
            new TextField('qr_data', 'A web link to encode: ')
        );
        $actions = new FieldList(
            FormAction::create("make")->setTitle("Create QR Code")
        );
        $form = new Form($this, 'make', $fields, $actions);

        // Load the form with previously sent data
        $form->loadDataFrom($this->request->postVars());

        return $form;
    }

    public function make($data, Form $form) {
        // var_dump($_POST);
        // var_dump($data);
        if(strpos($data['qr_data'], 'http://') === false) {
            $form->addErrorMessage('qr_data', 'QR Code needs to link somewhere', 'bad');
            return $this->redirectBack();
        }
        $this->ImageTag = (string) new QRCode($data['qr_data']);
        $this->Data = $data['qr_data'];

        return $this->renderWith("QRCodeAdmin_make");
        // return $this->render();
    }


}