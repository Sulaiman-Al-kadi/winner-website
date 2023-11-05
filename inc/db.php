<?php
$conn  = mysqli_connect('localhost','root','','winweb'); //connection with the database
if(!$conn){
   echo 'error' . mysqli_connect_error($conn); 
}
// check if the connection success

?>