<?php
namespace COI\Social;

class Flattr extends AbstractElement {

    // Required
    protected $url = null;

    protected $category = null;
    
    // Optional 
    /**
     * Guessed if not included - or one of https://api.flattr.com/rest/v2/languages.txt
     */
    protected $language = null;
    /*
     * Comma separated list
     */
    protected $tags = null;
    /**
     * Leave this if the large button is desired. Set to 'compact' otherwise
     */       
    protected $button = 'default';
    /**
     * Set to 1 to hide this button
     */    
    protected $hidden = null;

    // Required when autosubmit
    /**
     * A Flattr username. This is a required parameter for autosubmit but not for things that are already on flattr.com
     */
    protected $uid = null;
    protected $title = null;    
    /**
     * Will be used to describe your thing. The description should be between 5-1000 characters. All 
     * HTML is stripped except the <br\> character which will be converted into newlines (\n).
     */
    protected $description = null;
    
    public function __construct($options = array()) {
        
        $url = getCurrentUrl();
        $category = Flattr\Category::TEXT;
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