<?php
/*
	package jaga.pk
	Author : Rahber
	www.nevdo.com

*/
global $user;
class template{

var $_rootref;

function load_file($file){


$path='./protected/layout/default/template/' . $file;
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