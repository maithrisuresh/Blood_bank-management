<<!DOCTYPE html>
<html>
<head>



<style>
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
<body bgcolor="gray">



<hr>
<table id=t01 border="1">
	<thread>
	<tr>
    <th>code</th>
	<th>cost</th>
	<th>blood type</th>
	
	

</tr>
</thread>
<tbody>
	<?php

	include('db.php');
	$sql=mysqli_query($con,"SELECT * FROM blood");
	while($res=mysqli_fetch_array($sql))
	{
		echo'
		<tr>
        <td>'.$res['code'].'</td>
		<td>'.$res['cost'].'</td>
		<td>'.$res['bloodtype'].'</td>
	
		
	
		</tr>
			 ';
	}
	
	?>

</tbody>
</table>
<button class="button" onclick="location.href='orderblood.php';">ORDER YOUR REQUIRED BLOOD HERE</button><br>
</body>
</html>