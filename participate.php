
<html>
<head>
	<title></title>
	<style >


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=submit]
{
	width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: red;
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
  width: 55%;
  padding-right: 5px;
  padding-left: 500px;
  margin-right: auto;
  margin-left: auto;


}

img.avatar {
  width: 50%;
  
}

.container {
  width: 55%;
  padding-right: 5px;
  padding-left: 500px;
  margin-right: auto;
  margin-left: auto;
background color: lightblue;

}

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
<body bgcolor="POWDERBLUE">
<?php
include('db2.php');
$id=$_GET['id'];
$sql=mysqli_query($con,"SELECT date_event FROM event where id=$id");
while($res=mysqli_fetch_array($sql))
  {
    $date=$res['date_event'];
  }

$curdate=date("y-m-d");
if(strtotime($date)<strtotime($curdate))
  {
          echo"
            <script>
        alert('SORRY . EVENT ALREADY GOT COMPLETED');

        window.location.href='dispevents.php';
        </script>
        ";

    }
    ?>

<form method="post" id="form_login">
 <div class="container">
<label>PARTICIPANT DETAILS</label><BR>
<label>NAME</label>
<input type="text" name="name" placeholder="enter the name"><br>
<label>BTYPE</label>
<input type="text" name="btype" placeholder="enter the bloodtype"><br>
<input type="submit" name="SUBMIT" value"PARTICIPATE"><br>
</div>
</form>
<?php
$id = $_GET['id'];
include('db2.php');


	if(isset($_POST['SUBMIT']))
{
   
	$n = $_POST['name'];
	$b = $_POST['btype'];
	


	$qry = mysqli_query($con,"INSERT INTO `participated`( `event_id`, `donor_name`,`bloodtype`) VALUES ('$id','$n','$b')")or die(mysqli_error($con));
	if($qry == true)
		{
		  echo"
            <script>
		    alert('THANK YOU FOR PARTICIPATING. FURTHER INFORMATION ABOUT THE EVENT WILL BE MAILED TO YOU . YOU WILL GET YOUR CERTIFICATE  THROUGH MAIL. WAITING FOR YOUR GRACIUOS PRESENCE');

		    window.location.href='dispevents.php';
		    </script>
		    ";
}
		else
		{
			echo"
			<script>;
			alert('TRY AGAIN');
			window.location.href= 'participate.php';
			</script>;
			";
		}



	}


?>


</body>
</html>

