<?php

// General settings. Configure all of these before using nc-cms.
$app_name = '/';
$mainUrl = 'http://'. $_SERVER['HTTP_HOST'] . $app_name .'';
define('NC_LOGIN_USER', "edytor");  // Username for content editor.
define('NC_LOGIN_PASSWORD', "fiona11");  // Password for content editor.
define('NC_WEBSITE_NAME', "My Website");  // Your website name.
define('NC_WEBSITE_URL', $mainUrl .  "index.php");  // Your website internet address.
define('NC_CMS_URL', $mainUrl . "nc-cms");  // Your website internet nc-cms directory address.
define('NC_LANGUAGE', "english");  // Language pack to use. Currently only english is available.

// Optional database settings. Modify these settings if you wish to use nc-cms's database support.

define('NC_USE_DB', false);  // Set to true if you wish to use database support, set to false to disable.
define('NC_DB_HOST', "");  // Hostname for your database server.
define('NC_DB_USER', "");  // Username for database account.
define('NC_DB_PASSWORD', "");  // Password for database account.
define('NC_DB_DATABASE', "");  // Name of database you want to connect to.
define('NC_DB_PREFIX', "");  // Optional prefix for database tables.
