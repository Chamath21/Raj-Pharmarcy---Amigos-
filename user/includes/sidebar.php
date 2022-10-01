 <!-- 
PPA Project - Amigos
Online Ordering System  -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                       <h3> User Profile  </h3>
                       <hr />                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="../assets/images/user.png" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>

                         <?php
$uid=$_SESSION['sid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                        <h5><?php echo $name; ?></a> </h5>
                        <p class="text-muted">User</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="welcome.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span> Order Enquiry </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="enquiry-request.php">Order Form</a></li>
                                    <li><a href="enquiry-history.php">Your Enquiry History</a></li>
                                </ul>
                            </li>

          
<li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span> Order Request </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="order-request.php">Order Request Form</a></li>
                                    <li><a href="order-history.php">Order History</a></li>
                                </ul>
                            </li>
                                             
                 

  
                            




                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

