<?php

/**
 * Implements hook_views_plugins()
 */
function advisory_themes_views_advisory_views_plugins() {
  return array(
      'style' => array(
          'advisory_themes_advisory' => array(
              'title' => t('Advisory Themes Advisory'),
              'help' => t('Display the results as a bxslider'),
              'handler' => 'advisory_themes_views_advisory_plugin_style_advisory',
              'uses options' => TRUE,
              'uses row plugin' => TRUE,
              'uses row class' => TRUE,
              'type' => 'normal',
              'theme' => 'views_advisory',
              //'theme path' => drupal_get_path('module', 'advisory_themes_views_advisorry') . '/theme',
              //'theme file' => 'advisory_themes_views_advisorry.theme.inc',
          ),
      ),
  );
}