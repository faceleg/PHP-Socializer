_socialQueue.push({
    url: '//assets.pinterest.com/js/pinit.js',
    id: '<?php echo $this->name; ?>',
    preload: function(f) {
        window.PinIt = window.PinIt || {
            loaded:false
        };
        if (window.PinIt.loaded) {
            return;
        }
        window.PinIt.loaded = true;
    },
    onload: function(f) {
        if ('<?php echo $this->fadeIn; ?>') {
            f.awaitRender({
                buttons: document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'),
                duration: '<?php echo $this->fadeIn; ?>',
                isRendered: function(element) {
                    return element.getElementsByTagName('IFRAME')[0];
                },
                renderedMethod: function(b, d) {
                    f.iframeOnload(b.getElementsByTagName('IFRAME')[0], b, d);
                }
            });
        }
    }
});
