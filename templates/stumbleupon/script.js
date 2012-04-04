_socialQueue.push({
    url: '//platform.stumbleupon.com/1/widgets.js',
    id: '<?php echo $this->name; ?>',
    onload: function(fadeIn, awaitRender) {
        window.STMBLPN.processWidgets();
        if ('<?php echo $this->fadeIn; ?>') {
            fadeIn(document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'), '<?php echo $this->fadeIn; ?>');
        }
    }
});
