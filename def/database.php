<html>
<head><title>Connecting MySQLi Server</title></head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrico";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name        = $_POST['name'];
$email       = $_POST['email'];
$msg         = $_POST['comment'];
$sql = "INSERT INTO tanu (name, email,comment) VALUES ('$name', '$email','$msg')";

$result = mysqli_query($conn, $sql)
or die (mysqli_error($conn));


$conn->close();
?>
</body>
</html>