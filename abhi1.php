<?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

	mysqli_select_db($conn,"abhi");

	$username = $_POST['user'];
    $password = $_POST['pass'];


$s = "SELECT * FROM abhi WHERE user = '$username' ";
$result = mysqli_query($conn,$s);



  
if ($result == 1)
     {
	echo "Already login" ;
	}
	else{
		$login = "INSERT INTO abhi1(name ,password) VALUES ('$username','$password') ";
		mysqli_query($conn, $login);
		echo "<h1>Registration Successful</h1>";
	}

?>