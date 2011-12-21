<?php
namespace COI\Social;

class Facebook extends AbstractElement {
    
    const STANDARD_HTML5 = 'standard-html5';
    const COUNT_HTML5 = 'count-html5';    
    
    protected $appId = null;
    protected $showFaces = null;
    protected $url = null;
    protected $width = null;
    protected $sendButton = null;
    protected $channelUrl = null;
    protected $type = null;
    
    public function __construct($options = array()) {
        $appId = null;
        $url = getCurrentUrl();
        $width = 130;
        $showFaces = 'false';
        $sendButton = 'true';
        $channelUrl = '//'.$_SERVER['HTTP_HOST'].'/facebook-channel.php';
        $type = self::STANDARD_HTML5;
        extract($options, EXTR_IF_EXISTS);
        
        $this->appId = $appId;
        $this->showFaces = $showFaces;
        $this->url = $url;
        $this->width = $width;
        $this->sendButton = $sendButton;
        $this->channelUrl = $channelUrl;
        $this->type = $type;

        parent::__construct();
    }
        
    public function button($options = array()) {
        $type = $this->type;
        $appId = $this->appId;
        $url = $this->url;
        $width = $this->width;
        $showFaces = $this->showFaces;
        $sendButton = $this->sendButton;
        $channelUrl = $this->channelUrl;
        extract($options, EXTR_IF_EXISTS);

        switch ($type) {
            case static::STANDARD_HTML5: {
                return $this->buttonHtml('standard-html5', get_defined_vars());                            
            }
            case static::COUNT_HTML5: {
                return $this->buttonHtml('count-html5', get_defined_vars());
            }
        }
    }   

}