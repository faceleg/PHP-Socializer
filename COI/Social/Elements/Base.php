<?php
namespace COI\Social\Elements;

use COI\Social;

abstract class BaseElement {
    
    public function button($options = array());
    public function footer();
        
    public function __construct() {
        $this->templateDir = __DIR__.'../../../templates/'.Social\getClassName($this).'/';
    }    
    
    private function getFooter() {
        return $this->getTemplate('footer');
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