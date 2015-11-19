<?php $has_image = !empty($row->field_field_image); ?>
<div class="row">   
  <?php if($has_image): ?> 
    <div class="col-sm-12 col-md-5">  
      <div class="post-img media">
        <div class="mediaholder">
          <section class="date">
            <?php print $fields['created']->content; ?>  
          </section>
            <a href="<?php print $fields['field_pdf']->content; ?>" target="_blank">
          <?php print $fields['field_image']->content; ?>
            </a>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="col-sm-12 <?php  if($has_image) print 'col-md-7' ; ?>">   
  	<section class="post-content">
          <header class="meta">
      		  
              <h2><a href="<?php print $fields['field_pdf']->content; ?>" target="_blank"><?php print $fields['title']->content; ?></a></h2>
          </header>
           <?php print $fields['body']->content; ?>  
  	</section>	
  </div>
  </div>
