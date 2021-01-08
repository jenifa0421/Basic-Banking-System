<?php


$con=mysqli_connect("localhost","root","","bank");
if($con->connect_error){
	die("connection failed".$con->connect_error);
}
$sql="select * from users"; 
$res=mysqli_query($con,$sql);
$res1=mysqli_query($con,$sql);
?>
<html>
<head>
<title>transfer</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="myscripts.js"></script>
</head>
<body class="bg-light">
<body class="bg-light">
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <a class="navbar-brand" href="index.php">Home</a>
</nav>
<div class="container mt-2">



<h3 class="text-center">Transfer Money</h3>
</div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 bg-light mt-5 rounded">
<form action=""  method="GET" >
<div class="form-group">

<select type="text" name="u1" class="form-control"  required>
<option value="">From User</option>
<?php
while($name=mysqli_fetch_array($res)){
	echo "<option value='".$name['name']."'>".$name['name']."</option>";
}
?>
</select>
</div>
<div class="form-group">
<select type="text"  name="u2" class="form-control" required>
<option value="">To User</option>
<?php
while($name=mysqli_fetch_array($res1)){
	echo "<option value='".$name['name']."'>".$name['name']."</option>";
}
?>

</select>
</div>
<div class="form-group">
<input type="text"  name="amt" class="form-control" placeholder="Enter Amount">
</div>
<input  type="submit" class="btn btn-primary" name="submit" value="Transfer Money">


</form>
</div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>












<?php
if($_GET['submit'])
 {
	 $u1=$_GET['u1'];
	 $u2=$_GET['u2'];
	 $amt=$_GET['amt'];
	 
	 if($u1!=""&& $u2!="" && $amt!="")
	 {
		 //update db
		 $q1="update users set balance=balance+'$amt' where name='$u2'";
		 $r1=mysqli_query($con,$q1);
		 $q2="update users set balance=balance-'$amt' where name='$u1'";
		 $r2=mysqli_query($con,$q2);
		 
		 //insert into transaction
		 
		 $q3="insert into transactions(fromuser,touser,amount)values('$u1','$u2','$amt')";
		 $r3=mysqli_query($con,$q3);
		 
		 
		 
		if($r1 && $r2)
		{
			echo "<script type='text/javascript'>alert('Money Transferred Successfully');		
			</script>";
		}	
		else
		{
			echo "<script type='text/javascript'>alert('Error while Commiting Transaction');		
			</script>";
		}
		
	 }
	 else{
		 echo "<script type='text/javascript'>alert('Please Fill All Fields');		
			</script>";
	 }
 }

?>
</body>
</html>
