<?php 
include"inc/function.php";

session_start();
if(isset($_SESSION['name']) AND isset($_SESSION['phone'])){

	header("location: profile.php");

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Education Board Results</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="styl.css">
</head>
<body>
<div class="container">

<?php 

if(isset($_POST['sub'])){

	$uname=$_POST['uname'];
	$pass=$_POST['pass'];

	$data = $info -> query("SELECT * FROM user WHERE uname='$uname' AND pass='$pass' "); 
	//echo $data -> num_rows;
	
	$row = $data -> num_rows;

	if($row== 1){

	//session_start();
		//-----------------
	while($me = $data->fetch_assoc()){
		$_SESSION['name']=$me['name'];
		$_SESSION['phone']=$me['phone'];
		$_SESSION['img']=$me['img'];
	}	
		//-----------------
		
		header("location: profile.php");
	}else{
		echo "<h1>Plz , Registration first ...... </h1> ";
	}

}

?> 

<div class="result alert alert-warning" style="width: 400px; margin:100px auto">
	<h2 style="margin:10px; text-align: center;">Log In</h2>
	<hr style="border: 3px solid black;">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="">User Name</label>
			<input type="text" name="uname" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" name="pass" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="sub" class="btn btn-block alert-secondary" value="Log In Now">
		</div>
	</form>
	<hr style="border: 3px solid black;">
	<hr>
	<a href="reg.php">Registration</a>


</div>




</div>

	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>