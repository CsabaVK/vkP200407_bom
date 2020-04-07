<?php

define('APP', 'Application/');
define('ROOT', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

require_once APP.'Templates/_layout.php';

?>