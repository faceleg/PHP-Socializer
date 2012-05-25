_socialQueue.push({
    url: 'http://api.flattr.com/js/0.6/load.js?mode=auto&uid=gargamel&language=sv_SE&category=text',
    id: '<?php echo $this->name; ?>',
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
