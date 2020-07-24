 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="hotel";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if(mysqli_connect_errno())
	{
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?> 
