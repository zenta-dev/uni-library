<?php
require 'conn.php'; 
$username = $_POST['username'];
$password = $_POST['password'];
$query="select * from pengguna where username = '$username' AND password = '$password'";
$result = mysqli_query($connect,$query);
$count=mysqli_num_rows($result); 
if($count==1) { 
   echo json_encode("Success");
}else{
   echo json_encode("Error");
}
?>