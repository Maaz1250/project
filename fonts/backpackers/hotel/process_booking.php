<?php
// Database connection parameters
$servername = "localhost"; // Change to your database server name
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "backpackers"; // Change to your database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkin = date('Y-m-d', strtotime($_POST['checkin'])); // Format the check-in date
    $checkout = date('Y-m-d', strtotime($_POST['checkout'])); // Format the check-out date
    $adults = $_POST['adults'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $room_type = $_POST['room_type'];
    $special_request = $_POST['special_request'];

    // Insert data into the database
    $sql = "INSERT INTO bookings (name, email, checkin, checkout, adults, children, room_type, special_request)
            VALUES ('$name', '$email', '$checkin', '$checkout', '$adults', '$children', '$room_type', '$special_request')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Booking successful</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Congratulations! Your booking is done!</h4>
        <p><b>THANK YOU FOR USING OUR SERVICES...</p>
        <hr>
        <a href="../home.php"><p><b>CLICK HERE TO GO TO HOME-PAGE</p></a>
    </div>
</body>

</html>