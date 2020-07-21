<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('db.php');
$i=$_GET['id'];

$sql = mysqli_query($con,"DELETE FROM `event` WHERE id='$i'");
if($sql==true)
{
echo"
    <script>
	alert('SUCCESSFULLY DELETED');
    window.location.href= 'managerhome.php';
	</script>
		    	";}
		    	else
		    	{
		    		echo"
    <script>
	alert('TRY AGAIN');
    window.location.href= 'events.php';
	</script>
		    	";
		    	}
?>
</body>
</html>
?>
</body>
</html>