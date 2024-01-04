<?php
session_start();

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
    $Email=$_POST['Email'];
    $Password=md5($_POST['Password']);
    
    $sql1 = "select * from useraccount where Email='".$Email."' and Password='".$Password."'";
    	$result=mysqli_query($link,$sql1);
    	$count=mysqli_num_rows($result);
    	if($count==1){
            while($row=mysqli_fetch_assoc($result)){
                $_SESSION['FullName']=$row['FullName'];
                header('Location:dashboard.php');
            }
        }
        else{
            echo "<script>alert('Incorrect Email or Password');</script>";
        }
}
?> 





<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-4/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2022 12:23:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<title>VLS|Registration</title>

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
<meta name="robots" content="noindex, follow">
<script nonce="60436b00-ec2c-4807-8b34-2eca1028a7ca">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
<div class="wrapper wrapper--w680">
<div class="card card-4">
<div class="card-body">
<h2 class="title">Login</h2>
<form action="" method="POST">



<div class="row row-space input-group">
<label class="label">Email</label>
 <input class="input--style-4" type="email" name="Email">
</div>

<div class="row row-space input-group">
  <label class="label">Password</label>
   <input class="input--style-4" type="password" name="Password">
</div>

<div class="p-t-15">
<button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<script src="js/global.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6fa3b211bea733a8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-4/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2022 12:23:53 GMT -->
</html>
