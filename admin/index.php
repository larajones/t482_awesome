<?php

#start session

session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
    
}


?>



<?php include ('config/setup.php');?>


<!DOCTYPE html>
<html>
<head>
     <title> <?php echo $page['title']. ' | ' . $site_title; ?>  </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <?php include ('config/css.php');?>
    <?php include ('config/js.php');?>
   
</head>
<body>
    
    <?php  include (D_TEMPLATE.'/navigation.php');?>
    

        
        
    <h1>Admin Dashboard</h1>
  

    <div class = "row">
        <div class = "col-md-3">
            
            
            <?php   $query = "SELECT * FROM pages ORDER BY title ASC";
                    $results = mysqli_query($dbc, $query);
                    
                    while($page_list = mysqli_fetch_assoc($results))
                    {
                        echo $page_list['title'];
                        
                    }
            
            ?>
        </div>
        
        <div class = "col-md-9">
            
            
           
        </div>
      
        
    </div>
  
    
    
       
    <?php  include (D_TEMPLATE.'/footer.php');?>
    
    <?php  if($debug == 1)  { include ('widgets/debug.php'); } ?>

</body>


</html>
