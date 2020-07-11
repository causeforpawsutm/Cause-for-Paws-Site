<?php
	ini_set('display_errors', 'On');
	

	
	session_save_path("sess");
	session_start(); 


	$errors=array();
	$views="";
	
	
	
	if(!isset($_SESSION['state'])){
		$_SESSION['state']='home';
	}
	
	switch($_SESSION['state']){
		case "test":
			$views="test.php";

			//button to go back to login
			if ($_SERVER['REQUEST_METHOD'] === 'POST'){
				if (isset($_POST['test2btn'])) {
					$_SESSION['state']='home';
					$view="home.php";
					break;
				}
			}
			break;
		
		case "home":
			// the view we display by default
			$views="home.php";
			

			//checks to see if register button has been clicked, changes the state to register
			if ($_SERVER['REQUEST_METHOD'] === 'POST'){
				if (isset($_POST['testbtn'])) {
					$_SESSION['state']='test';
					$view="test.php";
					break;
				}
			}	
			

			break;
	}
	require_once "views/$views";
?>
