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



echo $file;

}

function set_template()
	{
		global $phpbb_root_path, $user;
		echo $user->theme;

	
		if (file_exists( '../protected/layout/' . $user->theme. '/template/header.html')){
		
		
		return true;
		}
		else
		{
		trigger_error("There was an error");
		return false;
		}
		
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