<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "limo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // Form data
    $name = $_POST['name'];
$number = $_POST['number'];
$date = $_POST['date'];
$time = $_POST['time'];

// Insert data into database
$sql = "INSERT INTO bookings (name, number, date, time) VALUES ('$name', '$number', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header("Location: popup.html");
exit;
?>

