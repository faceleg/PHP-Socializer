<?php
namespace COI\Social;

define('COI\Social\Compressor\BOOSTER', 'booster');
define('COI\Social\Compressor\PACKER', 'packer');
define('COI\Social\Compressor\JSHRINK', 'jshrink');

define('COI\Social\Flattr\Type\TEXT', 'text');
define('COI\Social\Flattr\Type\IMAGES', 'images');
define('COI\Social\Flattr\Type\VIDEO', 'video');
define('COI\Social\Flattr\Type\PEOPLE', 'people');
define('COI\Social\Flattr\Type\AUDIO', 'audio');
define('COI\Social\Flattr\Type\REST', 'rest');

define('COI\Social\Flattr\Button\COMPACT', 'compact');
define('COI\Social\Flattr\Button\STANDARD', 'default');

define('COI\Social\GitHub\Type\WATCH', 'watch');
define('COI\Social\GitHub\Type\FORK', 'fork');
define('COI\Social\GitHub\Type\FOLLOW', 'follow');

define('COI\Social\GitHub\Size\LARGE', 'large');
define('COI\Social\GitHub\Size\COMPACT', null);

define('COI\Social\GooglePlus\Size\SMALL', 'small');
define('COI\Social\GooglePlus\Size\MEDIUM', 'medium');
define('COI\Social\GooglePlus\Size\STANDARD', 'standard');
define('COI\Social\GooglePlus\Size\TALL', 'tall');

define('COI\Social\GooglePlus\Annotation\NONE', 'none');
define('COI\Social\GooglePlus\Annotation\BUBBLE', 'bubble');
define('COI\Social\GooglePlus\Annotation\INLINE', 'inline');

define('COI\Social\LinkedIn\Count\TOP', 'top');
define('COI\Social\LinkedIn\Count\RIGHT', 'right');
define('COI\Social\LinkedIn\Count\NONE', null);

define('COI\Social\Pinterest\Count\VERTICAL', 'vertical');
define('COI\Social\Pinterest\Count\HORIZONTAL', 'horizontal');
define('COI\Social\Pinterest\Count\NONE', 'none');

define('COI\Social\StumbleUpon\SQUARE_COUNT', 1);
define('COI\Social\StumbleUpon\ROUNDED_COUNT', 2);
define('COI\Social\StumbleUpon\SMALL_COUNT', 3);
define('COI\Social\StumbleUpon\LARGE', 4);
define('COI\Social\StumbleUpon\LOGO_LARGE', 5);
define('COI\Social\StumbleUpon\LOGO_SMALL', 6);

define('COI\Social\Twitter\Counter\HORIZONTAL', 'horizontal');
define('COI\Social\Twitter\Counter\VERTICAL', 'vertical');
define('COI\Social\Twitter\Counter\NONE', 'none');
define('COI\Social\Twitter\Counter\SHOW', 'true');

define('COI\Social\Twitter\Type\TWEET', 'html-tweet');
define('COI\Social\Twitter\Type\FOLLOW', 'html-follow');

include_once __DIR__.'/functions/local.php';
include_once __DIR__.'/functions/shortcuts.php';
