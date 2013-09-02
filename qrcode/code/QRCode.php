<?php
/**
* 
*/
class QRCode
{
    protected $api_url = 'http://chart.googleapis.com/chart?cht=qr';

    public $data;

    public function __construct($data=null) {
        $this->data = $data;
    }

    public function __toString() {
        return $this->makeImageTag();
    }

    public function setRootApi($url) {
        $this->api_url = $url;
    }

    public function getRootApi() {
        return $this->api_url;
    }

    /**
     * <img src="http://chart.googleapis.com/chart
     *             ?cht=qr
     *             &chs=100x100
     *             &chl=encode.this" alt="">
     * 
     * @param string|String[] $data The string to encode
     * @param int $size Defualts to 100px
     */
    public function makeImageTag($data=null, $size=100) {

        if (( ! $data) && ( ! $this->data)) {
            return sprintf('<img src="%s&chs=100x100" alt="">', $this->api_url);
        }
        if ($data) {
            $c = $this->formatData($data);
        } else {
            $c = $this->formatData($this->data);
        }
        
        return sprintf(
            '<img src="%s&chs=%dx%d&chl=%s" alt="%s">',
            $this->api_url, 
            $size, $size, 
            $c['chl'], 
            $c['alt']
        );
    }

    /**
     * Interface for return string values
     * 
     * @param  string|string[] $data Array that maps to return array
     * @return array                 'chl': string, 'alt': string
     */
    public function formatData($data) {
        $c = array('chl'=>'','alt'=>'');
        if (is_array($data)) {
            $c['chl'] = $data[0];
            $c['alt'] = $data[1];
        } else if (is_string($data)) {
            $c['chl'] = $data;
            $c['alt'] = '';
        }
        return $c;
    }
}