<?php
/*
	package jaga.pk
	Author : Rahber
	www.nevdo.com

*/

global $user; global $sid;

class session{



	function is_guest(){
		if($_SESSION['loggedin']==0)
		return true;
		else return false;

	}


	function startSession($timeout = 1440){
		ini_set('session.gc_maxlifetime', 1440);
		session_start();

		 if (isset($_SESSION['timeout_idle']) && $_SESSION['timeout_idle'] < time()) {
				session_destroy();
				session_start();
				session_regenerate_id();
				$_SESSION = array();
			}

			$_SESSION['timeout_idle'] = time() + $timeout;
			$sid=session_id();
			

	}
	
	function remove_session(){
		session_destroy();
	}





}



?>