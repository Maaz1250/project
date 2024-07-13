<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>


<!DOCTYPE HTML>
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
    font-size: 14px; /* Adjust font size */
    color: #666; /* Adjust text color */
}
    </style>
</head>

<body>

    <!--Header-->
    <?php include('nav.php');?>
    <!-- /Header -->
    <?php 
$hid=intval($_GET['hid']);
$sql = "SELECT hotels.*,states.StateName,states.id as bid  from hotels join states on states.id=hotels.HotelStateName where hotels.id=:hid";
$query = $dbh -> prepare($sql);
$query->bindParam(':hid',$hid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
$_SESSION['brndid']=$result->bid;  
?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="admin/img/hotelimages/<?php echo htmlentities($result->Himage1);?>"
                    style="height: 600px; width: 2000px" alt="img1" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="admin/img/hotelimages/<?php echo htmlentities($result->Himage2);?>"
                    style="height: 600px; width: 2000px" alt="img2" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="admin/img/hotelimages/<?php echo htmlentities($result->Himage3);?>"
                    style="height: 600px; width: 2000px" alt="img3" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="admin/img/hotelimages/<?php echo htmlentities($result->Himage4);?>"
                    style="height: 600px; width: 2000px" alt="img4" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">

                </div>
            </div>
            <?php if($result->Himage5=="")
{

} else {
  ?>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="admin/img/hotelimages/<?php echo htmlentities($result->Himage5);?>"
                    style="height: 600px; width: 2000px" alt="img5" />
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, 0.5)">

                </div>
            </div>
            <?php } ?>
        </div>
        
        <?php }} ?>
    </div>
    <!-- Carousel End -->

    <!-- Room Listing -->

    <div class="container">
    <center><h1>OUR ROOMS</h1></center>
    <div class="row">
        <div class="col-md-6">

        <?php 
$hid=intval($_GET['hid']);
$sql = "SELECT rooms.*, hotels.HotelName, hotels.id as bid FROM rooms JOIN hotels ON hotels.id = rooms.RoomHotelName where hotels.id=:hid";
$query = $dbh -> prepare($sql);
$query->bindParam(':hid',$hid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
$_SESSION['brndid']=$result->bid;
?>
            <div class="mm flex-wrapper">
            <img src="admin/img/roomimages/<?php echo htmlentities($result->rimage);?>" alt="Image" style="width: 400px; height: 300px;" />
                <div class="inner">
                    <h1>&nbsp;&nbsp;&nbsp;<a href="vehical-details.php?hid=<?php echo htmlentities($result->id);?>">
                            <?php echo htmlentities($result->RoomName);?> ,
                            <?php echo htmlentities($result->HotelName);?>
                        </a></h1>
                    <h3>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlentities($result->RoomDescription);?>
                    <h3>

                     <p class="text-[#9C9C9C] font-medium text-xs md:text-base font-poppins md:mt-0 mt-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹
                        <?php echo htmlentities($result->PricePerNight);?> Per Day
                    </p>
                    <?php if(isset($_SESSION['login'])) 
              {?>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;<a
                                    href="booking.php?rid=<?php echo htmlentities($result->id);?>"
                                    class="btn btn-dark py-3 px-5">Book Now
                                </a>
              <?php } else { ?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a
                                    href="Login and Signup Form/login-user.php"
                                    class="btn btn-dark py-3 px-5">Login For Book
                                </a>

              <?php } ?>
                    
                    </a>
                    </p>

                </div>
            </div>
        </div>
        <?php }} ?>
    </div>
</div>

    <!-- Room Listing End -->

    <!--Footer -->
    <?php include('footer.php');?>
    <!-- /Footer-->

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
        $(document).ready(function() {
  $('.header-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000, // in milliseconds (5 seconds)
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
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