<?php
session_start(); // Start the session

// Include your database connection file
include_once 'Login and Signup Form/connection.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Booking Details</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Add border box style */
        .border-box {
            border: 1px solid #ddd; /* Add border */
            border-collapse: collapse; /* Collapse border spacing */
        }
        .border-box th,
        .border-box td {
            border: 1px solid #ddd; /* Add border to cells */
            padding: 8px; /* Add padding */
        }
        .border-box th {
            background-color: #f2f2f2; /* Add background color to header cells */
        }
        .border-box tr:nth-child(even) {
            background-color: #f2f2f2; /* Add background color to even rows */
        }
    </style>
</head>

<body>

    <div class="ts-main-content">
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <center>
                            <h2>My Booking Details</h2>
                        </center>

                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default">
                            <div class="panel-body">


                                <div id="print">
                                    <table class="display table table-striped table-bordered table-hover border-box" cellspacing="0" width="100%">
                                        <tbody>
                                            <?php 
                                            $bid=intval($_GET['bid']);
                                            $sql = "SELECT 
                                            bookings.*, 
                                            users.*, 
                                            rooms.*, 
                                            hotels.*, 
                                            rooms.Rimage AS Rimage,
                                            DATEDIFF(bookings.checkout, bookings.checkin) AS totalnodays
                                            FROM 
                                            bookings
                                            INNER JOIN 
                                            users ON bookings.email = users.email
                                            INNER JOIN 
                                            rooms ON bookings.BookedRoom = rooms.id
                                            INNER JOIN 
                                            hotels ON rooms.RoomHotelName = hotels.id
                                            WHERE 
                                            bookings.id = :bid";


                                            $query = $dbh -> prepare($sql);
                                            $query -> bindParam(':bid',$bid, PDO::PARAM_STR);
                                            $query->execute();
                                            $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt=1;
                                            if($query->rowCount() > 0)
                                            {
                                                foreach($results as $result)
                                                {   
                                                    ?>  
                                                    <h3 style="text-align:center; color:red">#<?php echo htmlentities($result->bookingnumber);?> Booking Details </h3>

                                                    <tr>
                                                        <th colspan="6" style="text-align:center;color:blue">User Details</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Booking No.</th>
                                                        <td>#<?php echo htmlentities($result->bookingnumber);?></td>
                                                        <th>Name</th>
                                                        <td><?php echo htmlentities($result->name);?></td>
                                                    </tr>
                                                    <tr>                                           
                                                        <th>Email Id</th>
                                                        <td><?php echo htmlentities($result->email);?></td>
                                                        <th>Contact No</th>
                                                        <td><?php echo htmlentities($result->contact_number);?></td>
                                                    </tr>
                                                    <tr>                                            
                                                        <th>Address</th>
                                                        <td><?php echo htmlentities($result->address);?></td>
                                                    </tr>

                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">Booking Details</th>
                                                    </tr>
                                                    <tr>                                            
                                                        <th>Room Name</th>
                                                        <td><?php echo htmlentities($result->RoomName);?></td>
                                                        <th>Hotel Name</th>
                                                        <td><?php echo htmlentities($result->HotelName);?></td>
                                                    </tr>
                                                    <tr>                                            
                                                        <th>Booking Date</th>
                                                        <td><?php echo htmlentities($result->bookingdate);?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Check-In</th>
                                                        <td><?php echo htmlentities($result->checkin);?></td>
                                                        <th>Check-Out</th>
                                                        <td><?php echo htmlentities($result->checkout);?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total Days</th>
                                                        <td><?php echo htmlentities($tdays=$result->totalnodays);?></td>
                                                        <th>Price Per Night</th>
                                                        <td><?php echo htmlentities($ppdays=$result->PricePerNight);?></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3" style="text-align:center">Grand Total</th>
                                                        <td><?php echo htmlentities($tdays*$ppdays);?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Booking Status</th>
                                                        <td><?php 
                                                        if($result->status==0)
                                                        {
                                                            echo htmlentities('Not Confirmed yet');
                                                        } else if ($result->status==1) {
                                                            echo htmlentities('Confirmed');
                                                        }
                                                        else if ($result->status==2) {
                                                            echo htmlentities('Canceled by admin');
                                                        }
                                                        else{
                                                            echo htmlentities('Cancelled by you');
                                                        }
                                                        ?></td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; }} ?>

                                                </tbody>
                                            </table>
                                            <form method="post">
                                                <input name="Submit2" type="submit" class="txtbox4" value="Print" onClick="return f3();" style="cursor: pointer;"  />
                                            </form>

                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>

                        <!-- Loading Scripts -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/bootstrap-select.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/jquery.dataTables.min.js"></script>
                        <script src="js/dataTables.bootstrap.min.js"></script>
                        <script src="js/Chart.min.js"></script>
                        <script src="js/fileinput.js"></script>
                        <script src="js/chartData.js"></script>
                        <script src="js/main.js"></script>
                        <script language="javascript" type="text/javascript">
                            function f3()
                            {
                                window.print(); 
                            }
                        </script>
                    </body>
                    </html>
