 
<<!DOCTYPE html>
<html>
<head>
	<title> login page for receptionist</title>
</head>
<body>
<form method="post">
<h1><font color="red">LOGIN</font></h1>
<label><font color="black">USERNAME</font></label>

<input type="text" name="name"><br>
<label><font color="black">PASSWORD</font></label>
<input type="password" name="psw"><br>

<input type="submit" name="SUBMIT" value="LOGIN"><br>
</form>
<?php
include('db2.php');
if(isset($_POST['SUBMIT']))
{
	$u = $_POST['name'];
	$pas = $_POST['psw'];
   
	if($u=='receptionist' AND $pas=='donate blood')
	{
		  echo"
            <script>
		    alert('SUCCESSFULLY LOGGGED IN');
		    window.location.href= 'view.php';
		    </script>
		    ";
		}
		else
		{
			echo"
			<script>;
			alert('incorrect password or username');
			</script>;
			";
		}
}
?>

<button onclick="location.href='registrationreceptionist.php';">NOT YET REGISTERED CLICK HERE</button><br>
</body>
</html>