<<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
th, td {
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
</style>

</head>
<body bgcolor="black">
<hr>
<table id=t01 border="1">
	<thread>
	<tr>
    <th> event_id</th>
	<th>donor_name</th>
	<th>bloodtype</th>
	

</tr>
</thread>
<tbody>
	<?php

	include('db.php');
	$sql=mysqli_query($con,"SELECT * FROM participated order by event_id");
	while($res=mysqli_fetch_array($sql))
	{
		echo'
		<tr>
        <td>'.$res['event_id'].'</td>
		<td>'.$res['donor_name'].'</td>
		<td>'.$res['bloodtype'].'</td>
		
	

		
	
		</tr>
			 ';
	}
	
	?>

</tbody>
</table>
<button onclick="location.href='home.php'";>HOME</button><br>
</body>
</html>