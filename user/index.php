<!-- 
PPA Project - Amigos
Online Ordering System Website
Customer Login Page
 -->

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNo='$emailcon') && Password='$password' "); // selects the ID of the user which matches the email or phone number and the password//
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['sid']=$ret['ID']; //session is  where ID = session id (sid)//
     header('location:welcome.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Raj Pharmarcy | Login </title>
        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('../assets/images/login-background.jpg');background-size: cover;background-position: center; border:solid 1px;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h3 class="text-uppercase text-center pb-4">
                                <a href="../index.php" ><span>Raj Pharmarcy | Login </span></a>
                            </h3>
                            <hr color="#000" />
                            <p style="font-size:16px; color:"red align:center> <?php if($msg){
    echo $msg;
  }  ?> </p>

                            <form class="" action="#" name="login" method="post">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">User</label>
                                        <input class="form-control" type="text" id="email" name="emailcont" required="" placeholder="Email or Contact Number">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Password">
                                    </div>
									
                                </div>
								
								<a href="forget-password.php" class="text-muted float-right"><small>Forgot your password?</small></a>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    
                                </div>

								<div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="login">Log In</button>
                                    </div>
								
                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="register.php" class="text-dark m-l-5"><b>Become a Customer Now!</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright"> ???RAJ Pharmacies  |  Amigos </p>
            </div>

        </div>



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