<?php
namespace COI\Social;

class Twitter extends AbstractElement {
    
    public $url = null;
    public $username = null;
    public $title = null;
    public $recommend = null;
    public $hashtag = null;
    public $size = null;
    /**
     * horizontal, vertical, none
     */
    public $counter = null;
    
    public function __construct($options = array()) {
        $url = getCurrentUrl();
        $title = null;
        $username = null;
        $hashtag = null;
        $recommend = null;
        $size = null;
        $counter = 'horizontal';
        $type = null;   // placeholder allowing for addional button types        
        extract($options, EXTR_IF_EXISTS);
        
        $this->url = $url;
        $this->title = $title;
        $this->username = $username;
        $this->hashtag = $hashtag;
        $this->recommend = $recommend;
        $this->size = $size;
        $this->counter = $counter;
        $this->type = $type;

        parent::__construct();
    }
        
    public function button($options = array()) {
        $username = $this->username;
        $title = $this->title;
        $url = $this->url;
        $hashtag = $this->hashtag;
        $recommend = $this->recommend;
        $size = $this->size;
        $counter = $this->counter;
        $type = null;   // placeholder allowing for addional button types        
        extract($options, EXTR_IF_EXISTS);

        switch ($type) {
            default: {
                return $this->buttonHtml('html', get_defined_vars());                            
            }
        }
    }   
}