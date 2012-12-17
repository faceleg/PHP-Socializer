<?php
namespace COI\Social;
use Exception;
use Booster;
use JavaScriptPacker;
use JShrink\Minifier;

/**
 * Interface for various javascript compressors.
 *
 * It is recommended that you use mod_pagespeed (if serving with Apache), or
 * the equivalent for your server software.
 */
class Compressor {


    public $js;
    public $compression;

    /**
     * Constructor.
     *
     * @param String $js The JavaScript to be compressed
     * @param String $compression The type of compression to use. Compression libraries should be included in coi-social/dependencies
     */
    public function __construct($js, $compression) {
        $this->js = $js;
        $this->compression = $compression;
    }

    /**
     * Make the appropriate compression method call.
     *
     * @return String The compressed javascript
     * @throws Exception If $this->compression is set to an unrecognised compressor
     */
    public function compress() {
        switch ($this->compression) {
            case Compressor\BOOSTER: {
                return $this->booster();
            }
            case Compressor\PACKER: {
                return $this->packer();
            }
            case Compressor\JSHRINK: {
                return $this->jshrink();
            }
            default: {
                throw new Exception("Unrecognized compression method: {$this->compression}");
            }
        }
    }

    /**
     * Compress using the {@link https://github.com/Schepp/CSS-JS-Booster CSS-JS-Booster} compression library.
     *
     * @return String The compressed JavaScript
     * @throws Exception If the CSS-JS-Booster library could not be found
     */
    public function booster() {
        // Flush any output in the buffer - prevents Content Encoding Errors {@link http://stackoverflow.com/a/11007081/187954}
        ob_flush();
        $boosterPath = __DIR__.'/../../../dependencies/CSS-JS-Booster/booster/booster_inc.php';
        if (!is_file($boosterPath)) {
            throw new Exception("Failed to load Booster at {$boosterPath}");
        }
        include_once $boosterPath;
        $booster = new Booster();
        $booster->js_stringmode = TRUE;
        $booster->js_source = $this->js;
        return $booster->js();
    }

    /**
     * Compress using the {@link http://joliclic.free.fr/php/javascript-packer/en/ Packer} compression library.
     *
     * @return String The compressed JavaScript
     * @throws Exception If the Packer library could not be found
     */
    public function packer() {
        $packerPath = __DIR__.'/../../../dependencies/Packer/class.JavaScriptPacker.php';
        if (!is_file($packerPath)) {
            throw new Exception("Failed to load Packer at {$packerPath}");
        }
        include_once $packerPath;
        $packer = new JavaScriptPacker($this->js);

        return $packer->pack();
    }

    /**
     * Compress using the {@link https://github.com/tedivm/JShrink/ JShrink} compression library.
     *
     * @return String The compressed JavaScript
     * @throws Exception If the JShrink library could not be found
     */
    public function jshrink() {
        $jshrinkPath = __DIR__.'/../../../dependencies/JShrink/src/JShrink/Minifier.php';
        if (!is_file($jshrinkPath)) {
            throw new Exception("Failed to load JShrink at {$jshrinkPath}");
        }
        include_once $jshrinkPath;
        return JShrink\Minifier::minify($this->js, array('flaggedComments' => false));
    }

}
