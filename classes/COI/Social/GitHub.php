<?php
namespace COI\Social;
use COI\Social\GitHub;

define('COI\Social\GitHub\WATCH', 'watch');
define('COI\Social\GitHub\FORK', 'fork');
define('COI\Social\GitHub\FOLLOW', 'follow');

class GitHub extends AbstractElement {
    
    public $user = null;
    public $repository = null;
    public $type = GitHub\FOLLOW;
    public $count = true;
    public $size = null;
    
    public $width = 95;
    public $height = 20;
    
    public function __construct($options = array()) {
        $user = $this->user;
        $repository = $this->repository;
        $type = $this->type;
        $count = $this->count;
        $size = $this->size;
        $width = $this->width;
        $height = $this->height;
        extract($options, EXTR_IF_EXISTS);
        
        $this->user = $user;
        $this->repository = $repository;
        $this->type = $type;
        $this->count = $count;
        $this->width = $width;
        $this->height = $height;

        parent::__construct();
    }
        
    public function button($options = array()) {
        $user = $this->user;
        $repository = $this->repository;
        $type = $this->type;
        $count = $this->count;
        $size = $this->size;
        $width = $this->width;
        $height = $this->height;
        extract($options, EXTR_IF_EXISTS);

        return $this->buttonHtml('html', get_defined_vars());
    }   
}