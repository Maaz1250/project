<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ABOUT MAHARASHTRA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php require 'nav.php'; ?>
    <!-- Navbar End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="background-image: url(maharashtraimg/mumbai.jpg); opacity: 0.2px;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Maharashtra</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="maharashtra.php">Pages</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="aboutkerala.php">About</a></li>
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
                        <img class="position-absolute img-fluid w-100 h-100" src="maharashtraimg/main.jpg"
                            style="object-fit: cover;" alt>
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">EXPLORE MAHARASHTRA...</h6>
                    <h1 class="mb-5">ITINERARY </h1>
                    <p class="mb-5"> Maharashtra is a backpacker's paradise! It's known for its rich culture, historical
                        sites like Ajanta and Ellora caves, magnificent forts, vibrant festivals, delicious local
                        cuisine, beautiful hill stations like Lonavala and Mahabaleshwar, and nearby coastal regions
                        like Goa and Alibaug. There's so much to explore and discover in Maharashtra! 😄🌆🏞🏰🍛
                    </p>
                    <div class="row g-4 mb-5">
                        <div class="container mt-5">
                            <div class="itinerary-item">
                                <h3 class="mb-0">DAY1 </h3>
                                <p>Start your backpacking journey in the bustling city of Mumbai. Explore iconic
                                    landmarks like the Gateway of India, visit the vibrant markets, and indulge in
                                    delicious street food.


                                </p>
                            </div>
                            <div class="itinerary-item">
                                <h3 class="mb-0">DAY2 </h3>
                                <p> Maharashtra is home to the stunning Western Ghats, offering plenty of opportunities
                                    for hiking, trekking, and camping. Places like Lonavala and Mahabaleshwar are
                                    perfect for outdoor adventures.

                                    .

                                </p>
                            </div>
                            <div class="itinerary-item">
                                <h3 class="mb-0">DAY3</h3>
                                <p> Escape the city heat and head to hill stations like Matheran and Panchgani. Enjoy
                                    the cool climate, picturesque views, and serene nature trails.
                                    sets.

                                </p>
                            </div>
                            <div class="itinerary-item">
                                <h3 class="mb-0">DAY4</h3>
                                <p> Don't miss the beautiful coastal regions of Maharashtra, like Goa and Alibaug. Relax
                                    on the sandy beaches, try water sports, and explore the vibrant beach towns.

                                </p>
                            </div>
                            <div class="itinerary-item">
                                <h3 class="mb-0">DAY5</h3>
                                <p>Maharashtra is rich in history and culture. Visit ancient caves like Ajanta and
                                    Ellora, explore historic forts like Raigad and Pratapgad, and immerse yourself in
                                    the region's fascinating past.


                                </p>
                            </div>

                            </p>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Footer Start -->
        <?php require 'footer.php'; ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
                class="bi bi-arrow-up"></i></a>

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