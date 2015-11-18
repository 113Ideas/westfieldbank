<?php $has_image = !empty($row->field_field_image); ?>
<div class="row">   
  <?php if($has_image): ?> 
    <div class="col-sm-12 col-md-5">  
      <div class="post-img media">
        <div class="mediaholder">
          <section class="date">
            <?php print $fields['created']->content; ?>  
          </section>
          <?php print $fields['field_image']->content; ?> 
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="col-sm-12 <?php  if($has_image) print 'col-md-7' ; ?>">   
  	<section class="post-content">
          <header class="meta">
      		   <ul>
      				<li>Posted by <?php print $fields['name']->content; ?></li>				
      		   </ul>
      		   <h2><?php print $fields['title']->content; ?></h2>
          </header>
           <?php print $fields['body']->content; ?>  
  	</section>	
  </div>
  </div>