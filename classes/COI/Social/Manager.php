<?php
namespace COI\Social;
use Exception;

class Manager {

    public static $outputScripts = array();
    public static $managers = array();
    private static $combining = false;
    public $elements = array();

    /**
     * @var String type of compression to use
     */
    public $compression = null;

    /**
     * Constructor
     * @param Array $elements An array of Social elements
     * @param Array $commonOptions An array of common options
     */
    public function __construct($elements = array(), $commonOptions = array()) {
        $this->elements = $elements;
        foreach($this->elements as $element) {
            foreach($commonOptions as $name => $value) {
                $element->$name = $value;
            }
        }
        // Add this instance to the shared collection
        self::$managers[] = $this;
    }

    /**
     * Return the HTML for configured buttons
     * @param  array  $options Overrides for preconfigured options
     * @param  array  $exclude Names of buttons to be excluded
     * @return String the button's HTML
     */
    public function render($options = array(), $exclude = array()) {
        $html = '';
        foreach ($this->elements as $name => $element) {
            if (!$exclude || !in_array($name, $exclude)) {
                $html .= $element->render($options);
            }
        }
        return $html;
    }

    /**
     *
     * @return String JavaScript common to all social elements
     */
    private static function commonJS() {
        if (self::$outputScripts) {
            return null;
        }
        ob_start();
        include __DIR__.'/../../../templates/script.js';
        return ob_get_clean();
    }

    /**
     * Prepare and return JavaScript required for this instance's social elements
     * @param  Array $options Optional array of JavaScript options
     * @return String
     */
    public function javaScript($options = array()) {
        $js[] = self::commonJS();

        foreach ($this->elements as $element) {
            if (!isset(self::$outputScripts[get_class($element)])) {
                $js[] = $element->script();
                self::$outputScripts[get_class($element)] = true;
            }
        }
        $js = implode('', $js);

        if (self::$combining) {
            return $js;
        }

        return self::cache(self::compress($js, $options), $options);
    }

    public static function combinedJavaScript($options = array()) {

        self::$combining = true;

        $js = '';

        foreach (self::$managers as $manager) {
            $js .= $manager->javaScript($options);
        }

        self::$combining = false;
        return self::cache(self::compress($js, $options), $options);
    }

    public function compress($js, $options) {
        if (isset($options['compression']) && $options['compression']) {
            $compressor = new Compressor($js, $options['compression']);
            $js = $compressor->compress();
        }
        return $js;
    }

    public function cache($js, $options) {
         if (isset($options['cacheDirectory']) && $options['cacheDirectory']) {
            $cache = new Cache($js, $options['cacheDirectory'], $options);
            return $cache->output();
        } else {
            return '<script type="text/javascript">'.$js.'</script>';
        }
    }

    public function __set($name, $value) {
        $this->elements[$name] = $value;
    }

    public function __get($name){
        if (array_key_exists($name, $this->elements)) {
            return $this->elements[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function buttonsOutput() {

        foreach ($this->elements as $element) {
            if ($element->wasOutput()) return true;
        }

        return false;
    }

}
