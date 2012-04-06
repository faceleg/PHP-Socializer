<?php
namespace COI\Social;

/**
 * Cache the generated JavaScript
 */
class Cache {

    /**
     * @var String The JavaScript to be cached
     */
    public $js;
    /**
     * [$cacheDirectory description]
     * @var String Directory to write JavaScript file on the server
     */
    public $cacheDirectory;
    /**
     * @var String The public path to the JavaScript file
     */
    public $publicPath;
    /**
     * @var String Identifying string, ensuring that changing options will result in a busted cache
     */
    public $signature;

    /**
     * Constructor.
     * @param String $js JavaScript to be written to a cache file
     * @param String $cacheDirectory Directory to write Javascript file on the server
     * @param Array $options Array of additional options
     */
    public function __construct($js, $cacheDirectory, $options = array()) {
        $this->js = $js;
        $this->cacheDirectory = $cacheDirectory;
        if (isset($options['signature']) && $options['signature']) {
            $this->signature = $options['signature'];
        } else {
            $this->signature = isset($options['compression']) ? $options['compression'] : 'raw';
        }

        if (isset($options['publicPath']) && $options['publicPath']) {
            $this->publicPath = $options['publicPath'];
        } else {
            // Guess the public path if not explicitly set
            $this->publicPath = str_replace(realpath('./'), '', realpath($this->cacheDirectory));
        }
    }

    /**
     * @return String A script tag referencing the generated JavaScript file
     */
    public function output() {
        $filename = rtrim($this->cacheDirectory, '/')."/php-socializer-{$this->signature}-".sha1($this->js).'.js';
        if (!file_exists($filename)) {
            if (!is_dir(dirname($filename))) {
                die($filename);
                mkdir(dirname($filename), 0777, true);
            }
            file_put_contents($filename, $this->js);
        }
        $publicPath = rtrim($this->publicPath, '/').'/'.basename($filename);
        return "<script type='text/javascript' src='{$publicPath}'></script>";
    }
}

