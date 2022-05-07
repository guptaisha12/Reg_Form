<?php
$servername="localhost";
$username="root";
$password="";
$database="responsiveform";
$conn = mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo"connection ok";
}
else{
    echo"connection failed".mysqli_connect_error();
}

?>