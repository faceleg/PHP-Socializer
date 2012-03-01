<?php
namespace COI\Social;
use COI\Social\GitHub\Type;

define('COI\Social\GitHub\Type\WATCH', 'watch');
define('COI\Social\GitHub\Type\FORK', 'fork');
define('COI\Social\GitHub\Type\FOLLOW', 'follow');

class GitHub extends AbstractElement {
    
    public $user = null;
    public $repository = null;
    public $type = Type\FOLLOW;
    public $count = true;
    public $size = null;
    
    public $width = 95;
    public $height = 20;    

}