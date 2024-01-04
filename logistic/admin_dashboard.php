<?php
    session_start();
	$host="localhost";
	$user="root";
	$password="";
	$db="vls"; 
	$link = mysqli_connect($host,$user,$password);
    $k=$_SESSION['FullName'];
    if(isset($_POST['logout']))
    {
        session_destroy();
        header('Location:admin_login.php');
    }
?>

<?php include 'head.php' ?>
	<body data-scrolling-animations="true">
        <div class="sp-body">
			
<header id="this-is-top">
	            <div class="container-fluid">
	                <div class="topmenu row">
	                    <nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
	                        
	                        <a href="#">read company profile</a>
	                        <a href="#">WHY US</a>
	                    </nav>
	                    <nav class="text-right col-sm-3 col-md-3 col-lg-3">
	                        <a href="#"><i class="fa fa-facebook"></i></a>
	                        <a href="#"><i class="fa fa-google-plus"></i></a>
	                        <a href="#"><i class="fa fa-twitter"></i></a>
	                        <a href="#"><i class="fa fa-pinterest"></i></a>
	                        <a href="#"><i class="fa fa-youtube"></i></a>
	                    </nav>
	                </div>
	                <div class="row header">
	                    <div class="col-sm-3 col-md-3 col-lg-3">
	                        <img src="img/logo1.png" width="200px" alt="Vedant Logistics"/>

	                    </div>
	                    <div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
	                        <div class="text-right header-padding">
	                           
	                            <div class="h-block"><span>EMAIL US</span>info@osls.co.in</div>
	                            <div class="h-block"><span>WORKING HOURS</span> 9:00AM-10PM</div>
                                <div class="h-block"><span>WORKING DAYS</span>Mon - Sun</div>
	                            <a class="btn btn-success" href="login.php" type="submit" name="logout">LOGOUT</a>
	                        </div>
	                    </div>
	                </div>
	                
						<div class="search-form-modal transition">
							<form class="navbar-form header_search_form">
								<i class="fa fa-times search-form_close"></i>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn_search customBgColor">Search</button>
							</form>
						</div>
	                </nav>
	                <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
	            </div>
	        </header>


<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>DASHBOARD</h1></a>
					<div class="pull-right">
						<a href="#"><?php echo $k; ?></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="admin_dashboard.php">DASHBOARD</a>
					</div>
				</div>
			</div>

<div class="container-fluid block-content">
        		<div class="text-center hgroup wow zoomInUp" data-wow-delay="0.3s">
            		<h1>WELCOME </h1>
            		<h2>We have wide network of offices in all major locations to help you with <br> the services we offer</h2>
	            </div>
				<div class="row our-services">
            		<div class="col-sm-6 col-md-4 col-lg-4 wow zoomInLeft" data-wow-delay="0.3s">
                		<a href="bookinfo.php">
                    		<span><i class="glyphicon glyphicon-list-alt" style="font-size:30px;"></i>
                            </span>
                    		<h4>BOOKED SHIPMENT</h4>
							<p> Click here to check booked shipment</p>
	                    </a>
	                </div>
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInUp" data-wow-delay="0.3s">
                		<a href="update_payment.php">
                    		<span><i class="glyphicon glyphicon-qrcode" style="font-size:30px;"></i></span>
                    		<h4>UPDATE PAYMENT STATUS</h4>
	                        <p> Click here to update payment status</p>
	                    </a>
	                </div>
	              
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInLeft" data-wow-delay="0.3s">
                		<a href="update_delivery.php">
                    		<span><i class="glyphicon glyphicon-signal" style="font-size:30px;"></i></span>
                    		<h4>UPDATE DELIVERY STATUS</h4>
                            <p>Click here to update delivery status shipment</p>
	                    </a>
	                </div>
					<div class="col-sm-6 col-md-4 col-lg-4 wow zoomInLeft" data-wow-delay="0.3s">
                		<a href="user_details.php">
                    		<span><i class="glyphicon glyphicon-user" style="font-size:30px;"></i></span>
                    		<h4>USER DETAILS</h4>
                            <p>Click here to check user details</p>
	                    </a>
	                </div>
					<div class="col-sm-6 col-md-4 col-lg-4 wow zoomInLeft" data-wow-delay="0.3s">
                		<a href="delete_user.php">
                    		<span><i class="glyphicon glyphicon-user" style="font-size:30px;"></i></span>
                    		<h4>DELETE USER </h4>
                            <p>Click here to delete user</p>
	                    </a>
	                </div>
	            </div>
	        </div>



<?php include 'footer.php' ?>        
		</div>
                
        <!--Main-->   
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        
        <script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
        <!--Owl Carousel-->
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
        <!--Theme-->
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
        <script src="js/theme.js"></script>
	</body>

</html>