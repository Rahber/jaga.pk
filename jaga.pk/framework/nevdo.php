<?php
/*
	package jaga.pk
	Author : Rahber
	www.nevdo.com

*/

 global $user; global $session;
 
 class nevdo{



function start_application(){
self::load_config(); //loading default files and setups
self::load_header(); //loading header



}


function load_header(){

$template = new template();
$template->load_file(HEADERFILE);


}


function load_config(){

require_once(dirname(__FILE__).'/vars.php');
require_once(dirname(__FILE__).'/template.php');


$vars = new vars();
$vars->initialize();
}






}




?>