<?php
namespace COI\Social;

abstract class AbstractElement {
        
    private $wasOutput = false;    
    
    public function __construct(array $options = array()) { 
        // Most buttons take a url, add it for convenience
        $options = array_merge(array(
            'url' => getCurrentUrl()
        ), $options);
        foreach ($options as $name => $value) {
            $this->$name = $value;
        }
        $this->templateDir = __DIR__.'/../../../templates/'.strtolower(getClassName($this));
    }
    
    public function getView() {
        return 'html';
    }

    public function render(array $options = array()) {
        $this->wasOutput = true;
        return $this->template($this->getView(), 'buttons', array_merge(get_object_vars($this), $options));
    }

    public function script() {
        return $this->template('script', null, get_object_vars($this));
    }
    
    private function template($name, $subDir = null, $parameters = array()) {
        if (!is_file($this->templateDir."/{$subDir}/{$name}.php")) {
            return '';
        }
        extract($parameters);
        ob_start();
        include $this->templateDir."/{$subDir}/{$name}.php";
        return ob_get_clean();
    }
        
    public function wasOutput() {
        return $this->wasOutput;
    }
    
    public function __toString() {
        $html = $this->render();
        $html .= $this->script();
        return $html;
    }
}