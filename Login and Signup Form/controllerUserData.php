<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();
$errors1 = array(); // Added to handle errors related to the username

//if user signup button
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }

    $check_username = "SELECT * FROM users WHERE username = :username";
    $stmt = $dbh->prepare($check_username);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    
    if($stmt->rowCount() > 0){
        $errors['username'] = "Username that you have entered is already in use!";
    }
    
    $check_email = "SELECT * FROM users WHERE email = :email";
    $stmt = $dbh->prepare($check_email);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    
    if($stmt->rowCount() > 0){
        $errors['email'] = "Email that you have entered is already in use!";
    }

    $check_contact_number = "SELECT * FROM users WHERE contact_number = :contact_number";
    $stmt = $dbh->prepare($check_contact_number);
    $stmt->bindParam(':contact_number', $contact_number); // Corrected binding
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $errors['contact_number'] = "Contact Number that you have entered is already in use!";
    }
    
    if(count($errors) === 0){ // Modified condition to check only $errors
        $insert_data = "INSERT INTO users (username, email, contact_number, address, password, date)
                        VALUES (:username, :email, :contact_number, :address, :password, current_timestamp())";
        
        $stmt = $dbh->prepare($insert_data);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contact_number', $contact_number);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':password', $password); // Store password as plaintext
        
        if($stmt->execute()){
            $info = "User registered successfully!";
            $_SESSION['info'] = $info;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password; // Store plaintext password in session (not recommended)
            header('location: login-user.php'); // Redirect to the user dashboard or another appropriate page
            exit();
        }else{
            $errors['db-error'] = "Failed while inserting data into the database!";
        }
    }
}

//if user click login button
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
     
    $check_email = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt = $dbh->prepare($check_email);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password); // Plain password comparison
    $stmt->execute();
    
    if($stmt->rowCount() > 0){
        $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['login'] = $fetch['email'];
        $_SESSION['uname'] = $fetch['username'];
        header('location: ../home.php');
    } else {
        $errors['email'] = "Incorrect email or password!";
    }
}

if(isset($_POST['check-email'])){
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email=:email";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $code = rand(999999, 111111);
        $sql = "UPDATE users SET code = :code WHERE email = :email";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From: backpackers123mmd@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a password reset OTP to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Something went wrong!";
        }
    }else{
        $errors['email'] = "This email address does not exist!";
    }
}

if(isset($_POST['check-reset-otp'])){
    $_SESSION['info'] = "";
    $otp_code = $_POST['otp'];
    $sql = "SELECT * FROM users WHERE code = :otp_code";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':otp_code', $otp_code);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $fetch_data = $stmt->fetch(PDO::FETCH_ASSOC);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    }else{
        $errors['otp-error'] = "You've entered an incorrect code!";
    }
}

if(isset($_POST['change-password'])){
    $_SESSION['info'] = "";
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }else{
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $sql = "UPDATE users SET code = :code, password = :password WHERE email = :email";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':code', $code);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $info = "Your password has been changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        }else{
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

if(isset($_POST['login-now'])){
    header('Location: login-user.php');
}
?>  
