<?php

$conn = mysqli_connect("localhost","root","","record");
if($conn){
    // echo"Connection has been established succesfully.";
}
else{
    echo"Sorry !! connection is not established";
}
?>