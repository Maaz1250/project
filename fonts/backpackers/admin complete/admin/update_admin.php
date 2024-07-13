<?php
include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if (isset($_GET['update'])) {
    $update_id = $_GET['update'];
    // Retrieve admin information based on the provided ID
    $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
    $select_admin->execute([$update_id]);
    $admin_data = $select_admin->fetch(PDO::FETCH_ASSOC);

    if (!$admin_data) {
        // Handle the case where admin data with the provided ID is not found.
        echo "Admin data not found.";
        exit;
    }

    // Handle form submission for updating admin data
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newName = $_POST['new_name'];
        $newPassword = sha1($_POST['new_password']);
        $newPassword = filter_var($newPassword, FILTER_SANITIZE_STRING);

        // Update the admin's username and password

        $update_admin = $conn->prepare("UPDATE `admin` SET `name` = ?, `password` = ? WHERE `id` = ?");
        $update_admin->execute([$newName, $newPassword, $update_id]);

        // Redirect back to the admin_accounts.php page after updating
        header('location: admin_accounts.php');
        exit;
    }
} else {
    // Handle the case where 'update' parameter is not provided in the URL.
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Admin</title>
   <!-- Include Bootstrap CSS (adjust the path as needed) -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
      body {
         background-color: #f8f9fa;
      }

      .update-admin {
         background-color: #fff;
         border: 1px solid #ddd;
         border-radius: 5px;
         margin: 20px auto;
         max-width: 400px;
         padding: 20px;
      }

      .heading {
         font-size: 24px;
         text-align: center;
      }

      .update-form {
         margin-top: 20px;
      }

      label {
         font-weight: bold;
      }

      input[type="text"],
      input[type="password"] {
         width: 100%;
         padding: 10px;
         margin-bottom: 10px;
         border: 1px solid #ccc;
         border-radius: 4px;
      }

      button[type="submit"] {
         background-color: #007bff;
         color: #fff;
         border: none;
         border-radius: 4px;
         padding: 10px 20px;
         cursor: pointer;
      }

      button[type="submit"]:hover {
         background-color: #0056b3;
      }
   </style>
</head>
<body>

<section class="update-admin">
    <h1 class="heading">Update Admin</h1>

    <div class="update-form">
        <form method="POST">
            <div class="form-group">
                <label for="new_name">New Username:</label>
                <input type="text" id="new_name" name="new_name" value="<?= $admin_data['name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</section>

<!-- Include Bootstrap JS (adjust the path as needed) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
