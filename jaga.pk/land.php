<?php
/*
	package jaga.pk
	Author : Rahber
	www.nevdo.com

*/
require_once(dirname(__FILE__).'/framework/nevdo.php');

$nevdo = new nevdo();

$nevdo->start_application(); // initialising the application


$path = (request_var('path', '/',true));


$pathdata = explode("/", $path);
echo "category "; echo $pathdata[0];
echo "<br />Property name "; echo @$pathdata[1];
?>