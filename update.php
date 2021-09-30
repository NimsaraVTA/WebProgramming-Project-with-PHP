<?php 

require_once('C:\xampp\htdocs\Projects\Database01\include\connection.php');

?>


<?php

$sql="UPDATE user set Name='Saman' where ID=0";

$result=mysqli_query($connection,$sql);

if($result){
    
    echo mysqli_affected_rows($connection)."updated";
    
}else{
    echo "Connection failed";
}

?>

<html>

    <head><title>PHP update</title></head>
    
    <body>
    
    </body>
</html>
<?php mysqli_close ($connection) ?>