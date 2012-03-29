<a href="https://twitter.com/share"
    class="twitter-share-button"
    data-url="<?php echo $url; ?>"
    data-text="<?php echo $title; ?>"
    data-via="<?php echo $username; ?>"
    data-count="<?php echo $counter; ?>"
    <?php if($recommend): ?>
    data-related="<?php echo $recommend; ?>"
    <?php endif; ?>
    <?php if($hashtag): ?>
    data-hashtags="<?php echo $hashtag; ?>"
    <?php endif; ?>
    <?php if($size): ?>
    data-hashtags="<?php echo $size; ?>"
    <?php endif; ?>
    data-lang="en">Tweet</a>