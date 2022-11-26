<!-- 
PPA Project - Amigos
Online Ordering System  -->

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php'); //session details//
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
  } else{




?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>RAJ Pharmarcy</title>
        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body>
		
		<div class="accountbg" style="background: url('../assets/images/welcome.jpg');background-size: cover;background-position: center;"></div>

     <div id="wrapper">

          <?php include_once('includes/sidebar.php');?>

                        <div class="content-page">

                 <?php include_once('includes/header.php');?>


               
                <!-- Top Bar End -->



                <!-- Start Page content -->
               
                <div class="content">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Welcome to Raj Pharmarcy User panel !</h4>

					<h3 class="header-title mb-3">Hello there! We're currently live on Colombo and Bamba for Delivery's and pickups.</h3>

					<h3 class="header-title mb-3">Enhance your metabolism, maintain a healthy appetite and minimize cravings with our effective weight management and slimming products.</h3>                                    

					<h3 class="header-title mb-3">Please navigate yourself through the sidebar for 	Enqiries and Order Information, We will try our best to be in touch with you as soon as possible.</h3>                                    
                                
					<br>
					<br>
					<br>

					
					<h3 class="header-title mb-3">Cheers!, and have a wonderful and a blasting day!.</h3>


					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

					
					<h3 class="header-title mb-3">Team @RAJ Pharmarcy.</h3>


</div>
                            </div>
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

        <!-- Flot chart -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="../plugins/flot-chart/curvedLines.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="../assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>