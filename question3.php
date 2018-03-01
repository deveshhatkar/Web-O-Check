<?php
	session_start();

	if($_SESSION['session'] != "true")
		header("Location: Index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Question 2</title>
</head>
<style type="text/css">
		
		body{
			background-color: black;
			/*visibility: hidden;*/
		}
		table,h3,h1,h2,h4{
			color: white;
		}

</style>

<body>
	
	<center>
		
		<br><br>
		<h1>Question 2</h1>
		<br>
		
		<form name="my" action="answer3.php" method="POST">
		<table>
			<tr>
				<td ><h3>Java Script is a _____ language (compiled/interpreted).</h3></td>
			</tr>						
			<tr>
				<td ><input name="answer" style="width: 100%; padding: 5px;" type="text" placeholder="Enter your Answer"></td>
			</tr>
			<tr>
				<td><br></td>
			</tr>
			<tr>
				<td>
					<center><input style="width: 100px; padding: 5px;" type="submit" value="SUBMIT"></center>
				</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td style="text-align: center">Your Score: <?php echo $_SESSION["score"]?></td>
			</tr>
		</table>
		</form>

		<a href="final_score.php"><button style="width: 100px; padding: 5px;">QUIT</button></a>
	</center>
</body>
</html>