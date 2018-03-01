<?php 	
	
	$cook = $_COOKIE['session'];
	if($cook == "true")
	{
		session_start();
		$_SESSION["session"] = "true";
		$_SESSION["score"] = 0;
		echo "Jinga";
		header("Location: question1.php");
	}
	else
	{
		header("Location: Index.php");
	}
?>