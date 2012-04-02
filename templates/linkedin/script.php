<script type="text/javascript">
    (function() {
        var li = document.createElement('script');
        li.type = 'text/javascript';
        li.async = true;
        li.src = '//platform.linkedin.com/in.js';
        li.onload = function() {
            <?php if ($this->fadeIn): ?>
            var awaitRender = function(element) {
                if (element.getElementsByClassName('IN-widget').length) {
                    fadeIn([element], <?php echo $this->fadeIn; ?>);
                } else {
                    window.setTimeout(function() { awaitRender(element) }, 100);
                }
            };
            var buttons = document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>');
            for(var i = 0; i < buttons.length; i++) {
                awaitRender(buttons[i]);
            }
            <?php endif; ?>
        }
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(li, s);
    })();
    // COI\Social - Linked In
    (function(){
        var trackerName = _ga.buildTrackerName_();
        _ga.trackLinkedIn = {
            // LinkedIn callbacks seem broken, I've included these anyway...
            success: function() {
                _gaq.push([trackerName + '_trackSocial', 'linkedin', 'share', targetUrl, opt_pageUrl]);
            },
            error: function() {
                _gaq.push([trackerName + '_trackSocial', 'linkedin', 'error', targetUrl, opt_pageUrl]);
            }
         };
         // If jQuery is present, bind a click event to the linked in anchor and let Google know about any clicks we capture
         if (jQuery) {
            $('.IN-widget').click(function(){
                _gaq.push([trackerName + '_trackSocial', 'linkedin', 'click', $(this).parents('div.coi-social-button-linkedIn').find('script').data('url')]);
            });
        }
    })();
</script>