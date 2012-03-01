<?php
namespace COI\Social;
use COI\Social\LinkedIn\Count;

define('COI\Social\LinkedIn\Count\TOP', 'top');
define('COI\Social\LinkedIn\Count\RIGHT', 'right');
define('COI\Social\LinkedIn\Count\NONE', null);

class LinkedIn extends AbstractElement {
    
    public $url = null;
    public $counter = Count\RIGHT;
    public $showZero = true;

}