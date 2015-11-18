<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php
$width = 12;
$items = count($rows);

$cols = $width / $items;
?> 
<?php foreach ($rows as $id => $row): ?>
  <div class="region festure-icons col-xs-12 col-sm-12 col-md-<?php echo $cols ?> col-lg-<?php echo $cols ?>">
      <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
        <?php print $row; ?>
      </div>
  </div>
 
<?php endforeach; ?>