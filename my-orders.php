<?php
session_start(); // Start the session
error_reporting(0);
// Include your database connection file
include_once 'Login and Signup Form/connection.php';

// Fetch user information from the database using session email
$usersession = $_SESSION['login'];
$sql = "SELECT * FROM orders WHERE email= :email";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':email', $usersession);
$stmt->execute();
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

$sql_orders = "SELECT * FROM orders WHERE email = :email";
$stmt_orders = $dbh->prepare($sql_orders);
$stmt_orders->bindParam(':email', $usersession);
$stmt_orders->execute();
$orders = $stmt_orders->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
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
    <h2>My Orders</h2>
    <div class="row">
        <div class="col-md-12">
            <?php if (empty($orders)): ?>
                <p>No orders yet.</p>
            <?php else: ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Order Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td><?php echo $order['name']; ?></td>
                                <td><?php echo $order['order_date']; ?></td>
                                <td><?php echo $order['name']; ?></td>
                                <td><?php echo $order['email']; ?></td>
                                <td><?php echo $order['item_name']; ?></td>
                                <td><?php echo $order['quantity']; ?></td>
                                <td>
                                    <button type="button" formtarget="_blank" class="btn btn-primary" onclick="window.location.href='order-details.php?oid=<?php echo htmlentities($order['id']); ?>'">View</button>
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
