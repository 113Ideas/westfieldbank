<?php 
    $nid = $fields['nid']->content;
    $url1 = $GLOBALS['base_url'] .'/contact-us';
    $url2 = $GLOBALS['base_url'] .'/'.drupal_get_path_alias('node/'.$nid);
    $title = explode(' ',$fields['title']->content);
?>
<div class="conten-pb">
	<div class="row">
		<div class="col-xs-12 col-sm-3">
			<h3 class="title3">
                            <?php
                            foreach ($title as $i =>$value) {
                                if($i ==0)  echo '<strong>'.$value .'</strong><br>';
                                else  echo $value .' ';
                            }
                            ?>
			</h3>
		</div>
		<div class="col-xs-12 col-sm-4">
                    <div class="features-list">
                        <?php
                        if( !empty($fields['field_features_points']))
                            print $fields['field_features_points']->content; ?>
                    </div>
		</div>
		<div class="col-xs-12 col-sm-5">
			<?php 
                        if( !empty($fields['field_description_external']))
                        print $fields['field_description_external']->content; ?>
		</div>
	</div>
	<div class="row buttons-a-plants">
		<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4">
			<p>
				<a  href="<?php print $url1; ?>" class="letsgstar">Let's Get Started!</a> 
				<?php
					if($_REQUEST['shs_term_node_tid_depth'] != 121) {
				?>
					<a class="learnmore" href="<?php print $url2; ?>">Learn More</a>
				<?php }
				?>
			</p>
		</div>
	</div>
</div>
    
