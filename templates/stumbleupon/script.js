_socialQueue.push({
    url: '//platform.stumbleupon.com/1/widgets.js',
    id: '<?php echo $this->name; ?>',
    onload: function(f) {
        window.STMBLPN.processWidgets();
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
