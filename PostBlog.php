<?php
session_start();
include_once 'Login and Signup Form/connection.php';

if(isset($_POST['submit'])) {
    $blog = $_POST['blog'];
    $email = $_SESSION['login'];

    // Check if file is uploaded and there is no error
    if(isset($_FILES["img1"]) && $_FILES["img1"]["error"] == 0) {
        $bimage = $_FILES["img1"]["name"];
        move_uploaded_file($_FILES["img1"]["tmp_name"], "img/blogimages/".$_FILES["img1"]["name"]);
    } else {
        // Handle case where no image is uploaded
        $bimage = NULL;
    }

    if (!empty($blog)) {
        $sql = "INSERT INTO blogs (email, blog, bimage) VALUES (:email, :blog, :bimage)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':blog', $blog, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':bimage', $bimage, PDO::PARAM_STR);

        if($query->execute()) {
            echo '<script language="javascript">';
            echo 'alert("Blog submitted successfully")';
            echo '</script>';
        } else {
            echo '<script language="javascript">';
            echo 'alert("Something went wrong. Please try again")';
            echo '</script>';
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Blog cannot be empty")';
        echo '</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Post Blog</title>

    
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
    <h2>Post Blog</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="blog">Write Blog:</label>
            <textarea class="form-control" id="blog" name="blog" rows="6" required></textarea>
        </div>

        <div class="form-group">
            <label for="img1">Add an Image:</label>
            <input type="file" name="img1" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
