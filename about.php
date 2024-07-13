<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

   <!-- Navbar Start -->
   <?php require 'nav.php'; ?>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="background-image: url(img/GOA/g3.jpeg); opacity: 0.2px;" >
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb" >
                    <li class="breadcrumb-item"><a class="text-white" href="home.php">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/aboutus/abt.webp" style="object-fit:cover" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">EXPLORE BACKPACKERS.</h6>
                    <h1 class="mb-5">BEST KNOWN FOR </h1>   
              <p class="mb-5">Backpacking is best known for its sense of adventure, budget-friendly travel, and the opportunity to immerse oneself in local cultures. It's all about exploring new places, meeting fellow travelers, and creating unforgettable memories along the way!🎒✨<div class="row g-4 mb-5">
                 
                    <div class="itinerary-item">
                      <h3 class="mb-0"> SENSE OF ADVENTURE:</h3>
                        <p>Adventure is at the core of backpacking! Backpackers seek thrilling experiences like trekking through rugged mountains, exploring dense jungles, diving into crystal-clear waters, and trying adrenaline-pumping activities like bungee jumping or paragliding. It's all about pushing boundaries, stepping out of comfort zones, and creating unforgettable memories that will last a lifetime! 🌍🎒✨</p>
                    </div>
                    <div class="itinerary-item">
                      <h3 class="mb-0">BUDGET FRIENDLY TRAVEL:</h3>
                        <p>Budget-friendly travel is a key aspect of backpacking! Backpackers often opt for affordable accommodation like hostels or camping, use public transportation or hitchhike, and eat at local eateries or cook their own meals. They prioritize experiences over luxury, finding creative ways to stretch their budget and make the most of their adventure without breaking the bank. It's all about finding the balance between cost and experience while exploring the world on a budget! 🌍🎒💸
                      </p>
                    </div>
                    <div class="itinerary-item">
                      <h3 class="mb-0">ABILITY TO IMMERSE IN LOCAL CULTURE</h3>
                        <p>When backpacking, one of the greatest joys is the ability to immerse oneself in the local culture. Backpackers often engage with locals, try traditional cuisine, participate in local festivals, and learn about the customs and traditions of the places they visit. By embracing the local way of life, backpackers gain a deeper understanding and appreciation for the culture, creating meaningful connections and unforgettable experiences along the way. It's all about embracing the local vibes and making the most of every destination! 🌍🎒🌟
                    </p>
                    </div>
                    <div class="itinerary-item">
                      <h3 class="mb-0" >CREATE UNFORGETTABLE MEMORIES ALONG THE WAY:</h3>
                        <p>When backpacking, you have the opportunity to create unforgettable memories that will stay with you forever. Whether it's watching a stunning sunrise over a mountain peak, bonding with fellow travelers around a campfire, or exploring hidden gems off the beaten path, these moments become cherished stories that you can share and reminisce about for years to come. The beauty of backpacking lies in the ability to create unique and personal memories that will always hold a special place in your heart. 🌍🎒✨
                        </p>
                    </div>
                    <div class="itinerary-item">
                      <h3 class="mb-0" >CONNECT WITH FELLOW TRAVELLERS:</h3>
                        <p>When backpacking, connecting with fellow travelers is an amazing part of the experience! You can meet people from different countries, share stories, exchange travel tips, and even form lifelong friendships. It's a chance to bond over shared adventures, learn from each other's experiences, and create a global network of like-minded explorers. So don't be shy, strike up a conversation, and embrace the camaraderie of the backpacking community! 🌍🎒✨
                    </p>
                    </div>
                    <div class="itinerary-item">
                      <h3 class="mb-0" >EMBRACING THE SPIRIT OF EXPLORATION:</h3>
                        <p>Embracing the spirit of exploration is what backpacking is all about! It's about venturing into the unknown, seeking new experiences, and pushing your boundaries. Backpackers have a thirst for adventure and a curiosity to discover hidden gems, whether it's exploring remote villages, hiking through lush forests, or stumbling upon breathtaking landscapes. The spirit of exploration fuels the backpacking journey, making every step an exciting opportunity to uncover the wonders of the world. 🌍🎒🌟
                      </p>
                    </div></p>
                
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


        
<!-- Footer Start -->
<?php require 'footer.php'; ?>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function () {
    $(".itinerary-item h3").click(function () {
      $(this).parent(".itinerary-item").toggleClass("show-details");
    });
  });
</script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>