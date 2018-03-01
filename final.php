<!DOCTYPE html>
<html>
<head>
	<title>FINAL</title>
</head>

<style type="text/css">

	input{
		padding: 5px;
	}
	
	table{		
		padding: 5px;
	}	

</style>

<body bgcolor="black">
		
	<center>
		
		<form>			
			
			<fieldset>
				<table cellspacing="10px">
					<legend style="background-color: white">Registration Form</legend>
				
					<tr>						
						<td style="background-color: white"><input type="text" placeholder="Charusat ID"></td>
					</tr>
					<tr>						
						<td style="background-color: white"><input type="text" name="" placeholder="Your Name"></td>
					</tr>
					<tr>							
							<td style="background-color: white"><input type="text" name="" placeholder="Contact Number"</td>
					</tr>
					<tr>					
						<td style="background-color: white"><input type="text" placeholder="Password"></td>
					</tr>						
					<tr>	
						<td style="background-color: white"><input type="text" placeholder="Re-enter Password"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" onclick="validate()" name="" value="SUBMIT"></td>
					</tr>			
				</table>
			</fieldset>
		</form>

	</center>
	<script type="text/javascript">
		function validate()
		{
			alert("Well there's something missing here! Isn't it?!")
		}
	</script>>
</body>
</html>