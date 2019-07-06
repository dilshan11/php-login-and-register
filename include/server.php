<?php 

		session_start();
		$uname="";
		$email="";
		$errors=array();

		$db=mysqli_connect('localhost','root','','books') or die("could not connect");
		if(isset($_POST['reg'])){

			$uname=mysqli_real_escape_string($db,$_POST['uname']);
			$fname=mysqli_real_escape_string($db,$_POST['fname']);
			$lname=mysqli_real_escape_string($db,$_POST['lname']);
			$password=mysqli_real_escape_string($db,$_POST['password']);
			$repassword=mysqli_real_escape_string($db,$_POST['repassword']);
			$address=mysqli_real_escape_string($db,$_POST['address']);

			if(empty($uname)){
				array_push($errors, "UserName is required");

			}
			if(empty($fname)){
				array_push($errors, "Frist Name is required");
			}
			if(empty($lname)){
				array_push($errors, "Last Name is required");
			}
			if(empty($address)){
				array_push($errors, "address is required");
			}
			if($password != $repassword){
					echo $password;
					echo $repassword;
				array_push($errors, "the two password do not match");
			}

				 
			 if(count($errors)==0){
				 $password=md5($password);
			 	$sql="insert into user(uname,fname,lname,password,address) values ('$uname','$fname','$lname','$password','$address')";
			 	mysqli_query($db,$sql);
			 }
			 // echo("Error description: " . mysqli_error($db));
		
		}

		if(isset($_POST['log'])){
			
			 $password=mysqli_real_escape_string($db,$_POST['password']);
			 $uname=mysqli_real_escape_string($db,$_POST['uname']);

			 if(empty($uname)){
				array_push($errors, "UserName is required");
			}
			if(empty($password)){
				array_push($errors, "password is required");
			}

			if(count($errors)==0){

				$password=md5($password);
				$query="select * from user where uname='$uname' and password='$password'";
				$result=mysqli_query($db,$query);
				if(mysqli_num_rows($result)==0){
					array_push($errors, "password or username is incorrect");
				}
				if(mysqli_num_rows($result)==1){
					 
					$_SESSION['success']="you are logged in";

				} 
			}
		}

 ?>