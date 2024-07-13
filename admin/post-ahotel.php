<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{   
    header('location:index.php');
}
else { 

    if(isset($_POST['submit'])) {
        $HotelName=$_POST['HotelName'];
        $HotelStateName=$_POST['StateName'];
        $HotelDescription=$_POST['HotelDescription'];
        $PricePerNight=$_POST['PricePerNight'];
        $himage1=$_FILES["img1"]["name"];
        $himage2=$_FILES["img2"]["name"];
        $himage3=$_FILES["img3"]["name"];
        $himage4=$_FILES["img4"]["name"];
        $himage5=$_FILES["img5"]["name"];
        $airconditioner=$_POST['airconditioner'];
        // Checkboxes
        $Wifi = isset($_POST['Wifi']) ? $_POST['Wifi'] : 0;
        $TravelDesk = isset($_POST['TravelDesk']) ? $_POST['TravelDesk'] : 0;
        $Bonfire = isset($_POST['Bonfire']) ? $_POST['Bonfire'] : 0;
        $Cctv = isset($_POST['Cctv']) ? $_POST['Cctv'] : 0;
        $Parking = isset($_POST['Parking']) ? $_POST['Parking'] : 0;

        move_uploaded_file($_FILES["img1"]["tmp_name"],"img/hotelimages/".$_FILES["img1"]["name"]);
        move_uploaded_file($_FILES["img2"]["tmp_name"],"img/hotelimages/".$_FILES["img2"]["name"]);
        move_uploaded_file($_FILES["img3"]["tmp_name"],"img/hotelimages/".$_FILES["img3"]["name"]);
        move_uploaded_file($_FILES["img4"]["tmp_name"],"img/hotelimages/".$_FILES["img4"]["name"]);
        move_uploaded_file($_FILES["img5"]["tmp_name"],"img/hotelimages/".$_FILES["img5"]["name"]);

        $sql="INSERT INTO hotels (HotelName, HotelStateName, HotelDescription, PricePerNight, Himage1, Himage2, Himage3, Himage4, Himage5, AirConditioner, Wifi, TravelDesk, Bonfire, Cctv, Parking) VALUES (:HotelName, :HotelStateName, :HotelDescription, :PricePerNight, :himage1, :himage2, :himage3, :himage4, :himage5, :airconditioner, :Wifi, :TravelDesk, :Bonfire, :Cctv, :Parking)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':HotelName',$HotelName,PDO::PARAM_STR);
        $query->bindParam(':HotelStateName',$HotelStateName,PDO::PARAM_STR);
        $query->bindParam(':HotelDescription',$HotelDescription,PDO::PARAM_STR);
        $query->bindParam(':PricePerNight',$PricePerNight,PDO::PARAM_STR);
        $query->bindParam(':himage1',$himage1,PDO::PARAM_STR);
        $query->bindParam(':himage2',$himage2,PDO::PARAM_STR);
        $query->bindParam(':himage3',$himage3,PDO::PARAM_STR);
        $query->bindParam(':himage4',$himage4,PDO::PARAM_STR);
        $query->bindParam(':himage5',$himage5,PDO::PARAM_STR);
        $query->bindParam(':airconditioner',$airconditioner,PDO::PARAM_STR);
        $query->bindParam(':Wifi',$Wifi,PDO::PARAM_STR);
        $query->bindParam(':TravelDesk',$TravelDesk,PDO::PARAM_STR);
        $query->bindParam(':Bonfire',$Bonfire,PDO::PARAM_STR);
        $query->bindParam(':Cctv',$Cctv,PDO::PARAM_STR);
        $query->bindParam(':Parking',$Parking,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId)
        {
            $msg="Hotel posted successfully";
        }
        else 
        {
            $error="Something went wrong. Please try again";
        }
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
    
    <title>Backpackers | Post Hotel</title>

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
                            <h2 class="page-title">Post A Hotel</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Basic Info</div>
                                        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                                            else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                                                <div class="panel-body">
                                                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Hotel Name<span style="color:red">*</span></label>
                                                            <div class="col-sm-4">
                                                                <input type="text" name="HotelName" class="form-control" required>
                                                            </div>
                                                            <label class="col-sm-2 control-label">Select State<span style="color:red">*</span></label>
                                                            <div class="col-sm-4">
                                                                <select class="selectpicker" name="StateName" required>
                                                                    <option value=""> Select </option>
                                                                    <?php 
                                                                    $ret="select id,StateName from states";
                                                                    $query= $dbh->prepare($ret);
                                                                    $query-> execute();
                                                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                                    if($query->rowCount() > 0)
                                                                    {
                                                                        foreach($results as $result)
                                                                        {
                                                                    ?>
                                                                        <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->StateName);?></option>
                                                                    <?php 
                                                                        }
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="hr-dashed"></div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Hotel Description<span style="color:red">*</span></label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" name="HotelDescription" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Price Per Night(in INR)<span style="color:red">*</span></label>
                                                            <div class="col-sm-4">
                                                                <input type="text" name="PricePerNight" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                                <h4><b>Upload Images</b></h4>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">
                                                                Image 1 <span style="color:red">*</span><input type="file" name="img1" required>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                Image 2<span style="color:red">*</span><input type="file" name="img2" >
                                                            </div>
                                                            <div class="col-sm-4">
                                                                Image 3<span style="color:red">*</span><input type="file" name="img3" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-4">
                                                                Image 4<span style="color:red">*</span><input type="file" name="img4" >
                                                            </div>
                                                            <div class="col-sm-4">
                                                                Image 5<input type="file" name="img5">
                                                            </div>
                                                        </div>
                                                        <div class="hr-dashed"></div>
                                                </div>
                                    </div>
                                </div>
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
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="airconditioner" name="airconditioner" value="1">
                                            <label for="airconditioner"> Air Conditioner </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="Wifi" name="Wifi" value="1">
                                            <label for="wifi"> WI-FI </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="TravelDesk" name="TravelDesk" value="1">
                                            <label for="traveldesk"> Travel Desk </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="Bonfire" name="Bonfire" value="1">
                                            <label for="bonfire"> Bon Fire </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <div class="checkbox checkbox-inline"><br>
                                            <input type="checkbox" id="Cctv" name="Cctv" value="1">
                                             <label for="Cctv"> CCTV </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="checkbox checkbox-inline"><br>
                                            <input type="checkbox" id="Parking" name="Parking" value="1">
                                            <label for="Parking"> Parking </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn btn-default" type="reset">Cancel</button>
                                <button class="btn btn-primary" name="submit" type="submit">Save changes</button>
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
