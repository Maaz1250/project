<?php
session_start(); // Start the session
error_reporting(0);
// Include your database connection file
include_once 'Login and Signup Form/connection.php';

// Fetch user information from the database using session email
$usersession = $_SESSION['login'];
$sql = "SELECT * FROM bookings WHERE email= :email";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':email', $usersession);
$stmt->execute();
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

$sql_bookings = "SELECT * FROM bookings WHERE email = :email";
$stmt_bookings = $dbh->prepare($sql_bookings);
$stmt_bookings->bindParam(':email', $usersession);
$stmt_bookings->execute();
$bookings = $stmt_bookings->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
// Include your database connection file
include_once 'Login and Signup Form/connection.php';

if(isset($_REQUEST['bid'])) {
    $bid=intval($_GET['bid']);
    $status="3";

    $sql = "UPDATE bookings SET Status=:status WHERE id=:bid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':bid', $bid, PDO::PARAM_STR);
		$query->execute();
    
    if($stmt->execute()) {
    } else {
        echo "Error: Unable to cancel booking";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .booking-details {
            max-width: 300px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>

<?php require 'nav.php'; ?>
<div class="container">
    <h2>My Bookings</h2>
    <div class="row">
        <div class="col-md-12">
            <?php if (empty($bookings)): ?>
                <p>No bookings yet.</p>
            <?php else: ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Booking Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking): ?>
                            <tr>
                                <td><?php echo $booking['bookingnumber']; ?></td>
                                <td><?php echo $booking['bookingdate']; ?></td>
                                <td><?php echo $booking['name']; ?></td>
                                <td><?php echo $booking['email']; ?></td>
                                <td <?php if($booking['status'] == 0) { ?> style="color: #007bff;" <?php } elseif ($booking['status'] == 1) { ?> style="color: #28a745;" <?php } elseif ($booking['status'] == 2) { ?> style="color: #dc3545;" <?php } else { ?> style="color: #dc3545;" <?php } ?>>
                                    <?php 
                                    if($booking['status'] == 0) {
                                        echo htmlentities('Not Confirmed yet');
                                    } elseif ($booking['status'] == 1) {
                                        echo htmlentities('Confirmed');
                                    } elseif ($booking['status'] == 2) {
                                        echo htmlentities('Cancelled by admin');
                                    } else {
                                        echo htmlentities('Cancelled by you');
                                    } ?>
                                </td>
                                <td>
                                    <?php if($booking['status'] != 2 && $booking['status'] != 3 ) { ?>
                                        <button type="button" class="btn btn-danger" onclick="cancelBooking(<?php echo htmlentities($booking['id']); ?>)">Cancel Booking</button>
                                    <?php } ?>
                                    <button type="button" formtarget="_blank" class="btn btn-primary" onclick="window.location.href='booking-details.php?bid=<?php echo htmlentities($booking['id']); ?>'">View</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function cancelBooking(bid) {
        if(confirm('Are you sure you want to cancel this booking?')) {
            window.location.href = 'my-booking.php?bid=' + bid;
        }
    }
</script>
</body>
</html>
