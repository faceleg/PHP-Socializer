<?php
namespace COI\Social;
use COI\Social\GitHub\Type;
use COI\Social\GitHub\Size;

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
