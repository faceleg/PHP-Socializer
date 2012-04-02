<script type="text/javascript">
    // COI\Social - Google Plus
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        <?php if ($this->fadeIn): ?>
        po.onload = function() {
            var awaitRender = function(element) {
                if (element.firstChild &&
                    element.firstChild.firstChild &&
                    element.firstChild.firstChild.tagName.toUpperCase() === 'IFRAME') {
                    fadeIn([element], <?php echo $this->fadeIn; ?>);
                } else {
                    window.setTimeout(function() { awaitRender(element) }, 100);
                }
            };
            var buttons = document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>');
            for(var i = 0; i < buttons.length; i++) {
                awaitRender(buttons[i]);
            }
        }
        <?php endif; ?>
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>