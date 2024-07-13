<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KERALA</title>
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
        .mm {
            padding: 8px;
            background-color: #ffffff;
            width: 1200px;
            /* Adjusted width */
            height: 400px;
            box-sizing: border-box;
            border-radius: 6px;
            -webkit-box-align: start;
            -ms-flex-align: start;
            -webkit-align-items: flex-start;
            -moz-align-items: flex-start;
            align-items: flex-start;
            position: center;
            z-index: 5;
            box-shadow: 0 2px 20px 0 rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        .mm img {
            max-width: 600px;
        }

        .flex-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-align-items: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            margin-left: -100px;
        }

        #details {
            font-size: 14px;
            /* Adjust font size */
            color: #666;
            /* Adjust text color */
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
                <img class="img-fluid" src="keralaimg/carousel1.jpg" style="height: 600px; width: 2000px" alt="img1" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    BACKPACKING
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    "Lost in the serenity of <span class="text-secondary"> Kerala's backwaters."</span>

                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="keralaimg/carousel4.jpeg" style="height: 600px; width: 2000px" alt="img2" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    BACKPACKING
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4"> "Exploring the hidden gems
                                    of
                                    <span class="text-secondary"> Kerala's </span> lush tea plantations"
                                    </span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="keralaimg/carousel3.jpg" style="height: 600px; width: 2000px" alt="img3" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    BACKPACKING
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">"Immersed in the colors and
                                    traditions of <span class="text-secondary">Kerala's</span> vibrant festivals."
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
                        <img class="position-absolute img-fluid w-100 h-100" src="keralaimg/bestknown.jpg"
                            style="object-fit: cover" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">Himachal Pradesh..</h6>
                    <h1 class="mb-5">BEST KNOWN FOR..</h1>
                    <p class="mb-5">
                        Kerala is an incredible destination for backpacking! With its lush green landscapes, serene
                        backwaters, and vibrant culture, it offers a unique and enriching experience for travelers. You
                        can explore the tea plantations in Munnar, relax on the beautiful beaches of Varkala, and cruise
                        through the backwaters in Alleppey. Don't forget to immerse yourself in the local culture by
                        trying traditional Kerala cuisine and attending colorful festivals. Whether you're trekking in
                        Wayanad or discovering the historic charm of Fort Kochi, Kerala has something for every
                        backpacker. Enjoy the adventure! 🌿🎒

                    </p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-B fa-3x text-dark mb-3"></i>
                            <h5>What We Are Known For</h5>
                            <p class="m-0"></p>
                        </div>
                    </div>
                    <a href="aboutkerala.php" class="btn btn-dark py-3 px-5">Explore More</a>
                    <a href="hotels.php?state=Kerala" class="btn btn-dark py-3 px-5">Our Hostels</a>
                </div>
            </div>
        </div>
    </div>
    <!--Best Kown for End-->

    <!-- food kerala -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase"></h6>
                <h1 class="mb-5">FOOD KERALA</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/food/Idiyappam and Mutta curry.jpeg" alt="img1">
                        </div>
                        <h4 class="mb-3">Idiyappam and Mutta curry</h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/food/kerala banana chips - angroos _ pinterest.jpeg" alt="img2">
                        </div>
                        <h4 class="mb-3">kerala banana chips</h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/food/Ragi Puttu  & Kadala curry.jpeg" alt="img3">
                        </div>
                        <h4 class="mb-3">Ragi Puttu & Kadala curry</h4>
                        <p></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- food kerala end-->

    <!-- unseen places for -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase"></h6>
                <h1 class="mb-5">UNSEEN KERALA</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/UNSEEN/Houseboat Cruise In Alleppey - The Best To Experience.jpeg"
                                alt="img1">
                        </div>
                        <h4 class="mb-3">Alleppey boathouse</h4>
                        <h4><a href="https://maps.app.goo.gl/NYb1rFFfRghiXnjY7"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/UNSEEN/This mythical bird statue in India is the world’s largest.jpeg"
                                alt="img2">
                        </div>
                        <h4 class="mb-3">Jatayu earth centre</h4>
                        <h4><a href="https://maps.app.goo.gl/dmaNj2JhxZcmsVWP8"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/UNSEEN/waterfall.jpeg" alt="img3">
                        </div>
                        <h4 class="mb-3">Lakkam Waterfalls Munnar</h4>
                        <h4><a href="https://maps.app.goo.gl/9JRFtgEzKK72RkTHA"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/UNSEEN/Varkala cliff Kerala.jpeg" alt="">
                        </div>
                        <h4 class="mb-3">Varkala cliff Kerala</h4>
                        <h4><a href="https://maps.google.com/?q=Varkala+Cliff%2C+Kerala&ftid=0x3b05ef1b9e2a3697:0x75d0a0d8e4314c19&entry=gps"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/UNSEEN/Beauty of Munnar.jpeg" alt="">
                        </div>
                        <h4 class="mb-3">Tea Garden</h4>
                        <h4><a href="https://maps.google.com/?cid=11197639375678508524&entry=gps"><i>Get There </i></a></h4>
                        <p></p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="keralaimg/UNSEEN/Heart Shaped Lake.jpeg" alt="">
                        </div>
                        <h4 class="mb-3">Heart Shaped Lake</h4>
                        <h4><a href="https://maps.app.goo.gl/Hw8BdhGM8kPeF12S8"><i>Get There </i></a></h4>
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