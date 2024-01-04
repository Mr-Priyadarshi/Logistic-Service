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
        if($count){
            while($row=mysqli_fetch_assoc($result)){
                echo $row;
                $_SESSION["pooranaam"]=$row['FullName'];
                $_SESSION['userID'] = $row['user_id'];
                header('Location:dashboard.php');
            }
        }
        else{
            echo "<script>alert('Incorrect Email or Password');</script>";
        }
}
?> 

