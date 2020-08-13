<?php
if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$id = $_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmpassword'];
	$userType = $_POST['userType'];

	if(empty($id) || empty($password) || empty($email) || empty($name) || empty($confirmPassword) || empty($userType))
	{
		echo "null submission".'<a href="registration.html"><u>Home</a>';
	}
	else 
	{

		if($password!=$confirmPassword)
		{
			echo "Match Password".'<a href="registration.html"><u>Home</a>';
		}
		else
		{

			$conn = mysqli_connect('127.0.0.1', 'root', '', 'mini_database');
			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				# code...
				$sql1="INSERT INTO users (id, name, password, email, usertype) VALUES ('".$_POST['id']."', '".$_POST['name']."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['userType']."')";
				mysqli_query($conn,$sql1);
				echo "done";
				header('location: login.html');
			}
			else
			{
				echo "Password doesn't match";
			}
			mysqli_close($conn);
		}
	}
}

else
{
	//header("location: login.html");
	echo "Not Set YEST";
}

?>

?>