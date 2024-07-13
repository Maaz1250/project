<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GOA</title>
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
    <style>
        .slider-section {
            overflow: hidden;
            margin: 0 auto;
            width: 80%;
        }

        .slider-container {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }

        .cards {
            list-style: none;
            padding: 0;
            display: flex;
        }

        .slider-item {
            flex: 0 0 auto;
            scroll-snap-align: start;
            margin-right: 20px;
            /* Adjust the spacing between each card */
        }

        .slider-item:last-child {
            margin-right: 0;
            /* Remove margin from the last card to prevent extra space */
        }

        .slider-item {
            flex: 0 0 auto;
            scroll-snap-align: start;
            width: 300px;
            /* Adjust the width of the cards */
        }

        .slider-item img {
            width: 100%;
            height: 200px;
            /* Adjust the height of the images */
            object-fit: cover;
            /* Maintain aspect ratio */
        }

        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 10px;
            border-radius: 50%;
            z-index: 1;
        }

        .slider-arrow.left {
            left: 10px;
        }

        .slider-arrow.right {
            right: 10px;
        }
    </style>
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



    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/GOA/gh.jpg" style="height: 600px; width: 2000px" alt="img1" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    BACKPACKING
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    “<span class="text-secondary">Goa</span> is where my heart
                                    belongs.”
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/GOA/gg.jpg" style="height: 600px; width: 2000px" alt="img2" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    BACKPACKING
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    " <span class="text-secondary">GOA </span> is calling and I
                                    must go..”
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/GOA/g4.jpeg" style="height: 600px; width: 2000px" alt="img3" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    BACKPACKING
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    “Any day is a good day for
                                    <span class="text-secondary">GOA</span> "
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!--Best Kown for start-->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/GOA/g1.jpeg"
                            style="object-fit: cover" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">GOA..</h6>
                    <h1 class="mb-5">BEST KNOWN FOR..</h1>
                    <p class="mb-5">
                        Goa is famous for its beautiful beaches, vibrant nightlife, and
                        delicious seafood. It's also known for its Portuguese colonial
                        architecture, ancient temples, and the unique blend of Indian and
                        Western cultures. Additionally, Goa is popular for water sports,
                        like surfing and parasailing, and its lively music
                        festivals and parties.
                    </p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-B fa-3x text-dark mb-3"></i>
                            <h5>What We Are Known For</h5>
                            <p class="m-0"></p>
                        </div>
                    </div>
                    <a href="aboutgoa.php" class="btn btn-dark py-3 px-5">Explore More</a>
                    <a href="hotels.php?state=Goa" class="btn btn-dark py-3 px-5">Our Hostels</a>
                </div>
            </div>
        </div>
    </div>
    <!--Best Kown for End-->

    <!-- food goa -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase"></h6>
                <h1 class="mb-5">FOOD GOA</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/FOOD/Goan Fish Curry (Indian).jpeg" alt="img1">
                        </div>
                        <h4 class="mb-3">Goan Fish Curry</h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/FOOD/Pork Vindaloo - Pepper Delight.jpeg" alt="img2">
                        </div>
                        <h4 class="mb-3">Vindaloo</h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/FOOD/BEBINCA (Bibik_Bebinka).jpeg" alt="img3">
                        </div>
                        <h4 class="mb-3">Bebinca</h4>
                        <p></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- food goa end-->

    <!-- unseen places for -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase"></h6>
                <h1 class="mb-5">UNSEEN GOA</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/UNSEEN/craftels.jpg" alt="img1">
                        </div>
                        <h4 class="mb-3">Obrigado by Craftels</h4>
                        <h4><a href="https://maps.app.goo.gl/T9mEnSCCEC2CKQG86"><i>Get There </i></a></h4>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/UNSEEN/parra-road.jpg" alt="img2">
                        </div>
                        <h4 class="mb-3">Parra-road</h4>
                        <h4><a href="https://maps.app.goo.gl/6GQFYNBhT2dbvJ4F9"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/UNSEEN/butterfly beach.webp" alt="img3">
                        </div>
                        <h4 class="mb-3">Butterfly beach</h4>
                        <h4><a href="https://maps.app.goo.gl/AvS47fzNbcp4QFzF7"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/UNSEEN/sapatakoteshwar temple.jpg  " alt="">
                        </div>
                        <h4 class="mb-3">Sapatakoteshwar Temple</h4>
                        <h4><a href="https://maps.app.goo.gl/XwPaTtjFGbQrZSy28"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/UNSEEN/pink beach.jpg  " alt="">
                        </div>
                        <h4 class="mb-3">Pink Beach</h4>
                        <h4><a href="https://maps.app.goo.gl/rUgtm6xnWJ54Eita9"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/GOA/UNSEEN/baga beach market.jpg  " alt="">
                        </div>
                        <h4 class="mb-3">Baga beach Market</h4>
                        <h4><a href="https://maps.app.goo.gl/DUdct2F6ns6vnMTV7"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- unseen places for end -->

    <!-- Footer Start -->
    <?php require 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Add the Bootstrap JS and Popper.js scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>
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

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

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

    <script src="js_pg/bootstrap.min.js"></script>
    <script src="js_pg/jquery.min.js"></script>
    <script src="js_pg/main.js"></script>
    <script src="js_pg/owl.carousel.min.js"></script>
    <script src="js_pg/popper.js"></script>
</body>

</html>