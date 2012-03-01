<?php
namespace COI\Social;
use COI\Social\Twitter\Counter;

define('COI\Social\Twitter\Counter\HORIZONTAL', 'horizontal');
define('COI\Social\Twitter\Counter\VERTICAL', 'vertical');
define('COI\Social\Twitter\Counter\NONE', 'none');

class Twitter extends AbstractElement {
    
    public $url = null;
    public $username = null;
    public $title = null;
    public $recommend = null;
    public $hashtag = null;
    public $size = null;
    public $counter = Counter\HORIZONTAL;

}