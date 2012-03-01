<?php
namespace COI\Social;

class GooglePlus extends AbstractElement {
    
    public $url = null;
    /**
     * small, medium, standard (default), tall
     */
    public $size = null;
    /**
     * none, bubble, inline
     * @default bubble;
     */
    public $annotation = null;
        
    public function __construct($options = array()) {
        $url = getCurrentUrl();
        $size = 'standard';
        $annotation = 'bubble';
        extract($options, EXTR_IF_EXISTS);
        
        $this->url = $url;
        $this->size = $size;
        $this->annotation = $annotation;

        parent::__construct();
    }
        
    public function button($options = array()) {
        $url = $this->url;
        $size = $this->size;
        $annotation = $this->annotation;
        extract($options, EXTR_IF_EXISTS);

        return $this->buttonHtml('html5', get_defined_vars());
    }   

}