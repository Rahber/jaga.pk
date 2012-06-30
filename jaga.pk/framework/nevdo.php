<?php
/*
	package jaga.pk
	Author : Rahber
	www.nevdo.com

*/

 global $sid;
 class nevdo{



function start_application(){
self::load_config(); //loading default files and setups
self::load_core();  //call objects
self::load_header(); //loading header



}


function load_header(){
global $user;
$template = new template();
$template->set_template();
$template->load_file(HEADERFILE);



}


function load_config(){

require_once(dirname(__FILE__).'/vars.php');
require_once(dirname(__FILE__).'/user.php');
require_once(dirname(__FILE__).'/template.php');
require_once(dirname(__FILE__).'/session.php');




}

function load_core(){

global $user;global $theme;

$vars = new vars();
$vars->initialize();



$session = new session();
$session->startSession();

$user  = new user();
$user->user_settings();
echo $user->theme;
}




}




?>