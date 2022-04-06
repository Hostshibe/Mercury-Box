<?php 
return array (
  'debug' => false,
  'salt' => '36738ceae3c53e7b14531238279b835e',
  'url' => 'https://hostshibe.cf/',
  'admin_area_prefix' => '/admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/home/lexcicxy/hostshibe.cf/bb-data',
  'path_logs' => '/home/lexcicxy/hostshibe.cf/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'name' => 'lexcicxy_bbb',
    'user' => 'lexcicxy_bbb',
    'password' => 'Ex0MBBv@^NP$',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/home/lexcicxy/hostshibe.cf/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);