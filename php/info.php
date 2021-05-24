<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}
else{
    echo "no connection";
}
mysqli_select_db($con, 'websitedata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
$query = "insert into userinfo (user,email,mobile,massage)
values('$user','$email','$mobile','$message')";
mysqli_query($con,$query);
header('location:index.php');


?>