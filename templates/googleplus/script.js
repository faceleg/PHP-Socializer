_socialQueue.push({
    url: 'https://apis.google.com/js/plusone.js',
    id: '<?php echo $this->name; ?>',
    onload: function(fadeIn, awaitRender) {
        if ('<?php echo $this->fadeIn; ?>') {
            awaitRender(document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'), function(element) {
                    return element.firstChild &&
                            element.firstChild.firstChild &&
                            element.firstChild.firstChild.tagName.toUpperCase() === 'IFRAME';
                }, '<?php echo $this->fadeIn; ?>');
        }
    }
});
