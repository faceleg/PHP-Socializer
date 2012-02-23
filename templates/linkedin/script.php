<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="text/javascript">    
    // COI\Social - Linked In
    (function(){
        var trackerName = _ga.buildTrackerName_();
        _ga.trackLinkedIn = {
            success: function() {
                console.log(arguments);
                _gaq.push([trackerName + '_trackSocial', 'linkedin', 'share', targetUrl, opt_pageUrl]);
            },
            error: function() {
                _gaq.push([trackerName + '_trackSocial', 'linkedin', 'error', targetUrl, opt_pageUrl]);
            }
         };

    })();
</script>