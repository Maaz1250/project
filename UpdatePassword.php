<?php
session_start();
include_once 'Login and Signup Form/connection.php';

$error = ""; // Initialize error variable

if(isset($_POST['update_password'])) {
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $email = $_SESSION['login'];

    // Check if new password and confirm password match
    if ($newpassword !== $confirmpassword) {
        $error = "New password and confirm password do not match.";
    } else {
        $sql = "SELECT Password FROM users WHERE email=:email";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email);
        $query->execute();
        $stored_password = $query->fetchColumn();

        if($password === $stored_password) {
            $updatePasswordStatement = $dbh->prepare("UPDATE users SET password=:newpassword WHERE email=:email");
            $updatePasswordStatement->bindParam(':newpassword', $newpassword);
            $updatePasswordStatement->bindParam(':email', $email);
            $updatePasswordStatement->execute();
            echo '<script language="javascript">';
            echo 'alert("Your Password successfully changed")';
            echo '</script>';
        } else {
            $error = "Your current password is not valid.";
        }
    }
}
?>     
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update Password</title>
    <link href="img/favicon.ico" rel="icon">

    
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
            font-weight: 600;
        }

        .form-control {
            border-radius: 5px;
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
    <br>
    <br>
    <h2>Update Password</h2>
    <?php if ($error) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="current_password">Current Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="new_password">New Password:</label>
            <input type="password" class="form-control" id="newpassword" name="newpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        </div>
        <div class="form-group">
            <label for="confirm_new_password">Confirm New Password:</label>
            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
        </div>

        <button type="submit" name="update_password" class="btn btn-primary">Update Password</button>
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
