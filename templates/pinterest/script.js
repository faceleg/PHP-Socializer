_socialQueue.push({
    url: '//assets.pinterest.com/js/pinit.js',
    id: '<?php echo $this->name; ?>',
    preload: function() {
        window.PinIt = window.PinIt || {
            loaded:false
        };
        if (window.PinIt.loaded) {
            return;
        }
        window.PinIt.loaded = true;
    },
    onload: function(fadeIn, awaitRender) {
        if ('<?php echo $this->fadeIn; ?>') {
            fadeIn(document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'), '<?php echo $this->fadeIn; ?>');
        }
    }
});
