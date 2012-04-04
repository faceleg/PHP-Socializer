_socialQueue.push({
    url: 'http://api.flattr.com/js/0.6/load.js?mode=auto&uid=gargamel&language=sv_SE&category=text',
    id: '<?php echo $this->name; ?>',
    onload: function(fadeIn, awaitRender) {
        if ('<?php echo $this->fadeIn; ?>') {
            awaitRender(document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'), function(element) {
                return element.firstChild.className.match(/FlattrButton/);
            }, '<?php echo $this->fadeIn; ?>');
        }
    }
});
