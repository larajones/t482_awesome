<?php
 include ('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
    
    
     <title>
       <?php  echo $page['title']. ' | ' . $site_title; ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php  include ('config/css.php'); ?>
    <?php  include ('config/js.php'); ?>
	
	<link rel="stylesheet" type="text/css" href="config/animate.css">
	<link href="config/settings.css" rel="stylesheet">
	<!-- Countdown -->
		<link href="css/jquery.countdown.css" rel="stylesheet"> 
	
</head>


<body>
    
    
    <?php  include (D_TEMPLATE.'/navigation2.php'); ?>
    <div class="clearfix"></div>

	<div class="container">

		<div class="clearfix"></div>
		<?php  include ('widgets/mixmatch.php'); ?>
		<div class="clearfix1"></div>

    </div>
    <?php  include (D_TEMPLATE.'/footer2.php'); ?>
    <?php 
    
	    if($debug == 1)  {
	        include ('widgets/debug.php');
	    }

    ?>
    
</body>

</html>
