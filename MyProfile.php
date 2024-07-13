<?php
session_start(); // Start the session

// Include your database connection file
include_once 'Login and Signup Form/connection.php';

// Fetch user information from the database using session email
$usersession = $_SESSION['login'];
$sql = "SELECT * FROM users WHERE email= :email";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':email', $usersession);
$stmt->execute();
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

// If the form is submitted, update user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
    $new_contact_number = $_POST['contact_number'];
    $new_address = $_POST['address'];

    // Update user data in the database
    $updateQuery = "UPDATE users SET username=:new_username, email=:new_email, contact_number=:new_contact_number, address=:new_address WHERE email=:usersession";
    $stmt = $dbh->prepare($updateQuery);
    $stmt->bindParam(':new_username', $new_username);
    $stmt->bindParam(':new_email', $new_email);
    $stmt->bindParam(':new_contact_number', $new_contact_number);
    $stmt->bindParam(':new_address', $new_address);
    $stmt->bindParam(':usersession', $usersession);
    $stmt->execute();

    // Display a JavaScript alert
    echo '<script>alert("Profile updated successfully!"); window.location.href = "MyProfile.php";</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>Update Profile</title>

    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff; /* White background */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: 500;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            font-weight: 500;
            border-radius: 5px;
            background-color: #007bff; /* Bootstrap primary color */
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade of primary color on hover */
        }
    </style>
</head>
<body>
<?php require 'nav.php'; ?>

<div class="container">
    <h2>Update Profile</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $userRow['username']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $userRow['email']; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="contact_number">Contact No:</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php echo $userRow['contact_number']; ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $userRow['address']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
