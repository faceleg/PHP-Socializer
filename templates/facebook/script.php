<script type="text/javascript">
    // COI\Social - Facebook

    // Create fb-root div and append to body
    var fbRoot = document.createElement('div');
    fbRoot.id = 'fb-root';
    document.body.appendChild(fbRoot);

    window.fbAsyncInit = function() {
        FB.init({
          appId      : '<?php echo $appId; ?>', // App ID
          channelUrl : '<?php echo $channelUrl; ?>', // Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });

        // Additional initialization code here

        /**
         * @link http://code.google.com/p/analytics-api-samples/source/browse/trunk/src/tracking/javascript/v5/social/ga_social_tracking.js
         * Tracks Facebook likes, unlikes and sends by suscribing to the Facebook
         * JSAPI event model. Note: This will not track facebook buttons using the
         * iFrame method.
         * @param {string} opt_pageUrl An optional URL to associate the social
         *     tracking with a particular page.
         * @param {string} opt_trackerName An optional name for the tracker object.
         */
        _ga.trackFacebook = function(opt_pageUrl, opt_trackerName) {
          var trackerName = _ga.buildTrackerName_(opt_trackerName);
          try {
            if (FB && FB.Event && FB.Event.subscribe) {
              FB.Event.subscribe('edge.create', function(targetUrl) {
                _gaq.push([trackerName + '_trackSocial', 'facebook', 'like',
                    targetUrl, opt_pageUrl]);
              });
              FB.Event.subscribe('edge.remove', function(targetUrl) {
                _gaq.push([trackerName + '_trackSocial', 'facebook', 'unlike',
                    targetUrl, opt_pageUrl]);
              });
              FB.Event.subscribe('message.send', function(targetUrl) {
                _gaq.push([trackerName + '_trackSocial', 'facebook', 'send',
                    targetUrl, opt_pageUrl]);
              });
            }
          } catch (e) {}
        }();
    };

    // Load the SDK Asynchronously
    (function(d){
     var js, id = "facebook-jssdk"; if (d.getElementById(id)) {return;}
     js = d.createElement("script"); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     d.getElementsByTagName("head")[0].appendChild(js);
    }(document));
</script>