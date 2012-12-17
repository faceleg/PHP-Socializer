<?php
namespace COI\Social;
use COI\Social\Twitter\Counter;
use COI\Social\Twitter\Type;

class Twitter extends AbstractElement {

    public $url = null;
    public $username = null;
    public $title = null;
    public $recommend = null;
    public $hashtag = null;
    public $size = null;
    public $counter = Counter\HORIZONTAL;
    public $type = Type\TWEET;

    public function getView() {
        return $this->type;
    }
}
