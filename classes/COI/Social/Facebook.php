<?php
namespace COI\Social;

class Facebook extends AbstractElement {
    
    const TYPE_HTML5 = 'html5';
    const TYPE_XBFML = 'xbfml';    
    
    public $appId = null;
    public $showFaces = null;
    public $url = null;
    public $width = null;
    public $sendButton = null;
    public $channelUrl = null;
    public $type = null;
    /**
     * standard (default), button_count, box_count
     */
    public $layout = null;
    public $font = null;
    /**
     * light, dark
     * @default light
     */
    public $colorScheme = null;
    
    public function __construct($options = array()) {
        $appId = null;
        $url = getCurrentUrl();
        $width = 450;
        $showFaces = 'false';
        $sendButton = 'false';
        $channelUrl = '//'.$_SERVER['HTTP_HOST'].'/facebook-channel.php';
        $type = self::TYPE_HTML5;
        $layout = 'button_count';
        $font = null;
        $colorScheme = null;
        extract($options, EXTR_IF_EXISTS);
        
        $this->appId = $appId;
        $this->showFaces = $showFaces;
        $this->url = $url;
        $this->width = $width;
        $this->sendButton = $sendButton;
        $this->channelUrl = $channelUrl;
        $this->type = $type;
        $this->layout = $layout;
        $this->font = $font;
        $this->colorScheme = $colorScheme;

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
        $layout = $this->layout;
        $font = $this->font;
        $colorScheme = $this->colorScheme;
        extract($options, EXTR_IF_EXISTS);

        switch ($type) {
            case static::TYPE_HTML5: {
                return $this->buttonHtml('html5', get_defined_vars());                            
            }
            case static::TYPE_XBFML: {
                return $this->buttonHtml('xbfml', get_defined_vars());
            }
        }
    }   

}