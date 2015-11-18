<?php

function advisory_themes_views_advisory_preprocess_views_advisory(&$vars) {
  template_preprocess_views_view_unformatted($vars);
  $options = $vars['options'];
  $view = $vars['view'];

  $view_id = drupal_html_id($view->name . '-' . $view->current_display);
  $vars['view_id'] = $view_id;
  $vars['sliderows'] = $options['rows'];
  $js_settings = array(
      'advisory' => array(
          $view_id => array(
              'columns' => $options['columns'],
              'mode' => $options['mode'],
              'speed' => $options['speed'],
              'auto' => ($options['auto']) ? true : false,
              'pause' => $options['pause'],
              'infiniteLoop' => ($options['infiniteloop']) ? true : false,
              'slideMargin' => ($options['slidemargin']) ? (int) $options['slidemargin'] : 0,
              'startSlide' => $options['startslide'],
              'randomStart' => ($options['randomstart']) ? true : false,
              'pager' => ($options['pager']) ? true : false,
              'controls' => ($options['controls']) ? true : false,
              'minSlides' => $options['minslides'],
              'maxSlides' => $options['maxslides'],
              'moveSlides' => $options['moveslides'],
              'slideWidth' => $options['slidewidth'],
              'prevText' => $options['prevtext'],
              'nextText' => $options['nexttext']
          ),
      ),
  );
  
}