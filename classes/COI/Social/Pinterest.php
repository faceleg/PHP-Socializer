<?php
namespace COI\Social;
use COI\Social\Pinterest\Count;

define('COI\Social\Pinterest\Count\VERTICAL', 'vertical');
define('COI\Social\Pinterest\Count\HORIZONTAL', 'horizontal');
define('COI\Social\Pinterest\Count\NONE', 'none');

class Pinterest extends AbstractElement {

    // Required

    /**
     * @var string URL for this object's site.
     */
    public $url = null;

    /**
     * @var string Image URL for the object to be pinned.
     */
    public $image = null;

    /**
     * @var string| Whether to show the count, and if so where.
     */
    public $layout = Count\HORIZONTAL;

    // Optional

    /**
     * While a description is optional, it is recommended; specifying it lowers the
     * friction for your users to pin your products.
     * @var string lowers the friction for your users to pin your products.
     */
    public $title = null;

}