
<!DOCTYPE html>
<html>
<head>
	<title>main page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php 
	include 'include/header.php';
 	include 'include/server.php';
	?>
	<div class="container frist">	
		<div class="row"  ">
			<div class="col-md-3">	</div>
			<div class="col-md-6" >
				<form method="post" action="login.php">
					<div class="form-group">


						 
						

						<label for="exampleInputEmail1">User Name</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">@</div>
							</div>
							<input name="uname" type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
						</div>

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
						 <?php
						 	if(isset($errors)){ ?>
						 	<div style="background-color: red">
							<?php 
							 foreach($errors as $error){
							 echo $error;
						 	} 
						 ?>
							</div>
						<?php	
							}
						?> 
					<button name="log" type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col=md-3">	</div>
		</div>
	</div>
</body>
</html>