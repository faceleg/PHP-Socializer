<?php
namespace COI\Social;
use COI\Social\Flattr;

define('COI\Social\Flattr\TEXT', 'text');
define('COI\Social\Flattr\IMAGES', 'images');
define('COI\Social\Flattr\VIDEO', 'video');
define('COI\Social\Flattr\PEOPLE', 'people');
define('COI\Social\Flattr\AUDIO', 'audio');
define('COI\Social\Flattr\REST', 'rest');

class Flattr extends AbstractElement {

    // Required
    public $url = null;

    public $category = Flattr\TEXT;
    
    // Optional 
    /**
     * Guessed if not included - or one of https://api.flattr.com/rest/v2/languages.txt
     */
    public $language = null;
    /*
     * Comma separated list
     */
    public $tags = null;
    /**
     * Leave this if the large button is desired. Set to 'compact' otherwise
     */       
    public $button = 'default';
    /**
     * Set to 1 to hide this button
     */    
    public $hidden = null;

    // Required when autosubmit
    /**
     * A Flattr username. This is a required parameter for autosubmit but not for things that are already on flattr.com
     */
    public $uid = null;
    public $title = null;    
    /**
     * Will be used to describe your thing. The description should be between 5-1000 characters. All 
     * HTML is stripped except the <br\> character which will be converted into newlines (\n).
     */
    public $description = null;
    
    public function __construct($options = array()) {
        
        $url = getCurrentUrl();
        $category = Flattr\TEXT;
        $language = null;
        $tags = null;      
        $button = null;
        $hidden = null;
        $uid = null;
        $title = null;    
        $description = null;
        
        extract($options, EXTR_IF_EXISTS);

        $this->url = $url;
        $this->category = $category;
        $this->language = $language;
        $this->tags = $tags;
        $this->button = $button;
        $this->hidden = $hidden;
        $this->uid = $uid;
        $this->title = $title;    
        $this->description = $description;

        parent::__construct();
    }
        
    public function button($options = array()) {
        
        $url = $this->url;
        $category = $this->category;
        $language = $this->language;
        $tags = $this->tags;
        $button = $this->button;
        $hidden = $this->hidden;
        $uid = $this->uid;
        $title = $this->title;
        $description = $this->description;

        extract($options, EXTR_IF_EXISTS);

        return $this->buttonHtml('html5', get_defined_vars());                            
    }   

}