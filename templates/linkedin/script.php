<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="text/javascript">    
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