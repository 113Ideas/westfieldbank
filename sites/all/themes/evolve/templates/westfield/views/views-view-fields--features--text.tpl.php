<?php 
$title = explode(' ',$fields['title']->content);
?>

<div class="col-xs-6 col-md-4 rtecenter">
    <h3 class="title3"><?php foreach ($title as $i =>$value) {
        if($i ==0)  echo '<strong>'.$value .'</strong><br>';
        else  echo $value .'<br>';
} ?></h3>
        <h4 class="sumbtitle-feature-text"><?php print $fields['field_short_description']->content; ?></h3>
        <div class="summary_text"><?php print $fields['field_text_description']->content; ?></div>
</div>
