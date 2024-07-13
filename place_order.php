<?php
error_reporting(0);
session_start();
// Connect to the database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backpackers";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get cart data sent from JavaScript
    $cartData = json_decode(file_get_contents("php://input"), true);

    // Fetch user data from the session
    if(isset($_SESSION['login'])) { 
        $usersession = $_SESSION['login'];

        // Prepare and execute a SELECT query to fetch user data
        $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $usersession);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $userRow = mysqli_fetch_assoc($result);

        // Check if user data was fetched successfully
        if (!$userRow) {
            die("Failed to fetch user data.");
        }

        // Extract user data
        $name = $userRow['username'];
        $email = $userRow['email'];
        $address = $userRow['address'];
        $contact_number = $userRow['contact_number'];
    } else {
        die("User session not found.");
    }

    // Insert cart data into the database
    $success = true; // Flag to track insertion success
    foreach ($cartData as $item) {
        $title = mysqli_real_escape_string($conn, $item['title']);
        $quantity = (int)$item['quantity'];
        $price = (float)$item['price']; // New: Extract item price

        // Insert into your database table (e.g., orders)
        $sql = "INSERT INTO orders (item_name, quantity, unit_price, name, email, address, contact_number) 
                VALUES ('$title', $quantity, $price, '$name', '$email', '$address', '$contact_number')";

        if (!mysqli_query($conn, $sql)) {
            $success = false;
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            break; // Exit the loop on first failure
        }
    }

    // Close the database connection
    mysqli_close($conn);

    if ($success) {
        // Display JavaScript alert and redirect
        echo '<script>';
        echo 'alert("Order Placed");';
        echo 'window.location.href = "gearshop.php";'; // Replace with your actual redirect URL
        echo '</script>';
        exit(); // Make sure to exit after displaying the alert and redirect
    }
}
?>
