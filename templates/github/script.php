<?php if ($this->fadeIn): ?>
<script type="text/javascript">
    // COI\Social - GitHub
    (function() {
        var buttons = document.getElementsByClassName('coi-social-button-<?php echo $this->name; ?>');
        fadeIn(buttons, <?php echo $this->fadeIn; ?>);
    })();
</script>
<?php endif; ?>