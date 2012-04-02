<script type="text/javascript">
    // COI\Social - Pinterest
    (function() {
        window.PinIt = window.PinIt || { loaded:false };
        if (window.PinIt.loaded) return;
        window.PinIt.loaded = true;
        function async_load(){
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            if (window.location.protocol == "https:") {
                s.src = "https://assets.pinterest.com/js/pinit.js";
            } else {
                s.src = "http://assets.pinterest.com/js/pinit.js";
            }
            s.onload = function() {
                <?php if ($this->fadeIn): ?>
                fadeIn(document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>'), <?php echo $this->fadeIn; ?>);
                <?php endif; ?>
            }
            var x = document.getElementsByTagName("script")[0];
            x.parentNode.insertBefore(s, x);
        }
        if (window.attachEvent)
            window.attachEvent("onload", async_load);
        else
            window.addEventListener("load", async_load, false);
    })();
</script>
