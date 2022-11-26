<!-- 
PPA Project - Amigos
Online Ordering System  -->

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
	
    $uid=$_SESSION['sid'];
     $category=$_POST['category'];
     $orderdetails=$_POST['orderdetails'];
     $age=$_POST['patientage'];
     $address=$_POST['patientaddress'];
     $connumber=$_POST['patientcontactno'];
     $odate=$_POST['dpdate'];
     $otime=$_POST['dptime'];
     $branchname=$_POST['branch'];
     $ordernumber= mt_rand(100000000, 999999999);
     
     $query=mysqli_query($con,"insert into tblorderrequest(UserId,OrderNumber,Category,OrderDetails,PatientAge,PatientAddress,PatientContno,DpDate,DpTime,branch) value('$uid','$ordernumber','$category','$orderdetails','$age','$address','$connumber','$odate','$otime','$branchname')");
    if ($query) {
    echo "<script>alert('Your Order has been received successfully.');</script>";
 echo "<script>window.location.href ='order-request.php'</script>";
  }
  else
    {
       echo "<script>alert('Something went wrong.Please try again.');</script>";
    }

}


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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../assets/js/modernizr.min.js"></script>
        <script type="text/javascript">
</script>
    </head>
    <body>

		
		<div class="accountbg" style="background: url('../assets/images/order.jpg');background-size: cover;background-position: center;"></div>
		
        <!-- Begin page -->
        <div id="wrapper">

          <?php include_once('includes/sidebar.php');?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                 <?php include_once('includes/header.php');?>

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Order Details</h4>
                                    <p class="text-muted m-b-30 font-14">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                                <form class="form-horizontal" role="form" method="post" name="submit">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Order Category</label>
                                                        <div class="col-10">
                                                            <select name='category' id="category" class="form-control" required="true">
     <option value="">Category</option>
      <?php $query=mysqli_query($con,"select * from tblcategory");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
              <option value="<?php echo $row['Ocategory'];?>"><?php echo $row['Ocategory'];?></option>
                  <?php } ?>  
   </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label" for="example-email">Details of the Order</label>
                                                        <div class="col-10">
                                                           <textarea id="orderdetails" name="orderdetails" class="form-control" placeholder="Order Details" required="true"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Patient Age</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="patientage" id="patientage" placeholder="Patient Age" required="true">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Patient Address</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" placeholder="Address of the Patient" name="patientaddress" id="patientaddress" required="true">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Patient Contact Number</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="patientcontactno" id="patientcontactno" placeholder="Patient Contact Number" required="true">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Delivery/Pickup Date</label>
                                                        <div class="col-10">
                                                            <input type="date" class="form-control" name="dpdate" id="dpdate" required="true">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Delivery/Pickup Time</label>
                                                        <div class="col-10">
                                                            <input type="time" class="form-control" name="dptime" id="dptime" required="true">
                                                        </div>
                                                    </div>
                                              
                                                 <div class="form-group row">
                                                        <label class="col-2 col-form-label">Branch</label>
                                                        <div class="col-10">
                                                            <select name="branch" id="branch" required="true" class="form-control">
                                                                <option value="">Select</option>
                                                                 <option value="colombo">Colombo</option> 
 <option value="bambalapitiya">Bambalapitiya</option> 
                                                            </select>
                                                        </div>
                                                    </div>
                                             

                                                    <div class="col-12">
														
										

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="true">
                                            <label for="remember">
         I accept <a href="terms-conditions.php" class="text-custom" target="_blank">Terms and Conditions</a>
                                            </label>
                                        </div>

                                    </div>
                                                     <div class="form-group row">
                                                    
                                                        <div class="col-12">
                                                           <p style="text-align: center;">  <button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">Submit</button></p>
                                                        </div>
                                                    </div>

                                                </form>
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
<?php } ?>
