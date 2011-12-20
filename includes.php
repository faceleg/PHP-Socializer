<?php
namespace COI\Social;

use XMod\Common\AutoLoader;
if (class_exists('XMod\Common\AutoLoader')) {
    AutoLoader::register('XMod', __DIR__.'/classes');
} else {
    require_once __DIR__.'/require.php';
} 
