<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php
if($_GET['term_node_tid_depth']):
?>

<div id="quiz-question-exposed">
    
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>
<div class="headinfo">
    
    <div class="subtitle2">CHECKING <b>ACCOUNT</b> QUIZ</div>
<h2 class="title1">Still Not Sure Which Checking Account Is Right For You?</h2>
<p class="summary_text">Take this quiz to find the ideal account for your needs</p>
</div>

    <div id="field-features-wrapper" class="views-exposed-widget views-widget-choose-a-plan">
<?php foreach ($widgets as $id => $widget): ?>
        <div id="qq-<?php echo $id?>" class="quiz-question">
            <?php if (!empty($widget->label)): ?>
                <span class="subtitle-top"><?php print $widget->label; ?></span>
              <?php endif; ?>
            <?php if (!empty($widget->description)): ?>
                <h2 class="title1"><?php print $widget->description; ?></h2>
            <?php endif; ?>
            <?php if (!empty($widget->operator)): ?>
                <?php print $widget->operator; ?>       
            <?php endif; ?>
                <?php print $widget->widget; ?>
        </div>
      
<?php endforeach; ?>
        <div class="truck-btn">
            <?php if (!empty($button)): ?>
            <div class="text-center">
              <?php print $button; ?>
            </div>
          <?php endif; ?>
           
        </div>
    </div>

</div>

<?php
endif;
?>