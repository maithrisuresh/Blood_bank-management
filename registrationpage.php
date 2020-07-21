<<!DOCTYPE html>
<html>
<head>
	<title>registration page for donors</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.container {
  width: 35%;
  height: 70%;
  padding-right: 15px;
  padding-left: 25px;
  margin-right: auto;
  margin-left: auto;
  background-color: yellow;
  
}
.imgcontainer {
  width: 55%;
  padding-right: 5px;
  padding-left: 450px;
  margin-right: auto;
  margin-left: auto;


}
label
{
	display: inline-block;
	width:140px;
	text-align: right;
}
</style>
</head>
<body bgcolor="orange">
<form method="post">
<div class="imgcontainer">
<img src="public/image/view.jpeg" width="400px" heigth="400px" border="5px" ><br>
</div>
<div class="container" >

<h1><font color="red">DONOR REGISTRATION</font></h1><br>
<label><font color="black" size="5%">NAME</font></label>

<input type="text" name="name" placeholder="enter your name"><br>
<label><font color="black" size=5%>AGE</font></label>

<input type="number" name="age" placeholder="enter your age"><br>
<label><font color="black" size="5%">SEX</font></label>

<input type="radio" name="sex"<?php if (isset($sex) && $sex=="female")echo "checked";?>
value="female">female
<input type="radio" name="sex"<?php if (isset($sex) && $sex=="male")echo "checked";?>
value="male">male<br>


<label><font color="black" size="5%">PHONE</font></label>
<input type="number" name="pno" placeholder="enter your phno"><br>

<label><font color="black" size="5%">ADDRESS</font></label>
<input type="text" name="address" placeholder="enter your adress"><br>

<label><font color="black" size="5%">B_TYPE</font></label>
<input type="text" name="bloodtype" placeholder="enter your blood group"><br><br>
<br>

<label><font color="black" size="5%">CREATE_PSW</font></label><br>
<input type="password" name="psw" placeholder="enter password"><br>


<label><font color="black" size="5%">CONFIRM_PSW</font></label><br>
<input type="password" name="cpsw" placeholder="enter password again"><br><br><br>


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
			echo"
            <script>
		    alert('SUCCESSFULLY REGISTERED');
		    window.location.href= 'logindonor.php';
		    </script>
		    ";		}
		else
		{
			echo "FAILED";
		}
}
?>

</body>
</html>