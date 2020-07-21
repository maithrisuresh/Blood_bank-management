<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include('db.php');
$o=$_GET['id'];
$sql=mysqli_query($con,"SELECT quantity,bloodtype FROM orderblood where orderid=$o");
   	while($res1=mysqli_fetch_array($sql))
	{
		$q=$res1['quantity'];
		$b=$res1['bloodtype'];
	}
		
$sqlq=mysqli_query($con,"SELECT cost FROM blood where bloodtype='$b'");
   	while($res=mysqli_fetch_array($sqlq))
	{
		$c=$res['cost'];
	}
		
$cost=$q*$c/100;



$sql = mysqli_query($con,"DELETE FROM `orderblood` WHERE orderid='$o'");


echo"
    <script>
	alert('SUCCESSFULLY sent . The total cost is $cost');
    window.location.href= 'available.php';
	</script>
		    	";
?>
</body>
</html>