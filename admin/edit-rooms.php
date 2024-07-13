<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
    $RoomName=$_POST['RoomName'];
    $HotelName=$_POST['RoomHotelName'];
    $RoomDescription=$_POST['RoomDescription'];
    $PricePerNight=$_POST['PricePerNight'];
    $vimage1=$_FILES["img1"]["name"];
    $id=$_GET['id'];

$sql="update rooms set RoomName=:RoomName,RoomHotelName=:HotelName,RoomDescription=:RoomDescription,PricePerNight=:PricePerNight where id=:id ";
$query = $dbh->prepare($sql);
$query->bindParam(':RoomName',$RoomName,PDO::PARAM_STR);
$query->bindParam(':HotelName',$HotelName,PDO::PARAM_STR);
$query->bindParam(':RoomDescription',$RoomDescription,PDO::PARAM_STR);
$query->bindParam(':PricePerNight',$PricePerNight,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();

$msg="Data updated successfully";


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
	
	<title>Backpackers | Edit Room Info</title>

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
					
						<h2 class="page-title">Edit Room</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
									<div class="panel-body">
<?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
<?php 
$id=$_GET['id'];
$sql ="SELECT rooms.*,hotels.HotelName,hotels.id as bid from rooms join hotels on hotels.id=rooms.RoomHotelName where rooms.id=:id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Room Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="RoomName" class="form-control" value="<?php echo htmlentities($result->RoomName)?>" required>
</div>
<label class="col-sm-2 control-label">Select Hotel<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="RoomHotelName" required>
<option value="<?php echo htmlentities($result->bid);?>"><?php echo htmlentities($bdname=$result->HotelName); ?> </option>
<?php $ret="select id,HotelName from hotels";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$resultss = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($resultss as $results)
{
if($results->StateName==$bdname)
{
continue;
} else{
?>
<option value="<?php echo htmlentities($results->id);?>"><?php echo htmlentities($results->HotelName);?></option>
<?php }}} ?>

</select>
</div>
</div>
											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Room description<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="RoomDescription" rows="3" required><?php echo htmlentities($result->RoomDescription);?></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price Per Night(in INR)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="PricePerNight" class="form-control" value="<?php echo htmlentities($result->PricePerNight);?>" required>
</div>
							
<div class="form-group">
<div class="col-sm-12">
<h4><b>Room Images</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 1 <img src="img/roomimages/<?php echo htmlentities($result->rimage);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeroomimage.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 1</a>
</div>

</div>

</div>
</div>
</div>
</div>
	
							

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">

<div class="panel-body">




<?php }} ?>


											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2" >
													
<button class="btn btn-primary" name="submit" type="submit" style="margin-top:4%">Save changes</button>
												</div>
											</div>

										</form>
									</div>
								</div>
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
</body>
</html>
<?php } ?>
