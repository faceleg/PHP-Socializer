<?php
namespace COI\Social;
use COI\Social\StumbleUpon;

define('COI\Social\StumbleUpon\SQUARE_COUNT', 1);
define('COI\Social\StumbleUpon\ROUNDED_COUNT', 2);
define('COI\Social\StumbleUpon\SMALL_COUNT', 3);
define('COI\Social\StumbleUpon\LARGE', 4);
define('COI\Social\StumbleUpon\LOGO_LARGE', 5);
define('COI\Social\StumbleUpon\LOGO_SMALL', 6);

class StumbleUpon extends AbstractElement {
    
    public $url = null;
    public $title = null;
    public $type = StumbleUpon\ROUNDED_COUNT;

    public function __construct($options = array()) {
        $url = getCurrentUrl();
        $title = null;
        $type = StumbleUpon\ROUNDED_COUNT;       
        extract($options, EXTR_IF_EXISTS);
        
        $this->url = $url;
        $this->title = $title;
        $this->type = $type;

        parent::__construct();
    }
        
    public function button($options = array()) {
        $url = $this->url;
        $title = $this->title;
        $type = $this->type;
        extract($options, EXTR_IF_EXISTS);

        switch ($type) {
            default: {
                return $this->buttonHtml('html', get_defined_vars());                            
            }
        }
    }   
}