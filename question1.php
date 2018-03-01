<?php
	session_start();
	if($_SESSION['session'] != "true")
		header("Location: Index.php");
	$_SESSION["score"] = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>The Game</title>
</head>
<body>
	<style type="text/css">
	body{
		background-color: black;
		/*visibility: hidden;*/
	}

	table,h3,h1,h2,h4{
		color: white;
	}
</style>
<center>
	<h1>Aa! Aa! Not so Soooon!</h1>
	<h2>Lets Play a Game!</h2>
	<br>
	<h1>Kon Banega Score Pati!</h1>

	<h3>Rules:</h3>
	<table>
		<tr>
			<td>1. Clicking the button below, you start to answer a few questions.</td>
		</tr>
		<tr>
			<td>2. You will have two options: Submit the correct answer or Quit the Game!</td>
		</tr>
		<tr>
			<td>3. For every correct answer you get 10 points. For every incorrect answer you get -5.</td>
		</tr>
	</table>

	<h3>So the more the questions you answer the more you gain!</h3>

	<p><a href="question2.php"><button>LET US GET STARTED</button></a></p>
</center>
</body>
</html>