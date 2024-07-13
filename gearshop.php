<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gear Shop</title>
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


    <!-- Include Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <style>
    .section-padding {
        padding: 60px 0;
    }

    .testimonial-section {
        background-color: #f7f7f7;
    }

    .parallex-bg {
        background-image: url('path/to/your/image.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container {

        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
        width: 100%;
    }

    .div_zindex {
        position: relative;
        z-index: 1;
    }

    .section-header {
        margin-bottom: 60px;
    }

    .section-header h2 {
        font-size: 36px;
        font-weight: 600;
        line-height: 1.4;
        margin-bottom: 20px;
    }

    .section-header span {
        color: #FFA500;
    }

    .white-text {
        color: #fff;
    }

    .text-center {
        text-align: center;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    #testimonial-slider {
        display: flex;
        flex-wrap: wrap;
    }

    .testimonial-m {
        width: 25%;
        padding: 0 15px;
        margin-bottom: 30px;
    }

    .testimonial-content {
        background: linear-gradient(to bottom, #669999 0%, #ffffff 100%);
        background-color: #fff;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .testimonial-heading h5 {
        font-size: 18px;
        margin-bottom: 15px;
    }

    .testimonial-heading p {
        font-size: 16px;
        line-height: 1.6;
        color: #666;
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
                <img class="img-fluid" src="gearshop/c4.webp" alt="img1">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">“<span
                                        class="text-secondary">Gear up</span> for the wild with our high-quality gears,
                                    designed to elevate your backpacking experience to new heights!"</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="gearshop/c5.webp" alt="img2">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">"Adventure awaits, gear up
                                    with the <span class="text-secondary">best tents</span> for your
                                    backpacking journey!"</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="gearshop/c2.webp" alt="img3">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">"Pack your dreams and
                                    essentials with our top-notch <span class="text-secondary">backpacks</span> for your
                                    next adventure!" </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Gears For Backpackers</h6>
                <h1 class="mb-5">EXPLORE GEARS</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;" src="gearshop/cat1.jpg"
                                alt="img1">
                        </div>
                        <h4 class="mb-3">TREKKING GEARS</h4>
                        <p>"Gear up for your trekking adventure with essential equipment like sturdy backpacks, reliable
                            tents, cozy sleeping bags, and other essential gear to make your trekking
                            experience unforgettable!"</p>
                        <a class="btn-slide mt-2" href="addtocartgears1.php"><i class="fa fa-arrow-right"></i><span>BUY NOW</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;" src="gearshop/cat2.jpg"
                                alt="img2">
                        </div>
                        <h4 class="mb-3">CAMPING ESSENTIALS</h4>
                        <p>"Prepare for your camping trip with must-have essentials like a sturdy tent, warm sleeping
                            bag, portable stove, and other gear to ensure a comfortable and enjoyable
                            outdoor experience!"</p>
                        <a class="btn-slide mt-2" href="addtocartgears2.php"><i class="fa fa-arrow-right"></i><span>BUY NOW</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;" src="gearshop/cat3.jpg"
                                alt="img3">
                        </div>
                        <h4 class="mb-3">CLIMBING EQUIPMENTS</h4>
                        <p>"Get ready for your climbing adventure with essential climbing equipment like harnesses,
                            ropes, carabiners, climbing shoes, and other gear to ensure a safe and thrilling
                            experience on the rocks!"</p>
                        <a class="btn-slide mt-2" href="addtocartgears3.php"><i class="fa fa-arrow-right"></i><span>BUY NOW</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;" src="gearshop/cat4.jpg" alt="">
                        </div>
                        <h4 class="mb-3">BACKPACKS</h4>
                        <p>"Gear up for your backpacking journey with top-notch backpacks that offer comfort,
                            durability, and ample storage space for all your essentials!"</p>
                        <a class="btn-slide mt-2" href="addtocartgears4.php"><i class="fa fa-arrow-right"></i><span>BUY NOW</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;" src="gearshop/cat5.jpg" alt="">
                        </div>
                        <h4 class="mb-3">FOOTWEAR</h4>
                        <p>"Get your feet ready for the trails with reliable backpacking footwear that provides comfort. Gear up with top-notch footwear for your outdoor adventures!" </p>
                        <a class="btn-slide mt-2" href="addtocartgears5.php"><i class="fa fa-arrow-right"></i><span>BUY NOW</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;" src="gearshop/cat6.jpg" alt="">
                        </div>
                        <h4 class="mb-3">TENTS</h4>
                        <p>"Make sure you pick a sturdy tent that can withstand different weather conditions and offers
                            enough space for a comfortable night's sleep during your backpacking trip!"</p>
                        <a class="btn-slide mt-2" href="addtocartgears6.php"><i class="fa fa-arrow-right"></i><span>BUY NOW</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    
    <!-- Footer Start -->
    <?php require 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
                        class="bi bi-arrow-up"></i></a>


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

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Slick Slider JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>

    <script>
    $(document).ready(function() {
        $('.blogs-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });
    </script>
</body>

</html>