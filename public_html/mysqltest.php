<h4>Attempting MySQL connection from PHP...</h4>
<?php 
$host = 'mysql';
$user = 'newUser';
$pass = 'newUserPassw0rd';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
?>
