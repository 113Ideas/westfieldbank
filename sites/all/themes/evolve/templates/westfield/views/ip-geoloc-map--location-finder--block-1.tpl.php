<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-4">
		
	</div>
	<div class="col-xs-12 col-sm-6 col-md-8">
		<h3 class="title3">
			<?php print $fields['title']->content; ?>
		</h3>
		<ul class="list-inline">
			<li><?php print $fields['field_type_of_service']->content; ?></li>
			<li><?php print $fields['field_address']->content; ?></li>
		</ul>
		<?php print $fields['body']->content; ?>
	</div>
</div>