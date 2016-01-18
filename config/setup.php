<?php

// setup database file;

# Database connection here




$dbc = mysqli_connect('db.test.laraejones.com', 'laradb2', 'Foaf6Boff4uF', 'tinfo482') OR die('Could not connect because: '.mysqli_connect_error());



#Constants
DEFINE('D_TEMPLATE', template);


#functions
include('functions/data.php');
include('functions/template.php');


#site setup
$debug = data_setting_value($dbc, 'debug-status');



$site_title = 'Site Name';

if(isset($_GET['page'])) //set $pageid to equal the value give in the URL

{ 
    
    $pageid = $_GET['page'];
 
 
}else {
    
    $pageid = 1; //set to 1 or the home page
    
}

#page setup
$page = data_page($dbc, $pageid);




?>
