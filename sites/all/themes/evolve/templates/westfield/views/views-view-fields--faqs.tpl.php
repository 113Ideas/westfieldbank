<div class="panel-heading">
        <h4 class="panel-title">
        <a class="collapsed" data-parent="#accordion-faq" data-toggle="collapse" href="#faq_<?php print $view->row_index; ?>">
                <?php print $fields['title']->content; ?>
        </a>
</h4>
</div>
<div class="panel-collapse collapse " id="faq_<?php print $view->row_index; ?>">
        <div class="panel-body">
               <?php print $fields['body']->content; ?>    
        </div>
</div>