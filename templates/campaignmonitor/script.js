_socialQueue.push({

    /** @type {String} Campaign Monitor's script URL */
    url: '//btn.createsend1.com/js/sb.min.js?v=2',

    /** @type {String} Prevents double-loading */
    id: '<?php echo $this->name; ?>',

    /** @type {String} Campaign Monitor script requires this classname */
    className: 'createsend-script',

    /**
     * Function executed when the script is loaded.
     *
     * @param  {[type]} f Fade object handler
     */
    onload: function(f) {
        if ('<?php echo $this->fadeIn; ?>') {
            f.awaitRender({
                buttons: document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'),
                duration: '<?php echo $this->fadeIn; ?>',
                isRendered: function(element) {
                    return element.firstChild &&
                            element.firstChild.firstChild &&
                            element.firstChild.firstChild.tagName.toUpperCase() === 'IFRAME';
                },
                renderedMethod: function(b, d) {
                    f.iframeOnload(b.firstChild.firstChild, b, d);
                }
            });
        }
    }
});
