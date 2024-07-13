<?php
session_start();
include_once 'Login and Signup Form/connection.php';

if(isset($_POST['delete_blog'])) {
    $blog_id = $_POST['blog_id'];
    
    // SQL query to delete the blog entry
    $sql = "DELETE FROM blogs WHERE id=:blog_id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':blog_id', $blog_id, PDO::PARAM_INT);
    
    // Execute the query
    if($query->execute()) {
        echo '<script language="javascript">';
        echo 'alert("Blog deleted successfully")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Something went wrong. Please try again")';
        echo '</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Blogs</title>

    
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
            max-width: 800px;
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

        .blog-list-item {
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .blog-list-item:last-child {
            border-bottom: none;
        }

        .blog-content {
            margin-bottom: 10px;
        }

        .posting-date {
            font-size: 14px;
            color: #666;
        }

        .status {
            margin-top: 10px;
        }

        .status .btn {
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 20px;
        }

        .active-btn {
            background-color: #28a745;
            color: #fff;
            border: none;
        }

        .waiting-for-approval-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>

<?php require 'nav.php'; ?>
<div class="container">
    <h2>My Blogs</h2>
    <div class="blog-list">
        <?php 
            $useremail=$_SESSION['login'];
            $sql = "SELECT * from blogs where email=:useremail";
            $query = $dbh -> prepare($sql);
            $query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);

            if($cnt=$query->rowCount() > 0)
            {
                foreach($results as $result)
                { ?>
                    <div class="blog-list-item">
                        <div class="blog-content">
                            <p><?php echo htmlentities($result->blog); ?></p>
                            <p class="posting-date"><b>Posting Date:</b> <?php echo htmlentities($result->PostingDate); ?></p>
                        </div>
                        <div class="status">
                            <?php if($result->status==1){ ?>
                                <button class="btn active-btn">Active</button>
                            <?php } else { ?>
                                <button class="btn waiting-for-approval-btn">Waiting for approval</button>
                            <?php } ?>
                            <!-- Add a delete button -->
                            <form action="" method="POST" style="display: inline;">
                                <input type="hidden" name="blog_id" value="<?php echo $result->id; ?>">
                                <button type="submit" name="delete_blog" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                            </form>
                            <!-- Add a change image button -->
                            <form id="changeImageForm_<?php echo $result->id; ?>" style="display: inline;">
                            <input type="hidden" name="blog_id" value="<?php echo $result->id; ?>">
                            <button type="button" class="btn btn-dark btn-sm" onclick="redirectToChangeImage('<?php echo $result->id; ?>')">Change Image</button>
                        </form>
                        </div>
                    </div>
                <?php }
            } ?>
    </div>
</div>

<script>
    function redirectToChangeImage(blogId) {
        window.location.href = "change_image.php?imgid=" + blogId;
    }
</script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
