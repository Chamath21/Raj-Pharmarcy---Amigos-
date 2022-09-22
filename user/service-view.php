<!-- 
PPA Project - Amigos
Online Ordering System -->

<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
  } else{

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Online Ordering System</title>

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
<script type="text/javascript">
  function printdata()
  {
    window.print();
  }
</script>
    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

          <?php include_once('includes/sidebar.php');?>

            
            <div class="content-page">

                 <?php include_once('includes/header.php');?>

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Service History View</h4>
                                    <p class="text-muted m-b-30 font-14">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
         
         <form method="post">
        <p style="font-size:16px; color:red" align="left"> <?php if($msg){
    echo $msg;
  }  ?> </p>
         <?php
$cid=substr(base64_decode($_GET['srid']),0,-4);
$uid=$_SESSION['sid'];
$ret=mysqli_query($con,"select * from tblservicerequest where ID='$cid' and UserId='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<table border="1" class="table table-bordered mg-b-0">
 
   <tr>
    <th>Requested Date</th>
    <td><?php  echo $row['DpDate'];?></td>
	   
	   <tr>
    <th>Requested Time</th>
    <td><?php  echo $row['DpTime'];?></td>


    <th>Order Number</th>
    <td><?php  echo $row['OrderNumber'];?></td>
  </tr>

<tr>
    <th>Category</th>
    <td><?php  echo $row['Category'];?></td>

    <th>Order Details</th>
    <td><?php  echo $row['OrderDetails'];?></td>
  </tr>

  <tr>
    <th>Patient Age</th>
    <td><?php  echo $row['PatientAge'];?></td>

    <th>Patient's Address</th>
    <td><?php  echo $row['PatientAddress'];?></td>
  </tr>
  <tr>
    <th>Patient's Contact Number</th>
    <td><?php  echo $row['PatientContno'];?></td>

    <th>Delivery/Pickup Date</th>
    <td><?php  echo $row['DpDate'];?></td>
  </tr>


    <th>Order Category</th>
    <td><?php  echo $row['Ocategory'];?></td>
  </tr>

<tr>
    <th>Pickup Address</th>
    <td><?php  echo $row['PickupAddress'];?></td>

    <th>Order Requested Date</th>
    <td><?php  echo $row['OrderrequestDate'];?></td>
  </tr>

  <tr>
    <th>Admin Remark</th>
    <td><?php
if($row['AdminRemark']==""){
  echo "No action taken yet";
} else {
      echo $row['AdminRemark'];
    }?></td>

    <th>Admin Remark date</th>
    <td>
<?php
if($row['AdminRemarkdate']==""){
  echo "No action taken yet";
} else {
      echo $row['AdminRemarkdate'];
    }?>

  </td>
  </tr>

  <tr>
    <th>Courier Charge</th>
    <td><?php echo $couriercharge=$row['CourierCharge']; ?></td>

    <th>Service Charge</th>
    <td><?php echo $servicecharge=$row['ServiceCharge']; ?></td>
  </tr>
<tr>
    <th>Other Charge(if any)</th>
    <td><?php echo $othercharge=$row['OtherCharge']; ?></td>

    <th>Total Amount</th>
    <td><?php echo $couriercharge+$servicecharge+$othercharge; ?></td>
  </tr>

  

</table>
<p style="text-align: center;"><button type="text" name='print' id="print" onclick="return printdata();" class="btn btn-info btn-min-width mr-1 mb-1">Print</button></p>
<?php } ?>
</form>
</div>
</div>
</div>
</div>
</div>
</div></div></div></div></div>
 <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
</body>
</html>

<?php } ?>