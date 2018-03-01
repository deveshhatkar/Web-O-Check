<?php 
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Final Score</title>
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
	<h1>Well Well!!</h1>
	<h3>Here is your Score:</h3>
	<h2><?php echo $_SESSION["score"]?></h2>
	<h3>Please report this score to the Cordinator!</h3>
	<h2>ONE MORE THING</h2>
	<h3>And I Promise this will be the Last One</h3>
	<h3>But before we procede I would like to tell you something</h3>
	<h2>Missing someone makes you feel incomplete, similar is the way with codes!</h2>
	<a href="final.php"><button>ENJOY!!</button></a>
</center>

</body>
</html>