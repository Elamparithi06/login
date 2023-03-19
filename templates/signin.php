<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "codeflix";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$password = $_POST["password"];


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and password = '".$password."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
        location.replace('/home.html')
	</script>

	<?php
}
else{
	?>
	<script>
		alert('Login failed');
        location.replace('/signlog.html')
	</script>
	<?php
}








?>