<?php
namespace COI\Social;
use COI\Social\Flattr\Type;
use COI\Social\Flattr\Button;

define('COI\Social\Flattr\Type\TEXT', 'text');
define('COI\Social\Flattr\Type\IMAGES', 'images');
define('COI\Social\Flattr\Type\VIDEO', 'video');
define('COI\Social\Flattr\Type\PEOPLE', 'people');
define('COI\Social\Flattr\Type\AUDIO', 'audio');
define('COI\Social\Flattr\Type\REST', 'rest');

define('COI\Social\Flattr\Button\COMPACT', 'compact');
define('COI\Social\Flattr\Button\STANDARD', 'default');

class Flattr extends AbstractElement {

    // Required
    public $url = null;

    public $category = Type\TEXT;

    // Optional
    /**
     * Guessed if not included - or one of https://api.flattr.com/rest/v2/languages.txt
     */
    public $language = null;
    /*
     * Comma separated list
     */
    public $tags = null;
    /**
     * Leave this if the large button is desired. Set to 'compact' otherwise
     */
    public $button = Button\STANDARD;
    /**
     * Set to 1 to hide this button
     */
    public $hidden = null;

    // Required when autosubmit
    /**
     * A Flattr username. This is a required parameter for autosubmit but not for things that are already on flattr.com
     */
    public $uid = null;
    public $title = null;
    /**
     * Will be used to describe your thing. The description should be between 5-1000 characters. All
     * HTML is stripped except the <br\> character which will be converted into newlines (\n).
     */
    public $description = null;

}