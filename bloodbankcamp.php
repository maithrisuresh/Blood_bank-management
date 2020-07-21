<!DOCTYPE html>
<html>
<head>
	<title>EVENTS</title>
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

</style>
</head>
<body bgcolor="orange">
<form method="post">
<div class="imgcontainer">
<img src="public/image/camp.jpeg" width="400px" heigth="400px" border="5px" ><br>
</div>
<div class="container" >
<h1><font color="red" >NEW EVENTS</font></h1>
<label><font color="black" size="5%">EVENT_NAME</font></label><br>
<input type="text" name="name" placeholder="enter name of event"><br>


<label><font color="black" size="5%">PLACE_HELD</font></label><br>
<input type="text" name="place" placeholder="enter city"><br>
<label><font color="black" size="5% ">LOCATION</font></label><br>
<input type="text" name="loc" placeholder="enter location"><br>
<label><font color="black"  size="5%">DATE</font></label><br>
<input type="date" name="date" placeholder="enter date"><br><br><br>

<input type="submit" name="SUBMIT" value="CREATE EVENT"><br>
</form>
<?php
include('db2.php');

	if(isset($_POST['SUBMIT']))
{
   
	$n = $_POST['name'];
	$p = $_POST['place'];
	$l = $_POST['loc'];
	$d = $_POST['date'];


	$qry = mysqli_query($con,"INSERT INTO `event`( `event_name`, `place`,`location`,`date_event`) VALUES ('$n','$p','$l','$d')")or die(mysqli_error($con));
	if($qry == true)
		{
		  echo"
            <script>
		    alert('SUCCESSFULLY  CREATED EVENT');
		    window.location.href= 'managerhome.php';
		    </script>
		    ";
}
		else
		{
			echo"
			<script>;
			alert('SORRY NOT CREATED');
			window.location.href= 'bloodcamp.php';
			</script>;
			";
		}
	}

?>
</body>
</html>