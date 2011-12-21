<?php
namespace COI\Social;

class Manager {
    
    private $elements = array();
    
    public function __construct($elements = array()) {
        $this->elements = $elements;
    }
    
    public function buttons($exclude = array()) {        
        $html = '';
        foreach ($this->elements as $name => $element) {
            if (!$exclude || !in_array($name, $exclude)) {
                $html .= "<div class='coi-button coi-button-{$name}'>{$element->button()}</div>";
            }
        }
        return $html;
    }
    
    public function scripts() {
            
        $scripts = array();
        ob_start();
        include __DIR__.'/../../templates/script.php';
        $scripts[] = ob_get_clean();
        
        foreach ($this->elements as $element) {
            $scripts[] = $element->script();
        }
        return implode('', $scripts);
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
    
    public function buttonsOutput() {
        
        foreach ($this->elements as $element) {
            if ($element->wasOutput()) return true;
        }
        return false;
    }
    
}