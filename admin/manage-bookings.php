<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	if(isset($_REQUEST['eid'])) {
		$eid=intval($_GET['eid']);
		$status="2";
	
		// Fetch customer's email and booking number
		$sql = "SELECT * FROM bookings INNER JOIN users ON bookings.email=users.email WHERE bookings.id=:eid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':eid', $eid, PDO::PARAM_STR);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);
		$customerEmail = $result['email'];
		$bookingNumber = $result['bookingnumber'];
		$username = $result['username'];
	
		$sql = "UPDATE bookings SET Status=:status WHERE id=:eid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':eid', $eid, PDO::PARAM_STR);
		$query->execute();
	
		$msg="Booking Successfully Cancelled ";
	
		// Send email to the customer
		$to = $customerEmail;
		$headers = "From: backpackers123mmd@gmail.com";
		$subject = "Booking Cancellation";
		$message = "Dear $username,\n\nYour booking (number: $bookingNumber) has been cancelled.";
	
		// Check if email sent successfully
		if(mail($to, $subject, $message, $headers)) {
			$msg .= "& Email notification sent successfully.";
		} else {
			$msg .= "& Failed to send email notification.";
		}
	}
	


if(isset($_REQUEST['aeid'])) {
    $aeid=intval($_GET['aeid']);
    $status=1;

    $sql = "UPDATE bookings SET Status=:status WHERE id=:aeid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':status',$status, PDO::PARAM_STR);
    $query->bindParam(':aeid',$aeid, PDO::PARAM_STR);
    $query->execute();

    $msg="Booking Successfully Confirmed &";

    // Fetch customer's email and booking number
	
    $sql = "SELECT * FROM bookings INNER JOIN users ON bookings.email=users.email WHERE bookings.id=:aeid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':aeid', $aeid, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $customerEmail = $result['email'];
    $bookingNumber = $result['bookingnumber'];
	$username = $result['username'];

    // Send email to the customer
    $to = $customerEmail;
    $headers = "From: backpackers123mmd@gmail.com";
    $subject = "Booking Confirmation";
    $message = "Dear $username,\n\nYour booking (number: $bookingNumber) has been confirmed.";

    // Check if email sent successfully
    if(mail($to, $subject, $message, $headers)) {
        $msg .= " Email notification sent successfully.";
    } else {
        $msg .= "& Failed to send email notification.";
    }
}

if(isset($_POST['search'])) {
	$search = $_POST['search'];
	$sql = "SELECT * FROM bookings WHERE bookingnumber LIKE :search OR email LIKE :search";
	$query = $dbh->prepare($sql);
	$query->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
} else {
	$sql = "SELECT * FROM bookings";
	$query = $dbh->prepare($sql);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
}


 ?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Backpackers | Manage Bookings   </title>

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
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Manage Bookings</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Bookings Info</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<form method="post" class="form-horizontal">
                                    <div class="form-group">
									<div class="col-sm-6"></div>
                                        <label class="col-sm-2 control-label">Search:</label>
                                        
										<div class="col-sm-4">
                                            <input type="text" class="form-control" id="search" name="search" placeholder="Enter booking number or email" required>
                                        </div>
                                    </div>
                                </form>
								<table id="" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
										<th>Name</th>
											<th>Booking Number</th>
											<th>Email</th>
											<th>Check-In</th>
											<th>Check-Out</th>
											<th>Message</th>
											<th>Adults</th>
											<th>Childs</th>
											<th>Status</th>
											<th>Booking Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
										<th>Name</th>
											<th>Booking Number</th>
											<th>Email</th>
											<th>Check-In</th>
											<th>Check-Out</th>
											<th>Message</th>
											<th>Adults</th>
											<th>Childs</th>
											<th>Status</th>
											<th>Booking Date</th>
											<th>Action</th>
										</tr>
									</tfoot>

									<tbody>
                                        <?php 
                                            $cnt = 1;
                                            if($query->rowCount() > 0) {
                                                foreach($results as $result) { ?>
                                                    <tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->name);?></td>
											<td><?php echo htmlentities($result->bookingnumber);?></td>
											<td><?php echo htmlentities($result->email);?></td>
											<td><?php echo htmlentities($result->checkin);?></td>
											<td><?php echo htmlentities($result->checkout);?></td>
											<td><?php echo htmlentities($result->message);?></td>
											<td><?php echo htmlentities($result->adults);?></td>
											<td><?php echo htmlentities($result->childs);?></td>
											<td <?php if($result->status == 0) { ?> style="color: #007bff;" <?php } elseif ($result->status == 1) { ?> style="color: #28a745;" <?php } elseif ($result->status == 2) { ?> style="color: #dc3545;" <?php } else { ?> style="color: #dc3545;" <?php } ?>>
    <?php 
    if($result->status == 0) {
        echo htmlentities('Not Confirmed yet');
    } elseif ($result->status == 1) {
        echo htmlentities('Confirmed');
    } elseif ($result->status == 2) {
        echo htmlentities('Cancelled by you');
    } else {
        echo htmlentities('Cancelled by user');
    } ?>
</td>
											<td><?php echo htmlentities($result->bookingdate);?></td>
											<td>
    <?php if($result->status != 3) { ?>
        <a href="manage-bookings.php?aeid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Confirm this booking')"> Confirm</a> /
        <a href="manage-bookings.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Cancel this Booking')"> Cancel</a>
    <?php } ?>
</td>

										</tr>
										<?php $cnt=$cnt+1; 
                                        } ?>
                                    </tbody>
                                </table>
                                <?php } else { ?>
                                    <div class="errorWrap"><strong>No data available!</strong></div>
                                <?php } ?>
                                    </tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>


	<script>
        $(document).ready(function(){
            $('#search').on('input', function() {
                var search = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "manage-bookings.php",
                    data: {'search': search},
                    success: function(data) {
                        $('.panel-body').html(data);
                    }
                });
            });
        });
    </script>
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
</body>
</html>
<?php } ?>
