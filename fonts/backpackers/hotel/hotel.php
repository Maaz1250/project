<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hostel & Homestays </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="hotel/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="hotel/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

       <!-- Navbar Start -->
    <?php require "nav.php"; ?>
    <!-- Navbar End -->

   

        <!-- Hotel Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-secondary text-uppercase">Our Hostels and Homestay
                    <h1 class="mb-5">Explore Our <span class="text-secondary text-uppercase">Goa Hostels & Homestay</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="Zostel.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-secondary text-white rounded py-1 px-3 ms-4">Rs.799 to 1500./Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">The Zostel Goa</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small><i class="fa fa-wifi text-secondary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Located in Calangute,Goa</p>
                                <div class="d-flex justify-content-between">
                                    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room.php">View Rooms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="dreamshostel.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-secondary text-white rounded py-1 px-3 ms-4">Rs.600 to 1500/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">The Dreams Hostel</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small><i class="fa fa-wifi text-secondary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Located in Anjuna and Vagator</p>
                                <div class="d-flex justify-content-between">
                                    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room.php">View Rooms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="hosteller.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-secondary text-white rounded py-1 px-3 ms-4">Rs.899 to 1700/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">The Hosteller Hostel</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small><i class="fa fa-wifi text-secondary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Located in Anjuna,Arpora, and Candolim.</p>
                                <div class="d-flex justify-content-between">
                                    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room.php">View Rooms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="xoxohostel.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-secondary text-white rounded py-1 px-3 ms-4">Rs.999 to 2500/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">The Xoxo Hostel</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                   
                                    <small><i class="fa fa-wifi text-secondary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Located in near Anjuna Petrol Pump in Bardez,Anjuna, Goa.</p>
                                <div class="d-flex justify-content-between">
                                    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room.php">View Rooms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="wanderers.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-secondary text-white rounded py-1 px-3 ms-4">Rs.999 to 2500/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">The Wanderers Hostel</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    
                                    <small><i class="fa fa-wifi text-secondary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Located at Morjim beach ,Goa.</p>
                                <div class="d-flex justify-content-between">
                                    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room.php">View Rooms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="homestaysiolim.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-secondary text-white rounded py-1 px-3 ms-4">Rs.999 to 2500/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Homestay Siolim</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                        <small class="fa fa-star text-secondary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    
                                    <small><i class="fa fa-wifi text-secondary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Located in the village of siolim, Goa.</p>
                                <div class="d-flex justify-content-between">
                                    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room.php">View Rooms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room End -->



   

            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-light mb-4">Address</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>S.S AGRWAL COLLEGE,NAVSARI</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7201813403</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>backpackersmmd123@gmail.com</p>
                        </div>
        
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="about.html">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">BACKPACKERS</a>, All Right Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>