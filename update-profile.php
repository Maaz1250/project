<?php
session_start();
include_once 'Login and Signup Form/connection.php';

if(isset($_POST['update'])) {
    // Retrieve form data
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];

    // Prepare and bind parameters
    $update_query = "UPDATE users SET contact_number=?, address=? WHERE id=?";
    $stmt = $con->prepare($update_query);
    $stmt->bind_param("ssi", $contact_number, $address, $_SESSION['user']);

    // Execute the statement
    if ($stmt->execute()) {
        // Update successful
        $_SESSION['profile_updated'] = "Profile updated successfully.";
        header('location: MyProfile.php');
    } else {
        // Update failed
        $_SESSION['profile_updated'] = "Error updating profile: " . $stmt->error;
        header('location: MyProfile.php');
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}

?>
