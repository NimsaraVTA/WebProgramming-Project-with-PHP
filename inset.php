<?php 

require_once('C:\xampp\htdocs\Projects\Database01\include\connection.php');

?>

<?php 

$n='Thathsarani';
$pass='123T';
$hashed_pass=sha1($pass);
$sql="INSERT INTO user(Name,Password) values ('{$n}','{$hashed_pass}')";

$result=mysqli_query($connection,$sql);


if($result){
    
    echo "Row was added!";
    
}else{
    
    echo "Query execute failed!";
    
}

?>

<html>

    <head><title>insert php</title></head>
    
    
</html>

<?php mysqli_close($connection) ?>