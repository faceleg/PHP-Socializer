<?php if ($this->fadeIn): ?>
    _socialQueue.push({
        preload: function(f) {
            var buttons = document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>');
            for (var i = 0; i < buttons.length; i++) {
                f.iframeOnload(buttons[i].getElementsByTagName('IFRAME')[0], buttons[i], '<?php echo $this->fadeIn; ?>');
            }
        }
    });
<?php endif; ?>
