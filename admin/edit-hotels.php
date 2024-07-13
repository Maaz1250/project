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
$HotelName=$_POST['HotelName'];
$State=$_POST['StateName'];
$HotelDescription=$_POST['HotelDescription'];
$PricePerNight=$_POST['PricePerNight'];
$airconditioner=$_POST['airconditioner'];
$Wifi=$_POST['Wifi'];
$TravelDesk=$_POST['TravelDesk'];
$Bonfire=$_POST['Bonfire'];
$Cctv=$_POST['Cctv'];
$Parking=$_POST['Parking'];
$id=intval($_GET['id']);

$sql="update hotels set HotelName=:HotelName,HotelStateName=:State,HotelDescription=:HotelDescription,PricePerNight=:PricePerNight,AirConditioner=:airconditioner,Wifi=:Wifi,TravelDesk=:TravelDesk,Bonfire=:Bonfire,Cctv=:Cctv,Parking=:Parking where id=:id ";
$query = $dbh->prepare($sql);
$query->bindParam(':HotelName',$HotelName,PDO::PARAM_STR);
$query->bindParam(':State',$State,PDO::PARAM_STR);
$query->bindParam(':HotelDescription',$HotelDescription,PDO::PARAM_STR);
$query->bindParam(':PricePerNight',$PricePerNight,PDO::PARAM_STR);
$query->bindParam(':airconditioner',$airconditioner,PDO::PARAM_STR);
$query->bindParam(':Wifi',$Wifi,PDO::PARAM_STR);
$query->bindParam(':TravelDesk',$TravelDesk,PDO::PARAM_STR);
$query->bindParam(':Bonfire',$Bonfire,PDO::PARAM_STR);
$query->bindParam(':Cctv',$Cctv,PDO::PARAM_STR);
$query->bindParam(':Parking',$Parking,PDO::PARAM_STR);
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
	
	<title>Backpackers | Edit Hotel Info</title>

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
					
						<h2 class="page-title">Edit Hotel</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
									<div class="panel-body">
<?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
<?php 
$id=intval($_GET['id']);
$sql ="SELECT hotels.*,states.StateName,states.id as bid from hotels join states on states.id=hotels.HotelStateName where hotels.id=:id";
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
<label class="col-sm-2 control-label">Hotel Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="HotelName" class="form-control" value="<?php echo htmlentities($result->HotelName)?>" required>
</div>
<label class="col-sm-2 control-label">Select State<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="StateName" required>
<option value="<?php echo htmlentities($result->bid);?>"><?php echo htmlentities($bdname=$result->StateName); ?> </option>
<?php $ret="select id,StateName from states";
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
<option value="<?php echo htmlentities($results->id);?>"><?php echo htmlentities($results->StateName);?></option>
<?php }}} ?>

</select>
</div>
</div>
											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Hotel Description<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="HotelDescription" rows="3" required><?php echo htmlentities($result->HotelDescription);?></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price Per Night(in INR)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="PricePerNight" class="form-control" value="<?php echo htmlentities($result->PricePerNight);?>" required>
</div>
							
<div class="form-group">
<div class="col-sm-12">
<h4><b>Hotel Images</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 1 <img src="img/hotelimages/<?php echo htmlentities($result->Himage1);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage1.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 1</a>
</div>
<div class="col-sm-4">
Image 2<img src="img/hotelimages/<?php echo htmlentities($result->Himage2);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage2.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 2</a>
</div>
<div class="col-sm-4">
Image 3<img src="img/hotelimages/<?php echo htmlentities($result->Himage3);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage3.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 3</a>
</div>
</div>

<div class="form-group">
<div class="col-sm-4">
Image 4<img src="img/hotelimages/<?php echo htmlentities($result->Himage4);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage4.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 4</a>
</div>
<div class="col-sm-4">
Image 5
<?php if($result->Himage5=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/hotelimages/<?php echo htmlentities($result->Himage5);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage5.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 5</a>
<?php } ?>
</div>

</div>
<div class="hr-dashed"></div>	

</div>
</div>
</div>
</div>
	
							

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Amenities</div>
<div class="panel-body">
	
<div class="form-group">
<div class="col-sm-3">
<?php if($result->AirConditioner==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="airconditioner" checked value="1">
<label for="inlineCheckbox1"> Air Conditioner </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-success">
<input type="checkbox" id="inlineCheckbox1" name="airconditioner" value="1">
<label for="inlineCheckbox1"> Air Conditioner </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->Wifi==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="Wifi" checked value="1">
<label for="inlineCheckbox2"> Wifi </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-success checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="Wifi" value="1">
<label for="inlineCheckbox2"> Wifi </label>
</div>
<?php }?>
</div>
<div class="col-sm-3">
<?php if($result->TravelDesk==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="TravelDesk" checked value="1">
<label for="inlineCheckbox3"> Travel Desk </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-success">
<input type="checkbox" id="inlineCheckbox1" name="TravelDesk" value="1">
<label for="inlineCheckbox3"> Travel Desk </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->Bonfire==1)
{
	?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="Bonfire" checked value="1">
<label for="inlineCheckbox3"> Bonfire </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-success">
<input type="checkbox" id="inlineCheckbox1" name="Bonfire" value="1">
<label  for="inlineCheckbox3"> Bonfire </label>
</div>
<?php } ?>
</div>



<div class="form-group">
<div class="col-sm-3">
<?php if($result->Cctv==1)
{
?>
<div class="checkbox checkbox-inline"><br>
<input type="checkbox" id="inlineCheckbox1" name="Cctv" checked value="1">
<label for="inlineCheckbox1"> Cctv </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-success">
<input type="checkbox" id="inlineCheckbox1" name="Cctv" value="1">
<label for="inlineCheckbox1"> Cctv </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->Parking==1)
{
?>
<div class="checkbox  checkbox-inline"><br>
<input type="checkbox" id="inlineCheckbox1" name="Parking" checked value="1">
<label for="inlineCheckbox2">Parking</label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-success checkbox-inline"><br>
<input type="checkbox" id="inlineCheckbox1" name="Parking" value="1">
<label for="inlineCheckbox2">Parking</label>
</div>
<?php } ?>
</div>

</div>

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