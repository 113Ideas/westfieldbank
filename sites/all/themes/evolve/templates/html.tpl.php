<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
		<?php print $scripts; ?>
                <?php drupal_add_library('system','ui.slide'); ?>
	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
            <div id="dialog" title="Basic dialog">
            <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
          </div>
		<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?>
		<main id="wrapper">
			<?php print $page; ?>
		</main>
		<?php print $page_bottom; ?>
	</body>
</html>
