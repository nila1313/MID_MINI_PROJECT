

<?php
session_start();
if(isset($_POST['submit']))
{
	$conn = mysqli_connect('127.0.0.1', 'root', '','user');
	//mysqli_select_db($conn,'user');
	$query='select UserName from userregistration where Name="'.$_POST['UserName'].'"';
	$result = mysqli_query($conn, $query);
	$data=mysqli_fetch_assoc($result);




$username = $_POST['usename'];
$password =$_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['phoneCode'];
$phoneCode = $_POST['phoneCode'];
$phone =$_POST['phone'];

if(!empty($usename)) || !empty($password) ||!empty($gender)|| !empty($email) || !empty($phoneCode) || !empty($phone)){

	$host ="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="midproject";

	//Create Connection
	$conn =new mysqli_connect()($host, $dbUsername, $dbPassword, $dbname);

	if(mysql_connect_error()){
      die('Connect Error('.mysql_connect_errno().')'. mysql_connect_error());
	}
	else{
		$SELECT ="SELECT email From register where email =? Limit 1 ";
		$INSERT=" INSERT Into register(usename, password, gender, email, phoneCode, phone) values (?, ? , ?, ?, ?)";
	}
	

}
else{
	echo"All Field are required";
	die();
}
}

 ?>