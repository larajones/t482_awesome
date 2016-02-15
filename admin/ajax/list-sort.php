<?php

include('../../config/connection.php');

$list =  $_GET['list'];



foreach ($list as $key => $value) {
    
    $q = "UPDATE navigation SET position = $key WHERE id = $value";
   $r = mysqli_query($dbc, $q);
        
    
    echo mysqli_error($dbc);
    
    
}





?>

