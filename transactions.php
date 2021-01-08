<?php

include'database.php';

?>

<html>


<head>
<title>transactions</title>
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


<h3 class='text-center'>Transaction Details</h3>
</div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 bg-light mt-5 rounded">
<?php
$sql="select *from transactions";
$res=$db->query($sql);
if($res->num_rows>0)
{
	echo"<table class= 'table table-dark table-striped'>
	<tr>
	<th>SNO</th>
	<th> From User</th>
	<th> To User</th>
	<th> Amount</th>
	
	</tr>";
	$i=0;
	while($row=$res->fetch_assoc())
	{
		$i++;
		echo "<tr>";
		echo"<td>{$i}</td>";
		echo"<td>{$row["fromuser"]}</td>";
		echo"<td>{$row["touser"]}</td>";
		echo"<td>{$row['amount']}</td>";
		echo"</tr>";
		
		
	}
	
	echo "</table>";
	
	
}
else
{
	echo "<p class='error'>NO BOOKS FOUND</p>";
}
?>
</div>
</div>
</div>
</body>
<html>