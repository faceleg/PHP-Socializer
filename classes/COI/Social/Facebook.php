<?php
namespace COI\Social;
use COI\Social\Facebook\Layout;
use COI\Social\Facebook\Type;
use COI\Social\Facebook\ColourScheme;

define('COI\Social\Facebook\Layout\STANDARD', 'standard');
define('COI\Social\Facebook\Layout\BUTTON_COUNT', 'button_count');
define('COI\Social\Facebook\Layout\BOX_COUNT', 'box_count');

define('COI\Social\Facebook\Type\HTML5', 'html5');
define('COI\Social\Facebook\Type\XBFML', 'xbfml');

define('COI\Social\Facebook\ColourScheme\LIGHT', 'light');
define('COI\Social\Facebook\ColourScheme\DARK', 'dark');

class Facebook extends AbstractElement {
    
    public $appId = null;
    public $showFaces = false;
    public $url = null;
    public $width = 450;
    public $sendButton = false;
    public $channelUrl = null;
    public $type = Type\HTML5;
    public $layout = Layout\BUTTON_COUNT;
    public $font = null;
    public $colorScheme = ColourScheme\LIGHT;
    
    public function __construct(array $options = array()) {
        parent::__construct(array_merge(array(
            'channelUrl' => isset($_SERVER) ? '//'.$_SERVER['HTTP_HOST'].'/facebook-channel.php' : null
        ), $options));
    }

    public function getView() {
        switch ($this->type) {
            case Type\HTML5: {
                return 'html5';
            }
            case Type\XBFML: {
                return 'xbfml';
            }
        }
    }

}