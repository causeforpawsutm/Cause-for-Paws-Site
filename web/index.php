<?php
	ini_set('display_errors', 'On');
	
	session_save_path();
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
			
			if (!empty($_REQUEST['test2btn'])) {
				$_SESSION['state']='home';
				$views="home.php";
				break;
			}

			if(empty($_REQUEST['test2btn']) || $_REQUEST['test2btn']!="login"){
				break;
			}
			
			break;
		
		case "home":
			// the view we display by default
			$views="home.php";
			
			if (!empty($_REQUEST['testbtn'])) {
				$_SESSION['state']='test';
				$views="test.php";
				break;
			}

			if(empty($_REQUEST['testbtn']) || $_REQUEST['submit']!="testbtn"){
				break;
			}
			break;
	}
	require_once "views/$views";
?>
