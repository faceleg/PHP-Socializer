<?php
namespace COI\Social\Elements;

use COI\Social;

abstract class BaseElement {
    
    public function button($options = array());
    public function script();
        
    public function __construct() {
        $this->templateDir = __DIR__.'../../../templates/'.Social\getClassName($this).'/';
    }    
    
    private function getScript() {
        return $this->getTemplate('script');
    }
    
    private function getButton($name) {
        return $this->getTemplate($name, 'button');
    }
    
    private function getTemplate($name, $subDir = null) {
        ob_start(); 
        include $this->templateDir."/{$subdir}/{$name}";
        return ob_get_clean();
    }    
}