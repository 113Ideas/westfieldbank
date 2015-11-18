<?php 
$title = explode(' ',$fields['name']->content);
?>

        <?php //print $fields['view_user']->content; ?>
<div class="image-user-branch-block">
        <?php print $fields['picture']->content; ?>
    </div>
    
    <div class="title_advisor">
         <h3 class="title3"><?php foreach ($title as $i =>$value) {
        if($i ==0)  echo '<strong>'.$value .'</strong><br>';
        else  echo $value .'<br>';
} ?></h3>
    </div>
    <div class="position_advisor">
        <?php print $fields['field_short_description']->content; ?>
    </div>

<div class="info-user-branch-block">
	<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="icon-mail-adv">
        <?php 
        if( isset($fields['mail']) )
        print $fields['mail']->content; 
        ?>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="icon-linkedin-adv">
       <?php
        if( isset($fields['field_user_linkedin']) )
            print $fields['field_user_linkedin']->content;
        ?>
    </div>
</div>
        </div>

    <div class="icon-phone-adv">
        <?php print $fields['field_user_telephone']->content; ?>
    </div>   

</div>
    