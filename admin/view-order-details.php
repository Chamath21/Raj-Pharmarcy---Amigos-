<!-- 
PPA Project - Amigos
Online Ordering System  -->

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    
    $cid=$_GET['aticid'];
      $admrmk=$_POST['AdminRemark'];
      $admsta=$_POST['status'];
      $sercharge=$_POST['servicecharge'];
 $addcharge=$_POST['addcharge'];
 $partcharge=$_POST['partcharge'];
 $courier=$_POST['courier'];
    
   $query=mysqli_query($con, "update  tblorderrequest set AdminRemark='$admrmk',AdminStatus='$admsta',ServiceCharge='$sercharge',OtherCharge='$addcharge',CourierCharge='$partcharge',Courier='$courier' where ID='$cid'");
    if ($query) {
    $msg="Order has been completed.";
  }else{
  $msg="Something Went Wrong. Please try again";
  }}
  ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Online Ordering System</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body>
		
		<div class="accountbg" style="background: url('../assets/images/15.jpg');background-size: cover;background-position: center;"></div>

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
                                    <h4 class="m-t-0 header-title">View Order Deatils</h4>
                                    <p class="text-muted m-b-30 font-14">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                              
 <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>


<?php
$cid=$_GET['aticid'];
$ret=mysqli_query($con,"select * from tblorderrequest join tbluser on tbluser.ID=tblorderrequest.UserId where tblorderrequest.ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
<table border="1" class="table table-bordered mg-b-0">
<tr>
    <th>Order Number</th>
    <td><?php  echo $row['OrderNumber'];?></td>
<th>Full Name</th>
    <td><?php  echo $row['FullName'];?></td>
  </tr>

<tr>
    <th>Order Category</th>
    <td><?php  echo $row['Category'];?></td>
    <th>Order Deatils</th>
    <td><?php  echo $row['OrderDetails'];?></td>
  </tr>
 
<tr>
    <th>Patient Age</th>
    <td><?php  echo $row['PatientAge'];?></td>
    <th>Patient Address</th>
    <td><?php  echo $row['PatientAddress'];?></td>
  </tr>
  <tr>
    <th>  Patient Contact Number</th>
    <td><?php  echo $row['PatientContno'];?></td>
    <th>Delivery/Pickup Date</th>
    <td><?php  echo $row['DpDate'];?></td>
  </tr>
  <tr>
    <th>Delivery/Pickup Time</th>
    <td><?php  echo $row['DpTime'];?></td>
  </tr>
<tr>
  <th>Order Request Date</th>
  <td><?php echo $row['OrderrequestDate'];?></td>
</tr>
<tr>
    <th>Admin Status</th>
    <td> <?php  
if($row['AdminStatus']=="1")
{
  echo "Selected";
}

if($row['AdminStatus']=="2")
{
  echo "Rejected";
}
if($row['AdminStatus']=="3")
{
  echo "Completed";
}

     ;?></td>
  </tr>
</table>

  
--------------------------------------------------

<table class="table mb-0">
<?php if($row['AdminRemark']==""){ ?>
<form name="submit" method="post" enctype="multipart/form-data"> 
  
<tr>
    <th>Admin Remark :</th>
    <td>
    <textarea name="AdminRemark" placeholder="" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
   </tr>
<tr>
    <th>Courier Name :</th>
    <td>
    <select name='courier' id="courier" class="form-control">
     <option value="">Courier Name</option>
      <?php $query=mysqli_query($con,"select * from tblcourier");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['FullName'];?>"><?php echo $row['FullName'];?></option>
                  <?php } ?>  
   </select>
   </tr>   

<tr>
<th>Service Charge: </th>
<td>
  <input type="text" name="servicecharge" id="servicecharge" class="form-control wd-450" required="true">
</td></tr>
<tr>
<th>Courier Charge: </th>
<td>
  <input type="text" name="partcharge" id="partcharge" class="form-control wd-450" required="true">
</td></tr>
<tr>
<th>Other Charges: </th>
<td>
  <input type="text" name="addcharge" id="addcharge" class="form-control wd-450" required="true">
</td></tr>

  <tr>
    <th>Admin Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="3" selected="true">Completed</option>
   </select></td>
  </tr>

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-az-primary pd-x-20">Completed</button></td>
  </tr>
  </form>
<?php } else { ?>


<table border="1" class="table table-bordered mg-b-0">
  <tr>
        <th colspan="4" style="font-size:16px;text-align:center;">Order Details</th>
    </tr>
<tr>
<th>Order Completion Date</th>
<td><?php echo $row['AdminRemarkdate']; ?>  </td>
 
    <th>Courier Name</th>
    <td><?php echo $row['Courier']; ?></td>
  </tr>
  <tr>
    <th>Admin Remark</th>
    <td colspan="3"><?php echo $row['AdminRemark']; ?></td>
  </tr>

<tr>
    <th>Service Charge</th>
    <td><?php echo $schrg=$row['ServiceCharge']; ?></td>

    <th>Courier Charge</th>
    <td><?php echo $pchrg=$row['CourierCharge']; ?></td>
  </tr>
<tr>
    <th>Other Charge(if any)</th>
    <td><?php echo $ochrg=$row['OtherCharge']; ?></td>
    <th>Total Amount</th>
    <td><?php echo $ochrg+$schrg+$pchrg; ?></td>
  </tr>

</table>


  

  <?php } ?>
 



</table>

<?php } ?>

              

                                                
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->

             <?php include_once('includes/footer.php');?>
            </div>
        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
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
<?php }  ?>