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
    
    <?php  include ('widgets/slider.php'); ?>

<div class="container">
        

	<div class="row">
		<div class="cover-card col-sm-12" style="background: url(images/dressindex.jpg) no-repeat center top;background-size:cover;">
			<p></p>
		</div>
		

		<div class="cover-card col-sm-4" style="background: url(images/topindex.jpg) no-repeat center top;background-size:cover;">
			<p></p>
		</div>
		<div class="cover-card col-sm-4" style="background: url(images/pantsindex.jpg) no-repeat center top;background-size:cover;">
			<p></p>
		</div>
		<div class="cover-card col-sm-4" style="background: url(images/accessoriesindex.jpg) no-repeat center top;background-size:cover;">
			<p>	</p>
		</div>

	</div>
	
	
	
	<div class="clearfix"></div>
       		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script src="js/jquery.themepunch.tools.min.js"></script>
		<script src="js/jquery.themepunch.revolution.min.js"></script>
		
       	<script>
			/* JS for SLIDER REVOLUTION */
			jQuery(document).ready(function() {
			   jQuery('.tp-banner').revolution(
				{
					delay: 9000,
					startheight: 450,
					
					hideThumbs: 10,
					
					navigationType:"none",	
					
					
					hideArrowsOnMobile:"on",
					
					touchenabled:"on",
					onHoverStop:"on",
					
					navOffsetHorizontal:0,
					navOffsetVertical:20,
					
					stopAtSlide:-1,
					stopAfterLoops:-1,

					shadow:0,
					
					fullWidth:"on",
					fullScreen:"off"
				});
			});
	</script>
          
 <!--debug -->
    </div>
    <?php  include (D_TEMPLATE.'/footer2.php'); ?>
    <?php 
    
    if($debug == 1)  {
        include ('widgets/debug.php');
    }

    ?>
    
</body>

</html>
