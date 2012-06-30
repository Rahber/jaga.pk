<?php
/*
	package jaga.pk
	Author : Rahber
	www.nevdo.com

*/
global $user,$theme;
class template{

var $_rootref;

function load_file($file){
global $theme;

$path='./protected/layout/'.$theme.'/template/' . $file;
include($path);

}

function set_template()
	{
		global $phpbb_root_path, $user;
		

	

		
	}
	
	function assign_vars($vararray)
	{
		foreach ($vararray as $key => $val)
		{
			$this->_rootref[$key] = $val;
		}

		return true;
	}





}




?>