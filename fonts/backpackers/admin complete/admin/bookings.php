<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_bookings = $conn->prepare("DELETE FROM `bookings` WHERE id = ?");
   $delete_bookings->execute([$delete_id]);
   header('location:bookings.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>users accounts</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<section class="accounts">

   <h1 class="heading">Bookings</h1>

   <div class="box-container">

   <?php
      $select_booking = $conn->prepare("SELECT * FROM `bookings`");
      $select_booking->execute();
      if($select_booking->rowCount() > 0){
         while($fetch_bookings = $select_booking->fetch(PDO::FETCH_ASSOC)){  
   ?>
   <div class="box">
      <p> user id : <span><?= $fetch_bookings['id']; ?></span> </p>
      <p> Name : <span><?= $fetch_bookings['name']; ?></span> </p>
      <p> email : <span><?= $fetch_bookings['email']; ?></span> </p>
      <p> Check-In : <span><?= $fetch_bookings['checkin']; ?></span> </p>
      <p> Check-Out : <span><?= $fetch_bookings['checkout']; ?></span> </p>
      <p> Adults : <span><?= $fetch_bookings['adults']; ?></span> </p>
      <p> Children : <span><?= $fetch_bookings['children']; ?></span> </p>
      <p> Room type : <span><?= $fetch_bookings['room_type']; ?></span> </p>
      <p> Special Request : <span><?= $fetch_bookings['special_request']; ?></span> </p>
      <a href="users_accounts.php?delete=<?= $fetch_bookings['id']; ?>" class="delete-btn" onclick="return confirm('delete this account?');">delete</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no bookings available</p>';
   }
   ?>

   </div>

</section>

<!-- user accounts section ends -->







<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>