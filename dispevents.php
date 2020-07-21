<<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
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
    <th>id</th>
	<th>event_name</th>
	<th>place</th>
	<th>location</th>
	<th>date</th>
	

</tr>
</thread>
<tbody>
	<?php

	include('db.php');
	$sql=mysqli_query($con,"SELECT * FROM event");
	while($res=mysqli_fetch_array($sql))
	{
		echo'
		<tr>
        <td>'.$res['id'].'</td>
		<td>'.$res['event_name'].'</td>
		<td>'.$res['place'].'</td>
		<td>'.$res['location'].'</td>
		<td>'.$res['date_event'].'</td>
		<td><a href="participate.php?id='.$res['id'].'">PARTICIPATE</a></td>

		
	
		</tr>
			 ';
	}
	
	?>

</tbody>
</table>
<button class="button"  onclick="location.href='home.php'";>HOME</button><br>
</body>
</html>