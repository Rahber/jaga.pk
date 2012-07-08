<?php
/*
	package jaga.pk
	Author : Rahber
	www.nevdo.com

*/
global $user,$theme;
class template{

var $root = './protected/layout/default/template/';
	var $cachepath = '';
	var $files = array();
	var $filename = array();
	var $files_inherit = array();
	var $files_template = array();
	var $inherit_root = '';
	var $orig_tpl_storedb;
	var $orig_tpl_inherits_id;
	var $_tpldata = array('.' => array(0 => array()));
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
	
	function _tpl_include($filename, $include = true)
	{
		$handle = $filename;
		$this->filename[$handle] = $filename;
		$this->files[$handle] = $this->root . '/' . $filename;
		



		if ($include)
		{
			global $user;

			if ($filename)
			{
				include($filename);
				return;
			}
			
		}
	}
	
		
	
	function assign_vars($vararray,$pageContents)
	{
		foreach ($vararray as $key => $val)
		{
			 $pageContents = str_replace ('{'.$key.'}', $val, $pageContents);
		}

		return $pageContents;
	}

	
	function assign_display($template_var)
	{
		
		
		 $contents = ob_get_clean();
	

	$contents = $this->assign_vars($template_var, $contents);
	
			echo $contents;
		
	}
	
	function set_filenames($filename_array)
	{
	
		if (!is_array($filename_array))
		{
			return false;
		}
		foreach ($filename_array as $handle => $filename)
		{
			if (empty($filename))
			{
				trigger_error("template->set_filenames: Empty filename specified ", E_USER_ERROR);
			}

			$this->filename[$handle] = $filename;
			$this->files[$handle] = $this->root . '/' . $filename;

		self:: _tpl_include($this->files[$handle]);
		
		}

		return true;
	}





}




?>