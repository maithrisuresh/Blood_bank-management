<<!DOCTYPE html>
<html>
<head>
	<title>registration page for receptionist</title>
	<style>

	.container {
  width: 35%;
  height: 40%;
  padding-right: 15px;
  padding-left: 25px;
  margin-right: auto;
  margin-left: auto;
  background-color: lightblue;
  align-content: center;
}
body
{
	background-image:url("public/image/m7.jpg");
		background-repeat: no-repeat; 
		background-size: cover;
	
}
label
{
	display: inline-block;
	width:140px;
	text-align: right;
}
</style>
</head>
<body>
<div class="container">
<form method="post">
<h1><font color="BLUE" >RECEPTIONIST REGISTRATION</font></h1>
<label><font color="black" size="5%">NAME</font></label>
<input type="text" name="name" placeholder="enter your name"><br>

<label><font color="black" size="5%">PHONE</font></label>
<input type="number" name="pno" placeholder="enter your pno"><br>

<label><font color="black" size="5%">ADDRESS</font></label>
<input type="text" name="address" placeholder="enter your adress"><br>

<label><font color="black" size="5%">BNO </font></label>
<input type="text" name="bno" placeholder="enter your bloodbank you are working in"><br>

<input type="submit" name="SUBMIT" value="REGISTER">

</form>
<?php

include('db1.php');
if(isset($_POST['SUBMIT']))
{

	$n = $_POST['name'];

	$p = $_POST['pno'];
	$d = $_POST['address'];
	$b = $_POST['bno'];

	$qry = mysqli_query($con,"INSERT INTO `receptionist`( `e_name`, `e_pno`,`e_address`,`e_bno`) VALUES ('$n','$p','$d','$b')")or die(mysqli_error($con));
	if($qry == true)
		{
			echo"
            <script>
		    alert('SUCCESSFULLY REGISTERED  .  YOUR USERNAME IS: receptionist AND PASSWORD IS :donate blood');

		    window.location.href= 'receptionist.php';
		    </script>
		    ";
		}
		else
		{
			echo "FAILED";
		}
}
?>

</body>
</html>