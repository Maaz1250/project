<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{   
    header('location:index.php');
}
else{
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
    
    <title>Backpackers | Orders</title>

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
                        <h2 class="page-title">Order Details</h2>
                        <!-- Zero Configuration Table -->
                        <div class="panel panel-default">
                            <div class="panel-heading">Order Info</div>
                            <div class="panel-body">
                                <div id="print">
                                    <table border="1" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                        <tbody>
                                            <?php 
                                            $oid = intval($_GET['oid']);
                                            $sql = "SELECT *, (quantity * unit_price) AS total_cost FROM orders WHERE id = :oid";

                                            $query = $dbh->prepare($sql);
                                            $query->bindParam(':oid', $oid, PDO::PARAM_STR);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt = 1;
                                            $grand_total = 0;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result) { ?>
                                                    <h3 style="text-align:center; color:red">#<?php echo htmlentities($result->bookingnumber);?> Order Details </h3>
                                                    <tr>
                                                        <th colspan="6" style="text-align:center;color:blue">User Details</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Id</th>
                                                        <td><?php echo htmlentities($result->email);?></td>
                                                        <th>Name</th>
                                                        <td><?php echo htmlentities($result->name);?></td>
                                                    </tr>
                                                    <tr>											
                                                        <th>Contact No</th>
                                                        <td><?php echo htmlentities($result->contact_number);?></td>
                                                        <th>Address</th>
                                                        <td><?php echo htmlentities($result->address);?></td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="4" style="text-align:center;color:blue">Order Details</th>
                                                    </tr>
                                                    <tr>											
                                                        <th>Item Name</th>
                                                        <td><?php echo htmlentities($result->item_name);?></td>
                                                        <th>Quantity</th>
                                                        <td><?php echo htmlentities($result->quantity);?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Unit Price</th>
                                                        <td><?php echo htmlentities($result->unit_price);?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Order Date</th>
                                                        <td><?php echo htmlentities($result->order_date);?></td>
                                                    </tr>
                                                    <?php 
                                                    $grand_total += $result->total_cost;
                                                    $cnt++;
                                                }
                                            }
                                            ?>
                                            <tr>
                                                <th colspan="3" style="text-align:center">Grand Total</th>
                                                <td><?php echo htmlentities($grand_total);?></td>
                                            </tr>
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
