<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts_form/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css_form/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</head>

<body>
    <div class="wrapper" style="background-image: url('images_form/bg-download.png');">
        <div class="inner">
            <div class="image-holder">
                <img src="images_form/NEW.JPG" alt="">
            </div>
            <form action="signup-user.php" method="POST" autocomplete="">
                <h3>Registration Form</h3>
                <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                <div class="form-wrapper">
                    <input type="text" placeholder="Username" class="form-control" id="username" name="username"
                        required>
                </div>

                <div class="form-wrapper">
                    <input type="email" placeholder="Email" class="form-control" id="email" name="email"
                        required>
                </div>

                <div class="form-wrapper">
    <input type="text" placeholder="Contact Number" class="form-control" id="contact_number"
        name="contact_number" pattern="[0-9]{10}" title="Contact number must have 10 digits" required>
</div>

                <div class="form-wrapper">
                    <input type="text" placeholder="Address" class="form-control" id="address" name="address" required>
                </div>

                <div class="form-wrapper">
                    <input type="password" placeholder="Password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
                </div>
                <!-- Confirm password input -->
                <div class="form-wrapper">
                    <input type="password" placeholder="Confirm Password" class="form-control" id="cpassword" name="cpassword" required>
                </div>

                <button name="signup" value="Signup">Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>

                <br>
                <center>
                    <p>Already have an account <a href="login-user.php"> click here </a></p>
                </center>
            </form>
        </div>
    </div>

</body>

</html>