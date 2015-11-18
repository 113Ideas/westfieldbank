<?php
if( $fields['field_content_url']->content !=''):
?>
<?php
 $url = ( strpos( $fields['field_content_url']->content , 'http://') !== false ) ? $fields['field_content_url']->content : $GLOBALS['base_url'] .'/'.$fields['field_content_url']->content;
?>
<p class="rtecenter">
    <a href="<?php echo $url?>"><?php print $fields['field_image']->content; ?></a>
</p>

<h4 class="rtecenter">
    <a href="<?php echo $url?>"><?php print $fields['title']->content; ?></a>
</h4>
<?php
else:
?>
<p class="rtecenter">
        <?php print $fields['field_image']->content; ?>
</p>

<h4 class="rtecenter">
        <?php print $fields['title']->content; ?>
</h4>

<?php
endif;
?>