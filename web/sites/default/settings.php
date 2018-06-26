<?php

// @codingStandardsIgnoreFile

$databases = array();

$config_directories = array();

$settings['hash_salt'] = 'tXVgmi_ld2Lv-5yp1VpTORsrtZPcCmH-dkurFioxPWYUGbpjCazSTch-8gU8o7ONfJKR46ok8Q';

$settings['update_free_access'] = FALSE;

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;

$config_directories['sync'] = '../config/sync';

$settings['install_profile'] = 'standard';

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
