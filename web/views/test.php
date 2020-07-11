<?php
// So I don't have to deal with unset $_REQUEST['user'] when refilling the form
// You can also take a look at the new ?? operator in PHP7

$_REQUEST['user']=!empty($_REQUEST['user']) ? $_REQUEST['user'] : '';
$_REQUEST['password']=!empty($_REQUEST['password']) ? $_REQUEST['password'] : '';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>Test</title>
	</head>
	<body>
		<header><h1>Test</h1></header>
	
		<main>
			<h1>Test</h1>
			<form action="index.php" method="post">
				<input type="submit" name="test2btn" value="test2btn"/>
			</form>	 
		</main>
		<footer>
		</footer>
	</body>
</html>