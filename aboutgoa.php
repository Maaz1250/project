<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ABOUT GOA</title>
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
        <div class="container-fluid page-header py-5"
            style="background-image: url(img/GOA/g3.jpeg); opacity: 0.2px;">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About
                    Goa</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white"
                                href="home.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white"
                                href="goa.php">Pages</a></li>
                        <li class="breadcrumb-item text-white active"
                            aria-current="aboutgoa.php">About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Start -->
        <div class="container-fluid overflow-hidden py-5 px-lg-0">
            <div class="container about py-5 px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0 wow fadeInLeft"
                        data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100"
                                src="img/GOA/desktop-wallpaper-sunset-anjuna-beach-goa-goa-beach-phone.jpg"
                                style="object-fit: cover;" alt>
                        </div>
                    </div>
                    <div class="col-lg-6 about-text wow fadeInUp"
                        data-wow-delay="0.3s">
                        <h6 class="text-secondary text-uppercase mb-3">EXPLORE
                            GOA.</h6>
                        <h1 class="mb-5">ITINERARY</h1>
                        <p class="mb-5">Goa is famous for its happening
                            nightlife, vibrant culture and cheap alcohol. Goa is
                            also known for its old churches and Portuguese-style
                            houses, quaint by-lanes, breathtaking
                            views, stunning monsoon greenery, lip-smacking
                            cuisine, night bazaars, shopping, casinos, and a
                            plethora of activities to choose from — scuba
                            diving, kayaking, parasailing and jet skiing,
                            among others</p>
                        <div class="row g-4 mb-5">

                            <div class="container mt-5">
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY1</h3>
                                    <p> Goa is famous for its beautiful beaches!
                                        Some popular ones include Baga Beach,
                                        Miramar Beach, and Calangute Beach. They
                                        offer stunning views and a
                                        vibrant atmosphere.
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY2</h3>
                                    <p> The vibrant nightlife in Goa is
                                        legendary. The state offers a wide range
                                        of bars,
                                        clubs, and beach shacks where visitors
                                        can enjoy live music, DJ performances,
                                        and
                                        beach parties that often continue until
                                        the early hours of the morning.
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY3</h3>
                                    <p>Goa has a rich history and cultural
                                        heritage, stemming from its colonial
                                        past as a
                                        Portuguese colony. You can explore
                                        beautiful churches, like the Basilica of
                                        Bom
                                        Jesus, as well as historic forts, like
                                        Aguada Fort, that offer a glimpse into
                                        the
                                        region's history.
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY4</h3>
                                    <p> Goan cuisine is known for its unique
                                        blend of Indian and Portuguese flavors.
                                        Seafood
                                        is a highlight, and you can enjoy dishes
                                        like Goan fish curry, xacuti, and
                                        bebinca
                                        (a traditional Goan dessert).
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY5</h3>
                                    <p> Adventure enthusiasts can indulge in
                                        various water sports, including jet
                                        skiing,
                                        parasailing, windsurfing, and scuba
                                        diving. The clear waters and gentle
                                        waves make
                                        Goa an ideal spot for these activities.
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY6</h3>
                                    <p>Goa hosts a variety of festivals,
                                        including the famous Goa Carnival,
                                        Shigmo (a spring
                                        festival), and a number of music and
                                        arts festivals. These events showcase
                                        the
                                        state's vibrant culture and traditions.
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY7</h3>
                                    <p> The markets in Goa offer a range of
                                        items, including handicrafts, souvenirs,
                                        clothing, and jewelry. The Anjuna Flea
                                        Market and Mapusa Market are popular
                                        places
                                        to shop.
                                    </p>
                                </div>
                            </p>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Footer Start -->
            <?php require 'footer.php'; ?>
            <!-- Footer End -->

            <!-- Back to Top -->
            <a href="#"
                class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
                    class="bi bi-arrow-up"></i></a>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script
                src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script
                src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <script>
                $(document).ready(function () {
                    $(".itinerary-item h3").click(function () {
                        $(this).parent(".itinerary-item").toggleClass("show-details");
                    });
                });
            </script>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/counterup/counterup.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
        </body>

    </html>