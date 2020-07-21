<!DOCTYPE html>
<html>
<head>
	<title>QUANTITY</title>
	<style>
	.container {
  width: 50%;
  height: 70%;
  padding-right: 15px;
  padding-left: 25px;
  margin-right: auto;
  margin-left: auto;
  background-color: lightpink;
  
}
</style>
</head>
<body bgcolor="lightgreen">
<form method="post">
<div class="container">
<label><font size="5%" color="blue">ENTER THE QUANTITY OF BLOOD DONATED</font></label>
<input type="number" name="qty"  placeholder="enter the qty"><br>
<label><font size="5%" color="blue">ENTER THE TYPE OF BLOOD DONATED</font></label>
<input type="text" name="btype"  placeholder="enter the type"><br>

<input type="submit" name="UPDATE_QTY" value="update"><br>
</div>
</form>
<?php

include('db2.php');




	if(isset($_POST['UPDATE_QTY']))
    {
	$quan=$_POST['qty'];
	$b=$_POST['btype'];
  
   $qry=mysqli_query($con,"SELECT qty FROM blood where bloodtype='$b'");
   	while($res1=mysqli_fetch_array($qry))
	{
		$q=$res1['qty'];
	}
		
	$sqlqry=mysqli_query($con,"UPDATE blood set qty=($q+$quan) where bloodtype='$b'");
	if($sqlqry==true)
	{
		
		  echo"
            <script>
		    alert('SUCCESFULLY UPDATED');
            
		    window.location.href='donorparticipants.php';
		    </script>
	    ";
}
		else
		{
			echo"
			<script>;
			alert('TRY AGAIN');
			window.location.href= 'donorparticipants.php';
			</script>;
			";
		}
	}
	?>

</body>
</html>