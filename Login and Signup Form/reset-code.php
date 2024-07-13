<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<?php 
require_once "controllerUserData.php"; 

$email = $_SESSION['email'];

if($email == false){
  header('Location: login-user.php');
}

// Check if the resend OTP button is clicked
if(isset($_POST['resend-otp'])) {
    // Generate a new OTP
    $code = rand(100000, 999999);

    // Update the OTP in the database
    $sql = "UPDATE users SET code = :code WHERE email = :email";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        // Send the new OTP to the user's email
        $subject = "Code Verification";
        $message = "Your new verification code is $code";
        $sender = "From: your_email@example.com"; // Change this to your email
        if(mail($email, $subject, $message, $sender)){
            // Set a success message and redirect back to the verification page
            $_SESSION['info'] = "New OTP has been sent to your email.";
            header('Location: reset-code.php');
            exit();
        } else {
            $errors['otp-error'] = "Failed to send the new OTP.";
        }
    } else {
        $errors['db-error'] = "Something went wrong!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts_form/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css_form/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper" style="background-image: url('images_form/bg-download.png');">
    <div class="inner">
        <div class="image-holder">
            <img src="images_form/NEW.JPG" alt="">
        </div>

        <form action="reset-code.php" method="POST" autocomplete="off">
        <h3>Code Verification</h3>

        <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
    <div class="form-wrapper">
        <input type="number" name="otp" placeholder="Enter code" class="form-control">
    </div>

    <button name="check-reset-otp">Submit <i class="zmdi zmdi-arrow-right"></i></button>
    <!-- Add the button for resending OTP here -->
    <button type="submit" id="resend-btn" name="resend-otp" disabled>Resend OTP</button>
</form>
        
    </div>
</div>

<script>
    // Set timer for 1 minute
    var timerDuration = 60;
    var countdownTimer;

    function startTimer() {
        var seconds = timerDuration;
        countdownTimer = setInterval(function() {
            seconds--;
            document.getElementById('resend-btn').innerText = "Resend OTP (" + seconds + ")";
            if (seconds <= 0) {
                clearInterval(countdownTimer);
                document.getElementById('resend-btn').innerText = "Resend OTP";
                document.getElementById('resend-btn').disabled = false;
            }
        }, 1000);
    }

    // Start the timer when the page loads
    startTimer();
</script>
</body>
</html>
