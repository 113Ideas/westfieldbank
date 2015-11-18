<?php

/**
 * Implements hook_views_plugins
 */
function dexp_advisory_views_plugins() {
  return array(
      'style' => array(
          'dexp_grid2' => array(
              'title' => t('Dexp Responsive Grid Advisory'),
              'help' => t('Display content in a responsive grid.'),
              'handler' => 'dexp_advisory_plugin_style_grid',
              //'path' => drupal_get_path('module', 'dexp_portfolio') . '/views',
              'uses options' => TRUE,
              'uses row plugin' => TRUE,
              'uses row class' => TRUE,
              'type' => 'normal',
              'theme' => 'views_dexp_advisory',
              //'theme path' => drupal_get_path('module', 'dexp_portfolio') . '/theme',
              //'theme file' => 'dexp_advisory.theme.inc',
          ),
      ),
  );
}