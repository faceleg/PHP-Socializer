<?php
namespace COI\Social;

use XMod\Common\AutoLoader;

require_once __DIR__.'/functions/local.php';

if (class_exists('XMod\Common\AutoLoader')) {
    AutoLoader::register('XMod', __DIR__.'/classes');
} else {
    require_once __DIR__.'/requires.php';
}
