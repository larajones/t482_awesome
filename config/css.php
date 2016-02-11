<?php

//css file

?>


 <!-- Latest compiled and minified CSS -->
    <link crossorigin="anonymous" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    integrity=
    "sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    rel="stylesheet"><!-- Optional theme -->
    <link crossorigin="anonymous" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
    integrity=
    "sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
    rel="stylesheet"><!-- jQuery CSS -->
    <link href=
    "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"
    rel="stylesheet"><!-- Font Awesome -->
    <link href=
    "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    rel="stylesheet"><!-- jQuery -->

<style>


.clearfix {
	
	margin-bottom: 30px;
}

.clearfix1 {
	
	margin-bottom: 80px;
}




/****************************** Tile on Index Start*********************************/
/**********************************************************************************/  


.cover-card {
	border: 2px solid white;
	background: silver;
	padding: 0px;
	margin: 0px;
	height:200px;
}
.cover-card > p {
	text-align: center;
	background-color: rgba(6,6,6,0.0);
	color: rgba(6,6,6,0.0);
	width: 100%;
	height: 100%;
	font-weight: bold;
	font-size: 20px;
}
.cover-card:hover > p {
	background-color: rgba(6,6,6,0.3);
	color: white;
	text-shadow: 3px 3px 10px #000;
}



/****************************** Tile on Index End **********************************/
/**********************************************************************************/  





/*********************************** Slider Start **********************************/
/**********************************************************************************/  


/* SETTINGS FOR BANNER CONTAINERS */

.tp-banner-container{
	margin-bottom: 30px;
	width:100%;
	position:relative;
	padding:0;
	background: #f9f9f9;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
}

.tp-banner{
	width:100%;
	position:relative;
	overflow: hidden;
}

.tp-banner ul{
	display: none;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.tp-banner .white { color: #fff; text-shadow: 1px 1px 1px #454545; }

.tp-banner .largepinkbg {
	background:#d2322d;
}

.tp-banner .mediumwhitebg{
	font-family: 'Open Sans', sans-serif;
	font-size:15px;
	padding-top:10px;
	line-height:20px;
	color:#666;
}	

.tp-banner .img-tag {
	width: 40px;
	height: 40px;
	line-height: 40px !important;
	text-align: center;
	font-size: 13px !important;
	color: #fff;
	background: #d2322d;
	border-radius: 100px;
	font-weight:bold;
}
.tp-banner .large_bold_white { 
	font-family: 'Open Sans', sans-serif; 
	font-size:55px; 
	text-shadow:0px 0px 3px #555; 
}

.tp-banner .medium_light_white { font-size: 18px; line-height:28px; text-shadow:0px 0px 2px #111; }

.tp-banner a.btn { 
	border:0px; 
	padding: 10px 15px 13px 15px; 
	color: #fff; 
	border-radius:2px; 
	font-weight:bold; 
	box-shadow:inset 0px -3px 0px rgba(0,0,0,0.3);
	font-size:14px;
}

        
        
/*********************************** Slider End ************************************/
/**********************************************************************************/ 





/*********************************** Debug Start ***********************************/
/**********************************************************************************/   
    
    #btn-debug {
        
    position: absolute;
        
    }
    
    #console-debug {
        
        position: absolute;
        top: 50px;
        left: 0px;
        width: 40%;
        height: 700px;
        overflow-y: scroll;
        background-color: white;
        box-shadow: 2px 2px 5px #cccccc;
    
    }
    
    #console-debug pre {
        
    }
    
    
/*********************************** Debug End *************************************/
/**********************************************************************************/ 





/*********************************** Navbar Start **********************************/
/**********************************************************************************/

/* Logo & Navigation */

.logo {
	font-size:40px;
	margin-top: 15px;
	margin-right: 20px;
}

.logo > a:hover {
	font-size:40px;
	color:#fff;
}

.logo-color {
	font-size:40px;
	color:#8B0000;
}


/* navbar */
.navbar {
    background-color: #000000;
    border-top:4px solid #8B0000;
}
/* title */
.navbar .navbar-brand {
    color: #ffffff;
}
.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
    color: #5E5E5E;
}

.navbar-nav > li{
  padding-left:5px;
  padding-right:5px;
  margin-top: 5px;
}

/* link */
.navbar .navbar-nav > li > a {
    color: #777;
}
.navbar .navbar-nav > li > a:hover,
.navbar .navbar-nav > li > a:focus {
    color: #fff;
    background-color: transparent;
}
.navbar .navbar-nav > .active > a, 
.navbar .navbar-nav > .active > a:hover, 
.navbar .navbar-nav > .active > a:focus {
    color: #555;
    background-color: transparent;
}
.navbar .navbar-nav > .open > a, 
.navbar .navbar-nav > .open > a:hover, 
.navbar .navbar-nav > .open > a:focus {
    color: #555;
    background-color: transparent;
}
/* caret */
.navbar .navbar-nav > .dropdown > a .caret {
    border-top-color: #777;
    border-bottom-color: #777;
}
.navbar .navbar-nav > .dropdown > a:hover .caret,
.navbar .navbar-nav > .dropdown > a:focus .caret {
    border-top-color: #333;
    border-bottom-color: #333;
}
.navbar .navbar-nav > .open > a .caret, 
.navbar .navbar-nav > .open > a:hover .caret, 
.navbar .navbar-nav > .open > a:focus .caret {
    border-top-color: #555;
    border-bottom-color: #555;
}
/* mobile version */
.navbar .navbar-toggle {
    border-color: #DDD;
}
.navbar .navbar-toggle:hover,
.navbar .navbar-toggle:focus {
    background-color: #DDD;
}
.navbar .navbar-toggle .icon-bar {
    background-color: #CCC;
}
@media (max-width: 767px) {
    .navbar .navbar-nav .open .dropdown-menu > li > a {
        color: #777;
    }
    .navbar .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar .navbar-nav .open .dropdown-menu > li > a:focus {
        color: #333;
    }
}
    
/*********************************** Navbar End ************************************/
/**********************************************************************************/ 




/**************************** Login Dropdown Start *********************************/
/**********************************************************************************/ 


#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
}
#login-dp .help-block{
    font-size:12px    
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0    
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc 
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}



/**************************** Login Dropdown End ***********************************/
/**********************************************************************************/ 






/***************************** Cart Dropdown Start *********************************/
/**********************************************************************************/ 


ul.dropdown-cart{
    min-width:250px;
}
ul.dropdown-cart li .item{
    display:block;
    padding:3px 10px;
    margin: 3px 0;
}
ul.dropdown-cart li .item:hover{
    background-color:#f3f3f3;
}
ul.dropdown-cart li .item:after{
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

ul.dropdown-cart li .item-left{
    float:left;
}
ul.dropdown-cart li .item-left img,
ul.dropdown-cart li .item-left span.item-info{
    float:left;
}
ul.dropdown-cart li .item-left span.item-info{
    margin-left:10px;   
}
ul.dropdown-cart li .item-left span.item-info span{
    display:block;
}
ul.dropdown-cart li .item-right{
    float:right;
}
ul.dropdown-cart li .item-right button{
    margin-top:14px;
}



/***************************** Cart Dropdown End ***********************************/
/**********************************************************************************/ 





/***************************** Cart Page Start *************************************/
/**********************************************************************************/ 


.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}



/***************************** Cart Page End ***************************************/
/**********************************************************************************/ 





/********************************** Main Start *************************************/
/**********************************************************************************/  


	.pagination {
	
		margin-left:20px;
		
	}
	
	


/* Page Body Options text color and font size*/   
body {
    margin: 0;
    padding: 0;
    color: #454545;
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 14px;
    line-height: 21px;
    position: relative;
    background: #fff;
}
    
.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.row {
    margin-right: -15px;
    margin-left: -15px;
}




/* Link color and other options */
a {
	color:#454545;
	text-decoration:none;
	outline:none!important;
	-moz-transition:all .2s ease-in;
	-webkit-transition:all .2s ease-in;
	-o-transition:all .2s ease-in;
	transition:all .2s ease-in;
}


/* Link hover color and other options */
a:hover,a:focus {
	text-decoration:none;
	cursor:pointer;
	color:#8B0000;
}


/* Unordered list options */
ul,ol {
	list-style:none;
	margin:0;padding:0;
}



/* Heading Font type and weight */
h1,h2,h3,h4,h5,h6 {
	font-family:'Source Sans Pro',sans-serif;
	font-weight:normal;
	margin:0;
	padding-bottom:15px;
}



/* Heading Sizes */
h1{font-size:30px; line-height:35px;}
h2{font-size:24px; line-height:28px;}
h3{font-size:20px; line-height:24px;}
h4{font-size:17px; line-height:20px;}
h5{font-size:14px; line-height:20px;}
h6{font-size:12px;line-height:20px;}
p.lead{font-size:20px; line-height:1.4;}
h3 code{font-size:14px; font-weight:normal;}






/********************************** Main End ***************************************/
/**********************************************************************************/ 





/************************* Styling the Footer Begin ********************************/
/**********************************************************************************/  


.footer {
    background: #f2f2f2;
    height: auto;
    padding-bottom: 30px;
    position: relative;
    width: 100%;
    border-bottom: 1px solid #ddd;
    border-top: 1px solid #DDDDDD;
}

.footer h3 {
    border-bottom: 1px solid #DDDDDD;
    font-size: 14px;
    font-weight: 700;
    line-height: 27px;
    padding: 40px 0 15px;
    text-transform: uppercase;
    color: #8B0000;
}

.footer-bottom {
    background: #e3e3e3;
    border-top: 1px solid #DDDDDD;
    padding-top: 10px;
    padding-bottom: 10px;
    position: relative;
}

.footer ul {
    font-size: 12px;
    list-style-type: none;
    margin-left: 0;
    padding-left: 0;
    margin-top: 20px;
    color: #888888;
}


ul, ol {
    list-style: none;
    margin: 0;
    padding: 0;
}


li {
    display: list-item;
    text-align: -webkit-match-parent;
}



.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.newsLatterBox {
    overflow: hidden;
    margin-bottom: 5px;
}

.newsLatterBox .btn {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -o-border-radius: 3px;
    -ms-border-radius: 3px;
    border: medium none;
    color: #fff;
    display: inline-block;
    font-weight: 700;
    height: 40px;
    letter-spacing: 0.5px;
    padding: 0;
    text-transform: uppercase;
    width: 100%;
}

.footer ul li a {
    padding: 0 0 5px 0;
    display: block;
}




.social li {
    background: none repeat scroll 0 0 #B5B5B5;
    border: 2px solid #B5B5B5;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    float: left;
    height: 36px;
    line-height: 36px;
    margin: 0 8px 0 0;
    padding: 0;
    text-align: center;
    width: 36px;
    transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -webkit-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
}

.social li a {
    color: #EDEFF1;
}

.social li a i {
    font-size: 16px;
    margin: 0 0 0 8px;
    color: #EDEFF1!important;
}

/* Spacing Between Payment Cards Botom Footer */
.paymentMethodImg img {
    margin-left: 5px;
}


.btn-site, .newsLatterBox .btn {
    background: #3a3a3a;
}

.bg-gray {
    background-image: -moz-linear-gradient(center bottom,#BBBBBB 0%,#F0F0F0 100%);
    box-shadow: 0 1px 0 #B4B3B3;
}

.btn {
    border: medium none;
    border-radius: 3px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.4;
    padding: 8px 20px;
    transition: all 0.25s linear 0s;
}

input[type="text"], input[type="password"], input[type="email"] {
    border-color: #DDDDDD;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px;
    color: #888888;
    font-size: 14px;
    margin-bottom: 10px;
    height: 36px;
}

.full {
    width: 100%; /* Expands Newsletter box in footer full length */
}

.text-center {
    text-align: center;
}

/************************* Styling the Footer End **********************************/
/**********************************************************************************/






  
/************************* Styling the sign up form Begin **************************/
/**********************************************************************************/  

.form-basic {
	
	/*border-style: solid;
	border-width: thin;*/
	padding: 20px 20px 20px 20px;
	background-color:#F5F5F5;
	box-shadow: 10px 10px 5px #888888;
	margin-bottom: 60px;
}
 

/************************* Styling the sign up form End*****************************/
/**********************************************************************************/ 







/************************* Customize breadcrumb Begin ******************************/
/**********************************************************************************/  




.breadcrumb {
  padding: 7px 14px;
  margin: 0 0 18px;
  background-color: #ffffff;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f5f5f5', GradientType=0);
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 0 #ffffff;
  -moz-box-shadow: inset 0 1px 0 #ffffff;
  box-shadow: inset 0 1px 0 #ffffff;
}
.breadcrumb li {
  display: inline-block;
  text-shadow: 0 1px 0 #ffffff;
}
.breadcrumb .divider {
  padding: 0 5px;
  color: #999999;
}


.breadcrumb {
    border: 1px solid #DDDDDD;
    background: none;
}

.breadcrumb>.active {
    color: #8B0000;
}







/************************* Customize breadcrumb End ********************************/
/**********************************************************************************/ 







/************************* Customize sidebar products start ************************/
/**********************************************************************************/  

.headerOffset {
    padding-top: 55px;
}

.main-container {
    min-height: 580px;
}

.panel-heading, .panel-group .panel {
    border-radius: 0;
    
}

.panel-custom>.panel-heading {
    border-top: 4px solid #8B0000; /* Top Border Color */
    background-color:#000000; /* Heading Color */
}

.panel-custom>.panel-heading+.panel-collapse>.panel-body {
    border-color: #454545;
}


.panel-heading, .panel-group .panel {
    border-radius: 0;
    border-color: #454545;
}

.panel-group .panel-heading {
    border-bottom: 0;
}

.panel-title {
    color: inherit;
    font-size: 16px;
    margin-bottom: 0;
    margin-top: 0;
    padding-bottom: 0;
    color: #454545;
    font-size: 15px;
}

.collapseWill {
}


.collapseWill.pressed i, .collapseWill.active i {
    margin-right: 5px;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}
.collapseWill i {
    transition: all .3s ease;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    margin-right: 5px;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
}

.nav.tree .open-tree>a, .nav.tree .open-tree>a:hover, .nav.tree .open-tree>a:focus {
    background: none;
    font-weight: bold;
    color: #8B0000;
}

.nav.tree>li.active, .nav.tree>li>a:hover, .nav.tree>li>a:focus, .nav.tree>li:hover>a {
    background: none;
    color: #8B0000;	
}
.nav-stacked>li.active a, .nav-stacked>li.active {
    background: none;
    color: #454545;
    font-weight: bold;
}
.nav>li.active, .nav>li>a:hover, .nav>li>a:focus, .nav>li:hover>a {
    background: #27ae60;
}
.nav-stacked>li {
    border-bottom: solid 1px #eee;
}

.tree>li.active>a, .tree>li.active>a:hover, .tree>li.active>a:focus {
    background: none;
    color: #454545;
}

.nav-stacked>li a {
    font-size: 13px;
}

.tree>.active>a>.badge {
    background: #999999;
    color: #fff;
}

.open-tree>.dropdown-menu-tree {
    display: block;
}

.category-level-2 {
    border-left: 1px solid #DDDDDD!important;
    margin-left: 20px;
}
.dropdown-menu-tree {
    display: none;
    margin-bottom: 20px;
}

.nav-stacked>li {
    border-bottom: solid 1px #eee;
}

.clearFilter {
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -o-border-radius: 10px;
    -ms-border-radius: 10px;
    border-radius: 10px;
    color: #FFFFFF;
    cursor: pointer;
    font-size: 10px;
    line-height: normal;
    padding: 2px 5px;
    text-transform: capitalize;
}




/************************* Customize sidebar products end **************************/
/**********************************************************************************/  






/*********************************************
        		Theme Elements
*********************************************/

.gold{
	color: #FFBF00;
}





/********************^^^^***** Products Grid Start ******^^^^^^^********************/
/**********************************************************************************/  

.width100, .w100 {
    width: 100%;
}

.productFilter {
    border-bottom: 1px solid #DDDDDD;
    border-top: 1px solid #DDDDDD;
    clear: both;
    display: block;
    margin-bottom: 20px;
    padding-bottom: 7px;
    padding-top: 10px;
    margin-top: 20px;
}

.productFilter {
    border-bottom: 1px solid #DDDDDD;
    border-top: 1px solid #DDDDDD;
    clear: both;
    display: block;
    margin-bottom: 20px;
    padding-bottom: 7px;
    padding-top: 10px;
    margin-top: 20px;
}

.productFilter select, .productFilter input {
    font-size: 13px;
}

.change-view {
    margin-right: 10px;
}

.change-view a {
    border: 1px solid #CCCCCC;
    display: inline-block;
    font-size: 18px;
    font-weight: normal;
    height: 34px;
    line-height: 23px;
    margin-left: 5px;
    overflow: hidden;
    padding: 5px 8px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -o-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
}

.item {
    display: block;
    height: auto;
    transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    margin-bottom: 15px;
    height: 480px;
}

.product {
    display: block;
    height: auto;
    transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
    border: 1px solid #DDDDDD;
    border-bottom: 1px solid #DDDDDD;
    text-align: center;
}


.add-fav {
    border: 1px solid;
    border-radius: 50%;
    height: 30px;
    line-height: 31px;
    position: absolute;
    right: 30px;
    text-align: center;
    top: 15px;
    width: 30px;
    z-index: 10;
    transform: scale(1.15);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    -webkit-transition: opacity .3s linear,-webkit-transform .7s cubic-bezier(.56,.48,0,.99);
    -moz-transition: opacity .3s linear,-moz-transform .7s cubic-bezier(.56,.48,0,.99);
    -o-transition: opacity .3s linear,-o-transform .7s cubic-bezier(.56,.48,0,.99);
    -ms-transition: opacity .3s linear,-ms-transform .7s cubic-bezier(.56,.48,0,.99);
    transition: opacity .3s linear,transform .7s cubic-bezier(.56,.48,0,.99);
    opacity: 0;
    filter: alpha(opacity=0);
    -ms-filter: "alpha(Opacity=0)";
}

.add-fav i {
    webkit-transform: scale(1) rotate(0deg);
    -moz-transform: scale(1) rotate(0deg);
    -o-transform: scale(1) rotate(0deg);
    -ms-transform: scale(1) rotate(0deg);
    transform: scale(1) rotate(0deg);
    transition: all .3s ease;
}

.image {
    display: block;
    overflow: hidden;
    position: relative;
    text-align: center;
    width: 100%;
    max-height: 240px;
    transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -webkit-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
}

div.quickview {
    display: block;
    margin-top: 40%;
    max-height: 50px;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 2;
    visibility: hidden;
}

.btn.btn-xs {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-size: 12px;
    line-height: 1.5;
}
	
.image a {
    display: block;
    overflow: hidden;
}

.btn-quickview {
    border-radius: 2px;
    font-family: "Oswald",Helvetica Neue,Arial,sans-serif;
    letter-spacing: 2px;
    color: #454545!important;
    text-transform: uppercase;
    background: #fff;
    background: rgba(255,255,255,0.9);
    border: 1px solid #eee;
    box-shadow: 0 0 3px rgba(0,0,0,0.3);
    -webkit-box-shadow: 0 0 3px rgba(0,0,0,0.3);
    -ms-box-shadow: 0 0 3px rgba(0,0,0,0.3);
    -moz-box-shadow: 0 0 3px rgba(0,0,0,0.3);
    -moz-o-shadow: 0 0 3px rgba(0,0,0,0.3);
    left: auto;
    min-width: 100px;
    max-height: 40px;
    height: 40px!important;
    opacity: 0;
    -webkit-opacity: 0;
    -ms-opacity: 0;
    padding: 10px;
    visibility: hidden;
    width: auto;
    display: inline-block!important;
    z-index: 2;
    transform: scale(0.75);
    -webkit-transform: scale(0.75);
    -o-transform: scale(0.75);
    -ms-transform: scale(0.75);
    -moz-transform: scale(0.75);
    transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -ms-transition: all 0.3s ease 0s;
}

.btn {
    border: medium none;
    border-radius: 3px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.4;
    padding: 8px 20px;
    transition: all 0.25s linear 0s;
}

.promotion {
    line-height: 18px;
}
.promotion {
    position: absolute;
    z-index: 10;
    bottom: 20px;
    left: 0;
    height: 24px;
    width: auto;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -o-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
}

.discount {
    background: #8B0000;
    border-radius: 0 4px 4px 0;
    color: #fff;
    display: inline-block;
    float: left;
    font-family: Oswald,Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 16px;
    font-weight: lighter;
    height: 100%;
    padding: 3px 5px;
}

.new-product {
    color: #FFFFFF;
    display: inline-block;
    float: left;
    font-family: Oswald,Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 16px;
    font-weight: lighter;
    height: 100%;
    padding: 3px 10px;
}

.new-product {
    background-color: #454545!important;
}

.item h4 {
    margin: 0;
    min-height: 45px;
    max-height: 80px;
    overflow: hidden;
    display: block;
    line-height: 18px;
    margin: 25px 0 0;
    padding: 0;
    font-size: 17px;
}

.description p {
    color: #888888;
    font-size: 14px;
    min-height: 55px;
    max-height: 90px;
    overflow: hidden;
    line-height: 18px;
}

.list-description {
    display: none;
}

.price {
    font-size: 18px;
    font-weight: bold;
    color: #454545;
}

.action-control {
    border: 0;
    display: block;
    height: auto;
    padding: 5px 0 15px;
    width: 100%;
}

.btn.btn-primary, .btn.btn-danger, .btn.btn-default, .btn.btn-success, .btn.btn-info, .btn.btn-warning, .btn.btn-fb, .btn.btn-tw {
    font-weight: 600;
    text-shadow: 0px 1px rgba(0,0,0,0.1);
    -o-text-shadow: 0px 1px rgba(0,0,0,0.1);
    -webkit-text-shadow: 0px 1px rgba(0,0,0,0.1);
    -ms-text-shadow: 0px 1px rgba(0,0,0,0.1);
    box-shadow: 0 -1px rgba(0,0,0,0.1) inset;
    -webkit-box-shadow: 0 -1px rgba(0,0,0,0.1) inset;
    -o-box-shadow: 0 -1px rgba(0,0,0,0.1) inset;
    -ms-box-shadow: 0 -1px rgba(0,0,0,0.1) inset;
}

.categoryFooter {
    border-top: solid 1px #eee;
    padding-top: 20px;
    margin-top: 0;
}

.no-margin-top {
    margin-top: 0;
}

.pagination>li {
    display: inline;
}

.no-padding {
    padding: 0!important;
}



/********************^^^^***** Products Grid End ***********************************/
/**********************************************************************************/  



/*********************************************
					VIEW
*********************************************/

.content-wrapper {
	max-width: 1140px;
	background: #fff;
	margin: 0 auto;
	margin-top: 25px;
	margin-bottom: 10px;
	border: 0px;
	border-radius: 0px;
}

.container-fluid{
	max-width: 1140px;
	margin: 0 auto;
}

.view-wrapper {
	float: right;
	max-width: 70%;
	margin-top: 25px;
}



/*********************************************
				ITEM 
*********************************************/

.service1-items {
	padding: 0px 0 0px 0;
	float: left;
	position: relative;
	overflow: hidden;
	max-width: 100%;
	height: 321px;
	width: 130px;
}

.service1-item {
	height: 107px;
	width: 120px;
	display: block;
	float: left;
	position: relative;
	padding-right: 20px;
	border-right: 1px solid #DDD;
	border-top: 1px solid #DDD;
	border-bottom: 1px solid #DDD;
}

.service1-item > img {
	max-height: 110px;
	max-width: 110px;
	opacity: 0.6;
	transition: all .2s ease-in;
	-o-transition: all .2s ease-in;
	-moz-transition: all .2s ease-in;
	-webkit-transition: all .2s ease-in;
}

.service1-item > img:hover {
	cursor: pointer;
	opacity: 1;
}

.service-image-left {
	padding-right: 50px;
}

.service-image-right {
	padding-left: 50px;
}

.service-image-left > center > img,.service-image-right > center > img{
	max-height: 155px;
}









</style>