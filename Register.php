
<!DOCTYPE html>
<html>
<head>
	<title>main page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<?php 
	include 'include/header.php';
	include 'include/server.php';
	include 'include/Test.php';
	?>
	<div class="container frist">	
		<div class="row"  ">
			<div class="col-md-3">	</div>
			<div class="col-md-6" >
				
				<form method="post" action="Register.php">

					<div class="form-row fmdiv">
						<div class="col">
							<label for="inputEmail4">Frist Name</label>
							<input name="fname" type="text" class="form-control" placeholder="First name">
						</div>
						<div class="col">
							<label for="inputEmail4">Second Name</label>
							<input name="lname" type="text" class="form-control" placeholder="Last name">
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">User Name</label>
						<input name="uname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter user name">

					</div>
					<div class="form-row formdiv">
						<div class="form-group col-md-6">
							<label for="inputPassword4">Password</label>
							<input name="password" type="password" class="form-control" id="inputPassw" placeholder="Password">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Repassword</label>
							<input name="repassword" type="password" class="form-control" id="inputPassword4" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Address</label>
						<input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					</div>

					 <?php
						 	if(isset($errors)){ ?>
						 	<div style="background-color: red">
							<?php 
							 foreach($errors as $error){
							 echo $error."<br>";
						 	} 
						 ?>
							</div>
						<?php	
							}
						?> 
					<button name="reg" value="submit" type="submit" class="btn btn-primary">  Register </button>
				</form>

			</div>
			<div class="col=md-3">	</div>
		</div>
	</div>
</body>
</html>