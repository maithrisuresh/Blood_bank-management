<<!DOCTYPE html>
<html>
<head>
	<title>registration page for donors</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.container {
  width: 25%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
</style>
</head>
<body bgcolor="lightred">
<form method="post">

<div class="container"  style="background-color=yellow">

<h1><font color="red">DONOR REGISTRATION</font></h1>
<label><font color="black">NAME</font></label>

<input type="text" name="name" placeholder="enter your name"><br>
<label><font color="black">AGE</font></label>

<input type="number" name="age" placeholder="enter your age"><br>
<label><font color="black">SEX</font></label>

<input type="radio" name="sex"<?php if (isset($sex) && $sex=="female")echo "checked";?>
value="female">female
<input type="radio" name="sex"<?php if (isset($sex) && $sex=="male")echo "checked";?>
value="male">male<br>


<label><font color="black">PHONE NUMBER</font></label>
<input type="number" name="pno" placeholder="enter your phno"><br>

<label><font color="black">ADDRESS</font></label>
<input type="text" name="address" placeholder="enter your adress"><br>

<label><font color="black">BLOOD TYPE</font></label>
<input type="text" name="bloodtype" placeholder="enter your blood group"><br>

<label><font color="black">CREATE PASSWORD</font></label>
<input type="password" name="psw"><br>


<label><font color="black">CONFIRM PASSWORD</font></label>
<input type="password" name="cpsw"><br>


<input type="submit" name="SUBMIT" value="REGISTER">
</div>
</form>

<?php
include('db.php');

if(isset($_POST['SUBMIT']))
{
    if($_POST['psw'] != $_POST['cpsw'])
    {
	    echo "password not matching";
	    exit();

    }
	$n = $_POST['name'];
	$a = $_POST['age'];
	$g = $_POST['sex'];
	$p = $_POST['pno'];
	$d = $_POST['address'];
	$b = $_POST['bloodtype'];
	$pas=$_POST['psw'];

	$qry = mysqli_query($con,"INSERT INTO `donor`( `name`, `age`,`sex`,`pno`,`address`,`bloodtype`,`password`) VALUES ('$n','$a','$g','$p','$d','$b','$pas')")or die(mysqli_error($con));
	if($qry == true)
		{
			echo "SUCCESSFULLY REGISTERED";
		}
		else
		{
			echo "FAILED";
		}
}
?>

</body>
</html>