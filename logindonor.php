<<!DOCTYPE html>
<html>
<head>
	<title> login page for receptionist</title>
</head>
<style >
body
	{
		background-image:url("public/image/m2.jfif");
		background-repeat: no-repeat; 
		background-size: cover;
	}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=submit]
{
	width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: red;
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
  width: 55%;
  padding-right: 5px;
  padding-left: 500px;
  margin-right: auto;
  margin-left: auto;


}

img.avatar {
  width: 50%;
  
}

.container {
  width: 55%;
  padding-right: 5px;
  padding-left: 500px;
  margin-right: auto;
  margin-left: auto;


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

   
<div class="container"  >
<h1><font color="purple">LOGIN FOR DONOR</font></h1>
<label><font color="black" size="5%">USERNAME</font></label>
<input type="text" name="name"><br>


<label><font color="black" size="5%">PASSWORD</font></label>
<input type="password" name="psw"><br>

<input type="submit" name="SUBMIT" value="LOGIN"><br>
</div>
</form>

<?php
include('db2.php');
if(isset($_POST['SUBMIT']))
{

	$u = $_POST['name'];
	$pas = $_POST['psw'];
	$sql=mysqli_query($con,"SELECT * FROM donor");
	while($res=mysqli_fetch_array($sql))
	{
	$username=$res['name'];
	$password=$res['password'];

   
	if( $pas==$password)
	{
		  echo"
            <script>
		    alert('SUCCESSFULLY LOGGGED IN');
		    window.location.href= 'dispevents.php';
		    </script>
		    ";
		    exit();
		}
	}
	
			echo"
			<script>;
			alert('incorrect password or username');
			window.location.href='logindonor.php';
			</script>;
			";

		
}
?>
<button onclick="location.href='registrationpage.php';"><font size=200px>NEW DONOR CLICK HERE</font></button><br>
</body>
</html>