<!DOCTYPE html>
<html>
<head>
	<title>ORDER BLOOD HERE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.container {
  width: 50%;
  height: 70%;
  padding-right: 15px;
  padding-left: 25px;
  margin-right: auto;
  margin-left: auto;
  background-color: lightgreen;
  
}

</style>

</head>
<body bgcolor="powderblue">
<form method="post">
<h1>NOTE:</h1>
<p > NOTE THAT ALL BLOODTYPES SHOULD BE WRITTEN IN CAPITAL LETTERS . EXAMPLE: AB+VE , AB-VE , O+VE etc </p>

<div class="container">
<h1><font color="green">ORDER</font></h1>
<label><font color="black" size="3%">BLOODTYPE</font></label>
<input type="text" name="btype" placeholder="enter your btype"><br>
<label><font color="black" size="3%">HOSPITAL</font></label>
<input type="text" name="hname" placeholder="enter your hnam"><br>
<label><font color="black" size="3%">QUANTITY</font></label>
<input type="number" name="qty" placeholder="in ml"><br>




<input type="submit" name="SUBMIT" value="ORDER">

</div>

</form>
<?php


include('db1.php');
if(isset($_POST['SUBMIT']))
{
   
	$b = $_POST['btype'];
    $q = $_POST['qty'];
    $h = $_POST['hname'];
    
	$qry=mysqli_query($con,"SELECT qty FROM blood where bloodtype='$b'");
   	while($res1=mysqli_fetch_array($qry))
	{
		$quantity=$res1['qty'];
	}
		
		
		if($q<$quantity)
		{

			$qry1 = mysqli_query($con,"INSERT INTO `orderblood`(`bloodtype`,`quantity`,`h_name`) VALUES ('$b','$q','$h')")or die(mysqli_error($con));
			if($qry1 == true)
			{

				$sql=mysqli_query($con,"UPDATE blood set qty=($quantity-$q) where bloodtype='$b'");
				echo"
            	<script>
		    	alert('SUCCESSFULLY ORDERED');
            	window.location.href= 'continue.php';
		    	</script>
		    	";
			}
	

			else
			{
			echo "FAILEd.QUANTITYOF BLOOD UNAVAILABLE";
			}



		}}
		
		



?>

</body>
</html>
