<?php
global $base_url;
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

$title = explode(' ',$fields['title']->content);

$myurl='#';
?>

  <?php if ( $fields['field_url_carousel_home_1']->content!='' ): ?>
 <?php 
   
        $myurl= $GLOBALS['base_url'] .'/'.$fields['field_url_carousel_home_1']->content;
   
 ?>
  <?php endif; ?>


  <a href="<?php print $myurl?>">
    <?php print $fields['field_image_carousel_home']->content; ?>
  
      </a>

    <h3 class="title-carousell">
    <a href="<?php print $myurl?>">
        <?php foreach ($title as $i =>$valu) {
        if($i ==0)  echo '<strong>'.$valu .'</strong><br>';
        else  echo $valu .' ';
} ?>
      </a></h3>
    
    <?php 
    $body = explode(' ', $fields['body']->content);
    $tt= 0;
    $text = '';
    
    foreach ($body as $key => $value) {
        if($tt<100){
            $tt = $tt + strlen($value);
            $text .= $value;
            if($key < count($body))$text .= ' ';
        }
    }
    echo $text;
        for($i=strlen($text);$i<130;$i++ ){
            ($i == strlen($text) )? print '<br />':'';
            echo ' &nbsp; ';
        }
    ?>
    
    <a href="<?php print $myurl?>" class="btn-carousel-home">
     Learn More
    </a>
 

