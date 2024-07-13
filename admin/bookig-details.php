<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status="2";
$sql = "UPDATE bookings SET Status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();
  echo "<script>alert('Booking Successfully Cancelled');</script>";
  echo "<script type='text/javascript'> document.location = 'canceled-bookings.php'; </script>";
}


if(isset($_REQUEST['aeid']))
	{
$aeid=intval($_GET['aeid']);
$status=1;

$sql = "UPDATE bookings SET Status=:status WHERE  id=:aeid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Booking Successfully Confirmed');</script>";
echo "<script type='text/javascript'> document.location = 'confirmed-bookings.php'; </script>";
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
	
	<title>Backpackers | New Bookings   </title>

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

						<h2 class="page-title">Booking Details</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Bookings Info</div>
							<div class="panel-body">


<div id="print">
								<table border="1"  class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%"  >
				
									<tbody>

									<?php 
$bid=intval($_GET['bid']);
$sql = "SELECT 
            bookings.*, 
            users.*, 
            rooms.*, 
            hotels.*, 
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
{				?>	
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
<td <?php if($result->status == 0) { ?> style="color: #007bff;" <?php } elseif ($result->status == 1) { ?> style="color: #28a745;" <?php } elseif ($result->status == 2) { ?> style="color: #dc3545;" <?php } else { ?> style="color: #dc3545;" <?php } ?>>
    <?php 
    if($result->status == 0) {
        echo htmlentities('Not Confirmed yet');
    } elseif ($result->status == 1) {
        echo htmlentities('Confirmed');
    } elseif ($result->status == 2) {
        echo htmlentities('Cancelled by admin');
    } else {
        echo htmlentities('Cancelled by user');
    } ?>
</td>

										<th>Last updation Date</th>
										<td><?php echo htmlentities($result->lastupdationdate);?></td>
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
<?php } ?>
