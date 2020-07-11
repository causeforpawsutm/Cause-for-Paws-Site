<?php
	ini_set('display_errors', 'On');
	
	session_save_path("./_sessions");
	session_start(); 


	$errors=array();
	$views="";
	
	
	
	if(!isset($_SESSION['state'])){
		$_SESSION['state']='home';
		$views="home.php";
	}
	
	switch($_SESSION['state']){
		case "test":
			$views="test.php";

			//button to go back to home
			
			if (isset($_REQUEST['test2btn'])) {
				$_SESSION['state']='home';
				$view="home.php";
				break;
			}
			
			break;
		
		case "home":
			// the view we display by default
			$views="home.php";
			
			if (isset($_REQUEST['testbtn'])) {
				$_SESSION['state']='test';
				$view="test.php";
				break;
			}
			break;
	}
	require_once "views/$views";
?>
