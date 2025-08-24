// PHP file to interconnect the index.html file to MySQL using POST method
<?php
include 'db_config.php'; // contains DB connection logic

// Collect form data
$name = $_POST['name'];
$roll = $_POST['roll'];
$address = $_POST['address'];
$gender = $_POST['gen'];
$email = $_POST['email'];

// Insert into DB using prepared statement
$stmt = $conn->prepare("INSERT INTO students (name, roll, address, gender, email) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $roll, $address, $gender, $email);
$stmt->execute();
$stmt->close();
$conn->close();

// Redirect back to form for new entry
header("Location: index.html");
exit();
?>
// Pending to link with MySQL
