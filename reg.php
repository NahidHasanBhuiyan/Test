<?php include"inc/function.php"; ?>

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
	if (isset($_POST['sub'])) {
		 $name =$_POST['name'];
		 $uname =$_POST['uname'];
		 $pass =$_POST['pass'];
		 $img =$_FILES['img']['name'];
		 $timg =$_FILES['img']['tmp_name'];

		 $phone =$_POST['phone'];

		 $imgname = explode('.',$img);

		 $eximg = end($imgname);

		 $uimg =md5(time().$img).'.' . $eximg;

		 

		 if (empty($name)||empty($uname)||empty($pass)||empty($img)||empty($phone)) {
		 	echo "<h1 style='color:red; text-align:center'>Field Must not empty</h1>";
		 }elseif (in_array($eximg , ['jpg','jpeg','png','gif'])== false) {

		 	echo "<h1 style='color:red; text-align:center'>Image Format is Invalid</h1>";
		 	
		 } else {
		 	$info -> query ("INSERT INTO user( name , uname , pass ,phone ,img) VALUES ('$name','$uname','$pass','$phone','$uimg')");

		 	move_uploaded_file($timg ,'images/'.$uimg );
		 }				

	}
?> 

<div class="result alert alert-warning" style="width: 400px; margin:100px auto">
	<h2 style="margin:10px; text-align: center;">Registration</h2>
	<hr style="border: 3px solid black;">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="">User Name</label>
			<input type="text" name="uname" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" name="pass" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Phone</label>
			<input type="text" name="phone" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="img" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="sub" class="btn btn-block alert-secondary" value="Sign In Now">
		</div>
	</form>
	<hr style="border: 3px solid black;">
	<hr>
	<a href="index.php">Log In</a>


</div>




</div>

	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>