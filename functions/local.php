<?php
namespace COI\Social;

function getClassName($object) {
    if (!is_object($object) && !is_string($object)) {
        return false;
    }

    return trim(strrchr((is_string($object) ? $object : get_class($object)), '\\'), '\\');
}

function getCurrentUrl() {
	if (!isset($_SERVER)) {
		return '';
	}
    $pageURL = 'http';

    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
        $pageURL .= 's';
    }

    $pageURL .= '://';

    if ($_SERVER['SERVER_PORT'] != '80') {
        $pageURL .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
    } else {
        $pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }
    return $pageURL;
}
