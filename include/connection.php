<?php

$connection=mysqli_connect('localhost','root','','userdb');

//checking error connection

if(mysqli_connect_errno()){
    
    die('Database connection failed'.mysqli_connect_error());
    
}else{
    echo 'Connection successfully';
}

?>