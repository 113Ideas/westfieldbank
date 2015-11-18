<div id="<?php print $view_id; ?>" class="advisory_themes">
	<?php for($i = 0; $i < count($rows); $i+=$sliderows):?>
		<div class="advisory_themes">
			<?php for($j=$i; $j<$i+$sliderows; $j++):?>
			<?php if($rows[$j]) print $rows[$j];?>
			<?php endfor;?>
		</div>
	<?php endfor;?>
</div>