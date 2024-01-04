<?php
//session_start();
$host="localhost";
$user="root";
$password="";
$db="vls"; 
$link = mysqli_connect($host,$user,$password);
mysqli_select_db($link,$db);

//require("config.php"); 
if(isset($_POST['submit']))
{
    //Saving the Data in Variable 
    $FullName=$_POST['Fullname'];
    $Password=md5($_POST['Password']);
    $Confirm_Password=md5($_POST['C_Password']);

    $Email=$_POST['Email'];
	$Phone=$_POST['Phone'];
    echo $FullName,$Password,$Confirm_Password,$Email,$Phone;
    if($Password == $Confirm_Password)
    {
    	$sql1 = "select * from useraccount where UserID='".$UserID."'";
    	$result=mysqli_query($link,$sql1);
    	$count=mysqli_num_rows($result);
    	if($count==0)
    	{
	        $sql="Insert into useraccount (FullName,Email,Password,C_Password,Phone) values ('$FullName','$Email','$Password','$Confirm_Password','$Phone')";
            if(mysqli_query($link,$sql))
            {
                session_destroy();
                header('Location:c.php');
                //Redirecting to the Login Page
            }
            else
            {
                echo "<script>alert('Try Again!!');</script>";
            }
	     
        
        }
        else{
        	echo "<script>alert('Email Already Registered!!');</script>";
        }
    }
    else{
    	echo "<script>alert('Password does not Match!!');</script>";
    }

}
?> 
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<style id="" media="all">
@font-face {
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
</script>
</head>
<?php include 'head.php' ?>

	<body data-scrolling-animations="true">
		<div class="sp-body">
			<?php include 'header.php' ?>
				<div class="bg-image page-title">
					<div class="container-fluid"><h1> <a href="#">REGISTER</h1></a>
						<div class="pull-right"> <a href="index.php"><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="LOGIN.php">LOGIN</a> </div>
					</div>
				</div>
				<div class="container-fluid inner-offset">
					<ul class="nav nav-tabs wow fadeIn" data-wow-delay="0.3s" id="myTab">
						<li><a href="#tab2" data-toggle="tab">REGISTER</a></li>
					</ul>
					<!-- <div class="tab-content inner-offset wow fadeIn" data-wow-delay="0.3s">
						<div class="tab-pane active" id="tab1">
							<?php //include 'c.php'?>
						</div>
						<div class="tab-pane" id="tab2">
							<?php //include 'b.php'?>
						</div>
					</div> -->
          
                    <div class="wrapper wrapper--w680">
                        <div class="card card-4" style="margin-left: auto; margin-right: auto;width: 50%;">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="row row-space input-group">
                                        <h5 style="color: black; text-align: left;">Full Name</h5>
                                        <input class="input--style-4" type="text" name="Fullname"> </div>
                                    <div class="row row-space input-group">
                                        <h5 style="color: black; text-align: left;">Mobile Number</h5>
                                        <input class="input--style-4" type="text" name="Phone"> </div>
                                    <div class="row row-space input-group">
                                        <h5 style="color: black; text-align: left;">Email</h5>
                                        <input class="input--style-4" type="email" name="Email"> </div>
                                    <div class="row row-space input-group">
                                        <h5 style="color: black; text-align: left;">Password</h5>
                                        <input class="input--style-4" type="password" name="Password"> </div>
                                    <div class="row row-space input-group">
                                        <h5 style="color: black; text-align: left;">Re-write Password</h5>
                                        <input class="input--style-4" type="password" name="C_Password"> </div>
                                    <div class="p-t-15">
                                        <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

					
				</div>
        <br>
        <?php include 'footer.php' ?>
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
				<script src="vendor/jquery/jquery.min.js"></script>
				<script src="vendor/select2/select2.min.js"></script>
				<script src="vendor/datepicker/moment.min.js"></script>
				<script src="vendor/datepicker/daterangepicker.js"></script>
				<script src="js/global.js"></script>
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
				<script>
				window.dataLayer = window.dataLayer || [];

				function gtag() {
					dataLayer.push(arguments);
				}
				gtag('js', new Date());
				gtag('config', 'UA-23581568-13');
				</script>
				<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6fa3b211bea733a8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
	</body>

	</html>




