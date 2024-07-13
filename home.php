<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BACKPACKING</title>
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

.blog-item {
    position: relative;
    overflow: hidden;
    margin-bottom: 20px; /* Adjust the margin as needed */
    margin-right: 20px; /* Adjust the margin as needed */
}

    /* To ensure the last image doesn't have extra margin */
    .blog-item:last-child .blog-image {
        margin-right: 0;
    }

.blog-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    opacity: 0.5;
}
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

.team-item {
    color: #333; /* Adjust the color to your desired darker shade */
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
    <div class="container-fluid p-0 pb-5" >
        <div class="owl-carousel header-carousel position-relative mb-5" >
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-main/slider1.jpg" alt="img1">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">“<span
                                        class="text-secondary">Backpacking</span> is the art of knowing what not to
                                    take.”</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-main/slider2.jpg" alt="img2">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4"> "Not all who <span
                                        class="text-secondary">WANDER</span> are lost." </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-main/slider3.jpg" alt="img3">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">BACKPACKING</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4"> “See the world. It’s more
                                    fantastic than any <span class="text-secondary">dream</span> ." </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/back.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                    <h1 class="mb-5">Our Vision</h1>
                    <p class="mb-5">We started Backpackers with one simple belief — Everyone Must Trek. We wanted to do
                        this by bringing out information about treks, and by setting the right spirit of trekking in
                        India.</p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-mountain fa-3x text-dark mb-3"></i>
                            <h5>What We Are Known For</h5>
                            <p class="m-0">A trek that will make you Independent.</p>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-dark py-3 px-5">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our treking packages</h6>
                <h1 class="mb-5">Explore Backpackers</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/explorebackpackers/goabeach.jpg" alt="img1">
                        </div>
                        <h4 class="mb-3">GOA</h4>
                        <p> A place where the sound of the waves is the only music you need.</p>
                        <a class="btn-slide mt-2" href="goa.php"><i class="fa fa-arrow-right"></i><span>Read
                                More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/explorebackpackers/himachalpradesh.jpg" alt="img2">
                        </div>
                        <h4 class="mb-3">HIMACHAL PRADESH</h4>
                        <p>One of the Finest Summit Climbs for Beginners</p>
                        <a class="btn-slide mt-2" href="himachal.php"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/explorebackpackers/rajasthanimg.jpeg" alt="img3">
                        </div>
                        <h4 class="mb-3">RAJASTHAN</h4>
                        <p>A kaleidoscope of colors and culture, Rajasthan beckons.</p>
                        <a class="btn-slide mt-2" href="rajasthan.php"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/explorebackpackers/kerala.jpg" alt="">
                        </div>
                        <h4 class="mb-3">KERALA</h4>
                        <p>Where every corner is a postcard-worthy scene waiting to be captured.</p>
                        <a class="btn-slide mt-2" href="kerala.php"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/explorebackpackers/maharashtra.jpg" alt="">
                        </div>
                        <h4 class="mb-3">MAHARASHTRA</h4>
                        <p>Adventure awaits as you backpack through Maharashtra's captivating wonders</p>
                        <a class="btn-slide mt-2" href="maharashtra.php"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" style="height: 200px; width: 300px;"
                                src="img/explorebackpackers/uttarpradesh.jpg" alt="">
                        </div>
                        <h4 class="mb-3">UTTAR PRADESH</h4>
                        <p>Where history breathes, culture thrives, and spirituality finds its home</p>
                        <a class="btn-slide mt-2" href="uttarpradesh.php"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Our Team</h6>
            <h1 class="mb-5">Expert Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="" alt="">
                    </div>
                    <h5 class="mb-0">Diya Vashi</h5>
                    <p>TYBCA Div 1,<br>S S Aggrawal College,Navsari</p>

                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href="https://www.instagram.com/diya_vashi1/"><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Madhvi Tandel</h5>
                    <p>TYBCA Div 1,<br>S S Aggrawal College,Navsari</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href="https://www.instagram.com/__madhvitandel/"><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                    </div>
                    <h5 class="mb-0">Maaz Shaikh</h5>
                    <p>TYBCA Div 1,<br>S S Aggrawal College,Navsari</p>
                    <div class="btn-slide mt-1">
                        <i class="fa fa-share"></i>
                        <span>
                            <a href="https://www.instagram.com/maaz__shaikh/"><i class="fab fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Team End -->

    <!-- new blogs -->

    <div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Blogs</h6>
            <h1 class="mb-5">Our Clients Say!</h1>
        </div>
        <div class="blogs-slider">
            <?php 
            $tid=1;
            $sql = "SELECT blogs.*, users.username FROM blogs JOIN users ON blogs.email = users.email WHERE blogs.status = :tid";
            $query = $dbh->prepare($sql);
            $query->bindParam(':tid', $tid, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if ($query->rowCount() > 0) {
                foreach ($results as $result) { ?>
                    <div class="blog-item">
                        <div class="blog-image" style="background-image: url('img/blogimages/<?php echo htmlentities($result->bimage);?>'); background-size: cover; background-position: center; opacity: 0.5;"></div>
                        <div class="team-item p-4">
                            <h5 class="mb-0"><?php echo htmlentities($result->username);?></h5><br>
                            <p><b><?php echo htmlentities($result->blog);?></b></p>
                        </div>
                    </div>
                <?php 
                }
            } ?>  
        </div>
    </div>
</div>

<!-- end -->

                <!-- Footer Start -->
                <?php require 'footer.php'; ?>
                <!-- Footer End -->
                
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.blogs-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
</body>

</html>