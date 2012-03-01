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

}