<?php
namespace COI\Social;

// <autoload>
use XMod\Common\AutoLoader;
if (class_exists('XMod\Common\AutoLoader')) {
    AutoLoader::register('COI', __DIR__.'/classes');
} else
// </autoload>
require_once __DIR__.'/require.php';

require_once __DIR__.'/functions/local.php';
