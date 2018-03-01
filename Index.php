<!DOCTYPE html>
<html>
<head>
	<title>SeeTheUnseen</title>
</head>
<style type="text/css">
	body{
		background-color: black;
		visibility: hidden;
	}

	h1,h2,h4{
		color: white;
	}
</style>
<script type="text/javascript">
	function clicked()
	{
		document.cookie = "session=true";
		window.location = "sessionstarter.php";
	}
</script>
<body>

<center>
	<h1>Great!</h1>
	<h2>Welcome to Web-O-Check!!</h2>
	<h4>Those who can see the Invisible can do the Impossible</h4>

	<BUTTON id = "go" onclick="clicked()">HERE IS YOUR AWARD</BUTTON>
</center>

</body>
</html>