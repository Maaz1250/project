<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

	if(isset($_POST['search'])) {
		$search = $_POST['search'];
		$sql = "SELECT * FROM orders WHERE name LIKE :search OR email LIKE :search";
$query = $dbh->prepare($sql);
$query->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
	} else {
		$sql = "SELECT * FROM orders";
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
	
	<title>backpackers | Orders   </title>

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

						<h2 class="page-title">Orders</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Orders Info</div>
							<div class="panel-body">
							<form method="post" class="form-horizontal">
                                    <div class="form-group">
									<div class="col-sm-6"></div>`
                                        <label class="col-sm-2 control-label">Search:</label>
                                        
										<div class="col-sm-4">
                                            <input type="text" class="form-control" id="search" name="search" placeholder="Enter name or email" required>
                                        </div>
                                    </div>
                                </form>
								<table class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
										<th>Name</th>
											<th>Email</th>
											<th>Address</th>
											<th>Item Name</th>
											<th>Quantity</th>
											<th>Order Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
										<th>Name</th>
											<th>Email</th>
											<th>Address</th>
											<th>Item Name</th>
											<th>Quantity</th>
											<th>Order Date</th>
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
											<td><?php echo htmlentities($result->email);?></td>
											<td><?php echo htmlentities($result->address);?></td>
											<td><?php echo htmlentities($result->item_name);?></td>
											<td><?php echo htmlentities($result->quantity);?></td>
											<td><?php echo htmlentities($result->order_date);?></td>
										<td>


<a href="order-details.php?oid=<?php echo htmlentities($result->id);?>"> View</a>
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
                    url: "manage-orders.php",
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
