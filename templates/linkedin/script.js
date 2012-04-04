_socialQueue.push({
    url: '//platform.linkedin.com/in.js',
    id: '<?php echo $this->name; ?>',
    onload: function(fadeIn, awaitRender) {

        // Google Analytics tracking
        // @todo check if Linked in callbacks are working & update this
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
         if (typeof jQuery !== 'undefined') {
            $('.IN-widget').click(function(){
                _gaq.push([trackerName + '_trackSocial', 'linkedin', 'click', $(this).parents('div.coi-social-button-linkedIn').find('script').data('url')]);
            });
        }

        // Fade button in if desired
        if ('<?php echo $this->fadeIn ?>') {
            awaitRender(document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'), function(element) {
                    return element.getElementsByClassName('IN-widget').length;
                }, '<?php echo $this->fadeIn; ?>');
        }
    }
});
