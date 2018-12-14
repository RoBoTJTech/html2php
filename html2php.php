<?php
// Set base dir for website
$baseDir='..';

chdir($baseDir);
$url = parse_url ($_SERVER ['REQUEST_URI']);
$path=$url['path'];
if (substr($path, -1)=='/')
$path.="index.html";
chdir('.'.dirname($path));
$_SERVER['SCRIPT_NAME']=$path;
include(basename($path));
?>
