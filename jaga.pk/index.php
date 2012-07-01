<?php
/*
	package jaga.pk
	Author : Rahber
	www.nevdo.com

*/
require_once(dirname(__FILE__).'/framework/nevdo.php');

$nevdo = new nevdo();

$nevdo->start_application(); // initialising the application

$template = new template();

$template->set_filenames(array(
	'body' => 'header.html')
);

$template->assign_display(array(
	'TITLE'	=> 'test',
	'TITLEE'	=> 'test2'
	) );

?>