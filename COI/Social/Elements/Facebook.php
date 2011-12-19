<?php
namespace COI\Social\Elements;

use COI\Social;

class Facebook extends BaseElement {
    
    const STANDARD_HTML5 = 'standard-html5';
    const COUNT_HTML5 = 'count-html5';    
    
    private $appId = null;
    private $showFaces = null;
    private $url = null;
    private $width = null;
    private $sendButton = null;
    private $channelUrl = null;
    private $type = null;
    
    public function __construct($options = array()) {
        $appId = null;
        $url = Social\getCurrentUrl();
        $width = 450;
        $showFaces = 'false';
        $sendButton = 'true';
        $channelUrl = $_SERVER['HTTP_HOST'].'/facebook-channel.php';
        $type = static::STANDARD_HTML5;
        extract($options, EXTR_IF_EXISTS);
        
        $this->appId = $appId;
        $this->showFaces = $showFaces;
        $this->url = $url;
        $this->width = $width;
        $this->dataSend = $dataSend;
        
        parent::__construct();
    }
        
    public function button($options = array()) {
        $type = $this->type;
        $appId = $this->addId;
        $url = $this->url;
        $width = $this->width;
        $showFaces = $this->showFaces;
        $sendButton = $this->sendButton;
        $channelUrl = $this->channelUrl;
        extract($options, EXTR_IF_EXISTS);

        switch ($type) {
            case static::STANDARD_HTML5: {
                return $this->getButton('standard-html5');                            
            }
            case static::COUNT_HTML5: {
                return $this->getButton('count-html5');
            }
        }
    }
    
    public function footer() {
        return $this->getFooter('footer');
    }
    
}