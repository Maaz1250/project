<?php
session_start();
include_once 'Login and Signup Form/connection.php';

if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout']; 
    $adults = $_POST['adults'];
    $childs = $_POST['childs'];
    $message=$_POST['message'];
    $email=$_SESSION['login'];
    $status=0;
    $rid=$_GET['rid']; // Fetching rid from the URL
    $bookingno=mt_rand(100000000, 999999999);

    $sql = "INSERT INTO bookings (name, bookingnumber, email, checkin, checkout, message, adults, childs, status, bookingdate, BookedRoom) 
            VALUES (:name, :bookingno, :email, :checkin, :checkout, :message, :adults, :childs, :status, current_timestamp(), :rid)";

    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':bookingno', $bookingno, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':checkin', $checkin, PDO::PARAM_STR);
    $query->bindParam(':checkout', $checkout, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->bindParam(':adults', $adults, PDO::PARAM_INT);
    $query->bindParam(':childs', $childs, PDO::PARAM_INT);
    $query->bindParam(':status', $status, PDO::PARAM_INT);
    $query->bindParam(':rid', $rid, PDO::PARAM_INT); // Binding rid to the parameter
    if ($query->execute()) {
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId) {
            echo "<script>alert('Booking successful.');</script>";
            echo "<script type='text/javascript'> document.location = 'my-booking.php'; </script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location = 'car-listing.php'; </script>";
        } 
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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
    <link href="css_booking/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css_booking/style.css" rel="stylesheet">

    
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
    .custom-box {
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }
    
    .image-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }
    
    .image-wrapper img {
        width: 250px;
        height: 150px;
    }
</style>

</head>

<body>
<!-- Navbar Start -->
<?php require "nav.php"; ?>
<!-- Navbar End -->

<?php 
$rid=intval($_GET['rid']);
$sql = "SELECT rooms.*, hotels.*, hotels.id as hid FROM rooms JOIN hotels ON hotels.id = rooms.RoomHotelName where rooms.id=:rid";
$email=$_SESSION['login'];
$query = $dbh -> prepare($sql);
$query->bindParam(':rid',$rid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
$_SESSION['hotelid']=$result->hid;
?>

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(admin/img/hotelimages/<?php echo htmlentities($result->Himage1);?>); background-size: cover; background-position: center;">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
        </div>
    </div>
</div>

        <!-- Page Header End -->


    
        <!-- Booking Start -->
        <form action="" method="POST">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-info text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-info text-uppercase"><?php echo htmlentities($result->RoomName);?></span></h1>
                </div>
                <div class="row g-5">
                <div class="col-lg-6">
    <div class="custom-box">
        <div class="row g-3">
            <div class="col-6">
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text-info text-uppercase">Hotel </span></h6>
                <div class="image-wrapper">
                    <img src="admin/img/hotelimages/<?php echo htmlentities($result->Himage1);?>" alt="Hotel Image" />
                </div>
                
                <h4><?php echo htmlentities($result->HotelName);?></h4>
            </div>
            <div class="col-6">
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info text-uppercase">Room</span></h6>
                <div class="image-wrapper">
                    <img src="admin/img/roomimages/<?php echo htmlentities($result->rimage);?>" alt="Room Image" />
                </div>
                <h4><?php echo htmlentities($result->RoomName);?></h4>
                <h5>Price Per Night ₹<?php echo htmlentities($result->PricePerNight);?></h5>
            </div>
        </div>
    </div>
</div>
     
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlentities($_SESSION['login']);?>" readonly>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-floating date">
                                    <input type="date" class="form-control datetimepicker-input" id="checkin" name="checkin" placeholder="Check In" min="<?php echo date('Y-m-d'); ?>" required />
                                    <label for="checkin">Check In</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-floating date">
                                    <input type="date" class="form-control datetimepicker-input" id="checkout" name="checkout" placeholder="Check Out" min="<?php echo date('Y-m-d'); ?>" required/>
                                    <label for="checkout">Check Out</label>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1" name="adults" required>
                                              <option value="1">Adult 1</option>
                                              <option value="2">Adult 2</option>
                                              <option value="3">Adult 3</option>
                                            </select>
                                            <label for="select1">Select Adult</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2" name="childs" required>
                                            <option value="none">None</option>
                                              <option value="1">Child 1</option>
                                              <option value="2">Child 2</option>
                                              <option value="3">Child 3</option>
                                            </select>
                                            <label for="select2">Select Child</label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message" name="message" style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 py-3" type="submit"  name="submit" value="Book Now" >Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </form>
        <!-- Booking End -->
        <?php }} ?>
            <!-- Footer Start -->
            <?php require "footer.php"; ?>
    <!-- Footer End -->

    <script>
    document.getElementById('checkin').addEventListener('change', function() {
        var checkinDate = new Date(this.value);
        var checkoutInput = document.getElementById('checkout');
        var minCheckoutDate = new Date(checkinDate);
        minCheckoutDate.setDate(minCheckoutDate.getDate() + 1); // Set minimum checkout date to the next day
        var minCheckoutDateString = minCheckoutDate.toISOString().split('T')[0];
        checkoutInput.min = minCheckoutDateString;
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
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>