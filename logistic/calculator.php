<?php
    session_start();
    $host="localhost";
    $user="root";
    $password="";
    $db="vls"; 
    $link = mysqli_connect($host,$user,$password);
    mysqli_select_db($link,$db);
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

<title>VLS|Booking</title>
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<style id="" media="all">@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 100;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiAyp8kv8JHgFVrJJLmE0tCMPc.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 200;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmv1pVF9eL.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 300;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm21lVF9eL.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 400;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrJJLucHtF.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 500;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmg1hVF9eL.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 600;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmr19VF9eL.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 700;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmy15VF9eL.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 800;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm111VF9eL.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: italic;
	font-weight: 900;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm81xVF9eL.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 100;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrLPTucHtF.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 200;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLFj_Z1xlEA.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 300;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDz8Z1xlEA.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 400;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiEyp8kv8JHgFVrJJfedw.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 500;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLGT9Z1xlEA.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 600;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLEj6Z1xlEA.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 700;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLCz7Z1xlEA.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 800;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDD4Z1xlEA.ttf) format('truetype');
}

@font-face {
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 900;
	src: url(https://colorlib.com/fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLBT5Z1xlEA.ttf) format('truetype');
}
</style>
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
<link href="css/main.css" rel="stylesheet" media="all">
<script nonce="60436b00-ec2c-4807-8b34-2eca1028a7ca">
(function(w, d) {
	! function(a, e, t, r) {
		a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
			deferred: []
		}, a.zaraz.track = (e, t) => {
			for(key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
		}, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
			a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
		}, a.addEventListener("DOMContentLoaded", (() => {
			var t = e.getElementsByTagName(r)[0],
				z = e.createElement(r),
				n = e.getElementsByTagName("title")[0];
			n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), z.defer = !0, z.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
		}))
	}(w, d, 0, "script");
})(window, document);


function multiplyBy()
{
        num1 = document.getElementById("distance").value;
        num2 = document.getElementById("weight").value;
        document.write("price").innerHTML = num1 * num2;
}
</script>
<script src="js/jquery-1.11.3.min.js"></script>
</head>

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
						<a href="index.php"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="LOGIN.php">CALCULATOR</a>
					</div>
				</div>
			</div>


<div class="container-fluid block-content">
<div class="wrapper wrapper--w680">
                        <div class="card card-4" style="margin-left: auto; margin-right: auto;width: 50%;">
                            <div class="card-body">
                                    <div class="row row-space input-group">
                                        <h5 style="color: black; text-align: left;">Weight (in tons)</h5>
                                        <input class="input--style-4" id="weight" type="number" required name="weight"> </div>
									<div class="row row-space input-group">
                                        <h5 style="color: black; text-align: left;">Distance (in KM)</h5>
                                        <input class="input--style-4" id="distance" type="number" required name="distance"> </div>
									<div class="row row-space input-group">
                                        <h5 style="color: black; text-align: left;">Price</h5>
                                        <input class="input--style-4 price" type="text"  name="price"  onkeyup="multiplyby()" readonly> </div>
                            </div>
                        </div>
                    </div>

					
				</div>
	        </div>



<script>
	$(document).ready(function(){
		
		
		
		$("#distance").keyup(function(){
			var w=$("#weight").val();
			var d=$("#distance").val();
			
			var res=w*d*80;
			$(".price").val(res);
			console.log(w*d);
		});


});

</script>

			

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