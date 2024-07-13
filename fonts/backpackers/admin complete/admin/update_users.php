<?php
include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if (isset($_GET['update'])) {
   $update_id = $_GET['update'];

   // Check if the form is submitted
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Retrieve updated user data from the form
      $updatedFirstName = $_POST['first_name'];
      $updatedLastName = $_POST['last_name'];
      $updatedUsername = $_POST['username'];
      $updatedContactNumber = $_POST['contact_number'];
      $updatedAddress = $_POST['address'];

      // Update the user's data in the database
      $updateUser = $conn->prepare("UPDATE `users` SET 
         `first_name` = ?,
         `last_name` = ?,
         `username` = ?,
         `contact_number` = ?,
         `address` = ?
         WHERE `id` = ?");
      $updateUser->execute([$updatedFirstName, $updatedLastName, $updatedUsername, $updatedContactNumber, $updatedAddress, $update_id]);

      // Redirect back to the user accounts page after updating
      header('location: users_accounts.php');
   }

   // Retrieve the user's current data
   $selectUser = $conn->prepare("SELECT * FROM `users` WHERE `id` = ?");
   $selectUser->execute([$update_id]);
   $userData = $selectUser->fetch(PDO::FETCH_ASSOC);
} else {
   // Redirect to user accounts page if no user is specified for update
   header('location: users_accounts.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update User Account</title>
   <!-- Include Bootstrap CSS (adjust the path as needed) -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
      .container {
         margin-top: 30px;
      }

      .form-container {
         background-color: #f9f9f9;
         border: 1px solid #ccc;
         border-radius: 5px;
         padding: 20px;
      }

      .form-group {
         margin-bottom: 20px;
      }

      label {
         font-weight: bold;
      }

      .btn-update {
         background-color: #007bff;
         color: #fff;
      }
   </style>
</head>
<body>

<div class="container">
   <h1 class="text-center">Update User Account</h1>
   <div class="row justify-content-center">
      <div class="col-md-6 form-container">
         <form method="POST" action="">
            <!-- Display the user's current data in the form for editing -->
            <div class="form-group">
               <label for="first_name">First Name:</label>
               <input type="text" class="form-control" name="first_name" value="<?= $userData['first_name']; ?>" required>
            </div>

            <div class="form-group">
               <label for="last_name">Last Name:</label>
               <input type="text" class="form-control" name="last_name" value="<?= $userData['last_name']; ?>" required>
            </div>

            <div class="form-group">
               <label for="username">Username:</label>
               <input type="text" class="form-control" name="username" value="<?= $userData['username']; ?>" required>
            </div>

            <div class="form-group">
               <label for="contact_number">Contact Number:</label>
               <input type="text" class="form-control" name="contact_number" value="<?= $userData['contact_number']; ?>" required>
            </div>

            <div class="form-group">
               <label for="address">Address:</label>
               <textarea class="form-control" name="address" rows="4" required><?= $userData['address']; ?></textarea>
            </div>

            <div class="text-center">
               <button type="submit" class="btn btn-update">Update</button>
            </div>
         </form>
      </div>
   </div>
</div>

<!-- Include Bootstrap JS (adjust the path as needed) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
