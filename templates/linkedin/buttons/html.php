<script type="IN/Share"
    data-url="<?php echo $url; ?>"
    <?php if ($counter): ?>
    data-counter="<?php echo $counter; ?>"
    <?php endif; ?>
    <?php if ($showZero): ?>
    data-showZero="true"
    <?php endif; ?>
    data-onSuccess="_ga.trackLinkedIn.success"
    data-onError="_ga.trackLinkedIn.error"></script>
