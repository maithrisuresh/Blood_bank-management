<<!DOCTYPE html>
<html>
<head>
	<title>HOSPITAL HOME</title>
	<style>
body {
  
  }


input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  width: 80%;
  padding-right: 5px;
  padding-left: 200px;
  margin-right: auto;
  margin-left: auto;


}

img.avatar {
  width: 50%;
  
}

.container {
  width: 200%;
  height:70%;
  padding-right: 150px;
  padding-left: 100px;
  margin-right: auto;
  margin-left: auto;
background-image:url("public/image/hospital.jpeg");
		background-repeat: no-repeat; 
		background-size: cover;
		align-content: center;
	}


span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
#form_login{
  display: inline-block;
  text-align: center;
  vertical-align: middle;
}
</style>
</head>
<body>
<h2>Login Form</h2>
<form method="post" id="form_login">


   
<div class="container">

<h1><font color="black" >HOSPITAL INFORMATION</font></h1>
<label><font color="black" size="5%"> HOSPITAL NAME</font></label><br>
<input type="text" name="name" placeholder="enter the name"><br>

<label><font color="black" size="5%">PLACE</font></label><br>
<input type="text" name="place" placeholder="enter the place"><br>





<input type="submit" name="SUBMIT" value="submit">

</form>
<?php

include('db1.php');
if(isset($_POST['SUBMIT']))
{
    
	$n = $_POST['name'];
    $p = $_POST['place'];
    



	$qry = mysqli_query($con,"INSERT INTO `hospital`(`hname`,`place`) VALUES ('$n','$p')")or die(mysqli_error($con));
	if($qry == true)
		{
			echo"
            <script>
		    alert('PRESS OK TO VIEW COST OF BLOOD');
            window.location.href= 'blood.php';
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