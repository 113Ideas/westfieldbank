<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
$category = explode(' ',$fields['field_category']->content);
?>




<div class="conten-pb">
	<div class="row">
		<div class="col-xs-12 col-sm-3">
                    
                     <div class="cat_advisor">
			<h3 class="title3">
                            <?php
                            foreach ($category as $i =>$value) {
                                if($i ==0)  echo '<strong>'.$value .'</strong><br>';
                                else  echo $value .' ';
                            }
                            ?>
			</h3>
                     </div>
		</div>
            
                <?php if ($id%2!=0):?>
                <div class="col-xs-12 col-sm-4">
                    <?php print $fields['picture']->content; ?>
		</div>
		<div class="col-xs-12 col-sm-5">
                     <div class="title_advisor">
                         <h3 class="title3"><?php print $fields['name']->content; ?></h3>
                     </div>
                    <div class="position_advisor"><?php print $fields['field_short_description']->content; ?></div>
                    <div class="icon-mail-adv"><?php print $fields['mail']->content; ?></div>
                    <div class="icon-phone-adv"><?php print $fields['field_user_telephone']->content; ?></div>
                    <div class="icon-linkedin-adv"><?php print $fields['field_user_linkedin']->content; ?></div>
		</div>
                <?php else: ?>
                <div class="col-xs-12 col-sm-5">
                      <div class="title_advisor">
                         <h3 class="title3"><?php print $fields['name']->content; ?></h3>
                     </div>
                    <div class="position_advisor"><?php print $fields['field_short_description']->content; ?></div>
                    <div class="icon-mail-adv"><?php print $fields['mail']->content; ?></div>
                    <div class="icon-phone-adv"><?php print $fields['field_user_telephone']->content; ?></div>
                    <div class="icon-linkedin-adv"><?php
        if( isset($fields['field_user_linkedin']) and  $fields['field_user_linkedin']->content!='' )
            print $fields['field_user_linkedin']->content;
        ?></div>
		</div>
		<div class="col-xs-12 col-sm-4">
                    <?php print $fields['picture']->content; ?>
		</div>  
                <?php endif;?>
		
	</div>
</div>
    