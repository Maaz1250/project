<?php
$showAlert = false;
$showError = false;
$exists=false;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backpackers";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $contact_number = $_POST["contact_number"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{    
    if(($password == $confirm_password) && $exists==false){

        $sql = "INSERT INTO users (first_name, last_name, username, contact_number, address, password, date)
                VALUES ('$first_name', '$last_name', '$username', '$contact_number', '$address', '$password', current_timestamp())";


        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            }
            header("location:login.php");
        }
        else{
            $showError = "Passwords do not match";
        }
    }

}

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login<u> <a href="login.html">login</a></u>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

<div class="wrapper" style="background-image: url('images_form/bg-download.png');">
    <div class="inner">
        <div class="image-holder">
            <img src="images_form/NEW.JPG" alt="">
        </div>
        <form action="registration.php" method="post">
            <h3>Registration Form</h3>
			<div class="form-group">
                <input type="text" placeholder="First Name" class="form-control" id="first_name" name="first_name" required>
				<input type="text" placeholder="Last Name" class="form-control" id="last_name" name="last_name" required>
			</div>

            <div class="form-wrapper">
				<input type="text" placeholder="Username" class="form-control" id="username" name="username" required>
			</div>

			<div class="form-wrapper">
				<input type="text" placeholder="Contact Number" class="form-control" id="contact_number" name="contact_number" required>
			</div>

			<div class="form-wrapper">
				<input type="text" placeholder="Address" class="form-control" id="address" name="address" required>
			</div>

			<div class="form-wrapper">
				<input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
			</div>

			<div class="form-wrapper">
				<input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" name="confirm_password" required>
			</div>
			<button>Register
            <i class="zmdi zmdi-arrow-right"></i>
			</button>

            <br>
			<center><p>Already have an account <a href="login.php"> click here </a></p></center>
			</form>
        
	</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="fonts_form/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css_form/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>