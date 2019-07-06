<?php 
$db=mysqli_connect('localhost','root','','books') or die("could not connect");
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
				if(mysqli_num_rows($result)==1){
					
					$_SESSION['success']="you are logged in";
				} 
			}
		}

 ?>