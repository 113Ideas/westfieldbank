<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix" <?php print $attributes; ?> >

        
<?php
// We hide the comments and links now so that we can render them later.
hide($content['comments']);
hide($content['links']);
 ?> 
    
<?php if( !empty($field_hero_image[0]) ): ?>
<div class="team-image-page rtecenter">
    <img src="<?php print $GLOBALS['base_url'].'/sites/default/files/'.$field_hero_image[0]['filename']; ?>" />
</div> 
    <?php endif;?>
<?php if( !empty($field_subtitle[0]) ): ?>
<div class="subtitle1 rtecenter">
        <?php print $field_subtitle[0]['value']; ?>
</div>
    <?php endif;?>
<h2 class="title1 rtecenter">
        <?php print $title[0]['value']; ?>
</h2>
<div class="container">
    
<?php if( !empty($field_description[0]) ): ?>
    <div class="row">
        <div class="region region-description-page col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="summary_text"><?php print $field_description[0]['value']; ?></div>
        </div>
    </div>
    <?php endif;?>
<?php if( !empty($body[0]) ): ?>
    <div class="row">
        <div class="region region-body-page col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php print $body[0]['value']; ?>
        </div>
    </div>
    <?php endif;?>
</div>
   

<div class="container">
    <div class="row">
        <div class="region region-description-page col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php print render($content['comments']); ?> 
        </div>
    </div>
</div>    
    
        
</article>


