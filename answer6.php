<?php 
	session_start();

	$answer = $_POST['answer'];

	if (strtoupper($answer) == "SGML") {
		# code...
		echo "<script type='text/javascript'>alert('Correct! 10 Points');</script>";
		$_SESSION['score'] += 10;
		header("Location: final_score.php");
	}
	else
	{
		echo "<script type='text/javascript'>alert('Opps! That was Incorrect! -5 Points!');</script>";
		$_SESSION['score'] -= 5;
		header("Location: final_score.php");
	}
 ?>