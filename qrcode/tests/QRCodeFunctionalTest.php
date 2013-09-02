<?php

/**
* @link(http://api.silverstripe.org/3.0/class-FunctionalTest.html, link)
*/
class QRCodeFunctionalTest extends FunctionalTest
{
    public function testMyForm() {

        // Visit a URL
        $this->get("admin/qr-code");
        $this->assertExactMatchBySelector("#Form_make", "div#CustomPageFrame");

        // Submit a form on the page that you get in response
        // $this->submitForm("Form_make", 'action_make', array("qr_data" => "http://www.whvp.org"));

        // Validate the content that is returned
        // $this->assertExactMatchBySelector("#MyForm_ID p.error", array("That email address is invalid."));
    }
}