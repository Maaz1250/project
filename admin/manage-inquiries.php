<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0) {	
    header('location:index.php');
} else {
    if(isset($_REQUEST['eid'])) {
        $eid = intval($_GET['eid']);
        $status = 1;
        $sql = "UPDATE inquiries SET status=:status, res_date=current_timestamp() WHERE id=:eid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->bindParam(':eid', $eid, PDO::PARAM_STR);
        $query->execute();

        // Fetch the email address associated with the inquiry
        $getEmailQuery = "SELECT email FROM inquiries WHERE id = :eid";
        $getEmailStmt = $dbh->prepare($getEmailQuery);
        $getEmailStmt->bindParam(':eid', $eid, PDO::PARAM_STR);
        $getEmailStmt->execute();
        $result = $getEmailStmt->fetch(PDO::FETCH_ASSOC);
        $to = $result['email'];

        // Send email
        $subject = "Response to your Inquiry";
        $message = "Dear User,\n\nWe have received your inquiry and will respond shortly.\n\nRegards,\nBackpackers";
        $headers = "From: backpackers123mmd@gmail.com"; // Replace with your email address

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo '<script>alert("Email sent successfully!");</script>';
        } else {
            echo "<script>alert('Failed to send email.');</script>";
        }
    }
	if(isset($_POST['search'])) {
        $search = $_POST['search'];
        $sql = "SELECT * FROM inquiries WHERE name LIKE :search OR email LIKE :search OR contact_number LIKE :search";
        $query = $dbh->prepare($sql);
        $query->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
    } else {
        $sql = "SELECT * FROM inquiries";
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
	
	<title>Backpackers | Manage Inquiries   </title>

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

						<h2 class="page-title">Manage Contact Us Inquiries</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">User Inquiries</div>
							<div class="panel-body">
							<form method="post" class="form-horizontal">
                                    <div class="form-group">
									<div class="col-sm-6"></div>
                                        <label class="col-sm-2 control-label">Search:</label>
                                        
										<div class="col-sm-4">
                                        <input type="text" class="form-control" id="search" name="search" placeholder="Enter name or email or contact number" required>
                                        </div>
                                    </div>
                                </form>
								<table class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
											<th>Name</th>
											<th>Email</th>
											<th>Contact No</th>
											<th>Message</th>
											<th>Posting date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
											<th>Name</th>
											<th>Email</th>
											<th>Contact No</th>
											<th>Message</th>
											<th>Posting date</th>
											<th>Action</th>
										</tr>
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
											<td><?php echo htmlentities($result->email);?></td>
											<td><?php echo htmlentities($result->contact_number);?></td>
											<td><?php echo htmlentities($result->message);?></td>
											<td><?php echo htmlentities($result->inq_date);?></td>
																<?php if($result->status==1)
{
	?><td>Read</td>
<?php } else {?>

<td><a href="manage-inquiries.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to send email')" >Pending</a>
</td>
<?php } ?>
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
                    url: "manage-inquiries.php",
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
