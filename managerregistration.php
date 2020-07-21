<<!DOCTYPE html>
<html>
<head>
	<title>registration page for manager</title>
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
<body >

<div class="container" >
<form method="post">
<h1><font color="BLUE">MANAGER REGISTRATION</font></h1>
<label><font color="black" size="5%">NAME</font></label>
<input type="text" name="name" placeholder="enter your name"><br>

<label><font color="black" size="5%">PHONE</font></label>
<input type="number" name="pno" placeholder="enter your pno"><br>

<label><font color="black" size="5%">EMAILID</font></label>
<input type="text" name="email_id" placeholder="enter your emailid"><br>

<label><font color="black" size="5%">BNO</font></label>
<input type="number" name="bno" placeholder="enter your bloodbank you are working in"><br>

<input type="submit" name="SUBMIT" value="REGISTER">
</div>
</form>
<?php

include('db1.php');
if(isset($_POST['SUBMIT']))
{

	$n = $_POST['name'];
    $p = $_POST['pno'];
	$e = $_POST['email_id'];
	$b = $_POST['bno'];

	$qry = mysqli_query($con,"INSERT INTO `blood_bank_manager`( `bnum`, `m_name`,`pno`,`email_id`) VALUES ('$b','$n','$p','$e')")or die(mysqli_error($con));
	if($qry == true)
		{
			echo"
            <script>
		    alert('SUCCESSFULLY REGISTERED  .  YOUR USERNAME IS manager AND PASSWORD IS save life');
            window.location.href= 'managerlogin.php';
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