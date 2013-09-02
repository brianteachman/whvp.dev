<?php

class QRCodeTest extends SapphireTest
{
    public $qrcode;

    public function __construct() {
        parent::__construct();

        $this->qrcode = new QRCode();
    }

    public function testQRCodeToStringWithoutDataInputDefaults() {
        $img = '<img src="http://chart.googleapis.com/chart?cht=qr&chs=100x100" alt="">';
        $this->assertEquals($img, new QRCode());
    }

    public function testQRCodeCanMakeWithStringDataOnInstantiation() {
        $img = '<img src="http://chart.googleapis.com/chart?cht=qr&chs=100x100&chl=http://www.whvp.org" alt="">';
        $qrcode = new QRCode('http://www.whvp.org');
        $this->assertEquals($img, $qrcode->makeImageTag());
    }

    public function testQRCodeToStringWithDataOnInstantiation() {
        $img = '<img src="http://chart.googleapis.com/chart?cht=qr&chs=100x100&chl=http://www.whvp.org" alt="">';
        $this->assertEquals($img, new QRCode('http://www.whvp.org'));
    }

    public function testQRCodeMakeWithStringData() {
        $img = '<img src="http://chart.googleapis.com/chart?cht=qr'
               .'&chs=100x100&chl=http://www.whvp.org" alt="">';

        $this->assertEquals($img, $this->qrcode->makeImageTag('http://www.whvp.org'));
    }

    public function testQRCodeMakeWithArrayData() {
        $img = '<img src="http://chart.googleapis.com/chart?cht=qr'
               .'&chs=100x100'
               .'&chl=http://www.whvp.org"'
               .' alt="Link to http://www.whvp.org">';
        $chl = array(
            'http://www.whvp.org',
            'Link to http://www.whvp.org',
        );

        $this->assertEquals($img, $this->qrcode->makeImageTag($chl));
    }

    public function testMakeWithNonDefualtImageSize() {
        $img = '<img src="http://chart.googleapis.com/chart?cht=qr'
               .'&chs=50x50&chl=http://www.whvp.org" alt="">';

        $this->assertEquals($img, $this->qrcode->makeImageTag('http://www.whvp.org', 50));
    }

    public function testMakeSettingAltAttr() {
        $img = '<img src="http://chart.googleapis.com/chart?cht=qr'
               .'&chs=100x100&chl=http://www.whvp.org" alt="Alt is set">';
        $test = array('http://www.whvp.org', 'Alt is set');
        
        $this->assertEquals($img, $this->qrcode->makeImageTag($test));
    }

    public function testFormatDataReturnProperKeys() {
        $expected = array('chl'=>'http://www.whvp.org', 'alt'=>'Alt is set');
        $test = array('http://www.whvp.org', 'Alt is set');

        $this->assertEquals($expected, $this->qrcode->formatData($test));
    }

    public function testApiUrlAccessing() {
        $expected = 'http://howardtheduck.wha';
        $this->qrcode->setRootApi($expected);

        $this->assertEquals($expected, $this->qrcode->getRootApi());
    }
}