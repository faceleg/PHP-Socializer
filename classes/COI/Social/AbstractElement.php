<?php
namespace COI\Social;

abstract class AbstractElement {

    private $wasOutput = false;

    public $name = null;

    /**
     * @var boolean|integer False for now fade, a duration in milliseconds to have this element faded in when loaded
     */
    public $fadeIn = false;

    /**
     * Construct an abstract element with the given options
     * Sets the url property to the current url for convenience
     * @param array $options Array of key => value options to use with this element
     */
    public function __construct(array $options = array()) {
        // Set the name of this button
        $this->name = strtolower(substr(get_called_class(), strrpos(get_called_class(), '\\')+1));

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

        $options = array_merge(get_object_vars($this));
        $fadeIn = isset($options['fadeIn']) && $options['fadeIn'] ? 'style="opacity:0;"' : '';

        $html = $this->template($this->getView(), 'buttons', $options);
        return "<div class='coi-social-button coi-social-button-{$this->name}' {$fadeIn}>{$html}</div>";
    }

    public function script() {
        return $this->template('script', null, array_merge(get_object_vars($this)), 'js');
    }

    private function template($templateName, $subDir = null, $parameters = array(), $extension = 'php') {
        if (!is_file($this->templateDir."/{$subDir}/{$templateName}.{$extension}")) {
            return '';
        }
        extract($parameters);
        ob_start();
        include $this->templateDir."/{$subDir}/{$templateName}.{$extension}";
        return ob_get_clean();
    }

    public function wasOutput() {
        return $this->wasOutput;
    }

    public function __toString() {
        $html = $this->render();
        $js = $this->script();
        if ($js) {
            $html .= "<script type='text/javascript'>{$js}</script>";
        }
        return $html;
    }
}
