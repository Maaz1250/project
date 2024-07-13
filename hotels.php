<?php
session_start();
include_once 'Login and Signup Form/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostels</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

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
    <!-- Navbar Start -->
    <?php require 'nav.php'; ?>
    <!-- Navbar End -->
        <br>
        <br>
    <div class="container">
        <center>
            <h1>OUR HOSTELS</h1>
        </center>
        <div class="row">
            <div class="col-md-6">
                <?php 
                include_once 'Login and Signup Form/connection.php'; // Include your database connection file
                
                // Check if the 'state' parameter is set in the URL
                if(isset($_GET['state'])) {
                    $state = $_GET['state'];
                    // SQL query to fetch hotels for the specified state
                    $sql = "SELECT hotels.*, states.StateName, states.id as bid FROM hotels JOIN states ON states.id = hotels.HotelStateName WHERE states.StateName = ?";
                    $query = $dbh->prepare($sql);
                    $query->execute([$state]);
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0) {
                        foreach($results as $result) {
                ?>
                <div class="mm flex-wrapper">
                    <img src="admin/img/hotelimages/<?php echo htmlentities($result->Himage1);?>" alt="Image" style="width: 400px; height: 300px;" />
                    <div class="inner">
                        <h1>&nbsp;&nbsp;&nbsp;<a href="hotel-details.php?hid=<?php echo htmlentities($result->id);?>">
                                <?php echo htmlentities($result->StateName);?> ,
                                <?php echo htmlentities($result->HotelName);?>
                            </a></h1>
                        <h3 id="details">
                            <p><?php echo htmlentities($result->HotelDescription);?></p>
                            <h3>
                                <p class="text-[#9C9C9C] font-medium text-xs md:text-base font-poppins md:mt-0 mt-4">
                                    &nbsp;&nbsp;   Starting at @ ₹<?php echo htmlentities($result->PricePerNight);?>
                                </p>
                                &nbsp;&nbsp;<a href="hotel-details.php?hid=<?php echo htmlentities($result->id);?>" class="btn btn-dark py-3 px-5">Our Rooms</a>
                            </h3>
                        </h3>
                        &nbsp;&nbsp;&nbsp;<?php if($result->AirConditioner==1)
{
?>
                      <img title="Travel desk" alt="Hostel amentities" loading="lazy" width="30"
                            height="30" decoding="async" data-nimg="1" class="cursor-pointer md:w-7 md:h-7 w-5 h-5"
                            src="https://static.thehosteller.com/icons/Amenities/Air%20conditioner-1682509941937.svg"
                            style="color: transparent" />
<?php } ?> 
<?php if($result->Wifi==1)
{
?>
<img title="Wifi" alt="Hostel amentities" loading="lazy" width="30"
                            height="30" decoding="async" data-nimg="1" class="cursor-pointer md:w-7 md:h-7 w-5 h-5"
                            src="https://static.thehosteller.com/icons/Amenities/Wifi-1682511242681.svg"
                            style="color: transparent" />
<?php } ?>
<?php if($result->TravelDesk==1)
{
?>
<img title="Travel desk" alt="Hostel amentities" loading="lazy" width="30"
                            height="30" decoding="async" data-nimg="1" class="cursor-pointer md:w-7 md:h-7 w-5 h-5"
                            src="https://static.thehosteller.com/icons/Amenities/Front%20desk-1682510506230.svg"
                            style="color: transparent" />
<?php } ?>
<?php if($result->Bonfire==1)
{
?>
<img title="Bonfire" alt="Hostel amentities" loading="lazy" width="30" height="30"
                            decoding="async" data-nimg="1" class="cursor-pointer md:w-7 md:h-7 w-5 h-5"
                            src="https://static.thehosteller.com/icons/Amenities/bonfire-1682510165838.svg"
                            style="color: transparent" />
<?php } ?>
<?php if($result->Cctv==1)
{
?>
<img title="Cctv" alt="Hostel amentities" loading="lazy" width="30" height="30"
                            decoding="async" data-nimg="1" class="cursor-pointer md:w-7 md:h-7 w-5 h-5"
                            src="https://static.thehosteller.com/icons/Amenities/Cctv-1682510196704.svg"
                            style="color: transparent" />
<?php } ?>
<?php if($result->Parking==1)
{
?>
<img title="Parking" alt="Hostel amentities" loading="lazy" width="30" height="30"
                            decoding="async" data-nimg="1" class="cursor-pointer md:w-7 md:h-7 w-5 h-5"
                            src="https://static.thehosteller.com/icons/Amenities/Parking-1682510880863.svg"
                            style="color: transparent" />
<?php } ?>
                    </div>
                </div>
                <?php
                        } // End foreach
                    } else {
                        // If no hotels found for the specified state, you can display a message
                        echo "No hotels found for the specified state.";
                    }
                } else {
                    // If state parameter is not set in the URL, you can handle it accordingly
                    echo "Please specify a state.";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Navbar Start -->
    <?php require 'footer.php'; ?>
    <!-- Navbar End -->
</body>
</html>
