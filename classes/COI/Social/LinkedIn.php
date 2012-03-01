<?php
namespace COI\Social;

class LinkedIn extends AbstractElement {
    
    public $url = null;
    /**
     * top, right, null (none)
     */
    public $count = null;
    public $showZero = null;
    
    public function __construct($options = array()) {
        $url = getCurrentUrl();
        $counter = 'right';
        $showZero = true;
        extract($options, EXTR_IF_EXISTS);
        
        $this->url = $url;
        $this->counter = $counter;

        parent::__construct();
    }
        
    public function button($options = array()) {
        $url = $this->url;
        $counter = $this->counter;
        $showZero = $this->showZero;
        extract($options, EXTR_IF_EXISTS);

        switch ($type) {
            default: {
                return $this->buttonHtml('html', get_defined_vars());                            
            }
        }
    }   

}