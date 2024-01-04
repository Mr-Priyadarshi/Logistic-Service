<?php
$host="localhost";
$user="root";
$password="";
$db="vls"; 
$link = mysqli_connect($host,$user,$password,$db);
mysqli_select_db($link,$db);
    session_start();
	if(!isset($_SESSION["pooranaam"]))
{
    header("Location:user_login.php");
}
    if(isset($_POST['logout']))
    {
        session_destroy();
        header('Location:user_login.php');
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
								<form action="" method="POST">
									<input type="submit" class="btn btn-success" name="logout" value="Logout">
								</form>
	                            
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
					<a href="#"><h1><?php echo $_SESSION["pooranaam"]; ?></h1></a>
					<div class="pull-right">
						<a href="index.php"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="LOGIN.php">BOOKING DETAILS</a>
					</div>
				</div>
			</div>
<br>
<div class="container-fluid block-content">
            <table class="table table-bordered">
				<thead class="thead_dark">
				<tr>
						
						<th scope="col">Item Id</th>
                        <th scope="col">Item</th>
                        <th scope="col">Source</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Weight</th>
						<th scope="col">Booking Status</th>
						<th scope="col">Delivery Status</th>
						<th scope="col">Price</th>
                    </tr>
				</thead>

    <?php
        $user_id=$_SESSION['userID'];
        $sql2 = "select * from bookingdetails where userID='".$user_id."'";
        $result=mysqli_query($link,$sql2);
    	$count=mysqli_num_rows($result);
        if($count){
            while($row=mysqli_fetch_assoc($result)){
                echo 
                '<tr>
					<td>
						'.$row["itemid"].'
					</td>
                    <td>
                        '.$row["item"].'
                    </td>
                    <td>
                        '.$row["source"].'
                    </td>
                    <td>
                        '.$row["destination"].'
                    </td>
                    <td>
                        '.$row["weight"].'
                    </td>
                    <td>
                        '.$row["bookingstatus"].'
                    </td>
					<td>
					'.$row["deliverystatus"].'
				</td>
				<td>
					'.$row["price"].'
				</td>
                </tr>';
            }
        }
    ?>

</table>
</div>
<br>			

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