<?php

/**
 * @file jcarousel-view.tpl.php
 * View template to display a list as a carousel.
 */
?>
<div class="container">
<ul class="<?php print $jcarousel_classes; ?>">
  <?php foreach ($rows as $id => $row): ?>
    <li class="<?php print $row_classes[$id]; ?>" style="display: none;">
        <div class="border-carousel">
            <div class="inside-border-carousel">
            <?php print $row; ?>
            </div>
        </div>
    </li>
  <?php endforeach; ?>
</ul>
</div>