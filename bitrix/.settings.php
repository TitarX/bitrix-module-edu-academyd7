<?php
return array (
  'utf_mode' => 
  array (
    'value' => true,
    'readonly' => true,
  ),
  'cache' => 
  array (
    'value' => 
    array (
      'type' => 'file',
    ),
    'readonly' => false,
  ),
  'cache_flags' => 
  array (
    'value' => 
    array (
      'config_options' => 3600,
      'site_domain' => 3600,
    ),
    'readonly' => false,
  ),
  'cookies' => 
  array (
    'value' => 
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  'exception_handling' => 
  array (
    'value' => 
    array (
      'debug' => true,
      'handled_errors_types' => 4437,
      'exception_errors_types' => 4437,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
      'log' => NULL,
    ),
    'readonly' => false,
  ),
  'connections' => 
  array (
    'value' => 
    array (
      'default' => 
      array (
        'className' => '\\Bitrix\\Main\\DB\\MysqlConnection',
        'host' => 'localhost',
        'database' => 'intolga_d7',
        'login' => 'intolga_d7',
        'password' => '4fMtiSZ0kc',
        'options' => 2,
      ),
      'db2' => 
      array (
        'className' => '\\Bitrix\\Main\\DB\\MysqlConnection',
        'host' => 'localhost',
        'database' => 'intolga_d7_2',
        'login' => 'intolga_d7',
        'password' => '4fMtiSZ0kc',
        'options' => 2,
      ),
    ),
    'readonly' => true,
  ),
  'academy_module_d7' => 
  array (
    'value' => 
    array (
      'install' => 136,
      'uninstall' => 143,
    ),
    'readonly' => false,
  ),
);
