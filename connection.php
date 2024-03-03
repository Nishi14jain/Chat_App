<?php
$servername = "localhost"; 
$username = "root"; 
$password =""; 



//create connection 
$conn = mysqli_connect($servername, $username, $password); 
if($conn ->connect_error){
    die("Connection Failed: " . $conn ->connect_error); 

}
echo  "Connected Successfully"; 

?>