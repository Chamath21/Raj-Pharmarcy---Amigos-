  <!-- 
PPA Project - Amigos
Online Ordering System  -->
            <div class="left side-menu">
				

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                       <h3>Admin</h3>
                       <hr color="#000" /></div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="../assets/images/user.png" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
						
						

                            <?php
$adid=$_SESSION['adid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

						
						
?>
                        <h5><?php echo $name; ?></a> </h5>
                        <p class="text-muted">ADMIN PANEL</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

         
							
							
							<!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="dashboard.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span>Dashboard </span>
                                </a>
                            </li>

                          

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span> Couriers </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-couriers.php">Add Couriers</a></li>
                                    <li><a href="manage-couriers.php">Manage Couriers</a></li>
                                </ul>
                            </li>

   <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span> Order Category </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-category.php">Add Category</a></li>
                                    <li><a href="manage-category.php">Manage Category</a></li>
                                </ul>
                            </li>



  

                            <li>
                                <a href="reg-user.php">
                                  <i class="icon-people"></i> <span> Registered Users </span>
                                </a>
                            </li>


<li>
<a href="javascript: void(0);"><i class="fi-paper"></i><span> Order Requests </span> <span class="menu-arrow"></span></a>
<ul class="nav-second-level" aria-expanded="false">
<li><a href="new-orders.php"> New Orders </a></li>
<li><a href="cancelled-orders.php">Cancelled Orders</a></li>
</ul>
</li>
<li>
<a href="javascript: void(0);"><i class="fi-paper"></i><span> Processing Orders </span> <span class="menu-arrow"></span></a>
<ul class="nav-second-level" aria-expanded="false">
<li><a href="new-outbound-orders.php"> Approved Orders</a></li>
<li><a href="completed-orders.php"> Completed Orders </a></li>
</ul>
</li>


<li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i><span> Customer Enquiries </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="notrespond-enquiry.php"> Not Respond Enquiry</a></li>
                                    
                                     <li><a href="respond-enquiry.php"> Respond Enquiry </a></li>
                                </ul>
                            </li>


  <li>
                                <a href="search-enquiry.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Enquiry Search </span>
                                </a>
                            </li>

                             <li>
                                <a href="search-order.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Search Orders </span>
                                </a>
                            </li>






                        </ul>

                    </div>
                    <!-- Sidebar -->

                    

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

