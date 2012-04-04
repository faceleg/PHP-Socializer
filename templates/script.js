/**
 * @fileoverview Core PHP Social functions
 * @author Michael Robinson <mike@pagesofinterest.net>
 */

/**
 * Following section taken from Google's social media tracking documentation
 * A simple script to automatically track Facebook and Twitter
 * buttons using Google Analytics social tracking feature.
 *
 * @author api.nickm@google.com (Nick Mihailovski)
 * Copyright 2011 Google Inc. All Rights Reserved.
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

/**
 * PHP Socializer functions
 */

/**
 * @type {Array} List of social objects to be loaded when the document is ready
 */
_socialQueue = [];

(function(w, d) {

    /**
     * Simple fade in effect
     * @param  {Array} elements An array of elements to fade in
     * @param  {Integer} time Total animation time
     */
    var fadeIn = function(elements, time) {
        var startOpacity = 0, steps = 1 / 0.02;
        var step = function step(element) {
            element.style.opacity = +(element.style.opacity) + 0.02;

            // for IE
            element.style.filter = 'alpha(opacity=' + element.style.opacity * 100 + ')';

            if(element.style.opacity < 1) {
                window.setTimeout(function() { step(element); }, time / steps);
            }
        };
        for (var i = 0; i < elements.length; i++) {
            step(elements[i]);
        }
    };

    var awaitRender = function(buttons, rendered, duration) {
        var awaitRenderButton = function(b, r, d) {
            if (r(b)) {
                fadeIn([b], d);
            } else {
                window.setTimeout(function() { awaitRenderButton(b, r, d); }, 200);
            }
        };
        for(var i = 0; i < buttons.length; i++) {
            awaitRenderButton(buttons[i], rendered, duration);
        }
    };

    /**
     * Begin loading social assets
     */
    var go = function() {

        var fjs = document.getElementsByTagName('script')[0];

        /**
         * Load the social object
         * @param  {Object} s A social object to be loaded
         */
        var load = function(s) {
            // Ensure script isn't loaded yet
            if (d.getElementById(s.id)) {
                return;
            }

            if (s.preload) {
                s.preload(fadeIn);
            }

            if (s.url) {

                // Create and initialise script
                var js = d.createElement('script');
                js.src = s.url;
                js.id = '_social' + s.id;
                js.async = 'true';
                console.log(js);
                if (s.onload) { // Attach the onload function if present
                    js.onload = function() { s.onload(fadeIn, awaitRender); };
                }

                fjs.parentNode.insertBefore(js, fjs);
            }
        };

        // Process queue
        for (var i = 0; i < _socialQueue.length; i++) {
            load(_socialQueue[i]);
        }
    };

    // Bind 'go' function to load event
    if (w.addEventListener) {
        w.addEventListener('load', go, false);
    } else if (w.attachEvent) {
        w.attachEvent('onload', go);
    }

})(window, document);
