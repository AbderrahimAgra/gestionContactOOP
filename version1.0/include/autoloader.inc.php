<?php 

spl_autoload_register("myAutoloader");

function myAutoloader($className) {
$path = 'classes/';
$extention = ".class.php";
$fullPath = $path . $className . $extention;
// include_once $_SERVER['include']."/autoloader.inc.php";
include_once $fullPath;
}