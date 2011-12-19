<?php
namespace COI\Social;

class Footer {
    
    private $elements = array();
    
    public function getElementsHtml($exclude = array()) {        
        $html = '';
        foreach ($this->elements as $name => $element) {
            if (!$exclude || !in_array($name, $exclude)) {
                $footers .= $element->button();
            }
        }
        return $html;
    }
    
    public function getFooter() {
        $footers = '';
        foreach ($this->elements as $element) {
            $footers .= $element->footer();
        }
        return $footer;
    }
    
     public function __set($name, $value) {
        echo "Setting '$name' to '$value'\n";
        $this->elements[$name] = $value;
    }
    
    public function __get($name){
        echo "Getting '$name'\n";
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
    
}