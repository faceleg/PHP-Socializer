<div class="fb-like"
    data-href="<?php echo $url; ?>" 
    data-send="<?php echo $sendButton ? 'true' : 'false'; ?>" 
    data-width="<?php echo $width; ?>" 
    data-show-faces="<?php echo $showFaces ? 'true' : 'false'; ?>" 
    data-layout="<?php echo $layout; ?>"
    <?php if ($font): ?>
    font="<?php echo $font; ?>"
    <?php endif; ?>
    data-colorscheme="<?php echo $colorScheme; ?>"></div>