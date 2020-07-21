<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
		body{
			background-image:url("public/image/view3.jpg");
			background-repeat: no-repeat; 
		background-size: cover;
		}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 {
  width: 100%;    
  background-color: lightpink;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-size: 30px;
}
</style>

</head>
<body>
<button class="button" onclick="location.href='dispcustdetails.php';">view donor details</button><br>
<button class="button" onclick="location.href='donorparticipants.php';">UPDATE QUANTITY</button><br>
<h2> <font color="black">AVAILABLE BL0OD TYPE IN  BLOODBANK</font></h2><br>
<table id=t01>
<th>BLOODTYPE</th>
<th>QUANTITY</th>
<?php
include('db.php');
	$sql=mysqli_query($con,"SELECT bloodtype,qty FROM blood");

	while($res=mysqli_fetch_array($sql))
	{
		echo'
		<tr>
        <td>'.$res['bloodtype'].'</td>
		
		<td>'.$res['qty'].'</td>
	
		</tr>
		
			 ';
	}
	
	?>
	</table>
</body>
</html>
