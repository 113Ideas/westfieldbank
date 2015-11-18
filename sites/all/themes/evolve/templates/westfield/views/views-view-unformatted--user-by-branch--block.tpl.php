<div class="container user-branch-block">
	<div class="row">
		<?php foreach ($rows as $id => $row): ?>
                
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
                  <?php print $row; ?>
                </div>
                 </div>
              <?php endforeach; ?>
           
            
	</div>
</div>

