<?php
namespace COI\Social;
use COI\Social\GitHub\Type;
use COI\Social\GitHub\Size;

define('COI\Social\GitHub\Type\WATCH', 'watch');
define('COI\Social\GitHub\Type\FORK', 'fork');
define('COI\Social\GitHub\Type\FOLLOW', 'follow');

define('COI\Social\GitHub\Size\LARGE', 'large');
define('COI\Social\GitHub\Size\COMPACT', null);

class GitHub extends AbstractElement {

    public $username = null;
    public $repository = null;
    public $type = Type\FOLLOW;
    public $count = true;
    public $size = Size\COMPACT;

    public $buttonUrl = 'http://ghbtns.com/github-btn.html';

    public $width = 95;
    public $height = 20;

}
