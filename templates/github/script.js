if ('<?php echo $this->fadeIn ?>') {
    _socialQueue.push({
        preload: function(fadeIn) {
            fadeIn(document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'), '<?php echo $this->fadeIn; ?>');
        }
    });
}
