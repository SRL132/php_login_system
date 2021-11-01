<?php

session_start();

$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['time'] = time();

echo '<pre>';

print_r($_SESSION);

$inipath = php_ini_loaded_file();

print_r($inipath);

// Change the time zone to Europe / Madrid.
// Maximum execution time "max_execution_time"  from 30 to 60 seconds.
// Add a comment at the end of the file.