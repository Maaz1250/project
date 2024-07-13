<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ABOUT RAJASTHAN</title>
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
            style="background-image: url(rajasthanimg/about11.jpg); opacity: 0.2px;">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Rajasthan</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white"
                                href="home.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white"
                                href="rajasthan.php">Pages</a></li>
                        <li class="breadcrumb-item text-white active"
                            aria-current="page">About</li>
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
                                src="rajasthanimg/main3.jpg"
                                style="object-fit: cover;" alt>
                        </div>
                    </div>
                    <div class="col-lg-6 about-text wow fadeInUp"
                        data-wow-delay="0.3s">
                        <h6 class="text-secondary text-uppercase mb-3">EXPLORE RAJASTHAN...</h6>
                        <h1 class="mb-5">ITINERARY </h1>
                        <p class="mb-5"> Rajasthan is great for backpacking with
                            its rich history, stunning architecture, and vibrant
                            culture. Explore Jaipur, Jodhpur, and Udaipur, visit
                            forts and palaces, and enjoy the local markets. Don't
                            forget the Thar Desert and Aravalli Hills for
                            outdoor adventures! 🌵🏰🎒
                        </p>
                        <div class="row g-4 mb-5">
                            <div class="container mt-5">
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY1</h3>
                                    <p>Known as the Pink City,Jaipur is famous
                                        for its stunning palaces,such as the
                                        Hawa Mahal and the magnificent Amber
                                        Fort. Explore the bustling bazaars and
                                        indulge in delicious Rajasthani cuisine.
                                        🏰🌸
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY2</h3>
                                    <p>The Blue City is a treat for the eyes
                                        with its blue-painted houses in the old
                                        town. Visit the majestic Mehrangarh Fort
                                        and get lost in the narrow, winding
                                        streets of the city. Don't forget to try
                                        the lip-smacking local street food! 💙🏰
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY3</h3>
                                    <p>Known as the City of Lakes, Udaipur
                                        offers a picturesque setting with its
                                        beautiful lakes and palaces. Take a boat
                                        ride on Lake Pichola, visit the
                                        enchanting City Palace, and immerse
                                        yourself in the rich history and culture
                                        of the city. 🌅🏰🌊
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY4</h3>
                                    <p>Get ready to experience the charm of the
                                        Golden Fort in the Desert. Explore the
                                        narrow lanes of the fort, witness
                                        mesmerizing sunsets over the sand dunes,
                                        and enjoy a camel safari in the Thar
                                        Desert. It's a truly magical experience!
                                        🏜🏰🌞</p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY5</h3>
                                    <p>This holy city is known for its vibrant
                                        atmosphere and the famous Pushkar Camel
                                        Fair. Visit the sacred Pushkar Lake,
                                        attend the evening aarti at the Brahma
                                        Temple, and soak in the spiritual vibes
                                        of the city. 🕌🌈
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY6</h3>
                                    <p>Known as the City of Camels, Bikaner is
                                        famous for its well-preserved palaces
                                        and the Junagarh Fort. Explore the
                                        bustling markets, try the delicious
                                        local snacks, and don't miss the
                                        opportunity to ride a camel in the
                                        desert! 🐪🌵
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY7</h3>
                                    <p>Rajasthan is famous for its rich cultural
                                        heritage. Visit magnificent forts like
                                        Amer Fort, Mehrangarh Fort, and explore
                                        the grand palaces and havelis.🏰
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY8</h3>
                                    <p>Indulge in the flavors of Rajasthan with
                                        delicious dishes like dal baati churma,
                                        gatte ki sabzi, and mouthwatering sweets
                                        like ghewar and malpua.🍛
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY9</h3>
                                    <p> Rajasthan is known for its colorful and
                                        vibrant festivals like Pushkar Camel
                                        Fair, Jaipur Literature Festival, and
                                        the Gangaur Festival. Experience the joy
                                        and enthusiasm of these celebrations.🎉
                                    </p>
                                </div>
                                <div class="itinerary-item">
                                    <h3 class="mb-0">DAY10</h3>
                                    <p>Get ready to shop till you drop in
                                        Rajasthan! Explore the bustling bazaars
                                        for traditional textiles, handicrafts,
                                        jewelry, and vibrant Rajasthani
                                        attire.🛍
                                    </p>
                                </div>
                                <p><div class="itinerary-item">
                                        <h3 class="mb-0">DAY11 </h3>
                                        <p>When it comes to camping in
                                            Rajasthan, there are some incredible
                                            highlights for backpackers like us!
                                            You can camp in the Thar Desert,
                                            surrounded by golden sand dunes, and
                                            experience a magical sunset and
                                            sunrise. 🌅✨ Another popular spot is
                                            Mount Abu, where you can camp amidst
                                            lush greenery and enjoy the serene
                                            beauty of nature. Don't forget to
                                            try some delicious Rajasthani
                                            cuisine around the campfire! 🍛🔥
                                            So, get your backpack ready for an
                                            amazing camping adventure in
                                            Rajasthan!🎒🌴⛺
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