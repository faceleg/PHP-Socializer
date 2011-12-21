<?php
namespace COI\Social\Elements;

use COI\Social;

class Twitter extends BaseElement {
    
    protected $url = null;
    protected $username = null;
    protected $title = null;
    protected $recommend = null;
    protected $hashtag = null;
    protected $size = null;
    /**
     * horizontal, vertical, none
     */
    protected $counter = null;
    
    public function __construct($options = array()) {
        $url = Social\getCurrentUrl();
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
        $this->count = $counter;
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