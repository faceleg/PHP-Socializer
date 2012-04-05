_socialQueue.push({
    url: 'https://apis.google.com/js/plusone.js',
    id: '<?php echo $this->name; ?>',
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
