<?php
 include"inc/function.php"; 
 session_start(); 

 if (empty($_SESSION['name']) || empty($_SESSION['phone'])){

 	header("location: index.php");


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


<?php 

?> 

<div class="top-bar">
		<div class="mid">
			<ul>
				<li><a href="inc/logout.php">Log Out</a></li>
				<li><?php echo $_SESSION['name'] ; ?></li>
				<li><?php echo $_SESSION['phone'] ; ?></li>
				<li>
					<img src="images/<?php echo $_SESSION['img'] ; ?>" alt="">
				</li>
			</ul>
		</div>
	</div>



	<div class="result alert alert-warning" style="width: 400px; margin:100px auto">
	<h2 style="margin:10px; text-align: center;">Insert Student Data</h2>
	<hr style="border: 3px solid black;">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="">Student Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Father's  Name</label>
			<input type="text" name="uname" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="img" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Phone</label>
			<input type="text" name="phone" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Board</label>
			<select class="form-control" name="board" id="">
				<option value="">-select-</option>
				<option value="Uttara">Uttara</option>
				<option value="Mirpur">Mirpur</option>
				<option value="Badda">Badda</option>
			</select>
		</div>
		
		<div class="form-group">
			<label for="">Years</label>
			<select class="form-control" name="year" id="">
				<option value="">-select-</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
			</select>
		</div>
		<div class="form-group">
			<label for="">Bangla</label>
			<input type="text" name="ban" class="form-control">
		</div>
		<div class="form-group">
			<label for="">English</label>
			<input type="text" name="eng" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Math</label>
			<input type="text" name="math" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Social Science</label>
			<input type="text" name="ss" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Science</label>
			<input type="text" name="s" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Religion</label>
			<input type="text" name="r" class="form-control">
		</div>
		
		<div class="form-group">
			<input type="submit" name="sub" class="btn btn-block alert-secondary" value="Submit Data">
		</div>
	</form>
</div>






	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>