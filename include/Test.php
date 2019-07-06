<?php 
	$db=mysqli_connect('localhost','root','','test') or die("could not connect");
	if(isset($_POST['reg'])){
		echo "string";
		$uname=mysqli_real_escape_string($db,$_POST['uname']);

		if(empty($uname)){
				array_push($errors, "UserName is required");
			}
			$sql="insert into user(username) values ('$uname')";
			mysqli_query($db,$sql);

			 
			 	
	}
	
 ?>