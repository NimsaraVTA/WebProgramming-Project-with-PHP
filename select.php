<?php

require_once('C:\xampp\htdocs\Projects\Database01\include\connection.php');

?>

<?php

    $sql="SELECT * FROM user";
    
    $result=mysqli_query($connection,$sql);

    if($result){
        
        echo mysqli_num_rows($result)."<br>";
        
        echo "Query successful <br>";
    
        $table='<table>';
        $table.='<tr><th>ID</th><th>Your Name</th><th>Password</th></tr>';
        
        while($print= mysqli_fetch_assoc($result)){
            
            $table.='<tr>';
            $table.='<td>'.$print['ID'].'</td>';
            $table.='<td>'.$print['Name'].'</td>';
            $table.='<td>'.$print['Password'].'</td>';
            
            
        }
        
       $table.='</table>'; 
        
    }

?>

<html>

    <head><title>PHP select query</title>
    
        <style type="text/css">
        
            th,td{
                
                border: 1px solid black;
                width: 100px;
                
            }
        
        </style>
    
    </head>
    
    <body>
    
        <?php echo $table ?>
    
    </body>
</html>

<?php mysqli_close($connection) ?>