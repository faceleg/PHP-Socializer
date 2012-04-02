<script type="text/javascript">
    // COI\Social - StumbleUpon
    (function(){
        var li = document.createElement('script');
        li.type = 'text/javascript';
        li.async = true;
        li.src = window.location.protocol + '//platform.stumbleupon.com/1/widgets.js';

        li.onload = function() {
            <?php if ($this->fadeIn): ?>
            fadeIn(document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'), <?php echo $this->fadeIn; ?>);
            <?php endif; ?>
        }

        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(li, s);

        // /**
        //  * Tracks everytime a user clicks on a tweet button from Twitter.
        //  * This subscribes to the Twitter JS API event mechanism to listen for
        //  * clicks coming from this page. Details here:
        //  * http://dev.twitter.com/pages/intents-events#click
        //  * This method should be called once the twitter API has loaded.
        //  * @param {string} opt_pageUrl An optional URL to associate the social
        //  *     tracking with a particular page.
        //  * @param {string} opt_trackerName An optional name for the tracker object.
        //  */
        // _ga.trackTwitter = function(opt_pageUrl, opt_trackerName) {
        //   var trackerName = _ga.buildTrackerName_(opt_trackerName);
        //   try {
        //     if (twttr && twttr.events && twttr.events.bind) {
        //       twttr.events.bind('tweet', function(event) {
        //         if (event) {
        //           var targetUrl; // Default value is undefined.
        //           if (event.target && event.target.nodeName == 'IFRAME') {
        //             targetUrl = _ga.extractParamFromUri_(event.target.src, 'url');
        //           }
        //           _gaq.push([trackerName + '_trackSocial', 'twitter', 'tweet',
        //             targetUrl, opt_pageUrl]);
        //         }
        //       });
        //     }
        //   } catch (e) {}
        // };


        // // Setup a callback to track once the script loads.
        // twitterWidgets.onload = _ga.trackTwitter;

        // document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
    })();
</script>
