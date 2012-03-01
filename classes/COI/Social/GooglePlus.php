<?php
namespace COI\Social;
use COI\Social\GooglePlus\Size;
use COI\Social\GooglePlus\Annotation;

define('COI\Social\GooglePlus\Size\SMALL', 'small');
define('COI\Social\GooglePlus\Size\MEDIUM', 'medium');
define('COI\Social\GooglePlus\Size\STANDARD', 'standard');
define('COI\Social\GooglePlus\Size\TALL', 'tall');

define('COI\Social\GooglePlus\Annotation\NONE', 'none');
define('COI\Social\GooglePlus\Annotation\BUBBLE', 'bubble');
define('COI\Social\GooglePlus\Annotation\INLINE', 'inline');

class GooglePlus extends AbstractElement {
    
    public $url = null;
    public $size = Size\STANDARD;
    public $annotation = Annotation\BUBBLE;

}