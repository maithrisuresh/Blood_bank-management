 <!DOCTYPE html>
<html>
<head>
	<title> login page for manager</title> 
	<meta name="viewport" content="width=device-width , initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
	<style>

body {
  background-image: url(manager.png)
  font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
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
  width: 35%;
  padding-right: 5px;
  padding-left: 200px;
  margin-right: auto;
  margin-left: auto;


}

img.avatar {
  width: 50%;
  
}

.container {
  width: 35%;
  padding-right: 5px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto;



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
<body bgcolor="lightblue">
<h2>Login Form</h2>
<form method="post" id="form_login">
 <div class="imgcontainer">
    <img src="public/image/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

   
<div class="container">
<h1><font color="red">LOGIN</font></h1>
<label><font color="black">USERNAME</font></label>
<input type="text" name="name"><br>
<label><font color="black">PASSWORD</font></label>
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
   
	if($u=='manager' AND $pas=='save life')
	{
		  echo"
            <script>
		    alert('SUCCESSFULLY LOGGGED IN');
		    window.location.href= 'managerhome.php';
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

<button onclick="location.href='managerregistration.php';">NOT YET REGISTERED CLICK HERE</button><br>
</body>
</html>