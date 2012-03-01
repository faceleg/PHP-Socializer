<script type="text/javascript">
    // Copyright 2011 Google Inc. All Rights Reserved.
    
    /**
     * @fileoverview A simple script to automatically track Facebook and Twitter
     * buttons using Google Analytics social tracking feature.
     * @author api.nickm@google.com (Nick Mihailovski)
     */
    
    
    /**
     * Namespace.
     * @type {Object}.
     */
    var _ga = _ga || {};
    
    
    /**
     * Ensure global _gaq Google Analytics queue has been initialized.
     * @type {Array}
     */
    var _gaq = _gaq || [];
    
    /**
     * Returns the normalized tracker name configuration parameter.
     * @param {string} opt_trackerName An optional name for the tracker object.
     * @return {string} If opt_trackerName is set, then the value appended with
     *     a . Otherwise an empty string.
     * @private
     */
    _ga.buildTrackerName_ = function(opt_trackerName) {
      return opt_trackerName ? opt_trackerName + '.' : '';
    };
    
    
    /**
     * Extracts a query parameter value from a URI.
     * @param {string} uri The URI from which to extract the parameter.
     * @param {string} paramName The name of the query paramater to extract.
     * @return {string} The un-encoded value of the query paramater. underfined
     *     if there is no URI parameter.
     * @private
     */
    _ga.extractParamFromUri_ = function(uri, paramName) {
      if (!uri) {
        return;
      }
      var uri = uri.split('#')[0];  // Remove anchor.
      var parts = uri.split('?');  // Check for query params.
      if (parts.length == 1) {
        return;
      }
      var query = decodeURI(parts[1]);
    
      // Find url param.
      paramName += '=';
      var params = query.split('&');
      for (var i = 0, param; param = params[i]; ++i) {
        if (param.indexOf(paramName) === 0) {
          return unescape(param.split('=')[1]);
        }
      }
      return;
    };
</script>