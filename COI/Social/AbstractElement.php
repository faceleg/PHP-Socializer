<?php
namespace COI\Social;

abstract class AbstractElement {
        
    private $wasOutput = false;    
    
    public function __construct() {
        $this->templateDir = __DIR__.'/../../templates/'.strtolower(getClassName($this));
    }    

    abstract function button($options = array());    

    public function script() {
        return $this->template('script');
    }

    protected function buttonHtml($name, $parameters) {
        $this->wasOutput = true;
        return $this->template($name, 'buttons', $parameters);
    }
    
    private function template($name, $subDir = null, $parameters = array()) {
        extract($parameters);
        ob_start(); 
        include $this->templateDir."/{$subDir}/{$name}.php";
        return ob_get_clean();
    }
        
    public function wasOutput() {
        return $this->wasOutput;
    }
}